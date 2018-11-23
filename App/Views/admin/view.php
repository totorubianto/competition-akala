
	<div class="container">
		<div class="bungkus">
			<?php foreach ($result as $key => $r) {?>
				<div class="gridku-md-4 margintop50px">
					<div class="card pading20px">
						<?php echo $r['username']; ?>
						<a href="<?php echo BASE . '/admin/delete/' . $r['id']; ?>">delete</a>
					</div>				
					</div>
			<?php } ?>
		</div>
	</div>