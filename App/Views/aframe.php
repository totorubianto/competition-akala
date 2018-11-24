<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- <title>360&deg; Image Gallery</title> -->
    <meta name="description" content="360&deg; Image Gallery - A-Frame">
    <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
    <script src="https://npmcdn.com/aframe-animation-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-event-set-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-layout-component@3.0.1"></script>
    <script src="https://npmcdn.com/aframe-template-component@3.1.1"></script>
    <script src="<?php echo BASE?>/assets/components/set-image.js"></script>
    <style>
        a-scene {
            height: 500px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <section class="padding-top-40">
            <div class="row">
                <div class="col-md-12 is-full">
                    <div class="myEmbeddedScene">
                        <a-scene embedded>
                            <a-assets>
                                <img id="merkurius" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/mercury.png">
                                <img id="merkurius-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/merkurius-thumb.png">
                                <img id="venus" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/venus.png">
                                <img id="venus-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/venus-thumb.png">
                                <img id="bumi" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/bumi.png">
                                <img id="bumi-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/bumi-thumb.png">
                                <img id="mars" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/mars.png">
                                <img id="mars-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/mars-thumb.png">
                                <img id="jupiter" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/jupiter.png">
                                <img id="jupiter-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/jupiter-thumb.png">
                                <img id="saturnus" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/saturnus.png">
                                <img id="saturnus-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/saturnus-thumb.png">
                                <img id="uranus" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/uranus.png">
                                <img id="uranus-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/uranus-thumb.png">
                                <img id="neptunus" crossorigin="anonymous" src="<?php echo BASE?>/assets/images/neptunus.png">
                                <img id="neptunus-thumb" crossorigin="anonymous" src="<?php echo BASE ?>/assets/images/thumbnail/neptunus-thumb.png">

                                <audio id="click-sound" crossorigin="anonymous" src="<?php echo BASE ?>360-image-gallery-boilerplate/audio/click.ogg"></audio>
                                <!-- Image link template to be reused. -->
                                <script id="link" type="text/html">
                                    <a-entity class="link"
                    geometry="primitive: plane; height: 1; width: 1"
                    material="shader: flat; src: ${thumb}"
                    event-set__1="_event: mousedown; scale: 1 1 1"
                    event-set__2="_event: mouseup; scale: 1.2 1.2 1"
                    event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
                    event-set__4="_event: mouseleave; scale: 1 1 1"
                    set-image="on: click; target: #image-360; src: ${src}"
                    sound="on: click; src: #click-sound"></a-entity>
                </script>
                            </a-assets>

                            <!-- 360-degree image. -->
                            <a-sky id="image-360" radius="10" src="#merkurius"></a-sky>

                            <!-- Image links. -->
                            <a-entity id="links" layout="type: line; margin: 1.5" position="-4 1 -3">
                                <a-entity template="src: #link" data-src="#merkurius" data-thumb="#merkurius-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#venus" data-thumb="#venus-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#bumi" data-thumb="#bumi-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#mars" data-thumb="#mars-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#jupiter" data-thumb="#jupiter-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#saturnus" data-thumb="#saturnus-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#uranus" data-thumb="#uranus-thumb"></a-entity>
                                <a-entity template="src: #link" data-src="#neptunus" data-thumb="#neptunus-thumb"></a-entity>
                            </a-entity>
                            <!-- Camera + cursor. -->
                            <a-entity camera look-controls>
                                <a-cursor id="cursor" animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
                                    animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
                                    event-set__1="_event: mouseenter; color: springgreen" event-set__2="_event: mouseleave; color: black"
                                    fuse="true" raycaster="objects: .link"></a-cursor>
                            </a-entity>
                        </a-scene>
                    </div>
                </div>
            </div>
        </section>



        <div class="row padding-top-30">
            <div class="col-md-7">
                <div class="media">
                    <figure class="image is-64x64 media-left">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>
                    <div class="media-content">
                        <strong>Tata Surya</strong><br>
                        <p>Toto Rubianto</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-3" style="padding:10px;">
                <i class="fa fa-eye" aria-hidden="true"></i>
                900 view
            </div>
            <div class="col-xs-3" style="padding:10px;">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                689 like
            </div>
            <div class="col-md-1 col-sm-1">
                <a class="button is-primary" href="<?php echo BASE?>/index/teka">Quiz</a>
            </div>
            <div class="col-md-1 col-sm-1">
                <a class="button is-primary">Add Collection</a>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-8">
                <h6 class="title is-6">Deskripsi</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error odio amet nihil deserunt. Itaque
                    similique libero omnis obcaecati. Error laboriosam porro neque rerum alias numquam aliquam, aut
                    mollitia. Adipisci nemo vero quibusdam.</p>
            </div>
            <div class="col-md-4">
                <div class="box" style="padding:6px;">
                    <span class="tag is-success is-medium">vr</span>
                    <span class="tag is-info is-medium">360</span>
                    <span class="tag is-warning is-medium">taj-mahal</span>
                </div>
            </div>
        </div>
        <div id="disqus_thread"></div>
    </div>
</body>

</html>