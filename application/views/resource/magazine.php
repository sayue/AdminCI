<div class="content">
			<div class="content_nav">
				<a href="<?php echo site_url('resource'); ?>">学术资源</a>
				<a href="<?php echo site_url('resource/doc'); ?>">文献收藏</a>
				<a href="<?php echo site_url('resource/magazine'); ?>" class="now">杂志</a>
				<a href="<?php echo site_url('resource/book'); ?>">书籍</a>
			</div>
			<div class="content_main">
				<p class="breadCrumbNav">
					<span>当前位置：</span>
					<a href="<?php echo site_url('home'); ?>">首页></a>
					<a href="<?php echo site_url('resource'); ?>">学术资源></a>
					<a href="<?php echo site_url('resource/magazine'); ?>">杂志</a>
				</p>
				<?php if(isset($magazine)):?>
				<h1><?php echo $magazine['title'];?></h1>
				<hr />
				<div class="essay">
					<p><?php echo $magazine['intro'];?>
					</p>
				</div>
				<?php endif;?>
				
			</div>
		</div><!--end content-->