<section class="hero is-padding is-primary is-bold">
    <div class="hero-body font-white">
        <div class="container">
            <div class="level">
                <div class="level-item has-text-centered">
                    <h1 class="title">
                        Kami Siap Membantu
                    </h1>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <div class="control">
                        <input class="input" type="text" placeholder="Cari yang anda butuhkan">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-top-20">
    <div class="container">


        <div class="row">
            <div class="col-md-3 ">
                <div class="border padding-20">
                    <p class="title is-6">Navigasi</p>
                    <ul>
                        <li><a href="" class="media is-small">Cara Menggunakan</a></li>
                        <li><a href="" class="media is-small">Upload VR</a></li>
                    </ul>

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
                                            <h6 class="is-6">
                                                <?php echo $r['title']; ?>
                                            </h6>
                                            <p>
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