<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <link rel="stylesheet" href="../stylesheets/sh.min.css" media="screen" title="main css" charset="utf-8">
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../stylesheets/main.css" media="screen" title="main css" charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <style media="screen">
    #barra{
      height: 50px !important;
    }
  </style>
  <title>Pruebas</title>
</head>
<body>
  <header class="container-fluid">
    <div class="jumbotron col-lg-12 col-md-12 col-sm-12 margin-bottom-0">
        <h1 class="center">Willy Web Design</h1>
        <h2 class="center">Soluciones de marketing a tu medida.</h2>
    </div>
  </header>
  <article class="">
    <!-- section#nav-section -->
      <?php include '../view/_navBar.php'; ?>
    <!-- section#ofrezco.container.col-xx-12-categoria-principal -->
      <?php include '../view/_ofrezco.php'; ?>
    <!-- section#trabajos.container.col-xx-12-categoria-principal -->
      <?php include '../view/_trabajos.php'; ?>
    <!-- section#trabajos.container.col-xx-12-categoria-principal -->
      <?php include '../view/_tecnologias.php'; ?>
  </article>
</body>
</html>
