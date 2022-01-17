<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <title>Global Express Delivery</title>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/Icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/Icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/Icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/Icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/Icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/Icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/Icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/Icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/Icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/Icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/Icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/Icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/Icons/favicon-16x16.png">
    <link rel="manifest" href="images/Icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/Icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body>
      <!-- php link -->
      <?php include('back-end.php')
      ?>
      <header id="header" class="container-fluid text-light sticky-top">
      <!-- logo -->
      <div id="logo_box">
        <img id="logo" src="images/logo.png">
      </div>
      <!-- end logo -->
      <nav id="navbar" class="navbar navbar-expand-lg navbar-toggleable-sm navbar-inverse">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navdiv">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navdiv" class="collapse navbar-collapse">
            <ul id="navul" class="navbar mr-auto list-unstyled">
              <li class="nav-item"><a class="text-light nav-link" href="index.html">HOME</a><hr></li>
              <li class="nav-item"><a class="text-light nav-link" href="services.html">SERVICES</a><hr></li>
              <li class="nav-item dropdown">
                <a class="text-light nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TRACKING</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="trace.php">TRACK PACKAGE</a>
                  <a class="dropdown-item" href="payment.php">PAYMENT</a>
                </div>
                <hr>
              </li>
              <li class="nav-item"><a class="text-light nav-link" href="location.html">LOCATIONS</a><hr></li>
              <li class="nav-item"><a class="text-light nav-link" href="contactus.html">CONTACT US</a><hr></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- banner -->
    <section id="banner3-Box">
      <div id="banner3">
        <div id="banner-txt" class="text-light text-center">
          <h1>TRACK AND TRACE</h1>
          <hr class="the-line">
          <p>Enter your tracking number in the text box and know exactly where your package is located</p>
        </div>
      </div>
    </section>
    <!-- Package Informations -->
    <section id="package" class="d-none">
      <?php foreach ($infos as $info){ ?>
      <div class="container-fluid" style="background: #08556d;">
        <div class="row">
          <div class="container text-center">
            <div>
                <h4 class="text-light">Tracking Number: <?php echo htmlspecialchars($info['Tracking_number']); ?> </h4>
              </div>
            <div class="d-md-flex m-3">
              <div class="col-md-6 bg-light m-3">
                <h6>Tracking Number</h6> 
                <?php echo htmlspecialchars($info['Tracking_number']); ?>
                <hr>
                <h6>Package Number</h6> 
                <?php echo htmlspecialchars($info['Package_number']); ?>
                <hr>
                <h6>Departure Date/Time </h6>
                <?php echo htmlspecialchars($info['Departure_time']); ?>
                <hr>
                <h6>Expected Arrival Time </h6>
                <?php echo htmlspecialchars($info['Arrival_time']); ?>
              </div>
              <div class="col-md-6 bg-light m-3">
                <h6>Origin</h6>
                <?php echo htmlspecialchars($info['Origin']); ?>
                <hr>
                <h6>Destination </h6>
                <?php echo htmlspecialchars($info['Destination']); ?>
                <hr>
                <h6>Delivery Address </h6>
                <?php echo htmlspecialchars($info['Delivery_address']); ?>
                <hr>
                <h6>Package Type </h6>
                <?php echo htmlspecialchars($info['Package_type']); ?>
              </div>
            </div>
            <div class="bg-light ml-5">
              <h5>Package Description</h5>
              <hr>
              <p><?php echo htmlspecialchars($info['Package_desc']); ?></p>
              <hr>
              <h6>Package weight</h6>
              <hr>
              <p><?php echo htmlspecialchars($info['Package_weight']); ?> in kg</p>
            </div>
            <div class="d-md-flex m-3">
              <div class="col-md-6 m-3 bg-light">
                <h5>Shipper</h5>
                <hr>
                <p><?php echo htmlspecialchars($info['Shipper']); ?></p>
                <p><?php echo htmlspecialchars($info['Origin']); ?></p>
              </div>
              <div class="col-md-6 m-3 px-1 bg-light">
                <h5>Receiver</h5>
                <hr>
                <p><?php echo htmlspecialchars($info['Receiver']); ?></p>
                <p><?php echo htmlspecialchars($info['Delivery_address']); ?></p>
                <p><?php echo htmlspecialchars($info['Telephone']); ?></p>
              </div>
            </div>
            <div class="bg-light ml-5 pb-3 mb-2">
              <h5>Shipment Progress</h5>
              <hr>
              <p><?php echo htmlspecialchars($info['Shipment_status']); ?></p>
            </div>
            <div class="bg-light ml-5 pb-3 mb-2">
              <h5>Transit Points</h5>
              <hr>
              <p><?php echo htmlspecialchars($info['Transits']); ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    </section>
    <!-- Trace code -->
    <section id="trace-code-field" class="container text-center">
      <div id="text-box">
        <p class="font-weight-bold">Enter your tracking number below and click the "Track" button to find out exactly where your cargo is right now and when it will arrive at its final destination.</p>
      </div>
      <div id="wrong" class="d-none">
          <h4 class="text-danger">Warning! : Enter a valid Track code. Remove any spaces.</h4>
        </div>
      <form action="trace.php" method="GET">
        <div id="code-input-box">
          <input type="form-control" name="code" placeholder=" Enter tracking code..." required>
        </div>
        <div id="track-btn">
          <input class="btn text-light" type="submit" name="submit" value="TRACK" style="background-color: #08556d;">
        </div>
        
      </form>
    </section>
    <div id="disclaimer3">
        
    </div>
    <!-- Partners -->
        <div id="partners" class="container text-center">
          <div id="partnerImage">
            <h5>Our Partners</h5>
            <img src="partners/partners.png">
          </div>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer" class="">
        <div id="contactus" class="">
          <h5>Contact Us</h5>
          <p>Phone: <span><a   href="tel:+15418961332">+1(541)896-1332</a></span></p>
          <p>Email : <span><a href="mailto:webmail@mail.com">webmail@mail.com</a></span></p>
        </div>
        <hr style="background-color: #8a0000;">
        <div id="copyright" class="">
          <p>© 2021 Global Express Delivery | All Rights Reserved.</p>
        </div>
        <a href="#header"><span id="scrollup"></span></a>
    </footer>
    <!-- php link -->
    <?php include('back-end.php')
    ?>
    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>