 <style type="text/css">
        
    .btn-xs{
        width:30px;
    }

    .add-link{
      display:inline-block;
      width:45%;
      margin-right: 20px;
    }

    </style>

      <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">链接列表</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      校内机构
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>title</th>
                      <th>url</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($school)): $i = 1;?>
                    <?php foreach($school as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td><?php echo $item['url'];?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalLink">Edit</button>
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
                      国家机构
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>title</th>
                      <th>url</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($country)): $i = 1;?>
                    <?php foreach($country as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td><?php echo $item['url'];?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalLink">Edit</button>
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
                      教学科研机构
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>title</th>
                      <th>url</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($science)): $i = 1;?>
                    <?php foreach($science as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td><?php echo $item['url'];?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalLink">Edit</button>
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
                      学术网站
                    </div>
                  <div class="panel-body">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>title</th>
                      <th>url</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php if(isset($academic)): $i = 1;?>
                    <?php foreach($academic as $item):?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $item['title'];?></td>
                      <td><?php echo $item['url'];?></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalLink">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
                    <?php endforeach;?>
                    <?php endif;?>

                    </tbody>
                    </table>
                  </div>
                </div>

                <!--begin of edit newslist-->
                <div class="modal fade" id="myModalLink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">修改链接</h4>
                        </div>

                        <div class="modal-body">
                            <div class="form-group add-link">
                            <label>title</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group add-link">
                            <label>url</label>
                                <input class="form-control"> 
                            </div>
                            
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
      