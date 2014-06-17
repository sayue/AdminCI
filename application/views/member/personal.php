<div class="content">
<?php if(isset($personal)): ?>
	<?php foreach($personal as $item): ?>
			<div class="content_intro">
					<p class="now">成员基本信息</p>
					<p><img src="<?php if($item['src'] == '' ){echo base_url('images/teacher/none.jpg');}else{echo base_url($item['src']);}?>" alt="pic" /></p>
					<p>姓名：<span id="name"><?php echo $item['name'];?></span></p>
					<p>职称：<span id="positional"></span><?php echo $item['position'];?></p>
					<!-- <p>邮箱地址：</p>
					<p><a href="mailto:[!--email--]"  id="email"></a></p> -->

			</div>
			<div class="content_main">
				<div class="breadCrumbNav">
					<span>当前位置：</span>
					<a href="">首页></a>
					<a href="">组织架构及人员构成></a>
					<a href="">中心负责人</a>
				</div>
				<div class="intro">
					<p><?php echo $item['intro'];?></p>
				</div>
			</div>
		<?php endforeach;?>
<?php endif;?>
		</div><!--end content-->