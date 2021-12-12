
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
	echo $row["Rumi"]."  ".$row["Jawi"]."  "."<br>";
}
} else {
	echo "Tiada dalam rekod . . . .";
}

$conn->close();

?>