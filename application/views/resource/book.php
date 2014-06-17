<div class="content">
			<div class="content_intro">
			<?php if(isset($book)):?>
					<p class="now">书籍简介</p>
					<p><img src="<?php echo base_url($book['src']); ?>" alt="pic" /></p>
			</div>
			<div class="content_main">
				<div class="breadCrumbNav">
					<span>当前位置：</span>
					<a href="<?php echo site_url('home'); ?>">首页></a>
					<a href="<?php echo site_url('resource'); ?>">学术资源></a>
					<a href="<?php echo site_url('resource/book'); ?>">书籍</a>
				</div>
				
				<div class="book_intro">
					<p>书名：<span><?php echo $book['title'];?></span></p>
					<p>主编：<span id="editor"><?php echo $book['author'];?></span></p>
					<p>出版社：<span id="press"><?php echo $book['publisher'];?></span></p>
					<p>成果简介：<span id="achieve_intro"><?php echo $book['intro'];?>
					</span></p>
				</div>
				<?php endif;?>
			</div>
		</div><!--end content-->