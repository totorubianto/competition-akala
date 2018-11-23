
<div class="container">
        <section class="padding-top-20">
            <div class="row">
                <div class="col-md-12 is-full">
                    <iframe 
                    frameborder="0"
                    width="100%"
                    scrolling="no"
                    allowfullscreen    
                    src="<?php echo BASE ?>/vrview/index.html?image=../assets/images/<?php echo $result['VR_image'] ?>"></iframe>
                </div>
            </div>      
        </section>
        
        <div class="row">
            <div class="col-md-8">
                <div class="media"> 
                    <figure class="image is-64x64 media-left">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                    <div class="media-content">
                        <strong>Taj Mahal</strong><br>
                        <p>Toto Rubianto</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                120 view
            </div>
            <div class="col-md-1">
                120 like
            </div>
            <div class="col-md-2">
                <a class="button is-success">Add Collection</a>
            </div>
        </div>  
        <hr>
        
        <div class="row">
            <div class="col-md-8">
                <h6 class="title is-6">Deskripsi</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error odio amet nihil deserunt. Itaque similique libero omnis obcaecati. Error laboriosam porro neque rerum alias numquam aliquam, aut mollitia. Adipisci nemo vero quibusdam.</p>
            </div>
            <div class="col-md-4">
                <div class="box" style="padding:6px;">
                    <span class="tag is-primary is-medium">vr</span>
                    <span class="tag is-primary is-medium">360</span>
                    <span class="tag is-primary is-medium">taj-mahal</span>
                </div>
            </div>
        </div>
		<div id="disqus_thread"></div>
    </div>

<!-- <section>
	<div style="background-image: url('<?php echo BASE . '/assets/' . $result['gambar'] ?>');background-size: cover;height: 300px;">
	</div>
	<div class="container">
		<div class="bungkus margintop50px">
			<div class="gridku-md-8 card pading20px">
				<div class="judul1"><?php echo $result['title']; ?></div>
				
				<div class="deskripsi1"><?php echo $result['description']; ?></div>
			</div>
		</div>
	</div>
</section> -->
<div id="disqus_thread">
<script id="dsq-count-scr" src="//akala.disqus.com/count.js" async></script>