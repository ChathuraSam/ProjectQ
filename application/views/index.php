<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Project Q</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>css/vendor/scrolling-nav.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>css/vendor/froala_blocks.css" rel="stylesheet">
<!--   <link href="<?php echo base_url(); ?>css/vendor/froala_blocks.min.css" rel="stylesheet"> -->

</head>

<body id="page-top">

  <?php include 'navbar.php'?>

  <header class="bg-primary text-white" style="background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);">
    <div class="container text-center">
      <h1>Welcome to Project Q</h1>
      <p class="lead">A 3D model search tool. Where you can sell and buy models for your game or projects</p>
    </div>
  </header>

  <section class="fdb-block" id="about">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h1>Buy and sell 3D designs you want</h1>
        <p class="h2"><em>We have 1000+ 3D models.</em></p>
      </div>
    </div>

    <div class="row text-center pt-3 pt-xl-5">
      <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6">
        <img alt="image" height="300" src="<?php echo base_url(); ?>img/main-page/tenis.svg">
        <p class="lead pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
      </div>

      <div class="col-12 col-sm-10 m-auto m-md-0 col-md-6 pt-5 pt-md-0">
        <img alt="image" height="300" src="<?php echo base_url(); ?>img/main-page/basketball.svg">
        <p class="lead pt-3">Right at the coast of the Semantics, a large language ocean. A small river named Duden.</p>
      </div>
    </div>
  </div>
</section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
          <?php include 'contact.php'?>
        </div>
    </div>
  </section>

  <?php include 'blocks.php'?>

  <?php include 'footer.php'?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>js/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url(); ?>js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="<?php echo base_url(); ?>js/vendor/scrolling-nav.js"></script>

</body>

</html>
