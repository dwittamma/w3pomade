<?php session_start(); ?>
<html>
<head>
	<title>W3Pomade</title>
	<link href="style.css" rel="stylesheet" type="text/css">
<!-- <link href="bootstrap-3.3.7-dist\css\bootstrap.min.css" rel="stylesheet" type="text/css"> -->
<script type='text/javascript' src='jquery-3.2.1.min.js'></script>
	 <script type="text/javascript" src='jssor.slider-23.1.5.min.js'></script> 
</head>
<body>
    <main>

          <nav class="floating-logo">
          <a href="index.php">
          <!-- <img src='img/logo.png'> -->
          <h1>SOG - Shella's Outdoor Gear</h1>
          </a>
          </nav>

          <nav class="floating-menu">
          <ul>
            <li><a href="index.php"><font size="5">home</font></a></li>
             <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn"><font size="5">kategori</font></a>
              <div class="dropdown-content">
                <a href="celana.php">Celana Gunung</a>
                <a href="tenda.php">Tenda</a>
                <a href="sepatu.php">Sepatu</a>
                <a href="tas.php">Tas</a>
              </div>
            </li> 
            <li><font size="5">artikel</font></li>
            </ul>
            </nav>
            <nav class="floating-tool">
             <ul>
              <li class="dropdown">
				  <a href="javascript:void(0)" class="dropbtn"><img src="img/keranjang.png"></a>
              	<div class="dropdown-content">
              		<a href="keranjang.php">Keranjang</a>
              		<a href="checkout.php">Check Out</a>
              	</div>
              	</li>
              <?php
                if(isset($_SESSION['valid'])) {
                      echo "<li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropbtn\"><font size=\"5\">".$_SESSION['username']."</font>"."</a>";
                      echo "<div class=\"dropdown-content\">
                              <a href=\"pengaturan.php\">Pengaturan</a>
                              <a href=\"logout.php\">Logout</a>
                            </div></li>";
                }else{
					echo "<li class=\"dropdown\"><a href=\"javascript:void(0)\" class=\"dropbtn\"><font size=\"3\">Login</font>"."</a>";
                      echo "<div class=\"dropdown-content\">
                              <a href=\"login.php\">Login Member</a>
                              <a href=\"loginadmin.php\">Login Admin</a>
                            </div></li>";
//                        echo "<li><a href=\"login.php\">login</a></li>";
                                    }
              echo "</ul>"; ?>
              </nav>
    </main>

</body>
</html>