
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id ASC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
</head>
 
<body style="background-image: url('image/vishal.jpg');">
    <h1 align="center"><font color ='green'><strong><mark><u>USER DATA</mark></strong></u></font></h1>
    <a href="add.html"><strong><font size='5'>Add New Data</strong></font></a><br/><br/>
 
    <table width='100%' border=01>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Age</td>
            <td>Email</td>
            <td>Update</td>
            <td>Relation</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['age']."</td>";
            echo "<td>".$res['email']."</td>";    
            echo "<td><a href=\"edit.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to Edit this?')\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
            echo "<td><a href='parentsindex.php'>View Parents</a></td>";       
        }
        ?>
        <tr bgcolor='#CCCCCC'>
        <td colspan='4' align='center'>THANKU FOR SUBMITTED YOUR DATA</td>
    </tr>
        <t 
    </table>
</body>
</html>