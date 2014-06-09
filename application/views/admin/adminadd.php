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
                    <h1 class="page-header">添加管理员</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                     添加账号 
                    </div>
                  <div class="panel-body">
				          <form action="<?php echo site_url('admin/addadmin'); ?>" class="form-horizontal" role="form" method="post">
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                          <div class="col-sm-10 sign-email" >
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                              
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label" >密码</label>
                          <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pwd">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">重复密码</label>
                          <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password Repeat" name="repeatpwd">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-outline btn-primary">确认添加</button>
                          </div>
                      </div>
                  </form>
					         
					
				  </div>

                </div>
                <!-- /.col-lg-12 -->
              <div class="alert alert-warning" hidden>
                  <strong>用户名已经存在</strong>
              </div>
                
          
          </div>
      </div>
</div>