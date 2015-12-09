    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">模块管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href='javascript:void(0);' onclick="return add();"><i class="icon-font"></i>添加模块</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>自增ID</th>
                            <th>模块名称</th>
                            <th>控制器</th>
                            <th>操作方法</th>
                            <th>父级ID</th>
                            <th>排序</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if (!empty($list)): ?>
                        <?php foreach ($list as $key => $value): ?>
                            <tr>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->title; ?></td>
                                <td><?php echo $value->controllers; ?></td>
                                <td><?php echo $value->actions; ?></td>
                                <td><?php echo $value->pid; ?></td>
                                <td><?php echo $value->salt; ?></td>
                                <td><?php echo date('Y-m-d H:i:s',$value->addtime); ?></td>
                                <td><a href="javascript:void(0);" class="tablelink" onclick="return edit(<?php echo $value->id; ?>);">修改</a>&nbsp;&nbsp;<a href="javascript:void(0);" class="tablelink" onclick="return del(<?php echo $value->id; ?>);">删除</a></td>
                            </tr> 
                            <?php if (!empty($value->second)): ?>
                                <?php foreach ($value->second as $second_key => $second_value): ?>
                                    <tr align="center">
                                        <td><?php echo $second_value->id; ?></td>
                                        <td><?php echo $second_value->title; ?></td>
                                        <td><?php echo $second_value->controllers; ?></td>
                                        <td><?php echo $second_value->actions; ?></td>
                                        <td style="color: red;"><?php echo $second_value->pid; ?></td>
                                        <td><?php echo $second_value->salt; ?></td>
                                        <td><?php echo date('Y-m-d H:i:s',$second_value->addtime); ?></td>
                                        <td><a href="javascript:void(0);" class="tablelink" onclick="return edit(<?php echo $second_value->id; ?>);">修改</a>&nbsp;&nbsp;<a href="javascript:void(0);" class="tablelink" onclick="return del(<?php echo $second_value->id; ?>);"> 删除</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
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
                    url: '/admin_system/add/'+ Math.random(),
                    success: function(data) {
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
            
            function edit(id){
                $.ajax({
                    url: '/admin_system/edit/'+id+'/'+ Math.random(),
                    success: function(data) {
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
            
            function del(id){
                $.ajax({
                    url: '/admin_system/del/'+id+'/'+ Math.random(),
                    success: function(data) {
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
            
</script>