<div class="content">
			<div class="content_nav">
				<a href="<?php echo site_url('member'); ?>" class="now">组织架构</a>
				<a href="<?php echo site_url('member/center'); ?>">中心负责人</a>
				<a href="<?php echo site_url('member/fulltime'); ?>">专职研究员</a>
				<a href="<?php echo site_url('member/partime'); ?>">兼职研究员</a>
				<a href="<?php echo site_url('member/daily'); ?>">日常工作联系人</a>
			</div>
			<div class="content_main">
				
				
		<div class="wrap">
		<p class="breadCrumbNav">
			<span>当前位置：</span>
			<a href="<?php echo site_url('home'); ?>">首页></a>
			<a href="<?php echo site_url('member'); ?>">组织架构></a><a href="<?php echo site_url('member/daily'); ?>">日常工作联系人</a>
		</p>
		<div class="introduction">
			<?php if(isset($daily)): $id = 0; ?>
			<?php foreach($daily as $item): ?>
			<?php if($id%2==0): ?>
				<?php echo "<p>";?>
			<?php endif;?>
			
				<a href="<?php echo site_url('member/index/').'/'.$item['id'] ; ?>">
					<img src="<?php if($item['src'] == '' ){echo base_url('images/teacher/none.jpg');}else{echo base_url($item['src']);}?>" alt="pic" /><br />
					<span><?php echo $item['name'];?> <?php echo $item['position'];?></span>
				</a>

			<?php if($id%2==0): ?>
				<?php echo "</p>";?>
			<?php endif;?>
			<?php endforeach;?>
			<?php endif; ?>
			
		</div>

		<div class="fenye">
			<form action="">
					<span>页次：</span>
					<span id="presentPage"><?php if(isset($pagenow)):?><?php echo $pagenow;?><?php endif;?></span>
					<span>/</span>
					<span id="totalPage"><?php if(isset($pages)):?><?php echo $pages;?><?php endif;?></span>
					<!-- <span id="everyPage">每页 10</span>
					<span id="total"> 总数 </span> -->
					<a href="<?php echo site_url('member/daily/1');?>">首页</a>
					<a href="<?php if($pagenow == 1){echo site_url('member/daily/')."/".$pagenow;}else{echo site_url('member/daily/')."/".($pagenow-1);} ?>">上一页</a>
					<a href="<?php if($pagenow == $pages){echo site_url('member/daily/')."/".$pagenow;}else{echo site_url('member/daily/')."/".($pagenow+1);} ?>">下一页</a>
					<a href="<?php echo site_url('member/daily/')."/".$pages;?>">尾页</a>
					<!-- <span>转到：</span>
					<input type="text" size="3" />
					<input type="submit" value="转到" /> -->
			</form>
		</div>
	</div>

			</div>
		</div><!--end content-->