 <style type="text/css">
        
    .btn-xs{
        width:30px;
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
                    <h1 class="page-header">出版品</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      杂志
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>杂志名</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($magazine)): $i = 1;?>
                    <?php foreach($magazine as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td>
                          <a href="#" class="edit-magazine" data-toggle="modal" data-target="#myModalMagazine" value="<?php echo $item['id'];?>">修改</a>
                          <a href="<?php echo site_url('cms/resource/delete').'/'.$item['id'];?>" class="delete-magazine">删除</a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                    
                    
                    </tbody>
                    </table>
                  </div>
                </div>


                    <div class="panel panel-default">
                    <div class="panel-heading">
                      书籍
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>书名</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($book)): $j = 1;?>
                    <?php foreach($book as $item):?>
                    <tr>
                      <td><?php echo $j++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td>
                          <a href="#" class="edit-book" data-toggle="modal" data-target="#myModalBook" value="<?php echo $item['id'];?>">修改</a>
                          <a href="<?php echo site_url('cms/resource/delete').'/'.$item['id'];?>" class="delete-book">删除</a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                    
                    
                    </tbody>
                    </table>
                  </div>
                </div>
                
                <!--begin of magazine div-->
                <div class="modal fade" id="myModalMagazine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <form action="<?php echo site_url('cms/resource/edit/magazine'); ?>" method="post">
                        <input type="text" name="magazineid" value="" hidden>
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">杂志</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                            <label>杂志名</label>
                                <input class="form-control edit-maga-title" name="edit-maga-title"> 
                            </div>
                            <label>杂志简介</label>
                            <textarea class="form-control edit-maga-desc" name="edit-maga-desc" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </form>
                </div><!-- /.modal -->

                <!--end of magazine div-->
                
                <!--begin of book div-->
                <div class="modal fade" id="myModalBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <form action="<?php echo site_url('cms/resource/edit/book'); ?>" method="post">
                        <input type="text" name="bookid" value="" hidden>
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">书籍</h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group book-edit">
                                <label>书名</label>
                                <input class="form-control edit-book-title" name="edit-book-title"> 
                            </div>
                            <div class="form-group book-edit">
                                <label>作者</label>
                                <input class="form-control edit-book-author" name="edit-book-author"> 
                            </div>
                            <div class="form-group book-edit">
                                <label>出版社</label>
                                <input class="form-control edit-book-publisher" name="edit-book-publisher"> 
                            </div>
                            <div class="form-group book-edit">
                                <label>出版日期</label>
                                <input class="form-control edit-book-date" name="edit-book-date"> 
                            </div>
                            <div class="form-group">
                            <label>书本简介</label>
                            <textarea class="form-control edit-book-desc" name="edit-book-desc" rows="10"></textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label>书本图片上传</label>
                                <input type="file">
                            </div> -->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </form>
                </div><!-- /.modal -->
                <!--end of book div-->


              </div>
                <!-- /.col-lg-12 -->
          </div>
      </div>