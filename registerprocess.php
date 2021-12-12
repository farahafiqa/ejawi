<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM admin where id='$id'");
if(mysqli_num_rows($sql)>0)
{
    echo "Id Already Exists"; 
	exit;
}
else if(isset($_POST['save']))
    {
        $query="INSERT INTO admin(id, email, password, username ) VALUES ('$id', '$email', '$password', '$username')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: adminlogin.php?status=success");
    }
    else 
    {
		echo "Error.Please try again";
	}


?>