<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>中山大学移民与族群研究中心</title>
	<link rel="stylesheet" href="<?php echo base_url('css/index/reset.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('css/index/style.css'); ?>" />
	<script type="text/javascript" src="<?php echo base_url('js/jquery-1.10.2.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/index.js'); ?>"></script>

	
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="header_top">
				<div class="logo">
					<img src="<?php echo base_url('images/logo.jpg'); ?>" alt="logo" />
				</div>
				<div class="search">
					<span></span>
					<form action="#">
						<input type="text" value="&nbsp;搜索|" class="input_text"  onfocus="if(this.value=='&nbsp;搜索|'){this.value=''}" onblur="if(this.value==''){this.value='&nbsp;搜索|'}"/>
						<input type="submit" value="搜索" class="btn" />
					</form>
					<div class="banben">
					<a href="">回首页</a>
					<a href="">中文版</a>
					<a href="" class="fnt_April">ENGLISH</a>
				</div>
				</div>
				
			</div>
			<div class="header_center">
				<a href="index.html">移民与族群研究中心</a>
			</div>
			<div class="nav">
				<ul>
					<li><a href="index.html">网站首页</a></li>
					<li class="subnav"><a href="intro.html">中心简介</a>
						<ul>
							<li><a href="">历史</a></li>
							<li><a href="">组织架构及人员组成</a></li>
							<li><a href="">研究内容</a></li>
							<li><a href="">研究特色</a></li>
							<li><a href="">社会影响</a></li>
							<li><a href="">社会评价</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="zuzhijiagou.html">组织架构</a>
						<ul>
							<li><a href="">中心负责人</a></li>
							<li><a href="">兼职研究员</a></li>
							<li><a href="">日常工作联系人</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="yanjiu.html">研究项目</a>
						<ul>
							<li><a href="">学术研究</a></li>
							<li><a href="">应用研究</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="xueshudongtai.html">学术动态</a>
						<ul>
							<li><a href="">学术会议</a></li>
							<li><a href="">人员出访</a></li>
							<li><a href="">获奖情况</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="xueshuziyuan.html">学术资源</a>
						<ul>
							<li><a href="">文献收藏</a></li>
							<li><a href="">出版品</a></li>
						</ul>
					</li>
					<li class="subnav"><a href="link.html">友情链接</a>
						<ul>
							<li><a href="">教育部重点研究基地</a></li>
							<li><a href="">校内机构</a></li>
							<li><a href="">高等院校</a></li>
							<li><a href="">教学科研机构</a></li>
							<li><a href="">学术网站</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!--end header-->
		<div class="content">
			<div class="top_content">
				<p>学术动态<a href="" class="fnt_April">>> MORE</a></p>
				<ul>

				<?php if(isset($news)): ?>
				<?php foreach($news as $items):?>
					<li><a href="#" class="fnt_000"><?php if(strlen($items['content']) > 80){echo mb_substr($items['content'],0,20,'utf8').'...';}else{echo $items['content'];}?></a><span>(<?php echo $items['date']; ?>)</span></a></li>
				<?php endforeach;?>
				<?php endif; ?>
					
				</ul>
			</div>
			<div class="bottom_content">
				<p>通知公告<a href="" class="fnt_April">>> MORE</a></p>
				<ul>

				<?php if(isset($notice)): ?>
				<?php foreach($notice as $item):?>
					<li><a href="#" class="fnt_000"><?php if(strlen($item['content']) > 80){echo mb_substr($item['content'],0,20,'utf8').'...';}else{echo $item['content'];}?></a><span>(<?php echo $item['date']; ?>)</span></a></li>
				<?php endforeach;?>
				<?php endif; ?>

					
				</ul>
			</div>
		</div><!--end content-->
		<div class="footer">
			<p>
				<a href="">设为首页</a>
				<a href="">加入收藏夹</a>
				<a href="">网站地图</a>
			</p>
			<p>
				<span>版权所有©移民与族群研究中心</span>
				<span>电话：（86）20-84114831</span>
				<span>传真：（86）20-84112122</span>
			</p>
			<p>
				<span>电子邮箱：hshac@mail.sysu.edu.cn</span>
				<span>地址：广州市海珠区新港西路135号中山大学东北区317栋 （邮编：510275 ）</span>
			</p>
		</div><!--end footer-->
	</div>


</body>
</html>