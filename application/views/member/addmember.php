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
                    <h1 class="page-header">添加成员</h1>
                    
                <div class="panel panel-default">
                    <div class="panel-heading">
                      成员资料
                    </div>
   
                      <div class="panel-body" id="addBook">
                        <form action="<?php echo site_url('member/addmember'); ?>" method="post">
                            <div class="form-group member-add">
                                <label>姓名</label>
                                <input class="form-control" name="add-mem-name"> 
                            </div>
                            
                            <div class="form-group member-add">
                                <label>出生年月</label>
                                <input class="form-control" name="add-mem-birth"> 
                            </div>
                            <div class="form-group member-add">
                                <label>职称</label>
                                <input class="form-control" name="add-mem-position"> 
                            </div>
                            <div class="form-group member-add">
                                <label>学位</label>
                                <input class="form-control" name="add-mem-degree"> 
                            </div>
                            <div class="form-group member-add">
                                <label>研究领域</label>
                                <input class="form-control" name="add-mem-field"> 
                            </div>
                            <div class="form-group member-add">
                                <label>院系（选填）</label>
                                <input class="form-control" name="add-mem-department"> 
                            </div>
                             <div class="form-group member-add">
                                <label>工作单位（选填）</label>
                                <input class="form-control" name="add-mem-institution"> 
                            </div>
                            <div class="form-group member-add">
                                <label>性别</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="男" checked="">男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="女">女
                                    </label>
                            </div>
                            <div class="form-group">
                                <label>个人简介</label>
                                <textarea class="form-control" name="add-mem-intro" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>个人照片上传（可选）</label>
                                <input type="file">
                            </div>
                                <button type="submit" class="btn btn-outline btn-primary" name="addcomfirm">确认添加</button>
                            </form>
                            </div>
					</div>
				</div>
			  </div>
    </div>
</div>
