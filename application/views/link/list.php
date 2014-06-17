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
			<a href="<?php echo site_url('link'); ?>">友情链接</a>
			
		</p>
		<div class="txt_list">
				
			<p>●校内机构<a href="<?php echo site_url('link/school'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($school)):?>
			<?php foreach($school as $item):?>
				<li><?php echo $item['title']; ?><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

			<p>●国家机构<a href="<?php echo site_url('link/country'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($country)):?>
			<?php foreach($country as $item):?>
				<li><?php echo $item['title']; ?><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>	

			<p>●教学科研机构<a href="<?php echo site_url('link/science'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($science)):?>
			<?php foreach($science as $item):?>
				<li><?php echo $item['title']; ?><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

			<p>●学术网站<a href="<?php echo site_url('link/academic'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($academic)):?>
			<?php foreach($academic as $item):?>
				<li><?php echo $item['title']; ?><a href="<?php echo $item['url']; ?>" target="_blank"><?php echo $item['url']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
		</div>
		
	</div>

			</div>
		</div><!--end content-->