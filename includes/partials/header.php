<!DOCTYPE html>
<html lang = "en">
    <head>
        <title><?= $locals['pageTitle']?> </title>
        <meta charset ="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light top">
  <a class="navbar-brand" href="#">IAMTA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href='<?=APP_BASE_URL?>/'>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=APP_BASE_URL?>/awards'>Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='<?=APP_BASE_URL?>/events'>Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Irisih Applied Mathematics Teachers' Association
    </span>
  </div>
</nav>