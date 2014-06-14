<style type="text/css">
    .form-horizontal .form-group {
    margin-right: -250px;
  }
  .row{
    width:50%;
  }
  .form-control{
    width:40%;
  }
  .row{
    margin-left: 200px;
    margin-right: 200px;
  }
</style>

<div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">密码管理</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                     修改密码 
                    </div>
                  <div class="panel-body">
				          <form action="<?php echo site_url('cms/admin/editpwd'); ?>" class="form-horizontal" role="form" method="post">
                      <div class="form-group">
                          <label class="col-sm-2 control-label">用户名</label>
                          <div class="col-sm-10">
                              <p class="form-control-static"><?php echo $this->session->userdata('email');?></p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword" class="col-sm-2 control-label">原密码</label>
                          <div class="col-sm-10 oldpwd">
                              <input type="password" name="oldpwd" class="form-control" id="inputPassword" placeholder="Old Password">
                              
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword" class="col-sm-2 control-label">新密码</label>
                          <div class="col-sm-10">
                              <input type="password" name="newpwd" class="form-control" id="inputPassword" placeholder="New Password">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-outline btn-primary">确认修改</button>
                          </div>
                      </div>
                  </form>
					
					
				  </div>
                </div>
                <!-- /.col-lg-12 -->

          
          </div>
      </div>
</div>