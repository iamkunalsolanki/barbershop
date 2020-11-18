<html lang="en">
<head>
  <title>BARBERSHOP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<BODY>
<BODY>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  " style="margin: auto;padding: auto;" >
  
  <a class="navbar-brand" href="#">Barbershop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="home" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="book.php">Book</a>
      </li>
      <li class="nav-item dropdown bg-dark">
        <a class="nav-link dropdown-toggle  " href="#" id="more" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          more
        </a>
        <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
          <a class="dropdown-item  "  class="location  " href="https://goo.gl/maps/k2E2QSgdFHA8eCM36"> location</a>
          <a class="dropdown-item  "  class="about  "  href="about.html">about</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" class="bg-dark" class="product bg-dark" href="contact.php">contact us</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<style>
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pic.jpg" alt="shop" width="1100" height="500">
      <div class="carousel-caption">
        <h3>love with your  hair</h3>
        <p>We had such a great time!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pic2.jpg" alt="sho3" width="1100" height="500">
      <div class="carousel-caption">
        <h3>welcome to barbershop</h3>
        <p>Thank you!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="pic3.jpg" alt="shop4" width="1100" height="500">
      <div class="carousel-caption">
        <h3>i am love with your hair</h3>
        <p>We love haircut!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
<!-- Footer -->
<footer class="icon text-center badge-dark" style="font-style: oblique; padding:90PX; ">
  <a href="https://www.facebook.com/kunal.solanki.7334"><i class="fa fa-facebook-official text-center " style="color: #b6c9f3fa;
    padding: 10PX;
    MARGIN: auto;
    font-size: 40px;
} " ></i></a>  
  <a href="https://www.facebook.com/kunal.solanki.7334"><i class="fa fa-pinterest-p text-center " style="color: red;
    padding: 10PX;
    margin: : auto;
    font-size: 40px;
} " ></i></a>
   <a href="#"><i class="fa fa-twitter text-center" style="color: skyblue;
    MARGIN: auto;
    font-size: 40px;
} "></i></a>
  <a href="#"><i class="fa fa-flickr text-cente " style="color: white;color: #b6c9f3fa;
    padding: 10PX;
    MARGIN: auto;
    font-size: 40px;
}"></i></a>
  <a href="#"><i class="fa fa-linkedin  " style="color: white;color: #b6c9f3fa;
    padding: 10PX;
    MARGIN: auto;
    font-size: 40px;
}"></i></a>
  <p class="w3-medium" style="color:white; " >
  Powered by <a href="#" target="_blank"> prashant&kunal</a>
  </p>

</footer>


</BODY>