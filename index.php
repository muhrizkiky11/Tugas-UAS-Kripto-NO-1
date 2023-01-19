<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Welcome to My Website</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" href="index.php">Home</a>
    </li>
  </ul>
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <div class="card" style="width:350px">
  <img class="card-img-top" src="Rizky.PNG" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Muhammad Rizky</h4>
	<p class="card-text">NPM : 1955201082.</p>
	<p class="card-text">Teknik Informatika.</p>
    <p class="card-text">Universitas Muhammadiyah.</p>
    <a href="profil.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-sm-8">
     <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Mcd1.PNG" alt="Oreo" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Mcd2.PNG" alt="Oreo" class="d-block w-100">
    </div>
  </div>
  
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
    </div>
  </div>
</div>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8">
      <h2>Description</h2>
      <h5>Mcd</h5>
      <p>Mcd adalah perusahaan makanan cepat saji Amerika, yang didirikan pada tahun 1940 sebagai restoran yang dioperasikan oleh Richard dan Maurice McDonald, di San Bernardino, California, Amerika Serikat.</p>
	  <p><h5>Diperkenalkan :</h5> pada tahun 1953 di sebuah lokasi di Phoenix, Arizona
	  <h5>Produsen :</h5> Mondelez International; Nabisco; Cadbury; Continental Biscuits Limited
	  <h5>Diluncurkan :</h5> 6 Maret 1912; 110 tahun lalu
	  <h5>Jenis produk :</h5> Makanan Cepat Saji
	  <h5>Perusahaan induk :</h5> Nabisco, Mondelēz International
</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="index.php">1</a></li>

</ul>
  <p>2023</p>
</div>
 <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p></p>";
    }
    
    ?>
</body>
</html>
