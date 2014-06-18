<body>
	<div class="container">
		<div class="header">
			<div class="header_top">
				<div class="logo">
					<img src="<?php echo base_url('images/logo2.jpg'); ?>" alt="logo" />
				</div>
				<div class="search">
					<span></span>
					<form action="#">
						<input type="text" value="&nbsp;搜索|" class="input_text"  onfocus="if(this.value=='&nbsp;搜索|'){this.value=''}" onblur="if(this.value==''){this.value='&nbsp;搜索|'}"/>
						<input type="submit" value="搜索" class="btn" />
					</form>
					<div class="banben">
						<a href="<?php echo site_url('home'); ?>">回首页</a>
					<a href="">中文版</a>
					<a href="" class="fnt_April">ENGLISH</a>
				</div>
				</div>
				
			</div>
			<div class="header_center">
				<a href="<?php echo site_url('home'); ?>">移民与族群研究中心</a>
			</div>
			<div class="nav">
				<ul>
					<li><a href="<?php echo site_url('home'); ?>">网站首页</a></li>
					<li class="subnav"><a href="<?php echo site_url('intro'); ?>">中心简介</a>
						<ul>
							<li><a href="<?php echo site_url('intro/index/1'); ?>">历史</a></li>
							<li><a href="<?php echo site_url('intro/index/2'); ?>">组织架构及人员组成</a></li>
							<li><a href="<?php echo site_url('intro/index/3'); ?>">研究内容</a></li>
							<li><a href="<?php echo site_url('intro/index/4'); ?>">研究特色</a></li>
							<li><a href="<?php echo site_url('intro/index/5'); ?>">社会影响</a></li>
							<li><a href="<?php echo site_url('intro/index/6'); ?>">社会评价</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="<?php echo site_url('member'); ?>">组织架构</a>
						<ul>
							<li><a href="<?php echo site_url('member/center'); ?>">中心负责人</a></li>
							<li><a href="<?php echo site_url('member/fulltime'); ?>">专职研究员</a></li>
							<li><a href="<?php echo site_url('member/partime'); ?>">兼职研究员</a></li>
							<li><a href="<?php echo site_url('member/daily'); ?>">日常工作联系人</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="<?php echo site_url('project'); ?>">研究项目</a>
						<ul>
							<li><a href="<?php echo site_url('project/academic'); ?>">学术研究</a></li>
							<li><a href="<?php echo site_url('project/practical'); ?>">应用研究</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="<?php echo site_url('news'); ?>">学术动态</a>
						<ul>
							<li><a href="<?php echo site_url('news/meeting'); ?>">学术会议</a></li>
							<li><a href="<?php echo site_url('news/visit'); ?>">人员出访</a></li>
							<li><a href="<?php echo site_url('news/prize'); ?>">获奖情况</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="<?php echo site_url('resource'); ?>">学术资源</a>
						<ul>
							<li><a href="<?php echo site_url('resource/doc'); ?>">文献收藏</a></li>
							<li><a href="<?php echo site_url('resource/magazine'); ?>">杂志</a></li>
                            					<li><a href="<?php echo site_url('resource/book'); ?>">书籍</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="<?php echo site_url('link'); ?>">友情链接</a>
						<ul>
							<li><a href="<?php echo site_url('link/school'); ?>">校内机构</a></li>
							<li><a href="<?php echo site_url('link/country'); ?>">国家机构</a></li>
							<li><a href="<?php echo site_url('link/science'); ?>">教学科研机构</a></li>
							<li><a href="<?php echo site_url('link/academic'); ?>">学术网站</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!--end header-->