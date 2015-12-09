    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎使用华良集团后台管理系统。</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php echo php_uname();?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info"><?php echo apache_get_version();?></span>
                    </li>
                    <li>
                        <label class="res-lab">数据库版本</label><span class="res-info">MySQL <?php echo $mysql; ?></span>
                    </li>
                    <li>
                        <label class="res-lab">本站运行方式</label><span class="res-info"><?php echo php_sapi_name();?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器IP</label><span class="res-info"><?php echo GetHostByName($_SERVER['SERVER_NAME']);?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名</label><span class="res-info"><?php echo $_SERVER["HTTP_HOST"];?></span>
                    </li>
                    <li>
                        <label class="res-lab">Zend版本</label><span class="res-info"><?php echo Zend_Version();?></span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info"><?php echo GetHostByName($_SERVER['SERVER_NAME']);?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>