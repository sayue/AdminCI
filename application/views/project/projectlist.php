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
                          <a href="#" class="edit-academic" data-toggle="modal" data-target="#myModalAcademic" value="<?php echo $item['id'];?>">修改</a>
                          <a href="<?php echo site_url('project/delete').'/'.$item['id'];?>" class="delete-project">删除</a>
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
                          <a href="#" class="edit-practical" data-toggle="modal" data-target="#myModalPractical" value="<?php echo $item['id'];?>">修改</a>
                          <a href="<?php echo site_url('project/delete').'/'.$item['id'];?>" class="delete-project">删除</a>
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
                        <form action="<?php echo site_url('project/edit/academic'); ?>" method="post">
                        <input type="text" name="academicid" value="" hidden>
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">学术项目</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                            <label>项目名</label>
                                <input class="form-control edit-aca-title" name="edit-aca-title"> 
                            </div>
                            <label>项目简介（若无简介可不填）</label>
                            <textarea class="form-control edit-aca-intro" name="edit-aca-intro" rows="10"></textarea>
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
                <div class="modal fade" id="myModalPractical" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <form action="<?php echo site_url('project/edit/practical'); ?>" method="post">
                        <input type="text" name="practicalid" value="" hidden>
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">应用项目（评估咨询项目）</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                            <label>项目名</label>
                                <input class="form-control edit-prac-title" name="edit-prac-title"> 
                            </div>
                            <label>项目简介（若无简介可不填）</label>
                            <textarea class="form-control edit-prac-intro" name="edit-prac-intro" rows="10"></textarea>
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