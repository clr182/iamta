<!DOCTYPE html>
<html lang = "en">
    <head>
        <title><?= $locals['pageTitle']?> </title>
        <meta charset ="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

<body>


<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href='<?=APP_BASE_URL?>/'>IAMTA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href='<?=APP_BASE_URL?>/'>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=APP_BASE_URL?>/awards'>Awards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=APP_BASE_URL?>/events'>Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=APP_BASE_URL?>/membership'>Membership</a>
      </li>

      <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Personal asset loans</a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
        <li><a href="#">asds</a></li>
        <li class="divider"></li>
      </ul>
    </div>   
    </li>
    <li>Payday loans</li>

    </ul>
    <span class="navbar-text">
      Irisih Applied Mathematics Teachers' Association
    </span>
  </div>
</nav>
  <!-- NAV END -->





  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href='<?=APP_BASE_URL?>/'>
    <img src="./assets/images/logo_med.png" class="animated bounce infinite" id="animated-img1" width="40" height="40" alt="Transparent MDB Logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  href='<?=APP_BASE_URL?>/'>Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href='<?=APP_BASE_URL?>/membership'>Membership</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Awards
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/vgawards'>Teacher Awards</a>
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/studentawards'>Student Awards</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/juniorcomp'>Junior Problem Solving Competition</a>
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/seniorcomp'>Senior Applied Maths Quiz</a>
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/annualconference'>Annual Conference</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/contactinfo'>Contact information</a>
          <a class="dropdown-item" href='<?=APP_BASE_URL?>/committee'>Committee members</a>
        </div>
      </li>
    </ul>
    
  </div>
  <span class="navbar-text">
      Irish Applied Mathematics Teachers' Association
    </span>
</nav>
















<section class = "">
<div class= "container-fluid">
<div class="row justify-content-center ">
<h1><?= $locals['pageTitle']?></h1>
</div>
</div>
</section>



  <section class ="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <?= \Rapid\Renderer::VIEW_PLACEHOLDER ?>
        </div>
      </div>
    </div>
  </section>
  
  
  

  </body>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 bottom">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 ">© 2020 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>