<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
</head>
 
<body  style="background-image: url('image/htmlimage.jpeg');">
<?php
  // including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
        
     // checking empty fields 
    if(empty($name) || empty($age) || empty($email)) {                
        if(empty($name)) {
            echo "<font color='red' size='5'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red' size='5'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red' size='5'>Email field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'><font color='white' size='5'>Go Back</font></a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        '<br>';
        echo "<br/><a href='index.php'><font color='red'>View Result</font></a>";
    }
}
?>
</body>
</html>