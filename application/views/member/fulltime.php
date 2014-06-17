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
			<a href="<?php echo site_url('member'); ?>">组织架构></a><a href="<?php echo site_url('member/fulltime'); ?>">专职研究员</a>
		</p>
		<div class="tblDiv">
			<table cellspacing="0" border="1">
				<thead>
					<tr>
						<th width="10%">序号</th>
						<th width="20%">研究方向</th>
						<th width="10%">姓名</th>
						<th width="20%">出生年月</th>
						<th width="10%">学位</th>
						<th width="10%">职称</th>
						<!-- <th width="20%">最后学位</th> -->
					</tr>
				</thead>
				<tbody>
					<?php if(isset($fulltime)): $num = 1;?>
					<?php foreach($fulltime as $item):?>
					<tr>
						<td><?php echo $num++; ?></td>
						<td><?php echo $item['field']; ?></td>
						<td><?php echo $item['name']; ?></td>
						<td><?php echo $item['birth']; ?></td>
						<td><?php echo $item['degree']; ?></td>
						<td><?php echo $item['position']; ?></td>
						<!-- <td><?php echo $item['']; ?></td> -->
					</tr>
					<?php endforeach;?>
					<?php endif;?>
				</tbody>
			</table>
		</div>
		<div class="fenye">
			<form action="">
				<p>
					<span>页次：</span>
					<span id="presentPage"><?php if(isset($pagenow)):?><?php echo $pagenow;?><?php endif;?></span>
					<span>/</span>
					<span id="totalPage"><?php if(isset($pages)):?><?php echo $pages;?><?php endif;?></span>
					<!-- <span id="everyPage">每页 10</span>
					<span id="total"> 总数 </span> -->
					<a href="<?php echo site_url('member/fulltime/1');?>">首页</a>
					<a href="<?php if($pagenow == 1){echo site_url('member/fulltime/')."/".$pagenow;}else{echo site_url('member/fulltime/')."/".($pagenow-1);} ?>">上一页</a>
					<a href="<?php if($pagenow == $pages){echo site_url('member/fulltime/')."/".$pagenow;}else{echo site_url('member/fulltime/')."/".($pagenow+1);} ?>">下一页</a>
					<a href="<?php echo site_url('member/fulltime/')."/".$pages;?>">尾页</a>
					<!-- <span>转到：</span>
					<input type="text" size="3" />
					<input type="submit" value="转到" /> -->
			</form>
		</div>
	</div>


			</div>
		</div><!--end content-->