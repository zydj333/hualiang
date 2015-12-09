<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="">资讯管理</a><span class="crumb-step">&gt;</span><span>添加资讯</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="/admin_new/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody><tr>
                            <th width="120"><i class="require-red">*</i>资讯分类：</th>
                            <td>
                                <select name="ac_id" id="ac_id" class="required">
                                    <option value="">请选择类别</option>
                                    <?php if (!empty($category)): ?>
                                        <?php foreach ($category as $k => $v) : ?>
                                            <option value="<?php echo $v->ac_id ?>"><?php echo $v->name ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>资讯标题：</th>
                            <td>
                                <input class="common-text required" id="title" name="title" size="50" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>资讯描述：</th>
                            <td><input class="common-text" name="discription" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>查询别名：</th>
                            <td><input class="common-text" name="search_name" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>优化标题：</th>
                            <td><input class="common-text" name="seo_title" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>优化关键字：</th>
                            <td><input class="common-text" name="seo_keyword" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>优化描述：</th>
                            <td><input class="common-text" name="seo_discription" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>浏览量：</th>
                            <td><input class="common-text" name="views" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>回复数：</th>
                            <td><input class="common-text" name="replay" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>封面图片：</th>
                            <td><div class="vocation">
                                    <input name="fileToUpload" id="fileToUpload" type="file" class="dfinput" value=""  style="width:150px;"/>
                                    <input name="add" type="button" id="buttonUpload" onclick="return ajaxFileUpload();" class="btn" value="上传"/>
                                    <a href="" target="_blank" id="imgshow"><p id="upload_img"></p></a>
                                    <img id="loading" src="<?php echo base_url(); ?>static/admin/images/loading.gif" style="display:none;" />
                                    <input type="hidden" name="imageurl" id="coverimage" value="" />
                                    <input type="hidden" name="imageid" id="coverimageid" value="" />
                                </div><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                        </tr>
                        <tr>
                            <th>资讯内容：</th>
                            <td><textarea name="content" class="common-textarea" id="editor_id" cols="30" style="width: 98%;" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
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
<script type='text/javascript' src='/kindeditor/kindeditor-min.js'></script>
<script type='text/javascript' src='/kindeditor/lang/zh_CN.js'></script>
<script type='text/javascript' src="/static/admin/js/ajaxfileupload.js"></script>
<script type="text/javascript">
                                    $(document).ready(function (e) {
                                        KindEditor.ready(function (K) {
                                            window.editor = K.create('#editor_id');
                                        });
                                    });

                                    function ajaxFileUpload() {
                                        $("#loading")
                                                .ajaxStart(function () {
                                                    $(this).show();
                                                })
                                                .ajaxComplete(function () {
                                                    $(this).hide();
                                                });
                                        $.ajaxFileUpload
                                                (
                                                        {
                                                            url: '/admin_image/upload',
                                                            secureuri: false,
                                                            fileElementId: 'fileToUpload',
                                                            dataType: 'json',
                                                            data: {imagetype: 'new'},
                                                            success: function (data, status)
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
                                                            error: function (data, status, e)
                                                            {
                                                                alert(e);
                                                            }
                                                        }
                                                )
                                        return false;
                                    }
</script>