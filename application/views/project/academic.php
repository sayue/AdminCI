<div class="content">
			<div class="content_nav">
					<a href="<?php echo site_url('project'); ?>" class="now">研究项目</a>
					<a href="<?php echo site_url('project/academic'); ?>">学术项目</a>
					<a href="<?php echo site_url('project/practical'); ?>">应用项目</a>
			</div>
			<div class="content_main">
				
				
	
	<div class="wrap">
		<p class="breadCrumbNav">
			<span>当前位置：</span>
			<a href="<?php echo site_url('home'); ?>">首页></a>
			<a href="<?php echo site_url('project'); ?>">研究项目></a>
			<a href="<?php echo site_url('project/academic'); ?>">学术项目</a>
		</p>
		<div class="txt_list">
			<ul>
			<?php if(isset($academic)):?>
			<?php foreach($academic as $item):?>
				<li><a href="<?php echo site_url('project/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
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
					<a href="<?php echo site_url('project/academic/1');?>">首页</a>
					<a href="<?php if($pagenow == 1){echo site_url('project/academic/')."/".$pagenow;}else{echo site_url('project/academic/')."/".($pagenow-1);} ?>">上一页</a>
					<a href="<?php if($pagenow == $pages){echo site_url('project/academic/')."/".$pagenow;}else{echo site_url('project/academic/')."/".($pagenow+1);} ?>">下一页</a>
					<a href="<?php echo site_url('project/academic/')."/".$pages;?>">尾页</a>
					<!-- <span>转到：</span>
					<input type="text" size="3" />
					<input type="submit" value="转到" /> -->
			</form>
		</div>
	</div>



			</div>
		</div><!--end content-->