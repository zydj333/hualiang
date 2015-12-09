    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">权限分配</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th>用户ID</th>
                            <th>登录帐号</th>
                            <th>用户名称</th>
                            <th>当前权限</th>
                            <th>操作</th>
                        </tr>
                        <?php if (!empty($info)): ?>
                        <?php foreach ($info as $key => $value): ?>
                            <tr>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->account; ?></td>
                                <td><?php echo $value->username; ?></td>
                                <td><?php if ($value->power == 0 || $value->powername == ''): ?><span style="color:red;">还未分配</span><?php else: ?><span style="color:blue;"><?php echo $value->powername; ?></span><?php endif; ?></td>
                                <td><a href="javascript:void(0);" class="tablelink" onclick="return edit(<?php echo $value->id; ?>);">分配权限</a></td>
                            </tr> 
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
            function edit(uid) {
                $.ajax({
                    url: '/admin_setpower/edit/' + uid + '/' + Math.random(),
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