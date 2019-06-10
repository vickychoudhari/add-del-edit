<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:index.php");



//getting id of the data from the parents

$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM parentuser WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:parentsindex.php");
?>


