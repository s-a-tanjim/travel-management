<!DOCTYPE html>
<html lang="en">

<head>
  <title>london</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="./navbar.css">
  <link rel="stylesheet" href="./place.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
  <?php
    include_once './common/navbar.php';
  ?>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
  <br> <br><br><br><br><br>
  <div class="container mt-3">

    <div id="myCarousel" class="carousel slide">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/lon3.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="./IMG/lon2.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="./IMG/lon1.jpg" alt="New York" width="1100" height="500">
        </div>
      </div>
      <br>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>
  </div>
  <p>
    <h1 style="text-align: center" id="place">LONDON</h1>
  </p>

  <table class="table">

    <tbody>

      <h2 style="margin-top: 60px;text-align: center">DETAILS</h2>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th scope="row">
          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero debitis aspernatur eius sed, voluptatem
            quaerat culpa nobis sint aperiam quisquam rerum ullam aliquam earum sequi quae quas hic dolorem commodi!
          </h3>
          <br> <br>
          <h2>PRICE : 590$</h2><br>
          <h2>HOTEL : CHEAsdfP HOTEL</h2><br>
          <h2>AIRLINES : CHEAT AIsdfRLINES</h2><br>
          <h2>2 days and 1 night</h2> <br>
          <h2>LOCAL GUIDE : RAOM</h2> <br>
          <h2>
            Contact : 24356789 </h2>
        </th>
        <th></th>
        <th></th>
        <th></th>

      </tr>

    </tbody>
  </table>

  <table class="table">

    <tbody>

      <h2 style="margin-top: 60px; text-align: center">BOOKING CONFIRMATION</h2>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th scope="row">
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptates omnis suscipit cupiditate voluptas
            nam et, soluta dolore eveniet eligendi est ipsum, reiciendis sunt consequatur! Nesciunt molestias ab non
            consequatur.</h3>
        </th>
        <th></th>
        <th></th>
        <th></th>
      </tr>

    </tbody>
  </table>
  <table class="table">

    <tbody>

      <h2 style="margin-top: 60px; text-align: center">TERMS AND REGULATION</h2>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th scope="row">
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptates omnis suscipit cupiditate voluptas
            nam et, soluta dolore eveniet eligendi est ipsum, reiciendis sunt consequatur! Nesciunt molestias ab non
            consequatur.</h3>
        </th>
        <th></th>
        <th></th>
        <th></th>
      </tr>


    </tbody>

  </table>



  <tr>
    <th> </th>
  </tr>
  <div class="container">
    <div class="row">
      <div class="col-5"></div>
      <div class="col-3 ml-4">
        <button type="button" class="btn btn-warning " id="submit">I agree to journey with you.</button>
      </div>
      <div class="col-3"></div>
    </div>
  </div>
  <br><br><br>



  <footer class="ct-footer">
    <div class="container">

      <ul class="ct-footer-list text-center-sm">
        <li>
          <h2 class="ct-footer-list-header">
            Learn More
          </h2>
          <ul>

            <li>
              <a href="#features">feature-details</a>
            </li>
            <li>
              <a href="#gallary=">gallary</a>
            </li>
          </ul>
        </li>
        <li>
          <h2 class="ct-footer-list-header">
            Services
          </h2>
          <ul>

            <li>
              <a href="hotel.html">Hotel</a>
            </li>
            <li>
              <a href="flight.html">Flights</a>
            </li>

          </ul>
        </li>
        <li>
          <h2 class="ct-footer-list-header">
            Devlopment Team
          </h2>
          <ul>

            <li>
              <a href="#">DESIGNS</a>
            </li>
            <li>
              <a href="#">CODE</a>
            </li>

          </ul>
        </li>


        <li>
          <h2 class="ct-footer-list-header">
            About
          </h2>
          <ul>
            <li>
              <a href="contact.html">FAQ</a>
            </li>

            <li>
              <a href="contact.html">Contact Us</a>
            </li>
          </ul>
        </li>
        <li>
          <h2 class="ct-footer-list-header">
            Copyrigtht
          </h2>
          <ul>

            <li>
              <a href="#">Protik</a>
            </li>

          </ul>
        </li>
      </ul>
    </div>
  </footer>

  <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-firestore.js"></script>
  <!-- FireBase End-->
  <script src="firebase.js"></script>
  <script src="app.js"></script>

  <script>
    $(document).ready(function () {
      // Activate Carousel
      $("#myCarousel").carousel();

      // Enable Carousel Indicators
      $(".item1").click(function () {
        $("#myCarousel").carousel(0);
      });
      $(".item2").click(function () {
        $("#myCarousel").carousel(1);
      });
      $(".item3").click(function () {
        $("#myCarousel").carousel(2);
      });

      // Enable Carousel Controls
      $(".carousel-control-prev").click(function () {
        event.preventDefault();
        $("#myCarousel").carousel("prev");
      });
      $(".carousel-control-next").click(function () {
        event.preventDefault();
        $("#myCarousel").carousel("next");
      });
    });
  </script>
  <script src="package.js"></script>

</body>

</html>