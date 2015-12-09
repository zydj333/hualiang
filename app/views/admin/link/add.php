<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="">友情链接</a><span class="crumb-step">&gt;</span><span>添加友链</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form  method="post" id="link_add_form" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody>
                        <tr>
                            <th><i class="require-red">*</i>标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>公司链接：</th>
                            <td><input class="common-text" name="url" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>上传图片：</th>
                            <td><div class="vocation">
                    <input name="fileToUpload" id="fileToUpload" type="file" class="dfinput" value=""  style="width:150px;"/>
                    <input name="add" type="button" id="buttonUpload" onclick="return ajaxFileUpload();" class="btn" value="上传"/>
                    <a href="" target="_blank" id="imgshow"><p id="upload_img"></p></a>
                    <img id="loading" src="<?php echo base_url(); ?>static/admin/images/loading.gif" style="display:none;" />
                    <input type="hidden" name="imageurl" id="coverimage" value="" />
                    <input type="hidden" name="imageid" id="coverimageid" value="" />
                                </div></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>排序：</th>
                            <td>
                                <input class="common-text required" id="listorder" name="listorder" size="50" type="text" value="255" />
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" id='link_add_button' type="button">
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
<script type="text/javascript" src="/static/admin/js/ajaxfileupload.js"></script>
<script type="text/javascript" src="/static/admin/js/jquery.artDialog.js?skin=blue"></script>
<script type="text/javascript">
                        $(document).ready(function(e) {
                            $("#link_add_button").click(function() {
                                $.ajax({
                                    type: "POST",
                                    url: "/admin_link/add/" + Math.random(),
                                    data: $("#link_add_form").serialize(),
                                    dataType: "json",
                                    success: function(data) {
                                        if (data.flag == 0) {
                                            $.dialog(data.error);
                                        } else {
                                            $.dialog(data.error);
                                            location.href = "/admin_link/index";
                                        }
                                    }
                                });
                            })
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
                                                data: {imagetype: 'link'},
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