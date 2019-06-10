<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $fname=$_POST['fathername'];
    $mname=$_POST['mothername'];
    $add=$_POST['address'];
    $phone=$_POST['phone'];     
    
    // checking empty fields
    if(empty($fname) || empty($mname) || empty($add) || empty($phone) ){            
        if(empty($fname)) {
            echo "<font color='red'>fathername field is empty.</font><br/>";
        }
        
        if(empty($mname)) {
            echo "<font color='red'>mothername field is empty.</font><br/>";
        }
        
        if(empty($add)) {
            echo "<font color='red'>address field is empty.</font><br/>";
        }  
        if(empty($phone)) {
            echo "<font color='red'>phone field is empty.</font><br/>";
        }      
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE parentuser SET fathername='$fname',mothername='$mname',address='$add',phone='$phone' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: parentsindex.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM parentuser WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $fname = $res['fathername'];
    $mname = $res['mothername'];
    $add = $res['address'];
    $phone = $res['phone'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
</head>
 <br/>
<body style="background-image: url('image/vishal.jpg');>
<br/>

    <a href="parentsindex.php"><strong><u><font size="6">&nbsp;&nbsp;&nbsp;Home</font></u></strong></a>
    <br/><br/>
    
    <form name="form1" method="post" action="editparents.php">
        <table border="1" align="center">
            <th colspan="2">Update Parents Data</th>
            <tr> 
                <td>Father Name</td>
                <td><input type="text" name="fathername" value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
                <td>Mother Name</td>
                <td><input type="text" name="mothername" value="<?php echo $mname;?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $add;?>"></td>
            </tr>
               <td>Phone</td>
                <td><input type="number" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update" style="background-color: #ddd; border: none;color: black; padding: 10px 20px; text-align: center; text-decoration: none;display: inline-block;margin: 4px 2px;cursor: pointer;border-radius: 16px;"></td>
            </tr>
        </table>
    </form>
</body>
</html>
