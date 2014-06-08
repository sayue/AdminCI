 <style type="text/css">
        
    .btn-xs{
        width:30px;
    }
    
    .member-edit{
      display:inline-block;
      width:45%;
      margin-right: 20px;
    }

    </style>

      <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">成员列表</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      成员资料
                    </div>
                  <div class="panel-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>姓名</th>
                          <th>出生年月</th>
                          <th>职称</th>
                          <th>学位</th>
                          <th>研究领域</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php if(isset($member)): $i = 1;?>
                        <?php foreach($member as $item):?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td><?php echo $item['name'];?></td>
                          <td><?php echo $item['birth'];?></td>
                          <td><?php echo $item['position'];?></td>
                          <td><?php echo $item['degree'];?></td>
                          <td><?php echo $item['field'];?></td>
                          <td>
                              <a href="#" class="edit-member" data-toggle="modal" data-target="#myModalMember" value="<?php echo $item['id'];?>">修改</a>
                              <a href="#" data-toggle="modal" data-target="#myModal">删除</a>
                          </td>
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>


                        
                      </tbody>
                    </table>
                  </div>
                </div>
            
                <!--begin of magazine div-->
                <div class="modal fade" id="myModalMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">成员资料</h4>
                        </div>

                        <div class="modal-body">

                            <div class="form-group member-edit">
                                <label>姓名</label>
                                <input class="form-control edit-mem-name" value=""> 
                            </div>
                            <div class="form-group member-edit">
                                <label>职称</label>
                                <input class="form-control edit-mem-position" value=""> 
                            </div>
                            <div class="form-group member-edit">
                                <label>学位</label>
                                <input class="form-control edit-mem-degree" value=""> 
                            </div>
                            <div class="form-group member-edit">
                                <label>研究领域</label>
                                <input class="form-control edit-mem-field" value=""> 
                            </div>
                            <div class="form-group member-edit">
                                <label>院系（选填）</label>
                                <input class="form-control edit-mem-department"> 
                            </div>
                            <div class="form-group member-edit">
                                <label>工作单位（选填）</label>
                                <input class="form-control edit-mem-institution"> 
                            </div>
                            <div class="form-group">
                            <label>个人简介</label>
                            <textarea class="form-control edit-mem-intro" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>个人照片上传（可选）</label>
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
                <!--end of magazine div-->
                
              </div>
                <!-- /.col-lg-12 -->
          </div>
      </div>