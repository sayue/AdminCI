<style type="text/css">
    
</style>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">中心简介</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel-group" id="accordion">

            <?php if(isset($intro)): $i=0;?>
                <?php foreach($intro as $item):?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $id[$i];?>">
                            <?php echo $item['kind'];?>
                            </a>
                        </h4>
                    </div>
                    <?php if($item['kind'] == '历史'){$in = 'in';}else{$in = '';}?>
                <div id="collapse<?php echo $id[$i];?>" class="panel-collapse collapse <?php echo $in;?>">
                    <div class="panel-body">
                    <div class="content">
                    <?php echo $item['content'];?>
                    </div>
                    <button type="button" class="btn btn-primary btnright" data-toggle="modal" data-target="#myModal<?php echo $id[$i];?>">修改</button>
                    </div>
                </div>

                </div>

                
            

                <div class="modal fade" id="myModal<?php echo $id[$i++];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <form action="<?php echo site_url('intro/edit'); ?>" method="post">
                        <input type="text" name="introid" value="<?php echo $item['id']; ?>" hidden>
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel"><?php echo $item['kind'];?></h4>
                        </div>
                        <div class="modal-body">
                        <textarea class="form-control" rows="12" name="edit-content">
                            <?php echo $item['content'];?>
                        </textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>

                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </form>
                    </div><!-- /.modal -->

                    <?php endforeach;?>
                <?php endif;?>
            </div><!--end of panel-group-->
        </div>
    <!-- /#wrapper -->