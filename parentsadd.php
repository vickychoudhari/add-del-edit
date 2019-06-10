
<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
</head>
 
<body style="background-image: url('image/htmlimage.jpeg');">


<?php
  // including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $fname = $_POST['fathername'];
    $mname = $_POST['mothername'];
    $add = $_POST['address'];
    $phone = $_POST['phone'];
    // echo "<pre>";
    // print_r($fname);
        
     // checking empty fields 
    if(empty($fname) || empty($mname) || empty($add) || empty($phone)) {                
        if(empty($fname)) {
            echo "<font color='red' size='4'>Father Name field is empty.</font><br/>";
        }
        
        if(empty($mname)) {
            echo "<font color='red' size='4'>Mother name field is empty.</font><br/>";
        }
        
        if(empty($add)) {
            echo "<font color='red' size='4'>Address field is empty.</font><br/>";
        }
         if(empty($phone)) {
            echo "<font color='red' size='4'> phone field is empty.</font><br/>";
        }
    


        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO parentuser(fathername,mothername,address,phone) VALUES('$fname','$mname','$add', '$phone')");
        
        //display success message
        echo "<font color='green' size='4'>&nbsp;&nbsp;&nbsp;&nbsp;Data added successfully.";
        '<br>';
        echo "<br/><a href='parentsindex.php'><font color='red' size='4'>&nbsp;&nbsp;&nbsp;&nbsp;View Result</a>";
    }
}
?>
</body>
</html>