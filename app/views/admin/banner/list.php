<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">广告列表</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
            <form action="#" method="post">
                <table class="search-tab">
                    <tr>
                        <th width="70">广告标题:</th>
                        <td><input class="common-text" placeholder="广告标题" name="title" id="title" type="text"></td>
                        <th width="70">广告分类:</th>
                        <td><input class="common-text" placeholder="广告分类" name="search_name" id="search_name" type="text"></td>
                        <td><input class="btn btn-primary btn2" onclick="return searchItemsList()" name="sub" value="查询" type="button"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a href='javascript:void(0);' onclick="return add();"><i class="icon-font"></i>添加</a>
                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>图片预览</th>
                        <th>自增ID</th>
                        <th>广告标题</th>
                        <th>广告链接</th>
                        <th>颜色块</th>
                        <th>广告分类</th>
                        <th>排序</th>
                        <th>操作</th>
                    </tr>
                    <tbody id="datalist">
                        <?php if (!empty($info)): ?>
                        <?php foreach ($info as $key => $value): ?>
                            <tr>
                                <td width="200"><img src="<?php echo base_url() . '/' . $value->imageurl ?>" style="width: 100px;height: 50px"</td>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->title; ?></td>
                                <td><?php echo $value->url; ?></td>
                                <td><?php echo $value->color; ?></td>
                                <td><?php echo $value->type; ?></td>
                                <td><?php echo $value->listorder; ?></td>
                                <td width="200"><a href="javascript:void(0);" class="tablelink" onclick="return edit(<?php echo $value->id; ?>);">修改</a>&nbsp;&nbsp;<a href="javascript:void(0);" class="tablelink" onclick="return del(<?php echo $value->id; ?>);">删除</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <div id="page_url" style="float: right;padding-right: 20px;"><?php echo $url; ?> </div>
</div>
<!--/main-->
</div>
</body>
</html>
        <script type="text/javascript" src="/static/admin/js/jquery.artDialog.js?skin=blue"></script>
        <script type="text/javascript">
                    //搜索
                    function searchItemsList() {
                        getPageUrl(1);
                    }

                    //分页
                    function getPageUrl(nowpage) {
                    var title = $("#title").val();
                    var type = $("#type").val();
                            $.ajax({
                            type: "POST",
                                    url: "/admin_banner/ajaxList/" + Math.random(),
                                    data: {'nowpage': nowpage, 'title': title, 'type': type},
                                            dataType: "json",
                                            success: function(data) {
                                            var str = '';
                                                    if (data.flag == 0) {
                                            str = '<tr align="left"><td colspan="15">' + data.error + '</td></tr>';
                                            } else {
                                            $.each(data.error, function(key, values) {
                                            str += '<tr align="left">';
                                                    str += '<td><img width="100px" height="50px" src="/' + values.imageurl + '"  onerror="this.onerror=\'\';this.src=\'/static/admin/images/img14.png\'"  /></td>';
                                                    str += '<td width="70">' + values.id + '</td>';
                                                    str += '<td>' + values.title + '</td>';
                                                    str += '<td>' + values.url + '</td>';
                                                    str += '<td>' + values.color + '</td>';
                                                    str += '<td>' + values.type + '</td>';
                                                    str += '<td>' + values.listorder + '</td>';
                                                    str += '<td>';
                                                    str += '<a href="/admin_new/edit/' + values.id + '" class="tablelink">修改</a>&nbsp;&nbsp;';
                                                    str += '<a onclick="return del(' + values.id + ')" href="javascript:void(0);" class="tablelink">删除</a>';
                                                    str += '</td>';
                                                    str += '</tr>';
                                            });
                                            }
                                            $("#datalist").html(str);
                                                    $("#page_url").html(data.pageurl);
                                            }
                                    });
                            }

                            function add() {
                            $.ajax({
                            url: '/admin_banner/add/' + Math.random(),
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

                            function edit(id){
                            $.ajax({
                            url: '/admin_banner/edit/' + id + '/' + Math.random(),
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
                            function del(id) {
                            $.ajax({
                            url: '/admin_banner/del/' + id + '/' + Math.random(),
                                    success: function(data) {
                                        location.href = "/admin_banner/index";
                                    },
                                    cache: false
                            });
                            }
        </script>