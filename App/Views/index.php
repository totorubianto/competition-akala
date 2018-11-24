<section class="hero is-padding background">
    <div class="hero-body font-white">
        <div class="container">
            <h1 class="title">
                Akala
            </h1>
            <h2 class="subtitle">
                Next generation of learning
            </h2>
            <p>
                Education is the most powerful
            </p>
            <p>
                weapon which you can use to change the world
            </p>
            <div class="buttons" style="padding-top:20px;">
                <a href="" class="button is-primary">Daftar</a>
                <a href="" class="button is-primary is-inverted is-outlined">Pelajari</a>
            </div>
        </div>
    </div>
</section>

<section class="padding-top-20">
    <div class="container">
        <nav class="breadcrumb is-small-medium padding-top-10 " aria-label="breadcrumbs">
            <ul>
                <li><a href="#" class="breadcumb-color">Akala</a></li>
                <li class="is-active"><a href="#">Home</a></li>
            </ul>
        </nav>

        <p class="title is-4 padding-top-20">Akala</p>
        <p class="subtitle is-6">Next generation of learning</p>

        <div class="row">
            <div class="col-md-3 ">
                <div class="border padding-20">
                    <p class="title is-6">Kategori</p>
                    <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="email" placeholder="Search">
                            <span class="icon is-small is-left">
                                <i class="fa fa-search "></i>
                            </span>
                        </div>
                    </div>

                    <p>Pilih Kategori</p>

                    <div class="padding-top-5">
                        <input type="checkbox"> <span class="subtitle is-7">Sejarah</span><br>
                    </div>
                    <div class="padding-top-5">
                        <input type="checkbox"> <span class="subtitle is-7">Antariksa</span><br>
                    </div>
                    <div class="padding-top-5">
                        <input type="checkbox"> <span class="subtitle is-7">Biologi</span><br>
                    </div>
                    <div class="padding-top-5">
                        <input type="checkbox"> <span class="subtitle is-7">Matematika</span><br>
                    </div>

                    <div class="margin-top-10">
                        <a class="button is-primary is-fullwidth">Cari</a>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($result as $key => $r) {?>
                    <div class="col-md-4 padding-bottom-20">
                        <a href="<?php echo BASE . '/index/detail/' . $r['id']?>">
                            <span>
                                <div class="card ">
                                    <div class="card-image">

                                        <figure class="image is-4by3">
                                            <img src="<?php echo BASE ?>/assets/images/<?php echo $r['preview']?>" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="content">
                                            <div class="row content is-small">
                                                <div class="col-sm-5" style="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    120 view
                                                </div>
                                                <div class="col-sm-5" style="">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    120 like
                                                </div>
                                            </div>
                                            <h6 class="is-6">
                                                <?php echo $r['title']; ?>
                                            </h6>
                                            <p class="content is-small">
                                                <?php
                                                $num_char = 80;
                                                $text = $r['description'];
                                                echo substr($text, 0, $num_char) . '...';
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <nav class="pagination" role="navigation" aria-label="pagination">
                    <a class="pagination-previous">Previous</a>
                    <a class="pagination-next">Next page</a>
                    <ul class="pagination-list">
                        <li>
                            <a class="pagination-link is-current" aria-label="Goto page 1">1</a>
                        </li>
                        <li>
                            <a class="pagination-link" aria-label="Goto page 45">2</a>
                        </li>
                        <li>
                            <a class="pagination-link" aria-label="Goto page 45">3</a>
                        </li>
                        <li>
                            <a class="pagination-link" aria-label="Goto page 45">4</a>
                        </li>
                        <li>
                            <span class="pagination-ellipsis">&hellip;</span>
                        </li>
                        <li>
                            <a class="pagination-link" aria-label="Goto page 86">8</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

</section>



<!-- <img width="100%" src="<?php echo BASE . '/assets/' . $r['preview']?>"> -->

<!-- <p><?php echo $r['preview']; ?></p>
     <p><?php echo $r['VR_image']; ?></p> -->