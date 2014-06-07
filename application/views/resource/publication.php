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
                      <th>title</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($magazine)): $i = 1;?>
                    <?php foreach($magazine as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalMagazine">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
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
                      <th>title</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($book)): $j = 1;?>
                    <?php foreach($book as $item):?>
                    <tr>
                      <td><?php echo $j++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalBook">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
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
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Magazine</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                            <label>杂志名</label>
                                <input class="form-control"> 
                            </div>
                            <label>杂志简介</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-primary">保存</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!--end of magazine div-->
                
                <!--begin of book div-->
                <div class="modal fade" id="myModalBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Book</h4>
                        </div>
                        <div class="modal-body">

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
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-primary">保存</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!--end of book div-->


              </div>
                <!-- /.col-lg-12 -->
          </div>
      </div>