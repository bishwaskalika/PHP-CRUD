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
include("purchase/nav.php");

?>


<?php
error_reporting(0);
?>

<?php

error_reporting(0);
?>




<div class="container">
<form action="purchase.php" method="post">

  

  <br />
  <br />
  <br />
  <br />
  <h2>Add Your Purchase Details</h2>
  <br />
  <br />
 
  <div class="form-group">
    <label for="exampleInputEmail1">Purchased Date</label>
    <input type="date" name="pdate" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Delivery Date</label>
    <input type="date" name="ddate" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="text" name="qunty" placeholder="Quantity" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cost</label>
    <input type="text" name="cost" placeholder="Cost" class="form-control" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">The company bought from</label>
    <input type="text" name="cname" placeholder="Company name" class="form-control" required="required">
  </div>
  
  
  <button type="submit" name="submit">Submit</button>
</form>
</div>






<?php

$link = mysql_connect("localhost","root","");

mysql_select_db("sandesh",$link);

if(isset($_POST['submit'])){
  $pdate = $_POST['pdate'];
  $ddate = $_POST['ddate'];
  $qunty = $_POST['qunty'];
  $cost = $_POST['cost'];
  $cname = $_POST['cname'];



if(mysql_query("Insert into purchase(pdate,ddate,qunty,cost,cname) values('$pdate','$ddate','$qunty','$cost','$cname')")){
  
  echo "<h2>User has been Added Suuccesfully</h2>";
  
}
}
?>







<div class="container">
  <h2>Purchase Details</h2>
  <p>The date of purchased, deliery date, quantity , cost and the name of compnay bought from</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Purchased Date</th>
        <th>Delivery Date</th>
        <th>Quantity</th>
        <th>Cost</th>
        <th>The Compnay bought from</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
     <?php
      $link = mysql_connect("localhost","root","");
      mysql_select_db("sandesh",$link);

      $run = mysql_query("Select * from purchase");
      while($row=mysql_fetch_array($run)){
        $showid = $row[0];
        $showpdate = $row[1];
        $showddate = $row[2];
        $showqunty = $row[3];
        $showcost = $row[4];
        $showcname = $row[5];

        echo "<tr>
              <td>$showid</td>
              <td>$showpdate</td>
              <td>$showddate</td>
              <td>$showqunty</td>
              <td>$showcost</td>
              <td>$showcname</td>
              <td><a href='edit_purchase.php?edit=$showid'>Edit</td>
              
              
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