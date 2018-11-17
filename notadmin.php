<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <span class="navbar-brand" href="#">User</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item px-4 active">
          <a class="nav-link" href="home.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="restaurant.php">Restaurant&Coffee</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="event.php">Events</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="search.php">Search</a>
        </li>
        <li class="nav-item px-4">
          <a class="nav-link" href="actions/logout.php?logout">Sign Out</a>
        </li>
      </ul>
    </div>
  </div> 
</nav>
<header >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/concert.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Best Locations</h3>
          <p class="lead">No idea where to go?</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/concert2.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Best Experiences</h3>
          <p class="lead">Did you miss it?</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/travel1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Tips and Guides</h3>
          <p class="lead">Travel with me!</p>
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
</header>
<div class="jumbotron">
  <h1 class="display-4">Welcome!</h1>
  <p class="lead">This is a travel blog, where you can check my last trips, and be up to date with the next ones!</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="search.php" role="button">Search for more</a>
  </p>
</div>