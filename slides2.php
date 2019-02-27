<!DOCTYPE html>
<html>
<head>
  <title> How to use the system </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="color:rgb(100,150,230);"> How to use the system </h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/sl1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption" style="color:black;">
          <h3> Create Appointments </h3>
          <p> fast and easy way to book an appointments with any waiting</p>
        </div>
      </div>

      <div class="item">
        <img src="img/sl2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption" style="color:black;">
          <h3> Get the best options </h3>
          <p> select among best in class doctors </p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/sl3.jpg" alt="New york" style="width:100%;">
        <div class="carousel-caption" style="color:black;">
          <h3> Manage Prescriptions </h3>
          <p> fast and hastle free prescriptions managements </p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>