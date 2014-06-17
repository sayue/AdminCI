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
			<a href="<?php echo site_url('project'); ?>">研究项目</a>
		</p>
		<div class="txt_list">
			<p>●学术项目<a href="<?php echo site_url('project/academic'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($academic)):?>
			<?php foreach($academic as $item):?>
				<li><a href="<?php echo site_url('project/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

			<p>●应用项目<a href="<?php echo site_url('project/practical'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($practical)):?>
			<?php foreach($practical as $item):?>
				<li><a href="<?php echo site_url('project/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a><span><?php echo $item['date']; ?></span></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
		</div>
	</div>




			</div>
		</div><!--end content-->