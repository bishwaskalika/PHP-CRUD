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

<?php
include("details/nav.php");

?>






<div class="container">
<form action="details.php" method="post">

  


  <br />
  <br />
  <br />
 <h2>Add Your Guitar Details</h2>

  <br />
  <br />
  
  <div class="form-group">
    <label for="exampleInputEmail1">Make</label>
    <input type="text" name="make" placeholder="Make" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Model</label>
    <input type="text" name="model" placeholder="Model" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Colour</label>
    <input type="text" name="colour" placeholder="Colour" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" name="proposed" placeholder="price" class="form-control" required="required">
  </div>


  
  
  <button type="submit" name="submit">Submit</button>
</form>
</div>






<?php

$link = mysql_connect("localhost","root","");

mysql_select_db("sandesh",$link);

if(isset($_POST['submit'])){
  $make = $_POST['make'];
  $model = $_POST['model'];
  $colour = $_POST['colour'];
  $proposed = $_POST['proposed'];
  



if(mysql_query("Insert into details(make,model,colour,proposed) values('$make','$model','$colour','$proposed')")){
  
  echo "<h2>The details has been Added Suuccesfully</h2>";
  
}
}
?>







<div class="container">
  <h2>Guitar Details</h2>
  <p>The make, model , colour and price of guitar </p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Make</th>
        <th>Model</th>
        <th>Colour</th>
        <th>Price</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
     <?php
      $link = mysql_connect("localhost","root","");
      mysql_select_db("sandesh",$link);

      $run = mysql_query("Select * from details");
      while($row=mysql_fetch_array($run)){
        $showid = $row[0];
        $showpmake = $row[1];
        $showdmodel = $row[2];
        $showcolour = $row[3];
        $showporposed = $row[4];
        

        echo "<tr>
              <td>$showid</td>
              <td>$showpmake</td>
              <td>$showdmodel</td>
              <td>$showcolour</td>
              <td>$showporposed</td>
              <td><a href='edit_details.php?edit=$showid'>Edit</td>
              
              
            </tr>";
      }

    ?>
    </tbody>
  </table>
</div>
</div>

<?php
include("footer.php");

?>


</body>
</html>