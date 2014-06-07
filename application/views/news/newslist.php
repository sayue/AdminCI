 <style type="text/css">
        
    .btn-xs{
        width:45px;
    }

    </style>

      <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">学术动态</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      学术会议
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>标题</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php if(isset($meeting)): $i = 1;?>
                    <?php foreach($meeting as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php if(strlen($item['content']) > 170){echo mb_substr($item['content'],0,65,'utf8').'...';}else{echo $item['content'];}?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">修改</button>
                          <button type="button" class="btn btn-danger btn-xs">删除</button>
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
                      人员出访
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>标题</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($visit)): $i = 1;?>
                    <?php foreach($visit as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php if(strlen($item['content']) > 170){echo mb_substr($item['content'],0,65,'utf8').'...';}else{echo $item['content'];}?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">修改</button>
                          <button type="button" class="btn btn-danger btn-xs">删除</button>
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
                      获奖情况
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>标题</th>
                      <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($prize)): $i = 1;?>
                    <?php foreach($prize as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php if(strlen($item['content']) > 170){echo mb_substr($item['content'],0,65,'utf8').'...';}else{echo $item['content'];}?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">修改</button>
                          <button type="button" class="btn btn-danger btn-xs">删除</button>
                      </td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>

                    </tbody>
                    </table>
                  </div>
                </div>
                
                <!--begin of edit newslist-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">学术动态</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group">
                            <label>title</label>
                                <input class="form-control"> 
                            </div>
                            <label>简介(学术会议、人员出访可不选)</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-primary">保存</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!--end of newslist div-->

              </div>
                <!-- /.col-lg-12 -->
          </div>
      </div>
      