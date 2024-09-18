<!DOCTYPE html>
<html lang="en">
<head>
  <!-- icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- icon bootstrap -->

  <title>Aesthetic Alley</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <!-- my css code -->
  <link rel="stylesheet" href="./css.css">

  <!-- fonts -->
  <link href="https://fonts.cdnfonts.com/css/agencyfb-black-comp" rel="stylesheet">

  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <style>
    .shopping-icon {
      font-size: 22px; /* Set the size of the icon */
      color: white;    /* Set the color of the icon */
    }
  </style>
</head>

<body cz-shortcut-listen="true">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./images/Logo.png" width="180" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link mr-2 active" href="index.php">Home |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2 " href="shop.html">Shop |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="about.html">About |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="#">Help |</a>
          </li>
          <li>
            <a href="cart.html"><i class="bi bi-bag-heart shopping-icon"> </i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main role="main">
    <section class="jumbotron text-center" style="background-image: url('./images/bg1.png'); background-size: cover;">
      <div class="container">
        <h1 class="bgH">Let's Buy Masterpiece !</h1>
        <p>
          Welcome to our platform, where creativity meets commerce! Explore a world of captivating artwork crafted by
          talented artists from around the globe. From vibrant paintings to stunning sculptures, find the perfect piece
          to adorn your space or inspire your soul.Start your Journey into art Today!
        </p>
        <br>
        <br>
        <div class="d-flex justify-content-center">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <h1 class="text-center">Featured Categories</h1><br>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="./images/cement.jpg" class="bd-placeholder-img card-img-top" width="100%" height="230"
                aria-label="Placeholder: Thumbnail">
              <div class="card-body">
                <h4 class="card-text" style="text-align: center;">
                  Cement Art
                </h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="./images/wood.jpg" class="bd-placeholder-img card-img-top" width="100%" height="230"
                aria-label="Placeholder: Thumbnail">
              <div class="card-body">
                <h4 class="card-text" style="text-align: center;">
                  Wood Cut
                </h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="./images/sketch 2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="230"
                aria-label="Placeholder: Thumbnail">
              <div class="card-body">
                <h4 class="card-text" style="text-align: center;">
                  Sketching
                </h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="./images/Featured.jpg" class="bd-placeholder-img card-img-top" width="100%" height="230"
                aria-label="Placeholder: Thumbnail">
              <div class="card-body">
                <h4 class="card-text" style="text-align: center;">
                  Featured
                </h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="./images/doodle.jpg" class="bd-placeholder-img card-img-top" width="100%" height="230"
                aria-label="Placeholder: Thumbnail">
              <div class="card-body">
                <h4 class="card-text" style="text-align: center;">
                  Doodle Art
                </h4>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="./images/pencil.jpg" class="bd-placeholder-img card-img-top" width="100%" height="230"
                aria-label="Placeholder: Thumbnail">
              <div class="card-body">
                <h4 class="card-text" style="text-align: center;">
                  Pencil Art
                </h4>
              </div>
            </div>
          </div>
        </div>

        <div class="center-container">
          <a href="./shop.html">
            <button type="button" class="btn btn-primary" id="homebtn">Shop Now</button>
          </a>
        </div>
        

      </div>
    </div>
  </main>

  <footer class="my-2 pt-0 text-muted text-center text-small">
    <p class="mb-1">© 2024</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</body>
</html>
