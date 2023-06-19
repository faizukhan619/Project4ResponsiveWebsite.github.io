  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebsite</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CoderWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>  
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          
        </div>
      </div>
    </nav>


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img3.jpg" alt="Los Angeles" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
          <img src="images/img2.jpg" alt="Chicago" class="d-block" style="width:100%">
        </div>
        <div class="carousel-item">
          <img src="images/img4.jpg" alt="New York" class="d-block" style="width:100%">
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

    <section class="my-5" id="aboutus">
      <div class="mb-5 pt-5">
        <h2 class="text-center">About Us</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
           <img src="images/img1.jpg" class="img-fluid aboutimage">
         </div>

         <div class="col-lg-6 col-md-6 col-sm-12">
          <h2 class="display-4 pt-5">I am a Photographer</h2>
          <p class="py-3"> Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will 
          </p>
          <a href="about.php" class="btn btn-outline-success">Check More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5" id="services">
    <div class="mb-5 pt-5">
      <h2 class="text-center">Our Services</h2>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
         <div class="card">
          <img class="card-img-top" src="images/img6.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Beautiful Natures :)</h4>
            <p class="card-text">Some example text.</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
       <div class="card">
        <img class="card-img-top" src="images/img6.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Beautiful Natures :)</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
     <div class="card">
      <img class="card-img-top" src="images/img6.jpg" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Beautiful Natures :)</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
      </div>
    </div>
  </div>
</div>
</div>
</section>  

<section class="my-3" id="gallery">
  <div class="mb-5 pt-5">
     <h2 class="text-center">Our Gallery</h2>
  </div>
  
  <div class="container-fluid">
    <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>

       <div class="col-lg-4 col-md-4 col-sm-12">
           <div>
              <img src="images/img5.jpg" class="img-fluid pb-4" style="width:100% ; height: 70vh;">
           </div>
       </div>
    </div>
  </div>

  <div id="contact">
    <form action="userinfo.php" method="post">
     
      <div class="w-50 m-auto py-2" >
           <label>Username</label>
           <input type="text" class="form-control" autocomplete="off" placeholder="Enter Your Name" name="user">
      </div>

      <div class="w-50 m-auto py-2" >
           <label>Email Id</label>
           <input type="email" class="form-control" onautocomplete="off" placeholder="Enter Your Email Id" name="email">
      </div>

     <div class="w-50 m-auto py-2" >
           <label>Mobile Number</label>
           <input type="text" class="form-control" onautocomplete="off"  name="mobile">
      </div>

      <div class="w-50 m-auto py-2" >
           <label>Comments</label>
          <textarea class="form-control" name="comments"></textarea>
     <button type="submit" class="btn btn-outline-success mt-2">Submit</button>
      </div>

    </form>
  </div>

</section> 

<footer>
    <div class="p-2 bg-dark text-white">
         <p class="text-center">@PhotographerProduction</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>