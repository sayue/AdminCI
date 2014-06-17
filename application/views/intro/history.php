<div class="content">
			<div class="content_nav">
					<a href="<?php echo site_url('intro/index/1'); ?>" class="now">历史</a>
					<a href="<?php echo site_url('intro/index/2'); ?>">组织结构及人员组成</a>
					<a href="<?php echo site_url('intro/index/3'); ?>">研究内容</a>
					<a href="<?php echo site_url('intro/index/4'); ?>">研究特色</a>
					<a href="<?php echo site_url('intro/index/5'); ?>">社会影响</a>
					<a href="<?php echo site_url('intro/index/6'); ?>">社会评价</a>
			</div>
			<div class="content_main">
				<?php if(isset($intro)):?>
				<?php foreach($intro as $item):?>
				<p class="breadCrumbNav">
					<span>当前位置：</span>
					<a href="<?php echo site_url('home'); ?>">首页></a>
					<a href="<?php echo site_url('intro'); ?>">中心简介></a><a href=""><?php echo $item['kind']; ?></a>
				</p>
				<?php 
					if($item['kind'] == '研究特色'){
						$str = $item['content'];
						$first = stripos($str,'2、');
						$second = stripos($str,'3、');
						$one = substr($str,0,$first);
						$two = substr($str,$first,$second-$first);
						$three = substr($str,$second);
						echo "<div class=\"txt\" id=\"one\">".$one."</div>";
						echo "<div class=\"txt\" id=\"two\">".$two."</div>";
						echo "<div class=\"txt\" id=\"three\" style=\"display:none\">".$three."</div>";
						

					}else{
						echo "<div class=\"txt\">".$item['content']."</div>";
					}

					
				?>

				

				<?php endforeach;?>
				<?php endif;?>
				<?php if($item['kind'] == '研究特色'):?>
				<div class="fenye">
			<form action="">
				<p>
					<span>页次：</span>
					<span id="presentPage">1</span>
					<span>/</span>
					<span id="totalPage">2</span>
					<!-- <span id="everyPage">每页 10</span>
					<span id="total"> 总数 </span> -->
					<a href="" class="homepage">首页</a>
					<a href="" class="lastpage">上一页</a>
					<a href="" class="nextpage">下一页</a>
					
			</form>
		</div>	
				<?php endif;?>
			</div>
		</div><!--end content-->