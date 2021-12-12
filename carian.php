<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body
	 {
  background-image: url("bg3.jpg");
  
}
	h1 {
  color: red;
  font-family: courier;
  font-size: 400%;
}
	
p {
	
  font-family: "Lucida Console", "Courier New", monospace;
  text-indent: 50px;
  text-align: justify;
  text-align: center;
  letter-spacing: 3px;
  font-size: 150px;
  word-spacing: 300px;
  text-shadow: 2px 2px yellow;
}
	div.a {
		text-align: center;
	}
* {
  box-sizing: border-box;
}
	/* Style the header */
header {
  background-color: floralwhite;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}


#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}
	


</style>
</head>
	<header>
<img src="HEADER/CARIAN.jpg" width="1500" height="300" alt=""/> </header>
<body>
	 <ul>
	  <li><a href="index.php">Halaman Utama</a></li>
	  <li><a href="hurufjawi.php">HurufJawi</a></li>
      <li><a href="nombor.php">Nombor</a></li>
      <li><a href="haiwan.php">Haiwan</a></li>
      <li><a href="buah.php">Buah</a></li>
	  <li><a class="active" href="carian1.php">Carian</a></li>
      </ul>

</body>
</html>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "ejawi";

$conn = new mysqli($servername, $username, $password, $db);



if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}


$search = $_POST['search'];
///$column = $_POST['column'];

//yang nie kalu nok search byk column dlm table
$sql = "SELECT * FROM contentjawi WHERE Rumi LIKE '%{$search}%'";
//nie kalau awak nak search guna 1 column sahaja dlm table
//"select * from contentjawi where Rumi like '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo "<p style = 'color: black;'> " . $row["Rumi"]."  ".$row["Jawi"]."  "."<br>" ."</p>";
}
} else {
	echo "<h1> Tiada dalam rekod . . . . .</h1>";
}

$conn->close();

?>