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
<img src="HEADER/BUAH@300x-100.jpg" width="1500" height="300" alt=""/> </header>
	
	<section>
  
    <ul>
	  <li><a href="index.php">Halaman Utama</a></li>
	  <li><a href="hurufjawi.php">HurufJawi</a></li>
      <li><a href="nombor.php">Nombor</a></li>
      <li><a href="haiwan.php">Haiwan</a></li>
      <li><a class="active" href="buah.php">Buah</a></li>
	  <li><a href="carian1.php">Carian</a></li>
    </ul>
  

        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                  <div class="col-lg-10">					  
					  <table class="center" width="200" border="0">
  <tbody>
    <tr>
	<td><img src="BUAH GIF/BUAH GIF/ANGGUR.gif" width="300" height="300" alt=""/></td>
     <td><img src="BUAH GIF/BUAH GIF/BETIK.gif" width="300" height="300" alt=""/></td>
	<td><img src="BUAH GIF/BUAH GIF/CIKU.gif" width="300" height="300" alt=""/></td>
	<td><img src="BUAH GIF/BUAH GIF/DUKU.gif" width="300" height="300" alt=""/></td>
	<td><img src="BUAH GIF/BUAH GIF/EPAL.gif" width="300" height="300" alt=""/></td>
    </tr>
	
	  
	  	<tr>
			                <td><img src="RUMI - JAWI RESIZE/ANGGUR.png" width="60" height="60" alt="Anggur"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/RUMI RESIZE/ANGGUR.png" width="85" height="60" alt=""></td>
	                        <td><img src="RUMI - JAWI RESIZE/BETIK.png" width="50" height="50" alt="Anggur"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/BETIK.png" width="75" height="50" alt="Betik"></td>
	                        <td><img src="RUMI - JAWI RESIZE/CIKU.png" width="50" height="50" alt="Anggur"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/CIKU.png" width="70" height="45" alt="Ciku"></td>
			               <td><img src="RUMI - JAWI RESIZE/DUKU.png" width="50" height="50" alt="Duku"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/RUMI RESIZE/DUKU.png" width="75" height="50" alt=""></td>
	                       <td><img src="RUMI - JAWI RESIZE/EPAL.png" width="50" height="50" alt="Epal"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/EPAL.png" width="75" height="50" alt="Betik"></td>
	  </tr>
	 
  </tbody>
					 
					    <tbody>
					      
											 
               
	   
					      <tr>
							 <td><img src="BUAH GIF/BUAH GIF/KIWI.gif" width="300" height="300" alt=""/></td>
					        <td><img src="BUAH GIF/BUAH GIF/MANGGIS.gif" width="300" height="300" alt=""/></td>
					        <td><img src="BUAH GIF/BUAH GIF/OREN.gif" width="300" height="300" alt=""/></td>
							  <td><img src="BUAH GIF/BUAH GIF/PISANG.gif" width="300" height="300" alt=""/></td>
							  <td><img src="BUAH GIF/BUAH GIF/TEMBIKAI.gif" width="300" height="300" alt=""/></td>
				          </tr>
							<tr> 
								<td><img src="RUMI - JAWI RESIZE/KIWI.png" width="60" height="60" alt="Kiwi"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/KIWI.png" width="60" height="50" alt="Ciku"></td>
								<td><img src="RUMI - JAWI RESIZE/MANGGIS.png" width="65" height="65" alt="Manggis"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/RUMI RESIZE/MANGGIS.png" width="90" height="75" alt=""></td>
	                            <td><img src="RUMI - JAWI RESIZE/OREN.png" width="50" height="50" alt="Oren"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="RUMI - JAWI RESIZE/RUMI RESIZE/OREN.png" width="70" height="45" alt="Oren"></td>
	                            <td><img src="RUMI - JAWI RESIZE/PISANG.png" width="50" height="50" alt="Pisang"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/PISANG.png" width="80" height="55" alt="Pisang"></td>
						        <td><img src="RUMI - JAWI RESIZE/TEMBIKAI.png" width="70" height="70" alt="Tembikai"/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="RUMI - JAWI RESIZE/RUMI RESIZE/TEMBIKAI.png" width="90" height="65" alt="Tembikai"></td>
						    
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