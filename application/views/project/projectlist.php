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
                      <th>title</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>“华南的移民与城市化——以珠三角地区为例”，教育部人文社会科学重点...</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalAcademic">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>“中国乡村都市化再研究——珠江三角洲的透视”，国家社科基金后期...</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalAcademic">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>“国际移民适应性研究：以广州社区为例”，广东省文科重点研究基...</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalAcademic">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
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
                      <th>title</th>
                      <th>handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>“世行贷款安徽黄山新农村建设示范项目移民安置行动计划报告编制...</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalPractical">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>世界银行“云南城市环境建设项目(II) (云南省昭通市)” 社会评价与...</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalPractical">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>2003年10月-2004年10月，中国贫困农村社区发展（西南扶贫4）<div class=""></div></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalPractical">Edit</button>
                          <button type="button" class="btn btn-danger btn-xs">Delete</button>
                      </td>
                    </tr>
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