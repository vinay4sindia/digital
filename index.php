<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
   body{margin: 0;padding: 0;}
  .navbar{background: linear-gradient( 103.51deg, #e0dddd -11.85%, #f9f9ca 47.62%, #d2ccfe 108.74% );padding: 20px 5px;}
  .header{    background: linear-gradient( 103.51deg, #3b0576 -11.85%, #d6d668 47.62%, #614fe8 108.74% );padding: 5px 10px;}
  .slide,.inquiry{padding: 0;}
  .navbar a{color: black;}
  .navbar a:hover {color: rgb(181, 8, 8);}
  .footbot_social{margin: 0 auto;overflow: hidden;display: flex;padding: 0;float: right;}
  .footbot_social li{padding-right: 10px;list-style-type: none;}
  .footbot_social li a {color: white;}
  .header span a{padding: 0 20px;color: white;font-size: 14px;text-decoration: none;border-left:2px solid white ;}
</style>
<body>
 
<div class="fixed-top">
  <div class="header row">
    <div class="col-md-6">
     <span><a href=""><i class="fa-solid fa-phone"></i> 9177********</a></span>
     <span><a href=""><i class="fa-solid fa-envelope"></i> Ma****@gmail.com</a></span>
  </div>
    <div class="col-md-6">
    <ul class="footbot_social">
      <li><a class="whatsup" href="#" data-placement="top" data-toggle="tooltip" title="whatsup"><i class="fa-brands fa-whatsapp"></i></a></li>
      <li><a class="fb" href="#" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa-brands fa-square-facebook"></i></a></li>
      <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa-brands fa-square-twitter"></i></a></li>
      <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa-brands fa-skype"></i></a></li>
      <li><a class="instagram" href="#." data-placement="top" data-toggle="tooltip" title="insta"><i class="fa-brands fa-square-instagram"></i></a></li>
    </ul>
  </div>
  </div>

<nav class="navbar navbar-expand-sm navbar-dark shadow">
  <div class="container-fluid">
    <div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon text-dark"><img src="img/menus.png" alt="" style="width: 100%"></span>
    </button>
    <a class="navbar-brand" href="">Logo</a>
  </div>
  <!-- <input type="submit" class="btn btn-primary" value="Login"> -->
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar" style="font-size: 17px;font-weight: 600;">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>

      <input type="submit" class="btn btn-primary" value="Login">

  </div>
</nav>
</div>
<!-- -------Container-content------- -->
<div class="container-fluid" style="margin-top:130px;padding:0 30px;background: linear-gradient( 103.51deg, #fff6fe -11.85%, #f9f9ca 47.62%, #d2ccfe 108.74% );">
 <div class="row">
  <div class="slide col-md-8">
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
          <img src="img/pexels-ravi-roshan-8566288.jpg" alt="Los Angeles" class="d-block" style="width: 900px;height: 390px;">
          <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>We had such a great time in LA!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/home-loan.jpg" alt="Chicago" class="d-block" style="width: 900px;height: 390px;">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="img/pexels-andrea-piacquadio-3760067.jpg" alt="New York" class="d-block" style="width: 900px;height: 390px;">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
          </div>  
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
<style>
  form h5{color: blue;}
  form{border: 1px solid black;padding: 40px 0;margin: 0 20px;background-color: whitesmoke;}
  form input,textarea{border: none;border-bottom: 1px solid black;width: 17rem;padding:8px;background-color: whitesmoke;}
</style>
  <div class="inquiry col-md-4 text-center">
    
    <form action="">
      <h5>Inquiry Form</h5>
      <input type="text" placeholder="Name"><br>
      <input type="text" placeholder="Phone"><br>
      <input type="text" placeholder="Email"><br>
      <textarea name="" id="" cols="20" rows="4" placeholder="Massage"></textarea><br>
      <input type="submit" class="btn btn-primary">
  </form>
  </div>
 </div>
<style>
  .card{box-shadow: 1px grey;}
</style>
 <div class="row m-5">
 <div class="card m-4 shadow" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title">Fast Loan Approval</h5>
    <p class="card-text">It is the fastest yet secured way to avail of a personal loan.</p>
  </div>
</div>
<div class="card m-4 shadow" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title">Easy To Apply</h5>
    <p class="card-text">Minimum documentation, and simple to apply. Processing within a minute after applying.</p>
  </div>
</div>
<div class="card m-4 shadow" style="width: 20rem;">
  <div class="card-body">
    <h5 class="card-title">Transparent</h5>
    <p class="card-text">We shared all the information with the borrower and no hidden charges.</p>
  </div>
</div>
</div>

<!-- ------------------- -->
<div class="row text-center justify-content-center">
  <div class="card rounded-circle bg-light m-4" style="width: 16rem;">
    <div class="card-body">
      <img src="img/office-worker.png" alt="" style="height:80px;">
      <h5>Personal Loan</h5>
      <p class="card-text">@ 11% - 17.5%</p>
    </div>
  </div>
  <div class="card rounded-circle bg-light m-4" style="width: 16rem;">
    <div class="card-body">
      <img src="img/deal.png" alt="" style="height:80px;">
      <h5>Business Loan</h5>
      <p class="card-text">@ 11% - 17.5%</p>
    </div>
  </div>
  <div class="card rounded-circle bg-light m-4" style="width: 16rem;">
    <div class="card-body">
      <img src="img/house.png" alt="" style="height:80px;">
      <h5>Home Loan</h5>
      <p class="card-text">@ 11% - 17.5%</p>
    </div>
  </div>
  <div class="card rounded-circle bg-light m-4" style="width: 16rem;">
    <div class="card-body">
      <img src="img/car-loan_8445951.png" alt="" style="height:80px;">
      <h5>Car Loan</h5>
      <p class="card-text">@ 11% - 17.5%</p>
    </div>
  </div>
  <div class="card rounded-circle bg-light m-4" style="width: 20rem;">
    <div class="card-body">
      <img src="img/contract_9935399.png" alt="" style="height:80px;">
      <h5>Plot Purchase Loan</h5>
      <p class="card-text">@ 11% - 17.5%</p>
    </div>
  </div>
  <div class="card rounded-circle bg-light m-4" style="width: 20rem;">
    <div class="card-body">
      <img src="img/contract_9935399.png" alt="" style="height:80px;">
      <h5>Plot Purchase Loan</h5>
      <p class="card-text">@ 11% - 17.5%</p>
    </div>
  </div>
  </div>

<br>

 <!-- --------About-Page-------- -->
 <style>
  .about h1{color: #e80a37;}
 </style>
<div class="about row">
    <div class="col-md-6">
      <img src="img/money01.jpg" alt="money" style="height: 380px;">
    </div>
    <div class="col-md-6">
      <br>
      <h1>Who Are We?</h1>
      <h5><b>Company Name</b> is an online platform which you can approach confidently whenever you find yourself without cash at any time during the month.</h5>
      <br>
      <p>It can be daunting to have no money in the household with salary date still far away. This is exactly where we come in.</p>
      <br>
      <p>This is not all. We are always there when you are in need of immediate funds, provided your repayment record is clean.</p>
    </div>
</div>
<br>
<!-------------Key-Material------------ -->
<!-- <div class="key row text-center">
  <div class="col-md-6">
    <h3>Vission</h3>
  </div>
  <div class="col-md-6">
    <h3>Mission</h3>
  </div>
</div> -->

<div class="row m-4 text-center">
  <h1 style="color: #e80a37;">Best features of our loan offerings</h1>
  <div class="card m-4 p-4 text-center shadow" style="width:240px">
    <img class="card-img-top text-center" src="img/01.svg" alt="01.svg" style="height: 100px">
    <div class="card-body">
      <h5 class="card-title">Easy To Apply</h5>
      <p class="card-text">The application procedure is easy and straightforward.
         We're simply a phone call away if you're experiencing problems applying for a loan.</p>
    </div>
  </div>
  <div class="card m-4 p-4 text-center shadow" style="width:240px">
    <img class="card-img-top text-center" src="img/speedy disbursal-01.svg" alt="Card image" style="height: 100px">
    <div class="card-body">
      <h5 class="card-title">Speedy Disbursal</h5>
      <p class="card-text">It takes a about a day to disburse the loan amount once the loan application has been approved and the formalities have been completed.</p>
    </div>
  </div>
  <div class="card m-4 p-4 text-center shadow" style="width:240px">
    <img class="card-img-top text-center" src="img/instant top up-01.svg" alt="Card image" style="height: 100px">
    <div class="card-body">
      <h5 class="card-title">Instant Top-Up</h5>
      <p class="card-text">You can obtain a top up loan at lower rate of interest and lesser processing fee, provided you have paid back the earlier loan amount in time.</p>
    </div>
  </div>
  <div class="card m-4 p-4 text-center shadow" style="width:240px">
    <img class="card-img-top text-center" src="img/fast approval-01.svg" alt="Card image" style="height: 100px">
    <div class="card-body">
      <h5 class="card-title">Fast Approval</h5>
      <p class="card-text">Your application will be processed in a short duration if you provide all the necessary documents and meet the eligibility criteria.</p>
    </div>
  </div>
</div>

<!-- --------------why_chhoose-us-page----------- -->

<!-- ----------------------footer-page------------------ -->
<div class="row bg-light shadow p-3">
  <div class="col-md-6">
    <p>@copyright Digitalstartups.in</p>
  </div>
  <div class="col-md-6" style="float: right;">
    
    <ul class="footbot_social bg-dark">
      <li><a class="whatsup" href="#" data-placement="top" data-toggle="tooltip" title="whatsup"><i class="fa-brands fa-whatsapp"></i></a></li>
      <li><a class="fb" href="#" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa-brands fa-square-facebook"></i></a></li>
      <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa-brands fa-square-twitter"></i></a></li>
      <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa-brands fa-skype"></i></a></li>
      <li><a class="instagram" href="#." data-placement="top" data-toggle="tooltip" title="insta"><i class="fa-brands fa-square-instagram"></i></a></li>
    </ul>
  </div>
</div>

</div>
</body>
</html>


