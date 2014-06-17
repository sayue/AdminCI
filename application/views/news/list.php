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
			<a href="<?php echo site_url('news'); ?>">学术动态</a>
		</p>
		<div class="txt_list">
			<p>●学术会议<a href="<?php echo site_url('news/meeting'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($meeting)):?>
			<?php foreach($meeting as $item):?>
				<li><a href="<?php echo site_url('news/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

			<p>●人员出访<a href="<?php echo site_url('news/visit'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($visit)):?>
			<?php foreach($visit as $item):?>
				<li><a href="<?php echo site_url('news/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

			<p>●获奖情况<a href="<?php echo site_url('news/prize'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($prize)):?>
			<?php foreach($prize as $item):?>
				<li><a href="<?php echo site_url('news/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>
		</div>
	</div>
				
				
			</div>
		</div><!--end content-->