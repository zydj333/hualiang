<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>华良集团后台管理</title>
        <link rel="stylesheet" type="text/css" href="/static/admin/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="/static/admin/css/main.css"/>
        <script language="JavaScript" src="/static/admin/js/jquery.js"></script>
        <script type="text/javascript" src="/static/admin/js/libs/modernizr.min.js"></script>
    </head>
    <body>
        <div class="topbar-wrap white">
            <div class="topbar-inner clearfix">
                <div class="topbar-logo-wrap clearfix">
                    <h1 class="topbar-logo none"><a href="/" class="navbar-brand">后台管理</a></h1>
                    <ul class="navbar-list clearfix">
                        <li><a class="on" href="<?php echo base_url('admin'); ?>">首页</a></li>
                        <li><a href="<?php echo base_url(); ?>" target="_blank">网站首页</a></li>
                    </ul>
                </div>
                <div class="top-info-wrap">
                    <ul class="top-info-list clearfix">
                        <li><?php echo $userinfo->user_name; ?></li>
                        <li><a href="<?php echo base_url('admin_user/editMyPwd'); ?>">修改密码</a></li>
                        <li><a href="<?php echo base_url('admin_login/logout'); ?>">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="sidebar-wrap">
                <div class="sidebar-title">
                    <h1>菜单</h1>
                </div>
                <div class="sidebar-content">
                    <ul class="sidebar-list">
                        <?php if (!empty($list)): ?>
                            <?php foreach ($list as $key => $value): ?>
                                <?php if (isset($userinfo->user_power)): ?>
                                    <?php if (in_array($value->id, explode(',', $userinfo->user_power))): ?>
                                <li>
                                    <a href="#"><i class="icon-font">&#xe003;</i><?php echo $value->title; ?></a>
                                    <?php if (!empty($value->second)): ?>
                                        <?php foreach ($value->second as $k => $v): ?>
                                            <?php if (in_array($v->id, explode(',', $userinfo->user_power))): ?>
                                            <ul class="sub-menu">
                                                <li  <?php if ($v->actions == 'main' && $v->controllers == 'admin_index'): ?> class="active"<?php endif; ?>><a href="<?php echo base_url($v->controllers . '/' . $v->actions); ?>"><i class="icon-font"><?php echo '&#xe00'.rand(4,9).';';?></i><?php echo $v->title; ?></a></li>
                                            </ul>
                                    <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </li>
                                <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>