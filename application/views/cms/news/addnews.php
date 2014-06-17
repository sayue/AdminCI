 <style type="text/css">
        
    .btn-primary.btn-outline{
    	margin-left: 925px;
    }

    </style>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">学术动态</h1>
                    <div class="form-group">
                        <label>动态类型</label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="meeting" checked="">学术会议
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="visit">人员出访
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="prize">获奖情况
                            </label>                                    
                   </div>
                <div class="panel panel-default">
                    <form action="<?php echo site_url('cms/news/addnews'); ?>" method="post">
                    <div class="panel-heading">
                      
                    </div>
                  	<div class="panel-body">
                  	
                  	<div class="form-group">
                            <label>Title/动态题目</label>
                            <input class="form-control edit-title" name="add-news-title" value="">
                            <label>author/参与者</label>
                            <input class="form-control edit-title" name="add-news-author" value="" style="width:400px">
                            <label>date/日期</label>
                            <input class="form-control edit-title" name="add-news-date" value="" style="width:400px">
                            <label>Content/内容</label>
                            <textarea class="form-control" name="add-news-content" rows="3"></textarea>
                            <input type="text" name="kind" value="meeting" hidden>
                            

                            </div>
                            <button type="submit" class="btn btn-outline btn-primary" name="addcomfirm">确认添加</button>
					          </div>
                    </form>
				        </div>
			      </div>
        </div>
    </div>
