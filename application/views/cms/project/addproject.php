 <style type="text/css">

    .btn-primary.btn-outline{
      margin-left: 925px;
    }

    .book-edit{
      display:inline-block;
      width:45%;
      margin-right: 20px;
    }

    </style>

<div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">添加项目</h1>
                    <div class="form-group">
                        <label>项目类型</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="academic" checked="">学术项目
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="practical">应用项目（评估咨询项目）
                        </label>
                    </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      项目
                    </div>
                  	<div class="panel-body" id="addMagazine">
                  	   <form action="<?php echo site_url('cms/project/addproject'); ?>" method="post">
                  		<div class="form-group">
                            <label>项目名</label>
                                <input class="form-control" name="add-project-title"> 
                            </div>
                                <label>项目简介（若无简介可不填）</label>
                            <div class="form-group">
                                <textarea class="form-control" name="add-project-intro" rows="3"></textarea>
                                <input type="text" name="kind" value="academic" hidden>
                            </div>
                                <button type="submit" class="btn btn-outline btn-primary" name="addcomfirm">确认添加</button>  
                      </form>
                      </div>
                      </div>
                      
					</div>
				</div>
			  </div>
    </div>
</div>
