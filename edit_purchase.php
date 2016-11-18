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

error_reporting(0);
?>
<?php
include("purchase/nav.php");

?>



<?php



$link = mysql_connect("localhost","root","");
mysql_select_db("sandesh",$link);



$edit_id = $_GET['edit'];
$run = mysql_query("select * from purchase where id = " . $edit_id);

while($row = mysql_fetch_array($run)){

  $id = $row[0];
  $pdate  = $row[1];
  $ddate = $row[2];
  $qunty = $row[3];
  $cost = $row[4];
  $cname = $row[5];
}

?>


<div class="container">
<form action="edit_purchase.php?edit_form=<?php echo $id ?>" method="post">

  <br />
  <br />
  <br />
  <h2>Edit Your Details</h2>
 <br />
  <br />
  
 
  
  Purchased Date:
    <input type="date" name="update" class="form-control" value="<?php echo $pdate?>"/><br/>
  
  Delivery Date:
    <input type="date" name="uddate" class="form-control" value="<?php echo $ddate?>"/><br/>
  
  Quantity:
    <input type="text" name="uqunty" placeholder="Quantity" class="form-control"  value="<?php echo $qunty?>"><br/>
  
  
  Cost:
    <input type="text" name="ucost" placeholder="Cost" class="form-control"  value="<?php echo $cost?>"/><br/>
  
  
   The company bought from:</label>
    <input type="text" name="ucname" placeholder="Company name" class="form-control" value="<?php echo $cname?>"/><br/>
  
  
  <button type="submit" name="up" value="Update">Update</button>
</form>
</div>


<?php

$link = mysql_connect("localhost","root","");
mysql_select_db("sandesh",$link);



if(isset($_POST['up'])){

  $uid = $_GET['edit_form'];
  $update = $_POST['update'];
  $uddate = $_POST['uddate'];
  $uqunty = $_POST['uqunty'];
  $ucost = $_POST['ucost'];
  $ucname = $_POST['ucname'];

if(mysql_query("Update purchase set pdate = '$update', ddate = '$uddate', qunty = '$uqunty', cost = '$ucost', cname = '$ucname' where id = '$uid'")){

  header("location:purchase.php");
}
}
?>


</body>
</html>