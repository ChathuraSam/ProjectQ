<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home - Project Q</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/vendor/scrolling-nav.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="../css/vendor/froala_blocks.css" rel="stylesheet">
  <link href="../css/vendor/froala_blocks.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include 'navbar.php'?>

  <div class="container pt-5 mt-5">
  	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>

    </tr>
  </thead>
  <tbody>
  	<?php

	  	foreach ($userData as $key => $value) {
	  		echo "
			<tr>
		      <th scope='row'>".$value->id."</th>
		      <td>".$value->name."</td>
		      <td>".$value->email."</td>
	    	</tr>
	  		";
  		}
  	?>
  </tbody>
</table>
  </div>

  <?php include 'footer.php'?>

  <!-- Bootstrap core JavaScript -->
  <script src="../js/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../js/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="../js/vendor/scrolling-nav.js"></script>

</body>

</html>
