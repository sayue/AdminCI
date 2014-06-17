<div class="content">
			<div class="content_nav">
					<a href="<?php echo site_url('project'); ?>">研究项目</a>
					<a href="<?php echo site_url('project/academic'); ?>">学术项目</a>
					<a href="<?php echo site_url('project/practical'); ?>">应用项目</a>
			</div>
			<div class="content_main">
				<?php if(isset($project)): ?>
				<p class="breadCrumbNav">
					<span>当前位置：</span>
					<a href="<?php echo site_url('home'); ?>">首页></a>
					<a href="<?php echo site_url('project'); ?>">研究项目></a>
					
					<a href="<?php echo site_url('project/')."/".$project['kind']; ?>"><?php if($project['kind'] == 'academic'){echo "学术项目";}else if($project['kind'] == 'practical'){echo "应用项目";}?></a>
				</p>
				
				<h1><?php echo $project['title'];?></h1>
				<p class="span_margin"><span><?php echo $project['sub'];?></span><span><?php echo $project['author'];?></span><span><?php echo $project['date'];?></span></p>
				<hr />
				<div class="essay">
					<p><?php echo $project['intro'];?></p>
				</div>
				<?php endif;?>
				
			</div>
		</div><!--end content-->