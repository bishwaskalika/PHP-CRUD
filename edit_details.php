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
include("details/nav.php");

?>



<?php



$link = mysql_connect("localhost","root","");
mysql_select_db("sandesh",$link);



$edit_id = $_GET['edit'];
$run = mysql_query("select * from details where id = " . $edit_id);

while($row = mysql_fetch_array($run)){

  $id = $row[0];
  $make  = $row[1];
  $model = $row[2];
  $colour = $row[3];
  $proposed  = $row[4];

}

?>


<div class="container">
<form action="edit_details.php?edit_form=<?php echo $id ?>" method="post">

  <br />
  <br />
  <br />
  
<h2>Edit Your Details</h2>
 <br />
  <br />

  
  Make:
    <input type="text" name="umake" class="form-control" value="<?php echo $make?>"/><br/>
  
  Model :
    <input type="text" name="umodel" class="form-control" value="<?php echo $model?>"/><br/>
  
  colour:
    <input type="text" name="ucolour" placeholder="colour" class="form-control"  value="<?php echo $colour?>"><br/>
  
  
  proposed:
    <input type="text" name="uproposed" placeholder="proposed" class="form-control"  value="<?php echo $proposed?>"/><br/>
  
  
  
  
  <button type="submit" name="up" value="Update">Update</button>
</form>
</div>


<?php

$link = mysql_connect("localhost","root","");
mysql_select_db("sandesh",$link);



if(isset($_POST['up'])){

  $uid = $_GET['edit_form'];
  $umake = $_POST['umake'];
  $umodel = $_POST['umodel'];
  $ucolour = $_POST['ucolour'];
  $uproposed = $_POST['uproposed'];
  

if(mysql_query("Update details set make = '$umake', model = '$umodel', colour = '$ucolour', proposed = '$uproposed' where id = '$uid'")){

  header("location:details.php");
}
}
?>


</body>
</html>