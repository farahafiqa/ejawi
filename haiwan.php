<!doctype html>
<html>
<head>
	 <link rel="stylesheet" href="style1.css">
<style>		
{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: floralwhite;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>

<body>
	
	<header>
<img src="HEADER/HAIWAN@300x-100.jpg" width="1500" height="300" alt=""/> </header>

<section>
  
    <ul>
      <li><a href="index.php">Halaman Utama</a></li>
	  <li><a href="hurufjawi.php">HurufJawi</a></li>
      <li><a href="nombor.php">Nombor</a></li>
      <li><a class="active" href="haiwan.php">Haiwan</a></li>
      <li><a href="buah.php">Buah</a></li>
	  <li><a href="carian1.php">Carian</a></li>
    </ul>
 
	

        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                  <div class="col-lg-10">
					  
					  
                    <table class="center" width="200" border="0">
					
  <tbody>
    <tr>
      <td><img src="HAIWAN GIF/HAIWAN GIF/ARNAB.gif" width="300" height="300" alt=""/></td>
      <td><img src="HAIWAN GIF/HAIWAN GIF/BUAYA.gif" width="300" height="300" alt=""/></td>
	  <td><img src="HAIWAN GIF/HAIWAN GIF/BURUNG.gif" width="300" height="300" alt=""/></td>
		<td><img src="HAIWAN GIF/HAIWAN GIF/GAJAH.gif" width="300" height="300" alt=""/></td>
	  <td><img src="HAIWAN GIF/HAIWAN GIF/HARIMAU.gif" width="300" height="300" alt=""/></td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/ARNAB.png" width="60" height="60" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/RUMI RESIZE/ARNAB.png" width="85" height="60" alt=""></td>
	      <td><img src="RUMI - JAWI RESIZE/BUAYA.png" width="60" height="50" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/BUAYA.png" width="85" height="60" alt=""></td>
	      <td><img src="RUMI - JAWI RESIZE/BURUNG.png" width="65" height="70" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/BURUNG.png" width="90" height="70" alt=""></td>
		  <td> <img src="RUMI - JAWI RESIZE/GAJAH.png" width="60" height="60" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/RUMI RESIZE/GAJAH.png" width="85" height="60" alt=""></td>
	      <td><img src="RUMI - JAWI RESIZE/HARIMAU.png" width="85" height="85" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/HARIMAU.png" width="85" height="85" alt=""></td>
	  </tr>
    <tr>
      <td><img src="HAIWAN GIF/HAIWAN GIF/IKAN.gif" width="300" height="300" alt=""/></td>
	   <td><img src="HAIWAN GIF/HAIWAN GIF/KUCING.gif" width="300" height="300" alt=""/></td>
      <td><img src="HAIWAN GIF/HAIWAN GIF/MONYET.gif" width="300" height="300" alt=""/></td>
	  <td><img src="HAIWAN GIF/HAIWAN GIF/SINGA.gif" width="300" height="300" alt=""/></td>
	  <td><img src="HAIWAN GIF/HAIWAN GIF/ZIFARAH.gif" width="300" height="300" alt=""/></td>
    </tr>
    
	  <tr>
		  <td><img src="RUMI - JAWI RESIZE/IKAN.png" width="80" height="55" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/IKAN.png" width="65" height="55" alt="Ciku"></td>
		  <td> <img src="RUMI - JAWI RESIZE/KUCING.png" width="60" height="60" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/RUMI RESIZE/KUCING.png" width="85" height="60" alt=""></td>
	      <td><img src="RUMI - JAWI RESIZE/MONYET.png" width="70" height="70" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/MONYET.png" width="85" height="70" alt=""></td>
	      <td><img src="RUMI - JAWI RESIZE/SINGA.png" width="50" height="50" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/SINGA.png" width="85" height="50" alt=""></td>
		  <td><img src="RUMI - JAWI RESIZE/ZIRAFAH.png" width="70" height="70" alt=""/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/ZIRAFAH.png" width="70" height="70" alt=""></td>
	  </tr>
   
 
	  </tbody>
</table>

						</div>
						</div>
					</div>
  

               </section>               
            </section>
</body>
</html>