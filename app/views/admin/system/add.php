<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo base_url('admin_system/index'); ?>">添加模块</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="" method="post" id='system_add_form'>
                <table class="insert-tab" width="100%">
                    <tbody>
                        <tr>
                            <th><i class="require-red">*</i>模块标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>控制器名：</th>
                            <td><input class="common-text" name="controllers" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>操作名称：</th>
                            <td><input class="common-text" name="actions" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>父级分类：</th>
                            <td>
                                <select name="pid" id="pid" class="required">
                                    <option value="0">--没有父级--</option>
                                    <?php if (!empty($list)): ?>
                                        <?php foreach ($list as $key => $value): ?>
                                            <option value="<?php echo $value->id; ?>"><?php echo $value->title; ?>--<?php echo $value->controllers; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input class="common-text" name="salt" size="50" type="text"><i>填写正整数（如：255）</i></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" name="system_add_button" id='system_add_button' value="提交" type="button">
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
    $(document).ready(function (e) {
        $("#system_add_button").click(function () {
            $.ajax({
                type: "POST",
                url: "/admin_system/add/" + Math.random(),
                data: $("#system_add_form").serialize(),
                dataType: "json",
                success: function (data) {
                    if (data.flag == 0) {
                        $.dialog(data.error);
                    } else {
                        $.dialog(data.error);
                        location.href = "/admin_system/index";
                    }
                }
            });
        });

    });
</script>