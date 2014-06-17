<div class="content">
			<div class="content_nav">
				<a href="<?php echo site_url('news'); ?>" class="now">学术动态</a>
				<a href="<?php echo site_url('news/meeting'); ?>">学术会议</a>
				<a href="<?php echo site_url('news/visit'); ?>">人员出访</a>
				<a href="<?php echo site_url('news/prize'); ?>">获奖情况</a>
			</div>
			<div class="content_main">
				

				
	
	<div class="wrap">
		<p class="breadCrumbNav">
			<span>当前位置：</span>
			<a href="<?php echo site_url('home'); ?>">首页></a>
			<a href="<?php echo site_url('news'); ?>">学术动态></a>
			<a href="<?php echo site_url('news/visit'); ?>">人员出访</a>
		</p>
		<div class="txt_list">
			<ul>
			<?php if(isset($visit)):?>
			<?php foreach($visit as $item):?>
				<li><a href="<?php echo site_url('news/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
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
					<a href="<?php echo site_url('news/visit/1');?>">首页</a>
					<a href="<?php if($pagenow == 1){echo site_url('news/visit/')."/".$pagenow;}else{echo site_url('news/visit/')."/".($pagenow-1);} ?>">上一页</a>
					<a href="<?php if($pagenow == $pages){echo site_url('news/visit/')."/".$pagenow;}else{echo site_url('news/visit/')."/".($pagenow+1);} ?>">下一页</a>
					<a href="<?php echo site_url('news/visit/')."/".$pages;?>">尾页</a>
			</form>
		</div>
	</div>
				
				
			</div>
		</div><!--end content-->