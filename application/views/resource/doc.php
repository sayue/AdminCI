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
			<a href="<?php echo site_url('resource/doc'); ?>">文献收藏</a>
		</p>
		<div class="tblDiv">
			<table cellspacing="0" border="1">
				<tbody>
					<?php if(isset($doc)): ?>
					<?php foreach($doc as $item): ?>
					<tr>
						<th rowspan="2">单位</th>
						<th colspan="2">藏书量（册）</th>
						<th colspan="2">报刊拥有量（种）</th>
					</tr>
					<tr>
						<td>中文图书</td>
						<td>外文图书</td>
						<td>中文报刊</td>
						<td>外文报刊</td>
					</tr>
					<tr>
						<td>学校图书馆</td>
						<td><?php echo $item['lib_zh_book'];?></td>
						<td><?php echo $item['lib_en_book'];?></td>
						<td><?php echo $item['lib_zh_mag'];?></td>
						<td><?php echo $item['lib_en_mag'];?></td>
					</tr>
					<tr>
						<td>申报机构资料室</td>
						<td><?php echo $item['doc_zh_book'];?></td>
						<td><?php echo $item['doc_en_book'];?></td>
						<td><?php echo $item['doc_zh_mag'];?></td>
						<td><?php echo $item['doc_en_mag'];?></td>
					</tr>
					<?php endforeach;?>
					<?php endif;?>
				</tbody>
			</table>
		</div>
	</div>


			</div>
		</div><!--end content-->