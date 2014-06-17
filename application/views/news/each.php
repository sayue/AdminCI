<div class="content">
			<div class="content_nav">
				<a href="<?php echo site_url('news'); ?>" class="now">学术动态</a>
				<a href="<?php echo site_url('news/meeting'); ?>">学术会议</a>
				<a href="<?php echo site_url('news/visit'); ?>">人员出访</a>
				<a href="<?php echo site_url('news/prize'); ?>">获奖情况</a>
			</div>
			<div class="content_main">
			<?php if(isset($news)): ?>
				<p class="breadCrumbNav">
					<span>当前位置：</span>
					<a href="<?php echo site_url('home'); ?>">首页></a>
					<a href="<?php echo site_url('news'); ?>">学术动态></a>
					<a href="<?php echo site_url('news/')."/".$news['kind']; ?>"><?php if($news['kind'] == 'meeting'){echo "学术会议";}else if($news['kind'] == 'visit'){echo "人员出访";}else if($news['kind'] == 'prize'){echo "获奖情况";} ?></a>
				</p>
				
				<h1><?php echo $news['title'];?></h1>
				<p class="span_margin"><span></span><span><?php echo $news['author'];?></span><span><?php echo $news['date'];?></span></p>
				<hr />
				<div class="essay">
					<p><?php echo $news['content'];?></p>
				</div>
				<?php endif;?>
				
			</div>
		</div><!--end content-->