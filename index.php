<?php
echo '<html>';
include_once './common/header.php';
include_once './common/navbar.php';
?>

<section class="header-search">
  <h1>Travel across the globe</h1>
  <style>
    input[type=text] {
      height: 50px;
      width: 40%;
      box-sizing: border-box;
      border-radius: 16px;
      font-size: 16px;
      background-color: white;
      border-color: blue;
      background-position: 10px 10px;
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
      width: 40%;
    }
  </style>
  <form method="POST" action="./search.php">
    <input type="text" id="khoj" placeholder="Search.." name="search-key">
    <button type="submit" name="search-submit" class="btn btn-info" id="search">
      <span class="glyphicon glyphicon-search"></span> Search
    </button>
  </form>
</section>


<section class="features" id="features">
  <h1>Featured destination</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="feature-box">
          <div class="feature-img" href="#">
            <a href="las angels.HTML"><img src="img/2.jpg"></a>
            <div class="price">
              <p>180$</p>
            </div>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
          </div>
          <div class="feature-details">
            <h4>Los Angels</h4>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web
              designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have
              scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book..</p>
          </div>
          <div style="padding: 10px;">
            <span><i class="fa fa-map-marker" aria-hidden="true"></i>Los angeles</span>
            <span><i class="fa fa-sun-o"></i>4 days</span>
            <span><i class="fa fa-moon-o" aria-hidden="true"></i>3 nights</span>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="feature-box">
          <div class="feature-img">
            <a href="london.html"><img src="img/london-eye-945497_1920.jpg"></a>
            <div class="price">
              <p>280$</p>
            </div>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div class="feature-details">
            <h4>London</h4>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web
              designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have
              scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book..</p>
          </div>
          <div style="padding: 10px;">
            <span><i class="fa fa-map-marker" aria-hidden="true"></i>London</span>
            <span><i class="fa fa-sun-o"></i>4 days</span>
            <span><i class="fa fa-moon-o" aria-hidden="true"></i>3 nights</span>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="feature-box">
          <div class="feature-img">
            <a href="russia.html"><img src="img/russia 1.jpg"></a>
            <div class="price">
              <p>280$</p>
            </div>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div class="feature-details">
            <h4>Russia</h4>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web
              designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have
              scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book..</p>
          </div>
          <div style="padding: 10px;">
            <span><i class="fa fa-map-marker" aria-hidden="true"></i>Russia</span>
            <span><i class="fa fa-sun-o"></i>3 days</span>
            <span><i class="fa fa-moon-o" aria-hidden="true"></i>2 nights</span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box">
          <div class="feature-img">
            <a href="paris.html"><img src="img/paris-1836415_1920.jpg"></a>
            <div class="price">
              <p>80$</p>
            </div>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div class="feature-details">
            <h4>Paris</h4>
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy sdf sdfsdf sdfdsf text used in laying out
              print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century
              who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type
              specimen book..</p>
          </div>
          <div style="padding: 10px;">
            <span><i class="fa fa-map-marker" aria-hidden="true"></i>Paris</span>
            <span><i class="fa fa-sun-o"></i>4 days</span>
            <span><i class="fa fa-moon-o" aria-hidden="true"></i>3 nights</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="gallary" id="gallary">
  <h1>Travelling gallary</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallarylas.html">
              <img src="img/losangels2.jpg"></a>
            <h4>Los angeles</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallarylas.html">
              <img src="img/losangels3.jpg"></a>
            <h4>Los angeles</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallarylas.html">
              <img src="img/losangels.jpg"></a>
            <h4>Russia</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallaryparis.html">
              <img src="img/architecture-buildings-cars-2221928.jpg"></a>
            <h4>Paris</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallaryparis.html">
              <img src="img/paris2.jpg"></a>
            <h4>Paris</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallarylondon.html">
              <img src="img/los4.jpg"></a>
            <h4>London</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallarylondon.html">
              <img src="img/london2.jpg"></a>
            <h4>London</h4>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="gallary-box">
          <div class="feature-img">
            <a href="gallarylondon.html">
              <img src="img/london1.jpg"></a>
            <h4>London</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="banner ">
  <div class="banner-highlights">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2> Get 30% on top destinations</h2>
        </div>
        <div class="col-md-4">
          <a href="tour package.html"><button type="button" class="booking-btn">Book Now</button></a>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="users-feedback">
  <h1> users review </h1>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="user-review">
          <p>something something something something something something something bla bla</p>
          <h5>Los angeles</h5>
          <br><br>
        </div>
        <img src="img/user.png">

      </div>

      <div class="col-md-4">
        <div class="user-review">
          <p>something something something something something something something bla bla</p>
          <h5>Los angeles</h5>
          <br><br>
        </div>
        <img src="img/user.png">

      </div>

      <div class="col-md-4">
        <div class="user-review">
          <p>something something something something something something something bla bla</p>
          <h5>Los angeles</h5>
          <br><br>
        </div>
        <img src="img/user.png">
      </div>

    </div>
  </div>
</section>

<?php

include_once './common/js.php';
include_once './common/footer.php';

echo '</body>
</html>';
