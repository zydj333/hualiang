<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo base_url('admin'); ?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">资讯回收站</span></div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>自增ID</th>
                        <th>资讯标题</th>
                        <th>查询别名</th>
                        <th>所属分类</th>
                        <th>添加时间</th>
                        <th>是否删除</th>
                        <th>操作</th>
                    </tr>
                    <tbody id="datalist">
                        <?php if (!empty($info)): ?>
                            <?php foreach ($info as $key => $value): ?>
                                <tr>
                                    <td><?php echo $value->id; ?></td>
                                    <td><?php echo $value->title; ?></td>
                                    <td><?php echo $value->search_name; ?></td>
                                    <td><?php echo $value->typename; ?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $value->article_time); ?></td>
                                    <td><?php if ($value->sts == 0): ?>否<?php else: ?><span style="color:red;">已删除</span><?php endif; ?></td>
                                    <td><a href="javascript:void(0);" class="tablelink"  onclick="return recycle(<?php echo $value->id; ?>);"> 还原</a></td>
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
                                        $(document).ready(function () {

                                        });
                                        //搜索
                                        function searchItemsList() {
                                            getPageUrl(1);
                                        }

                                        //分页
                                        function getPageUrl(nowpage) {
                                            var title = $("#title").val();
                                            var search_name = $("#search_name").val();
                                            var ac_id = $("#ac_id").val();
                                            $.ajax({
                                                type: "POST",
                                                url: "/admin_new_recycle/ajaxList/" + Math.random(),
                                                data: {'nowpage': nowpage, 'title': title, 'search_name': search_name, 'ac_id': ac_id},
                                                dataType: "json",
                                                success: function (data) {
                                                    var str = '';
                                                    if (data.flag == 0) {
                                                        str = '<tr align="left"><td colspan="15">' + data.error + '</td></tr>';
                                                    } else {
                                                        $.each(data.error, function (key, values) {
                                                            str += '<tr align="left">';
                                                            str += '<td width="70">' + values.id + '</td>';
                                                            str += '<td width="350">' + values.title + '</td>';
                                                            str += '<td>' + values.search_name + '</td>';
                                                            str += '<td>' + values.typename + '</td>';
                                                            str += '<td width="150">' + values.article_time + '</td>';
                                                            str += '<td>';
                                                            if (values.sts == 0) {
                                                                str += '否';
                                                            } else {
                                                                str += '是';
                                                            }
                                                            str += '</td>';
                                                            str += '<td>';
                                                            str += '<a onclick="return recycle(' + values.id + ')" href="javascript:void(0);" class="tablelink">还原</a>';
                                                            str += '</td>';
                                                            str += '</tr>';
                                                        });
                                                    }
                                                    $("#datalist").html(str);
                                                    $("#page_url").html(data.pageurl);
                                                }
                                            });
                                        }

                                        function recycle(id) {
                                            $.ajax({
                                                url: '/admin_new_recycle/recycle/' + id + '/' + Math.random(),
                                                success: function (data) {
                                                    location.href = "/admin_new_recycle/index";
                                                }
                                            });
                                        }
</script>