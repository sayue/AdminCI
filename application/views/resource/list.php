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
			<a href="<?php echo site_url('resource/book'); ?>">书籍</a>
		</p>
		<div class="txt_list">

			<p>●杂志<a href="<?php echo site_url('resource/magazine'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($magazine)):?>
			<?php foreach($magazine as $item):?>
				<li><a href="<?php echo site_url('resource/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>
			<br/>

			<p>●书籍<a href="<?php echo site_url('resource/book'); ?>" class="more">更多>></a></p>
			<hr />
			<ul>
			<?php if(isset($book)):?>
			<?php foreach($book as $item):?>
				<li><a href="<?php echo site_url('resource/index/').'/'.$item['id'] ; ?>"><?php echo $item['title']; ?></a></li>
				
			<?php endforeach;?>
			<?php endif;?>
			</ul>

		</div>
	</div>

			</div>
		</div><!--end content-->