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
                    <h1 class="page-header">添加(杂志或书籍)</h1>
                    <div class="form-group">
                                            <label>Kinds of news selection</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="">杂志
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">书籍
                                            </label>
                                        </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      学术会议
                    </div>
                  	<div class="panel-body" id="addMagazine">
                  	
                  		<div class="form-group">
                            <label>杂志名</label>
                                <input class="form-control"> 
                            </div>
                                <label>杂志简介</label>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                                <button type="button" class="btn btn-outline btn-primary" name="addcomfirm">确认添加</button>  
                      </div>
                      
                      <div class="panel-body" id="addBook" style="display:none">
                            <div class="form-group book-edit">
                                <label>书名</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group book-edit">
                                <label>作者</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group book-edit">
                                <label>出版社</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group book-edit">
                                <label>出版日期</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group">
                                <label>书本简介</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>书本图片上传</label>
                                <input type="file">
                            </div>
                                <button type="button" class="btn btn-outline btn-primary" name="addcomfirm">确认添加</button>
                            </div>
					</div>
				</div>
			  </div>
    </div>
</div>
