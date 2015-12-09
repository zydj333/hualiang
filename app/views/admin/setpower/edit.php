<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo base_url('admin_user/index'); ?>">后台用户列表</a><span class="crumb-step">&gt;</span><span>权限分配</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="" method="post" id='userpower_edit_form'>
                <input name="user_id" value="<?php echo $user->id; ?>" type="hidden"/>
                <table class="insert-tab" width="100%">
                    <tbody>
                        <tr>
                            <th>登录帐号：</th>
                            <td>
                                <?php echo $user->account; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>用户名称：</th>
                            <td><?php echo $user->username; ?></td>
                        </tr>
                        <tr>
                            <th width="120">选择权限：</th>
                            <td>
                                <select name="power_id" id="power_id" class="required">
                                    <option value="0">请选择</option>
                                    <?php if (!empty($power)): ?>
                                        <?php foreach ($power as $key => $value): ?>
                                            <option value="<?php echo $value->id; ?>" <?php if ($value->id == $user->power): ?>selected="selected"<?php endif; ?>><?php echo $value->powername; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" name="userpower_edit_button" id='userpower_edit_button' value="提交" type="button">
                                <input class="btn btn6" onclick="history.go()" value="返回" type="button">
                            </td>
                        </tr>
                    </tbody></table>
            </form>
        </div>
    </div>

</div>
<!--/main-->
</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(e) {
        $("#userpower_edit_button").click(function() {
            $.ajax({
                type: "POST",
                url: "/admin_setpower/saveEdit/" + Math.random(),
                data: $("#userpower_edit_form").serialize(),
                dataType: "json",
                success: function(data) {
                    if (data.flag == 0) {
                        $.dialog(data.error);
                    } else {
                        $.dialog(data.error);
                        location.href = "/admin_setpower/index";
                    }
                }
            });
        });

        $(".select1").uedSelect({
            width: 345
        });
    });
</script>