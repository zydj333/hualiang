<div class="result-wrap">
    <div class="result-content">
        <form method="post" id='newcate_edit_form' >
            <input name="ac_id" value="<?php echo $category->ac_id; ?>" type="hidden"/>
            <table class="insert-tab" width="100%">
                <tbody>
                    <tr>
                        <th><i class="require-red">*</i>分类名称：</th>
                        <td>
                            <input class="common-text required" id="name" name="name" size="50" type="text" value="<?php echo $category->name ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>排序：</th>
                        <td><input class="common-text" name="listorder" size="50" type="text" value="<?php echo $category->listorder ?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" id='newcate_edit_button' type="button" value="提交">
                        </td>
                    </tr>
                </tbody></table>
        </form>
    </div>
</div>
<script type="text/javascript" src="/static/admin/js/ajaxfileupload.js"></script>
<script type="text/javascript">
                                    $(document).ready(function (e) {
                                        $("#newcate_edit_button").click(function () {
                                            $.ajax({
                                                type: "POST",
                                                url: "/admin_newcate/edit/" + Math.random(),
                                                data: $("#newcate_edit_form").serialize(),
                                                dataType: "json",
                                                success: function (data) {
                                                    if (data.flag == 0) {
                                                        $.dialog(data.error);
                                                    } else {
                                                        $.dialog(data.error);
                                                        location.href = "/admin_newcate/index";
                                                    }
                                                }
                                            });
                                        });
                                    });
</script>