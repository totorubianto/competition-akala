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
						<div class="file has-name is-fullwidth">
							<label class="file-label">
								<input class="file-input" type="file" name="preview">
								<span class="file-cta">
									<span class="file-icon">
										<i class="fa fa-upload"></i>
									</span>
									<span class="file-label">
										Choose a file…
									</span>
								</span>
								<span class="file-name">
									Screen Shot 2017-07-29 at 15.54.25.png
								</span>
							</label>
						</div>
						
						<p>VR</p>
						<div class="file has-name is-fullwidth">
							<label class="file-label">
								<input class="file-input" type="file" name="VR_image">
								<span class="file-cta">
									<span class="file-icon">
										<i class="fa fa-upload"></i>
									</span>
									<span class="file-label">
										Choose a file…
									</span>
								</span>
								<span class="file-name">
									Screen Shot 2017-07-29 at 15.54.25.png
								</span>
							</label>
						</div>

						<div class="margin-top-10">
							<input class="button is-success is-fullwidth" type="submit" name="add">
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="border padding-20">  
						<div class="flex-center">
							<img width="500px" src="<?php echo BASE ?>/assets/img/Open-Account.svg">
							<h1>No Preview</h1>
						</div>
						<div class="margin-top-10">
							<p>Deskripsi</p>
							<textarea class="input" name="description"></textarea> 
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section>