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
                        <tr>
                          <td>1</td>
                          <td>周大鸣</td>
                          <td>1958.12</td>
                          <td>教授</td>
                          <td>博士</td>
                          <td>都市人类学</td>
                          <td>
                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalMember">Edit</button>
                              <button type="button" class="btn btn-danger btn-xs">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>陈志明</td>
                          <td>1950.4</td>
                          <td>教授</td>
                          <td>博士</td>
                          <td>海外华人、全球化</td>
                          <td>
                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalMember">Edit</button>
                              <button type="button" class="btn btn-danger btn-xs">Delete</button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>刘志扬</td>
                          <td>1965.9</td>
                          <td>教授</td>
                          <td>博士</td>
                          <td>族群研究、藏族社会研究</td>
                          <td>
                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalMember">Edit</button>
                              <button type="button" class="btn btn-danger btn-xs">Delete</button>
                          </td>
                        </tr>
                          <tr>
                          <td>4</td>
                          <td>朱健刚</td>
                          <td>1972.11</td>
                          <td>教授</td>
                          <td>博士</td>
                          <td>移民研究、公益慈善研究</td>
                          <td>
                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModalMember">Edit</button>
                              <button type="button" class="btn btn-danger btn-xs">Delete</button>
                          </td>
                        </tr>
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
                                <input class="form-control" value="周大鸣"> 
                            </div>
                            <div class="form-group member-edit">
                                <label>职称</label>
                                <input class="form-control" value="教授"> 
                            </div>
                            <div class="form-group member-edit">
                                <label>学位</label>
                                <input class="form-control" value="博士"> 
                            </div>
                            <div class="form-group member-edit">
                                <label>研究领域</label>
                                <input class="form-control" value="都市人类学"> 
                            </div>
                            <div class="form-group member-edit">
                                <label>院系（选填）</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group member-edit">
                                <label>工作单位（选填）</label>
                                <input class="form-control"> 
                            </div>
                            <div class="form-group">
                            <label>个人简介</label>
                            <textarea class="form-control" rows="5">中山大学社会学人类学学院教授，博士生导师。 中山大学移民与族群研究中心主任国务院学位委员会社会学学科评议组成员，国家社会科学基金学科评审组专家，广东省高等学校珠江学者特聘教授，中国人民大学、中央民族大学兼职教授，担任SSCI期刊Chinese Sociology Anthropology杂志主编近10年，现任美国International Journal of Business Anthropology杂志主编，创建中国田野调查基金。美国哈佛大学、日本东京大学、德国柏林自由大学美国太平洋路德大学访问学者，并多次到香港、澳门、台湾及美国、加拿大、日本、荷兰、意大利等地进行讲学及学术交流活动。 主要研究方向为移民、族群与族群关系、中国乡村社会、都市人类学。</textarea>
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