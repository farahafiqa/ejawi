<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'ejawi');

	// initialize variables
	$Rumi = "";
	$Jawi = "";
    $categories = "";
    $id = "";

	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$id = $_POST['id'];
		$Rumi = $_POST['Rumi'];
		$Jawi = $_POST['Jawi'];
		$categories = $_POST['categories'];

		mysqli_query($db, "INSERT INTO contentjawi (Rumi, Jawi, categories,id) VALUES ('$Rumi', '$Jawi', '$categories','$id')"); 
		$_SESSION['message'] = "Berjaya Disimpan"; 
		header('location: interfaceadmin.php');
		
	}
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$Rumi = $_POST['Rumi'];
	$Jawi = $_POST['Jawi'];
	$categories = $_POST['categories'];

	mysqli_query($db, "UPDATE contentjawi SET Rumi='$Rumi', Jawi='$Jawi', categories='$categories', id='$id' WHERE id=$id");
	$_SESSION['message'] = "Berjaya Dikemaskini !"; 
	header('location: interfaceadmin.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM contentjawi WHERE id=$id");
	$_SESSION['message'] = "Berjaya Dipadam!"; 
	header('location: interfaceadmin.php');
}
// ...