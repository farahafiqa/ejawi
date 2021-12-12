<!doctype html>
<html>
	<head>
<style>
body {
  background-color: lightgrey;
  color: blue;
	
}

h1 {
  color: red;
  font-family: courier;
  font-size: 300%;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: hotpink;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px grey;
}

.button:hover {background-color: orangered}

.button:active {
  background-color: pink;
  box-shadow: 0 5px grey;
  transform: translateY(4px);
}
</style>
<?php      
    include('database.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
			
			header("Location:interfaceadmin.php");
            //echo "<h1><center> Login successful </center></h1>";
			//echo'<script>window.location="index.php";
			//</script>';
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
    <div id="center_button"><button onclick="location.href='index.php'" button class="button" >Back to Home</button></div>
		</head>
	</html>