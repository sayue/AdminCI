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
                    <h1 class="page-header">项目列表</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      学术项目
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>项目简述</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($academic)): $i = 1;?>
                    <?php foreach($academic as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php if(strlen($item['title']) > 170){echo mb_substr($item['title'],0,65,'utf8').'...';}else{echo $item['title'];}?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalAcademic">Edit</button>
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
                      应用项目（评估咨询项目）
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>项目简述</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php if(isset($practical)): $j = 1;?>
                    <?php foreach($practical as $item):?>
                    <tr>
                      <td><?php echo $j++;?></td>
                      <td><?php if(strlen($item['title']) > 170){echo mb_substr($item['title'],0,65,'utf8').'...';}else{echo $item['title'];}?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalAcademic">Edit</button>
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
                <div class="modal fade" id="myModalAcademic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">学术项目</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                            <label>项目名</label>
                                <input class="form-control"> 
                            </div>
                            <label>项目简介（若无简介可不填）</label>
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
                <div class="modal fade" id="myModalPractical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">应用项目（评估咨询项目）</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                            <label>项目名</label>
                                <input class="form-control"> 
                            </div>
                            <label>项目简介（若无简介可不填）</label>
                            <textarea class="form-control" rows="3"></textarea>
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