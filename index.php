<?php 
  include_once 'includes/header.inc.php';
 ?>

<br>
<h1 class="text-center display-1 brand">WineShop.com</h1>
<p class=" text-center lead brand">The world's finest wine makers.</p>
<br>
<div class="row">
  <div class="col-sm-8">
    <div class="jumbotron-index container-fluid">
    <p>
  Welcome to the world of the country's finest wine makers! Explore our exquisite range of wines and delicacies throughout this website. Grab your favorite wine now! Stocks depleting rapidly!Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-8">
      <div class="jumbotron-index2 container-fluid">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
  </div>
  </div>
</div>

<div class="container">
        <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/img2.jpg" alt="Card image cap" style="height: 232.18px;">
            <div class="card-body">
              <h5 class="card-title">Our Farms</h5>
              <p class="card-text card-data">The WineShop farms grow the finest grapes and use the latest vineyard equipments that help in an optimal yield and exquisite quality of wine.</p><br>
              <a href="products.php" class="btn btn-primary">Learn More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/img4.jpg" alt="Card image cap" style="height: 232.18px;">
            <div class="card-body">
              <h5 class="card-title">Our Factories</h5>
              <p class="card-text card-data">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <a href="products.php" class="btn btn-primary">Learn More</a>
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/background.jpg" alt="Card image cap" style="height: 232.18px;">
            <div class="card-body">
              <h5 class="card-title">Our Products</h5>
              <p class="card-text card-data">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br><br>
              <a href="products.php" class="btn btn-primary">Learn More</a>
            </div>
        </div>
      </div>
    </div>
<hr>
    <h2 class="text-center display-4 brand">Our Wine Types...</h2>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="images/prod8.jpg" alt="First slide" style="width: 909px; height: 600px;">
        <div class="carousel-caption d-none d-md-block">
        <h5>Wine One</h5>
        <p>This is the wine type one</p>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="images/prod2.jpg" alt="Second slide" style="width: 100%;">
        <div class="carousel-caption d-none d-md-block">
        <h5>Wine Two</h5>
        <p>This is the wine type Two</p>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="images/prod4.jpg" alt="Third slide" style="width: 100%;">
        <div class="carousel-caption d-none d-md-block">
        <h5>Wine Three</h5>
        <p>This is the wine type Three</p>
        </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        </div>
        <hr>
        <br>
    </div>
<script type="text/javascript">
  $('.carousel').carousel({
    interval: false;
}); 
</script>

</div>



<?php 
  include_once 'includes/footer.inc.php'
 ?>