<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="utf-8" />
        <title>华良投资管理有限公司</title>
        <!-- concat_on -->
        <meta name="robots" content="all" />
        <meta name="author" content="ZhaoYang" />
        <meta name="keywords" content="华良投资管理有限公司" />
        <meta name="description" content="" />
        <link href="/static/home/images/favicon.ico" rel="shortcut icon" />
        <link rel="stylesheet" type="text/css" href="/static/home/css/a.css"/>
        <link rel="stylesheet" type="text/css" href="/static/home/css/css.css"/>
        <script src="/static/home/js/a.js"></script>

    </head><body>
        <link rel="stylesheet" type="text/css" href="/static/home/css/annoce.css"/>
        <!--页面头部开始-->
        <!-- 蒙版  start-->
        <link href="/static/home/css/message.css" rel="stylesheet" type="text/css" />
        <!--wrap begin-->

        <div class="wrap clearfix">
            <div style="width:968px;margin-left: auto;
                 margin-right: auto;margin-top:30px;">
                <div class="main">
                    <div class="annoce-main" id="datalist">
                        <?php if (!empty($info)): ?>
                            <?php foreach ($info as $key => $value): ?>
                                <div class="txt-main">
                                    <ul class="txt-cont">
                                        <a href="<?php echo site_url('index/message') . '/' . $value->id; ?>"> <li>
                                                <p class="an-tl"><?php echo $value->title; ?></p>
                                            </li></a>
                                    </ul>
                                </div>
                                <div class="an-hr"></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div id="page_url" style="float:right; margin-right:20px;"><?php echo $url; ?></div>
                </div>
            </div>

            <div id="ft">
                <div class="layout grid-m">
                    <div class="main-warp">
                        <!-- start 底部信息 -->
                        <div class="box J_TBox no-mb">
                            <div class="kc_20130626_foot index_ft">
                                <div class="bd">
                                    <div style="margin-left: 185px;">
                                        Copyright © 2015浙江省华良投资管理有限公司 <a href="http://hualiangcaifu.com">hualiangcaifu.com</a> All Rights Reserved 版权所有 浙ICP备12023130号-4
                                    </div>
                                    <div class="links">
                                        <ul>
                                            <li>

                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    //分页
    function getPageUrl(nowpage) {
        $.ajax({
            type: "POST",
            url: "/index/ajaxList/" + Math.random(),
            data: {'nowpage': nowpage},
            dataType: "json",
            success: function (data) {
                var str = '';
                if (data.flag == 0) {
                    str = '<tr align="left"><td colspan="15">' + data.error + '</td></tr>';
                } else {
                    $.each(data.error, function (key, values) {
                        str += '<div class="txt-main">';
                        str += '<ul class="txt-cont">';
                        str += '<li><p class="an-tl">' + values.title + '</p></li>';
                        str += '</ul>';
                        str += '<div class="an-hr"></div>';
                        str += '</div>';
                    });
                }
                $("#datalist").html(str);
                $("#page_url").html(data.pageurl);
            }
        });
    }
</script>