 <style type="text/css">

    .btn-primary.btn-outline{
      margin-left: 925px;
    }

    .member-add{
      display:inline-block;
      width:30%;
      margin-right: 10px;
    }

    </style>

<div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">添加链接</h1>
                    
                <div class="panel panel-default">
                    <div class="panel-heading">
                      链接资料
                    </div>
   
                      <div class="panel-body" id="addBook">
                          <form action="<?php echo site_url('cms/link/addlink'); ?>" method="post">
                            <div class="form-group member-add">
                                <label>title</label>
                                <input class="form-control" name="add-link-title"> 
                            </div>
                            
                            <div class="form-group member-add">
                                <label>url</label>
                                <input class="form-control" name="add-link-url"> 
                            </div>
                            <div class="form-group member-add">
                             <select class="form-control" name="add-link-kind">
                                <option value="school">校内机构</option>
                                <option value="country">国家机构</option>
                                <option value="science">教学科研机构</option>
                                <option value="academic">学术网站</option>
                            </select>
                            </div>
                                <button type="submit" class="btn btn-outline btn-primary" name="addcomfirm">确认添加</button>
                            </form>
                            </div>
					</div>
				</div>
			  </div>
    </div>
</div>
