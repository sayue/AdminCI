<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AdminCI Management System</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">
    <style type="text/css">
    .panel-title{
        font-size: 22px;
        margin-left: 13px;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            
            <div class="col-md-4 col-md-offset-4">

                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">移民与族群研究中心--后台管理</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo site_url('login/validate'); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                      <input class="form-control" placeholder="用户名" name="email" type="email" autofocus>
                                      
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="password" type="password" value="">
                                </div>
                                <div class="checkbox" >
                                    <label>
                                        <input name="remember" type="checkbox" value="rememberme">Remember Me
                                    </label>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-success btn-block">登陆</button>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>

                    </div>

                </div>
                   
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('js/jquery-1.10.2.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url('js/login.js'); ?>"></script>

</body>

</html>
