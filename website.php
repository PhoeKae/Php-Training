<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiloCafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-info sticky-top">
  <div class="container-fluid" id="navContainer">
      <a class="navbar-brand" href="#"><span class="h2 navtitle"><i class="fa-solid fa-mug-saucer px-3"></i>FILO CAFE</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item px-3">
                  <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
                </li>
        
                <li class="nav-item px-3">
                  <a class="nav-link" href="#" id="menu"><strong>Menu</strong></a>
                </li>
        
                <li class="nav-item px-3">
                  <a class="nav-link" href="#"><strong>About</strong></a>
                </li>
        
                <li class="nav-item px-3">
                  <a class="nav-link" href="#"><strong>Contact</strong></a>
                </li>
              </ul>
            </div>
</div>
</nav>
<!-- Navbar End -->



<!-- Image Container -->
<div class="container-fluid" id="imgContainer">
      <div class="img-container">
        <img src="/photo/coffee body white one cup.jpg" class="img-fluid" alt="">
          <div class="img-text">
              <h1 class="text-center m-3">FILO CAFE</h1>
              <span>"Coffee is a morning hug in a mug."
                <br> <p class="h5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ipsam iusto aliquam quibusdam, voluptatem commodi enim debitis, quod illum inventore eos nihil, beatae fugiat cumque praesentium sapiente quis omnis mollitia.</p>
              </span>
          </div>
      </div>
</div>
<!-- Image Container End -->


<!-- Menu -->
<div class="container-fluid" id="menuContainer">
      <h3 class=" text-center m-5 menu">COFFEE MENU</h3>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card m-4">
                      <img src="/photo/espresso.webp" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                          <div class="card-body">
                              <a class="card-title h5" href="#">Espresso</a>
                              <p class="card-text">$12.99</p>
                          </div>
                  </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4" >
                      <img src="/photo/cappuccino.jpg" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <a class="card-title h5" href="#">Cuppucino</a>
                            <p class="card-text">$23.55</p>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4">
                      <img src="/photo/americano.webp" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <a class="card-title h5" href="#">Americano</a>                            <p class="card-text">$15</p>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4" >
                      <img src="/photo/lemontea.webp" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <a class="card-title h5" href="#">Lemon Tea</a>
                            <p class="card-text">$22</p>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4" >
                      <img src="/photo/matcha2.jpg" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <a class="card-title h5" href="#">Matcha Latte</a>
                            <p class="card-text">$23.55</p>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4" >
                      <img src="/photo/milktea3.webp" class="card-img-top img-fluid"  style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <a class="card-title h5" href="#">Milk Tea</a>
                            <p class="card-text">$17</p>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4" >
                      <img src="/photo/icetea.jpg" class="card-img-top img-fluid"  style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <a class="card-title h5" href="#">Ice Tea</a>
                            <p class="card-text">$12.99</p>
                        </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card m-4" >
                      <img src="/photo/vanilla.webp" class="card-img-top img-fluid"  style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                        <a class="card-title h5" href="#">Vanilla Latte</a>
                            <p class="card-text">$15</p>
                        </div>
                </div>
            </div>
        </div>
<!-- Menu End -->


<!-- footer -->
 <div class="container-fluid p-3 m-2 bg-secondary ">
  <h3 class="text-center text-light">OUR STORY</h3>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
           <h6 class=" m-3 text-light"><i class="fa-solid fa-location-dot px-2"></i> 21 * 73, Chan Mya Thar Si, Mandalay Township</h6>
            <h6 class=" m-3 text-light"><i class="fa-solid fa-phone px-2"></i>+959779008053</h6>
            <h6 class=" m-3 text-info"><i class="fa-solid fa-envelope text-light px-2"></i>filocafe@gmail.com</h6>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <h6 class="h5 text-light m-2">About the company</h6>
            <p class="text-center text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum delectus sint aliquid itaque at quam voluptates eum, quisquam dolores totam! Qui molestiae esse fugiat impedit voluptate in quibusdam excepturi. Dolorum!</p>
            <p class="text-center">
    </div>
 </div>

</div>
</body>
</html>


<!-- Lee pop lo -->