
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <title>Akala</title>
  <link rel="stylesheet" href="<?php echo BASE ?>/assets/css/bulma.css">
  <link rel="stylesheet" href="<?php echo BASE ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo BASE ?>/assets/css/bootstrap-grid.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>
<body >
  <div class="border-bottom padding-bottom-4">
    <div class="container">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="">
            <img src="<?php echo BASE ?>/assets/img/logo.svg" width="112" height="28">
          </a>

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">               
          <div class="navbar-start">
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control width-search height48 has-icons-left"> 
                  <input class="input border-rounded height48 width-search" type="text" placeholder="Search Photo or Video 360">
                  <span class="icon is-small is-left">
                    <i class="fa fa-search"></i>
                  </span>
                </p>

              </div>

            </div>

          </div>

          <div class="navbar-end">



            <?php 
            if (!empty($_SESSION['masuk'])) {
             $toto1= BASE;
             echo "
             <div class='navbar-item'>
             <a class='button is-none'>
             Collection
             </a>
             </div>
             <div class='navbar-item'>
             <a href='$toto1/index/add' class='button'>
             Upload VR
             </a>
             </div>
             ";
           }
           if (empty($_SESSION['masuk']))
           {

            echo
            "
            <div class='navbar-item'>
            <div class='buttons'>                                        
            <div class='field is-grouped'>
            <button class='toggle-modal button is-light'>Masuk</button>


            <div>
            <a class='button is-primary'>
            Daftar
            </a>
            </div>                            
            </div>
            </div>

            ";



          }
          else
          { 
            $toto= BASE;

            echo "
            <div class='navbar-item has-dropdown is-hoverable'>
            <div class='navbar-link'>
            <img class='bulat' src='$toto/assets/img/orang.png' />
            </div> 
            <div class='navbar-dropdown  is-right is-boxed'>
            <a class='navbar-item' href='job_deskripsi.php'>
            Profile
            </a>
            <a class='navbar-item' href='#'>
            Message
            </a>
            <a class='navbar-item' href='#'>
            Bantuan
            </a>
            <hr class='navbar-divider'>
            <a class='navbar-item' href='#'>
            Peraturan
            </a>
            <a class='navbar-item is-active' href='$toto/index/logout'>
            Logout
            </a>
            </div>
            </div>
            ";
          }
 ?>
        </div>
      </div>
    </nav>    
  </div>
</div>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<footer>
  <div class="padding-top-bottom-60 margin-top-120 black-grey">
    <div class="container">

      <div class="row">
        <div class="col-md-3">
          <img width="150" src="<?php echo BASE ?>/assets/img/logo.svg" alt="">
        </div>
        <div class="col-md-3">
          <p class="judul-footer">Apa itu Akala?</p>
          <p class="item-footer margin-top-10">Akala merupakan website pembelajaran yang menggunakan teknologi VR (Virtual Reality)
          </p>
        </div>
        <div class="col-md-3">
          <p class="judul-footer">Apa itu Akala?</p>
          <div class=" margin-top-10">
            <a class="item-footer" href="">sebuahstudio.com</a><br>
            <a class="item-footer" href="">omnicreativora.com</a><br>
            <a class="item-footer" href="">kitapintar.com</a>
          </div>

        </div>
        <div class="col-md-3">
          <p class="judul-footer">Sosmed Kami</p>
          <div class="margin-top-10">
            <a class="sosmed">
              <span class="icon">
                <i class="fa fa-facebook"></i>
              </span>
            </a>
            <a class="sosmed">
              <span class="icon ">
                <i class="fa fa-google"></i>
              </span>
            </a>
            <a class="sosmed">
              <span class="icon ">
                <i class="fa fa-dribbble"></i>
              </span>
            </a>
            <a class="sosmed">
              <span class="icon ">
                <i class="fa fa-behance"></i>
              </span>
            </a>
            <a class="sosmed">
              <span class="icon ">
                <i class="fa fa-github"></i>
              </span>
            </a>
          </div>
        </div>
      </div>


    </div>
  </div>
  <div class="black padding-20">
    <div class="width100 has-text-centered font-white">© Copyright Simalakama 2018</div>
  </div>
</footer>



<div class="modal">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Masuk</p>
      <button class="delete toggle-modal" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <div class="white">

       <form method="post" action="<?php echo BASE; ?>/index/login">
        <div class="field">
         <p class="control has-icons-left has-icons-right">
          <input class="input" name="email" type="" placeholder="Email">
          <span class="icon is-small is-left">
           <i class="fa fa-envelope"></i>
         </span>
         <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control has-icons-left">
       <input class="input" name="password" type="password" placeholder="Password">
       <span class="icon is-small is-left">
        <i class="fa fa-lock"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control">
     <button class="button is-success">
      Login
    </button>
  </p>
</div>
</form>
</div>
</section>

</div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script>
<script  src='<?php echo BASE ?>/assets/js/jquery.js'></script>
<script  src='<?php echo BASE ?>/assets/js/teka.js'></script>
<script src='<?php echo BASE ?>/assets/js/navbar.js'></script>
<script src='<?php echo BASE ?>/assets/js/login.js'></script>
<script src='<?php echo BASE ?>/assets/js/disqus.js'></script>
<script src='<?php echo BASE ?>/assets/js/vue.modal.js'></script>

</body>
</html>

