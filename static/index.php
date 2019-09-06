<?php include 'header.php'; ?>
   
 
  <div id="slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li> 
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"> 
    <img src="assets/img/slide1.jpg" alt="Dr Planter">
    </div>
    <div class="carousel-item"> 
     <img src="assets/img/slide1.jpg" alt="Dr Planter">
    </div> 
  </div>
  <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <section id="content-main">
    <div id="home-content-drplanter">
      <div class="row">
        <div class="col-sm-4">
          <h2>Learn Something New</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime sed obcaecati voluptate incidunt amet maiores quasi assumenda veritatis mollitia praesentium.</p>
          <a href="#" class="btn btn-primary">Ask the Dr!</a>
        </div>
        <div class="col-sm-8">
          <img src="assets/img/h1.jpg" alt="Learn Something New" class="img-fluid">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <img src="assets/img/h2.jpg" alt="Services" class="img-fluid">
        </div>
        <div class="col-sm-4">
          <h2>What we do for your space...</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime sed obcaecati voluptate incidunt amet maiores quasi assumenda veritatis mollitia praesentium.</p>
          <a href="#" class="btn btn-primary">Services</a>
        </div> 
      </div>
    </div>

    <div id="current_favs" class="prod-list">
      <h2 class="block_title">Current Favorites</h2>
      <ul class="row">
        <li class="col-sm-4">
          <a href="#"><img class="img-fluid" src="assets/img/p1.jpg" alt=""></a>
          <h4><a href="#">Product Name</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <a href="#" class="btn btn-primary">Shop all</a>
        </li>
        <li class="col-sm-4">
          <a href="#"><img class="img-fluid" src="assets/img/p2.jpg" alt=""></a>
          <h4><a href="#">Product Name</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <a href="#" class="btn btn-primary">Shop all</a>
        </li>
        <li class="col-sm-4">
          <a href="#"><img class="img-fluid" src="assets/img/p3.jpg" alt=""></a>
          <h4><a href="#">Product Name</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <a href="#" class="btn btn-primary">Shop all</a>
        </li>
      </ul>
    </div>
</div> 
</section> 

<?php include 'footer.php' ?>

