<div class="content">
			<div class="content_nav">
					<a href="<?php echo site_url('link'); ?>">友情链接</a>
					<a href="<?php echo site_url('link/school'); ?>" class="now">校内机构</a>
					<a href="<?php echo site_url('link/country'); ?>">国家机构</a>
					<a href="<?php echo site_url('link/science'); ?>">教学科研机构</a>
					<a href="<?php echo site_url('link/academic'); ?>">学术网站</a>
			</div>
			<div class="content_main">

				
	<div class="wrap">
		<p class="breadCrumbNav">
			<span>当前位置：</span>
			<a href="<?php echo site_url('home'); ?>">首页></a>
			<a href="<?php echo site_url('link'); ?>">友情链接></a>
			<a href="<?php echo site_url('link')."/".$kind; ?>"><?php if($kind == 'school'){echo "校内机构";}else if($kind == 'country'){echo "国内机构";}else if($kind == 'science'){echo "教学科研机构";}else if($kind == 'academic'){echo "学术网站";}?></a>
		</p>
		<div class="txt_list">
				
			
			<ul>
			<?php if(isset($link)):?>
			<?php foreach($link as $item):?>
				<li><?php echo $item['title']; ?><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

		</div>
		<div class="fenye">
			<form action="">
					<span id="presentPage"><?php if(isset($pagenow)):?><?php echo $pagenow;?><?php endif;?></span>
					<span>/</span>
					<span id="totalPage"><?php if(isset($pages)):?><?php echo $pages;?><?php endif;?></span>
					<!-- <span id="everyPage">每页 10</span>
					<span id="total"> 总数 </span> -->
					<a href="<?php echo site_url('link/')."/".$kind."/"."1";?>">首页</a>
					<a href="<?php if($pagenow == 1){echo site_url('link/')."/".$kind."/".$pagenow;}else{echo site_url('link/')."/".$kind."/".($pagenow-1);} ?>">上一页</a>
					<a href="<?php if($pagenow == $pages){echo site_url('link/')."/".$kind."/".$pagenow;}else{echo site_url('link/')."/".$kind."/".($pagenow+1);} ?>">下一页</a>
					<a href="<?php echo site_url('link/')."/".$kind."/".$pages;?>">尾页</a>
			</form>
		</div>
	</div>

			</div>
		</div><!--end content-->