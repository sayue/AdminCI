<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>移民与族群研究中心--后台管理</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('css/cms/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url('css/cms/sb-admin.css'); ?>" rel="stylesheet">
    <style type="text/css">
        
    .btnright{
        margin-left: 950px;
        margin-top: 8px;
    }
    .btn-primary.btn-outline{
        margin-top: 8px;
        margin-right: 13px;
        width:80px;
    }

    </style>
</head>

<body>

    <div id="wrapper">
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('cms/home'); ?>">移民与族群研究中心</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="<?php echo site_url('cms/login/logout'); ?>">退出</a>
                </li>
                

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="<?php echo site_url('cms/intro'); ?>"><i class="fa fa-dashboard fa-fw"></i> 中心简介</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 学术动态<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('cms/news'); ?>">动态列表</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/news/add'); ?>">添加动态</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> 学术资源<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('cms/resource'); ?>">文献收藏</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/resource/lists'); ?>">出版品</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/resource/add'); ?>">添加(杂志或书籍)</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> 研究项目<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('cms/project'); ?>">项目列表</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/project/add'); ?>">添加项目</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> 人才培养<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('cms/member'); ?>">成员列表</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/member/add'); ?>">增加成员</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 友情链接<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('cms/link'); ?>">链接列表</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/link/add'); ?>">添加链接</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> 管理员设置<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('cms/admin'); ?>">密码管理</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cms/admin/add'); ?>">添加管理员</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
        

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('js/jquery-1.10.2.js'); ?>"></script>
    <script src="<?php echo base_url('js/cms/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/cms/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url('js/cms/sb-admin.js'); ?>"></script>
    <?php if(isset($jsfile)):?>
    <script src="<?php echo base_url($jsfile); ?>"></script>
    <?php endif;?>
    <!-- siderbar-collapse bugs -->

</body>

</html>
