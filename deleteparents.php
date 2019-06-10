
<?php
//getting id of the data from the parents

$ids = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM parentuser WHERE id=$ids");
 
//redirecting to the display page (index.php in our case)
header("Location:parentsindex.php");
?>