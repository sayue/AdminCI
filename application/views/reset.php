    <!DOCTYPE html>
<html>

<head>
    <META http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>重置密码</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url('css/sb-admin.css'); ?>" rel="stylesheet">
    <style type="text/css">
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">密码重置</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo site_url('reset/captreset'); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                      <input class="form-control" placeholder="确认邮箱" name="email" type="email" autofocus>
                                      
                                </div>
                                <div class="form-group">
                                
                                <label class="" for="captcha">*Please enter the verication code shown below.</label>
                                <div id="captcha-wrap">
                                    
                                    <img src="<?php echo site_url('reset/resetview'); ?>" alt="" id="captcha" />
                                </div>
                                <input class="narrow text input" id="captcha" name="captchacode" type="text" placeholder="Verification Code"/>
                                   
                                </div>
                                
                                <div>
                                    
                                    <button type="submit" class="btn btn-lg btn-success btn-block">确认</button>
                                    <button type="reset" class="btn btn-lg btn-warning btn-block">重置</button>
                                    
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                        
                    </div>
                    
                </div>
                   <a href="<?php echo site_url('login'); ?>">返回</a>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('js/jquery-1.10.2.js'); ?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url('js/sb-admin.js'); ?>"></script>
    <script>

    $("img[id='captcha']").click(function(){
        this.src = "<?php echo site_url('reset/resetview')?>"+"?rand="+Math.random();
    });

    </script>
</body>

</html>
