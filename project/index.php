
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/Style.css">


    <?php include "./Component/Navbar.php"; ?>
   
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="myCarousel">
    <div class="carousel-item active">
      <img src="./Asset/Switches.png" class="d-block w-100" alt="#">
      <div class="carousel-caption d-none d-md-block">
        <h3 class="C-titel">Switches & Sockets</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Asset/fan.jpg" class="d-block w-100" alt="#">
      <div class="carousel-caption d-none d-md-block">
       <h3>Fans</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Asset/Accessories.jpg" class="d-block w-100" alt="#">
      <div class="carousel-caption d-none d-md-block">
        <h3>Accessories</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>


<div class="heading d-flex justify-content-center align-items-center bg-dark bg-black text-white">
 <img src="./Asset/logo.png" alt="" width="200px"> 
 <p class="paragraph"><strong>Welcome to RS Electrical! We're your one-stop shop for all your electrical appliance needs. Whether you're looking to upgrade your kitchen appliances, enhance your home entertainment system, or simply need daily essentials, we've got you covered.</strong></p>   
</div>

<div class="con bg-black">
    
    <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="./Asset/MCB.jpg" width="100%" alt="Card image cap">
  <div class="card-body bg-dark bg-black text-white text-center">
    <h3 class="card-text "><strong>MCB</strong></h3>
    <p><strong></strong>Safety ON</p>
  </div>
</div>

    </div>
    <?php include "./Component/Footer.php"; ?>


