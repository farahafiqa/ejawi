<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM contentjawi WHERE id=$id");

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$id = $n['id'];
			$Rumi = $n['Rumi'];
			$Jawi = $n['Jawi'];
			$categories = $n['categories'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en"><head>
	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Senarai data Jawi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="bg.jpg" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="style1.css"> -->
<style>
	
	body {
    font-size: 19px;
}
	{
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
}
table{
	
	box-shadow: 10px -10px 5px #CCC;
    width: 80%;
    margin: 40px auto;
    border-collapse: collapse;
    text-align: left;
}

tr:hover
{
  background-color: aquamarine;
}

tr {
    border-bottom: 1px solid #030303;
}
th, td{
    border: #030303;
    height: 30px;
    padding: 2px;
}


form {
    width: 45%;
    margin: 60px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid double; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 25px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 25px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
	
	</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="interfaceadmin.php">Laman Utama Admin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"><img src="file:///C:/xampp/htdocs/Ejawi4/logo.png" alt="" class="img-fluid"></a>

	  </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
			
          <li><a href="logout.php">Logout</a></li>
			
        </ol>
        <h2>E-Jawi Detail</h2>

      </div>
    </section><!-- End Breadcrumbs -->
	  
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	
	
	<form method="post" action="server.php" >
		<table>
			
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
		<th>
			<label>Rumi</label></th>
			<td>
			<input type="text" name="Rumi" value="<?php echo $Rumi; ?>"></td>
			</tr>
		<tr>
		<th>
			<label>Jawi</label></th>
	  <td>
			<input type="text" name="Jawi" value="<?php echo $Jawi; ?>"></td>
		</tr>
		
		<tr>
		<th>
			<label>Kategori</label></th>
	  <td>
			<input type="text" name="categories" value="<?php echo $categories; ?>"></td>
		</tr>
		
		<tr>
<th>
		    <label> ID </label></th>
<td>
			<input type="text" name="id" value="<?php echo $id; ?>"> </td>
		</tr>
			</table>
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >Kemaskini</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Simpan</button>
<?php endif ?>
		</div>
		
	</form>
	
	<?php $results = mysqli_query($db, "SELECT * FROM contentjawi"); ?>

<table>
	
	<thead>
		<tr>
			<th>ID</th>
			<th>Rumi</th>
			<th>Jawi</th>
			<th>Kategori</th>
			<th align="center" colspan="2">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['Rumi']; ?></td>
			<td><?php echo $row['Jawi']; ?></td>
			<td><?php echo $row['categories']; ?></td>
			<td>
				<a href="interfaceadmin.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Kemaskini</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Padam</a>
			</td>
		</tr>
	<?php } ?>
</table>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright<strong> FKMPT</strong>. All Rights Reserved
        </div>
       
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
	</main>
</body>

</html>