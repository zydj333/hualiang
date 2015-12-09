<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">资讯分类</span></div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href='javascript:void(0);' onclick="return add();"><i class="icon-font"></i>添加</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>自增ID</th>
                        <th>分类名称</th>
                        <th>排序</th>
                        <th>操作</th>
                    </tr>
                    <tbody id="datalist">
                        <?php if (!empty($info)): ?>
                            <?php foreach ($info as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value->ac_id; ?></td>
                                    <td><?php echo $value->name; ?></td>
                                    <td><?php echo $value->listorder; ?></td>
                                    <td><a href="javascript:void(0);" class="tablelink" onclick="return edit(<?php echo $value->ac_id; ?>);">修改</a>&nbsp;&nbsp;<a href="javascript:void(0);" class="tablelink"  onclick="return del(<?php echo $value->ac_id; ?>);"> 删除</a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<!--/main-->
</div>
</body>
</html>
<script type="text/javascript" src="/static/admin/js/jquery.artDialog.js?skin=blue"></script>
<script type="text/javascript">
                                    function add() {
                                        $.ajax({
                                            url: '/admin_newcate/add/' + Math.random(),
                                            success: function (data) {
                                                art.dialog({
                                                    lock: true,
                                                    background: '#600', // 背景色
                                                    opacity: 0.90, // 透明度
                                                    content: data,
                                                    //icon: 'succeed',
                                                    //cancel: true,
                                                    //ok:true,
                                                });
                                            },
                                            cache: false
                                        });
                                    }

                                    function edit(id) {
                                        $.ajax({
                                            url: '/admin_newcate/edit/' + id + '/' + Math.random(),
                                            success: function (data) {
                                                art.dialog({
                                                    lock: true,
                                                    background: '#600', // 背景色
                                                    opacity: 0.90, // 透明度
                                                    content: data,
                                                    //icon: 'succeed',
                                                    //cancel: true,
                                                    //ok:true,
                                                });
                                            },
                                            cache: false
                                        });
                                    }

                                    function del(id) {
                                        $.ajax({
                                            url: '/admin_newcate/del/' + id + '/' + Math.random(),
                                            success: function (data) {
                                                art.dialog({
                                                    lock: true,
                                                    background: '#600', // 背景色
                                                    opacity: 0.90, // 透明度
                                                    content: data,
                                                    //icon: 'succeed',
                                                    //cancel: true,
                                                    ok: function () {
                                                        location.href = "/admin_newcate/index";
                                                    }
                                                });
                                            },
                                            cache: false
                                        });
                                    }
</script>