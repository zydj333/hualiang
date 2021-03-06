<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="">广告管理</a><span class="crumb-step">&gt;</span><span>修改广告</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form method="post" id="banner_edit_form" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody><tr>
                            <th width="120"><i class="require-red">*</i>资讯分类：</th>
                            <td>
                                <select name="type" id="type" class="select1">
                                    <option value="">请选择类别</option>
                                    <?php if (!empty($bannertype)): ?>
                                        <?php foreach ($bannertype as $k => $v) : ?>
                                            <option value="<?php echo $k; ?>" <?php if ($banner->type == $k): ?>selected="selected"<?php endif; ?>><?php echo $v ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                    <input name="id" value="<?php echo $banner->id; ?>" type="hidden"/>
                    <tr>
                        <th><i class="require-red">*</i>标题：</th>
                        <td>
                            <input class="common-text required" id="title" name="title" size="50" type="text" value="<?php echo $banner->title ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>网站链接：</th>
                        <td><input class="common-text" name="url" size="50" type="text" value="<?php echo $banner->url ?>"></td>
                    </tr>
                    <tr>
                        <th>颜色块：</th>
                        <td><input class="common-text" name="color" size="50" type="text" value="<?php echo $banner->color ?>"></td>
                    </tr>
                    <tr>
                        <th>更改图片：</th>
                        <td><div class="vocation">
                    <input name="fileToUpload" id="fileToUpload" type="file" class="dfinput" value=""  style="width:150px;"/>
                    <input name="add" type="button" id="buttonUpload" onclick="return ajaxFileUpload();" class="btn" value="更改图片"/>
                    <a href="" target="_blank" id="imgshow"><p id="upload_img"></p></a>
                    <img id="loading" src="<?php echo base_url(); ?>static/admin/images/loading.gif" style="display:none;" />
                    <input type="hidden" name="imageurl" id="coverimage" value="<?php echo $banner->imageurl ?>" />
                    <input type="hidden" name="imageid" id="coverimageid" value="" />
                </div></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><img width="100px" height="50px" src="<?php echo base_url() . '/' . $banner->imageurl ?>" /></td>
                    </tr>
                    <tr>
                        <th>排序：</th>
                        <td><input class="common-text" name="listorder" size="50" type="text" value="<?php echo $banner->listorder ?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" id='banner_edit_button' value="提交" type="button">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
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
<script type="text/javascript" src="/static/admin/js/select-ui.min.js"></script>
<link href="/static/admin/css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/admin/js/ajaxfileupload.js"></script>
<script type="text/javascript">
                        $(document).ready(function(e) {
                            $(".select1").uedSelect({
                                width: 480
                            });
                        });
                        $(document).ready(function(e) {
                            $("#banner_edit_button").click(function() {
                                $.ajax({
                                    type: "POST",
                                    url: "/admin_banner/edit/" + Math.random(),
                                    data: $("#banner_edit_form").serialize(),
                                    dataType: "json",
                                    success: function(data) {
                                        if (data.flag == 0) {
                                            $.dialog(data.error);
                                        } else {
                                            $.dialog(data.error);
                                            location.href = "/admin_banner/index";
                                        }
                                    }
                                });
                            });
                        });

                        function ajaxFileUpload() {
                            $("#loading")
                                    .ajaxStart(function() {
                                        $(this).show();
                                    })
                                    .ajaxComplete(function() {
                                        $(this).hide();
                                    });
                            $.ajaxFileUpload
                                    (
                                            {
                                                url: '/admin_image/upload',
                                                secureuri: false,
                                                fileElementId: 'fileToUpload',
                                                dataType: 'json',
                                                data: {imagetype: 'banner'},
                                                success: function(data, status)
                                                {
                                                    if (data.flag == 0) {
                                                        alert(data.error);
                                                    } else {
                                                        var temp = '<img src="/' + data.imgurl_thumb + '" width="50" height="30" />';
                                                        $('#upload_img').html(temp);
                                                        $('#coverimage').val(data.imgurl);
                                                        $('#coverimageid').val(data.imageid);
                                                        $('#imgshow').attr('href', '/' + data.imgurl);
                                                    }
                                                },
                                                error: function(data, status, e)
                                                {
                                                    alert(e);
                                                }
                                            }
                                    )
                            return false;
                        }
</script>