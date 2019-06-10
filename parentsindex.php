<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id ASC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM parentuser ORDER BY id ASC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
</head>
 
<body style="background-image: url('image/vishal.jpg');">
    <h1 align="center"><font color ='green'><strong><mark><u>USER DATA</mark></strong></u></font></h1>
    <a href="parentsadd.html"><strong>Add New Data</strong></a><br/><br/>
 
    <table width='100%' border=01>
        <tr bgcolor='#CCCCCC'>
            <td>Fathername</td>
            <td>Mothername</td>
            <td>Address</td>
             <td>Phone</td>
            <td>Update</td>
            <td>Relation</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['fathername']."</td>";
            echo "<td>".$res['mothername']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['phone']."</td>";      
            echo "<td><a href=\"editparents.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to Edit this?')\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";  
            echo "<td><a href='index.php'>View Childs</a></td>";      
        }
        ?>
        <tr bgcolor='#CCCCCC'>
        <td colspan='5' align='center'>THANKU FOR SUBMITTED YOUR DATA</td>
    </tr>
        <t 
    </table>
</body>
</html>