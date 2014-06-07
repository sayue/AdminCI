<style type="text/css">
	.btn-primary.btn-outline{
		margin-left: 925px;
	}
	.form-control{
		width:80%;
	}
</style>

<div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                    <h1 class="page-header">学术资源</h1>
                <div class="panel panel-default">
                    <div class="panel-heading">
                      文献收藏
                    </div>
                  <div class="panel-body">
				  
					<table class="table table-bordered">
        <thead>
          <tr>
            <th>数量</th>
            <th colspan="2">藏书量（册）</th>
            <th colspan="2">报刊拥有量（种）</th>
          </tr>
        </thead>
        <?php if(isset($num)):?>
        <?php foreach($num as $item):?>  
        <tbody>
          <tr>
            <td>单位</td>
            <td>中文图书</td>
            <td>外文图书</td>
            <td>中文报刊</td>
            <td>外文报刊</td>
          </tr>
          <tr>
          	<td>学校图书馆</td>

            <td><input class="form-control" value="<?php echo $item['lib_zh_book'];?>"></td>
            <td><input class="form-control" value="<?php echo $item['lib_en_book'];?>"></td>
            <td><input class="form-control" value="<?php echo $item['lib_zh_mag'];?>"></td>
            <td><input class="form-control" value="<?php echo $item['lib_en_mag'];?>"></td>
          </tr>
          <tr>
            <td>申报机构资料室</td>
            <td><input class="form-control" value="<?php echo $item['doc_zh_book'];?>"></td>
            <td><input class="form-control" value="<?php echo $item['doc_en_book'];?>"></td>
            <td><input class="form-control" value="<?php echo $item['doc_zh_mag'];?>"></td>
            <td><input class="form-control" value="<?php echo $item['doc_en_mag'];?>"></td>
          </tr>
        </tbody>

        <?php endforeach;?>
        <?php endif;?>
      </table>
					<button type="button" class="btn btn-outline btn-primary">确认修改</button>
				  </div>
                </div>
                <!-- /.col-lg-12 -->

          
          </div>
      </div>
</div>