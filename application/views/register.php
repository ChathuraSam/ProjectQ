<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sign Up - Project Q</title>

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



  <section class="fdb-block">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-7 col-md-5 text-center">
          <div class="fdb-box fdb-touch">
            <div class="row">
              <div class="col">
                <h1>Sign Up</h1>
              </div>
            </div>
            <form action="<?php echo base_url('auth/post_register') ?>" method="post" accept-charset="utf-8">
             <div class="row">
              <div class="col mt-4">
                <input type="text" class="form-control" name="first_name" placeholder="first name">
                <?php echo form_error('first_name'); ?> 
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control"  name="last_name" placeholder="last name">
                <?php echo form_error('last_name'); ?>  
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control mb-1" name="contact_no" placeholder="contact number" maxlength="10">
                <?php echo form_error('contact_no'); ?> 
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control mb-1"  name="email" placeholder="email">
                <?php echo form_error('email'); ?> 
              </div>
            </div>
             <div class="row mt-4">
              <div class="col">
                <input type="password" class="form-control mb-1" name="password" placeholder="Password">
                <?php echo form_error('password'); ?> 
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="password" class="form-control mb-1" placeholder="Re Type Password">
                <p class="text-right"><a href="https://www.froala.com">Already have an account?</a></p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button class="btn btn-primary" type="Submit">Submit</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</section>

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
