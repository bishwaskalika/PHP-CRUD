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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Sandesh Prasai</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Purchase</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">


<center>
<h1>Add Users</h1>
<form action="new.php" method="post">
	Name: <input type="text" name="name"/> </br>
	Password: <input type="text" name="pass"/> </br>
	Email: <input type="text" name="email"/> </br>
			<input  type="submit" name="submit" value="Submit" />


</form>


<?php

$link = mysql_connect("localhost","root","");

mysql_select_db("project",$link);

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];

if(mysql_query("Insert into user(name,email,pass) values('$name','$email','$pass')")){
	
	echo "<h2>User has been Added Suuccesfully</h2>";
	
}
}
?>
</center>




<div class="container">
<form>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Purchased Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Delivery Date</label>
    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cost">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cost</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cost">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">The company bought from</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Company name">
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>






<div class="container">
  <h2>Purchase Details</h2>
  <p>The date of purchased, deliery date, quantity , cost and the name of compnay bought from</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Deleted</th>
      </tr>
    </thead>
    <tbody>
     <?php
			$link = mysql_connect("localhost","root","");
			mysql_select_db("project",$link);

			$run = mysql_query("Select * from user");
			while($row=mysql_fetch_array($run)){
				$showid = $row[0];
				$showname = $row[1];
				$showemail = $row[2];
				$showpass = $row[3];

				echo "<tr>
							<td>$showid</td>
							<td>$showname</td>
							<td>$showemail</td>
							<td>$showpass</td>
							<td>Edit</td>	
							<td>Delete</td>
					  </tr>";
			}

		?>
    </tbody>
  </table>
</div>





</body>
</html>