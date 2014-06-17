<div class="content">
			<div class="content_nav">
				<a href="<?php echo site_url('resource'); ?>">学术资源</a>
				<a href="<?php echo site_url('resource/doc'); ?>">文献收藏</a>
				<a href="<?php echo site_url('resource/magazine'); ?>" class="now">杂志</a>
				<a href="<?php echo site_url('resource/book'); ?>">书籍</a>
			</div>
			<div class="content_main">

				
	<div class="wrap">
		<p class="breadCrumbNav">
			<span>当前位置：</span>
			<a href="<?php echo site_url('home'); ?>">首页></a>
			<a href="<?php echo site_url('resource'); ?>">学术资源></a>
			<a href="<?php echo site_url('resource/magazine'); ?>">杂志</a>
		</p>
		<div class="txt_list">
			
			<ul>
			<?php if(isset($magazine)):?>
			<?php foreach($magazine as $item):?>
				<li><a href="<?php echo site_url('resource/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>

		</div>

		<div class="fenye">
			<form action="">
				<p>
					<span id="presentPage"><?php if(isset($pagenow)):?><?php echo $pagenow;?><?php endif;?></span>
					<span>/</span>
					<span id="totalPage"><?php if(isset($pages)):?><?php echo $pages;?><?php endif;?></span>
					<!-- <span id="everyPage">每页 10</span>
					<span id="total"> 总数 </span> -->
					<a href="<?php echo site_url('resource/magazine/1');?>">首页</a>
					<a href="<?php if($pagenow == 1){echo site_url('resource/magazine/')."/".$pagenow;}else{echo site_url('resource/magazine/')."/".($pagenow-1);} ?>">上一页</a>
					<a href="<?php if($pagenow == $pages){echo site_url('resource/magazine/')."/".$pagenow;}else{echo site_url('resource/magazine/')."/".($pagenow+1);} ?>">下一页</a>
					<a href="<?php echo site_url('resource/magazine/')."/".$pages;?>">尾页</a>
			</form>
		</div>
	</div>

			</div>
		</div><!--end content-->