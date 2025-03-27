<?php $base_url = Flight::get('flight.base_url'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $base_url ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo $base_url ?>/assets/css/shop-homepage.css" rel="stylesheet">

  <!-- Another custom styles for this template -->
  <link href="<?php echo $base_url ?>/assets/css/home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <header>
    <?php include('inc/header.php') ?>
  </header>

  <section>
    <?php $data['page'] . '.php' ?>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <?php include('inc/footer.php') ?>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo $base_url ?>/jquery/jquery.min.js"></script>
  <script src="<?php echo $base_url ?>/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
     
</html>
