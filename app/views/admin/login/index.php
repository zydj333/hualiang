<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>华良集团后台登录</title>
    <link href="<?php echo base_url('static/admin')?>/css/admin_login.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/static/admin/js/jquery.js"></script>
    <script language="JavaScript" src="/static/admin/js/jquery.artDialog.js?skin=blue"></script>
    <script type="text/javascript">
        $(function(e) {
            $("#login_button").click(function() {
                $.ajax({
                    type: "POST",
                    url: "/admin_login/doLogin/" + Math.random(),
                    data: $("#login_form").serialize(),
                    dataType: "json",
                    success: function (data) {
                        if (data.flag == 0) {
                            $.dialog(data.error);
                        } else {
                            $.dialog(data.error);
                            location.href = "/admin_index/index";
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
<div class="admin_login_wrap">
    <h1>管理员登录</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post" id="login_form">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="account" id="account" size="40" class="admin_input_style" value="请输入帐号" onfocus="if (this.value == '请输入帐号') {
                                    this.value = '';
                                }" onblur="if (this.value == '') {
                                            this.value = '请输入帐号';
                                        }"/>
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" id="password" size="40" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="button" tabindex="3" value="提交" class="btn btn-primary" id="login_button" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
    <p class="admin_copyright"><a tabindex="5" href="<?php echo base_url(); ?>" target="_blank">返回首页</a> &copy; 2015 Powered by <a href="<?php echo base_url(); ?>" target="_blank">华良集团</a></p>
</div>
</body>
</html>