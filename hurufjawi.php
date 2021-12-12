
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
  color: grey;
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
<img src="HEADER/JAWI@300x-100.jpg" width="1500" height="300" alt=""/> </header>

<section>
  
    <ul>
	  
	  <li><a href="index.php">Halaman Utama</a></li>
	  <li><a class="active" href="hurufjawi.php">HurufJawi</a></li>
      <li><a href="nombor.php">Nombor</a></li>
      <li><a href="haiwan.php">Haiwan</a></li>
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
      <td><img src="FIX/FIX/04.png" width="300" height="300" alt=""/><audio controls ><source src="audio/004-tha.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/03.png" width="300" height="300" alt=""/><audio controls ><source src="audio/003-taa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/02.png" width="300" height="300" alt=""/><audio controls ><source src="audio/ba.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/01.png" width="300" height="300" alt=""/><audio controls ><source src="audio/001-alif.mp3" type="audio/mp3"> </audio></td>
    </tr>
	  <tr> 
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/THA.png" width="60" height="60"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/TA.png" width="45" height="45"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/BA.png" width="45" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/ALIF.png" width="60" height="60"  alt="" class="center" > </td>
	  </tr>
    <tr>
      <td><img src="FIX/FIX/08.png" width="300" height="300" alt=""/><audio controls ><source src="audio/008-dal.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/07.png" width="350" height="300" alt=""/><audio controls ><source src="audio/007-khaa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/06.png" width="300" height="300" alt=""/><audio controls ><source src="audio/006-haa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/05.png" width="300" height="300" alt=""/><audio controls ><source src="audio/005-jeem.mp3" type="audio/mp3"> </audio></td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/DAL.png" width="55" height="55"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/KHA.png" width="65" height="65"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/HA.png" width="45" height="45"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/JIM.png" width="50" height="50"  alt="" class="center" > </td>
	  </tr>
    <tr>
      <td><img src="FIX/FIX/012.png" width="300" height="300" alt=""/><audio controls ><source src="audio/012-seen.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/011.png" width="300" height="300" alt=""/><audio controls ><source src="audio/011-jaa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/010.png" width="300" height="300" alt=""/><audio controls ><source src="audio/010-raa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/09.png" width="300" height="300" alt=""/><audio controls ><source src="audio/009-dhal.mp3" type="audio/mp3"> </audio></td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/SIN.png" width="50" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/ZAL.png" width="50" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/RO.png" width="45" height="45"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/DZAL.png" width="70" height="60"  alt="" class="center" > </td>
	  </tr>
    <tr>
      <td><img src="FIX/FIX/016.png" width="300" height="300" alt=""/><audio controls ><source src="audio/016-toa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/015.png" width="300" height="300" alt=""/><audio controls ><source src="audio/015-dhaad.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/014.png" width="300" height="300" alt=""/><audio controls ><source src="audio/014-saad.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/013.png" width="300" height="300" alt=""/><audio controls ><source src="audio/013-sheen.mp3" type="audio/mp3"> </audio></td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/THO.png" width="50" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/DHAD.png" width="70" height="70"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/SHAD.png" width="70" height="70"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/SYIN.png" width="60" height="60"  alt="" class="center" > </td>
	  </tr>
    <tr>
      <td><img src="FIX/FIX/020.png" width="300" height="300" alt=""/><audio controls ><source src="audio/020-faa.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/019.png" width="300" height="300" alt=""/><audio controls ><source src="audio/019-ghain.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/018.png" width="300" height="300" alt=""/><audio controls ><source src="audio/018-ain.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/017.png" width="300" height="300" alt=""/><audio controls ><source src="audio/017-dhaa.mp3" type="audio/mp3"> </audio></td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/FA.png" width="40" height="35"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/GHAIN.png" width="85" height="75"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/AIN.png" width="45" height="45"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/ZHO.png" width="45" height="45"  alt="" class="center" > </td>
	  </tr>
    <tr>
      <td><img src="FIX/FIX/024.png" width="300" height="300" alt=""/><audio controls ><source src="audio/024-meem.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/023.png" width="300" height="300" alt=""/><audio controls ><source src="audio/023-laam.mp3" type="audio/mp3"> </audio> </td>
      <td><img src="FIX/FIX/022.png" width="300" height="300" alt=""/><audio controls ><source src="audio/022-kaaf.mp3" type="audio/mp3"> </audio> </td>
      <td><img src="FIX/FIX/021.png" width="300" height="300" alt=""/><audio controls ><source src="audio/021-qaaf.mp3" type="audio/mp3"> </audio> </td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/MIM.png" width="50" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/LAM.png" width="50" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/KAF.png" width="50" height="50"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/QAF.png" width="50" height="50"  alt="" class="center" > </td>
	  </tr>
    <tr>
      <td><img src="FIX/FIX/028.png" width="300" height="300" alt=""/><audio controls ><source src="audio/029-yaa.mp3" type="audio/mp3"> </audio> </td>
      <td><img src="FIX/FIX/027.png" width="300" height="300" alt=""/><audio controls ><source src="audio/026-waw.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/026.png" width="300" height="300" alt=""/><audio controls ><source src="audio/027-ha.mp3" type="audio/mp3"> </audio></td>
      <td><img src="FIX/FIX/025.png" width="300" height="300" alt=""/><audio controls ><source src="audio/025-noon.mp3" type="audio/mp3"> </audio></td>
    </tr>
	  <tr>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/YA.png" width="40" height="40"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/WAU.png" width="60" height="60"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/HA.png" width="40" height="40"  alt="" class="center" > </td>
		  <td> <img src="RUMI - JAWI RESIZE/RUMI RESIZE/JAWI RUMI RESIZE/NUN.png" width="60" height="60"  alt="" class="center" > </td>
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