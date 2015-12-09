    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo base_url('admin_user/index'); ?>">后台用户列表</a><span class="crumb-step">&gt;</span><span>新增管理员</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id='user_add_form'>
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>登录帐号：</th>
                                <td>
                                    <input class="common-text required" name="account" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>登录密码：</th>
                                <td><input class="common-text" name="password" size="50" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>用户名称：</th>
                                <td><input class="common-text" name="username" size="50" type="text"></td>
                            </tr>
                            <tr>
                                <th>邮箱地址：</th>
                                <td><input class="common-text" name="email" size="50" type="text"></td>
                            </tr>
                            <tr>
                                <th>联系电话：</th>
                                <td><input class="common-text" name="telephone" size="50" type="text"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" name="user_add_button" id='user_add_button' value="提交" type="button">
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
        $("#user_add_button").click(function() {
            $.ajax({
                type: "POST",
                url: "/admin_user/add/" + Math.random(),
                data: $("#user_add_form").serialize(),
                dataType: "json",
                success: function(data) {
                    if (data.flag == 0) {
                        $.dialog(data.error);
                    } else {
                        $.dialog(data.error);
                        location.href = "/admin_user/index";
                    }
                }
            });
        });

    });
</script>