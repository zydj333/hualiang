    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo base_url('admin_user/index'); ?>">后台用户列表</a><span class="crumb-step">&gt;</span><span>修改我的登录密码</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id='user_editMyPwd_form'>
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>初始密码：</th>
                                <td>
                                    <input class="common-text required" name="password" size="50" value="" type="password">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>新密码：</th>
                                <td><input class="common-text" name="newpassword" size="50" type="password"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>新密码确认：</th>
                                <td><input class="common-text" name="renewpassword" size="50" type="password"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" name="user_editMyPwd_button" id='user_editMyPwd_button' value="提交" type="button">
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
<script type="text/javascript" src="/static/admin/js/jquery.artDialog.js?skin=blue"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $("#user_editMyPwd_button").click(function() {
            $.ajax({
                type: "POST",
                url: "/admin_user/editMyPwd/" + Math.random(),
                data: $("#user_editMyPwd_form").serialize(),
                dataType: "json",
                success: function(data) {
                    if (data.flag == 0) {
                        $.dialog(data.error);
                    } else {
                        $.dialog(data.error);
                        location.href="/admin_index/index";
                    }
                }
            });
        });
    });
</script>