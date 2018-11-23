<div class="container">
	<div class="margintop50px">
		<div class="container">

			<br>
		</div>

	</div>
</div>



<section class="padding-top-20">
	<div class="container">
		<nav class="breadcrumb" aria-label="breadcrumbs">
			<ul>
				<li><a href="#">Akala</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</nav>

		<form enctype="multipart/form-data" method="post" action="<?php echo BASE; ?>/index/addvr">
			<div class="row">
				<div class="col-md-4">

					<div class="border padding-20">                        
						<p class="title is-6">Kategori</p>

						<p>Judul</p>
						<input class="input" type="text" name="title" placeholder="judul">
						<p>Preview</p>
						<input class="input" type="file" name="preview">
						<p>VR</p>
						<input class="input" type="file" name="VR_image">
						<div class="margin-top-10">
							<a class="button is-success is-fullwidth">Cari</a>
						</div>

					</div>

				</div>
				<div class="col-md-8">

					
					<textarea class="input" name="description"></textarea> 
				
					<input type="submit" name="add">

				</div>
			</div>
		</form>






	</div>
</section>