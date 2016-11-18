<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sandesh Prasai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top  ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand " href="index.php">Sandesh Prasai</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="sales.php">Sales</a></li>
        <li><a href="purchase.php">Purchase</a></li>
        <li><a href="details.php">Details</a></li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
         <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1/1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Gibson</h3>
          <p>RA-090</p>
        </div>      
      </div>

      <div class="item">
        <img src="1/2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Rouge strater</h3>
          <p>Acoustic guitar</p>
        </div>      
      </div>

       <div class="item">
        <img src="1/3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Mitchell </h3>
          <p>MD100pk</p>
        </div>      
      </div>

       <div class="item">
        <img src="1/4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Rouge strater</h3>
          <p>Electric guitar </p>
        </div>      
      </div>


       <div class="item">
        <img src="1/5.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Rouge</h3>
          <p>RR100 Rocketeer </p>
        </div>      
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  <!--
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="
glyphicon glyphicon-search blue" style="font-size: 190px; color:blue;"></span>
      <p>Sales</p>
    </div>
    <div class="col-sm-4"> 
      <span class="
glyphicon glyphicon-wrench blue" style="font-size: 190px; color:blue;"></span>
      <p>Repair</p>    
    </div>
    
     <div class="col-sm-4"> 
      <span class="
glyphicon glyphicon-trash blue" style="font-size: 190px; color:blue;"></span>
      <p>Resales</p>    
    </div>
  </div>
</div><br>
-->

<footer class="container-fluid text-center">
  <p>&copy  Sandesh Prasai <?php echo date('Y');  ?></p>
</footer>

</body>
</html>
