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
  .name{
    margin-left: 90px;
    margin-top: 30px;
  }
  .name table{
    border: 3px;
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
include("sales/nav.php");

?>


<?php
error_reporting(0);
?>


<div class="name">
<table border="3px" >
<?php

mysql_connect("localhost","root","");
mysql_select_db("sandesh");
$res=mysql_query("select * from table1");


echo"<table>";
while ($row=mysql_fetch_array($res))
 {
  

  echo "<tr>";
  echo "<td>"; ?> <img src="<?php echo $row["image1"]; ?>" height="200" width="200"> <br/ ><br/ ><?php echo  "</td>";
  echo "<td>"; echo $row["name"];  echo "</td>";
  echo "<td>"; echo $row["details"]; echo "</td><br/ >";

  echo "</tr>";

}

echo "</table>";

?>
<br />
</table>
</div>











<?php
include("footer.php");

?>





</body>
</html>