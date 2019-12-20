<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Car Id</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
  <link href="css/style.css" rel="stylesheet"/>
  <link href="css/bg.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="img/3.jpg" />
</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top"></div>
      <div class="container">
        <div class="rownomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.php"> <img src="img/id.png" width="200px" height="200px"> </a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a>Home</a>
                    </li>
                    <li>
                      <a>Rdf Kelompok Lain</a>
                    </li>
					<li class="dropdown">
                    <a href="#">Contact</a>
					  </ul>
					</li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- /section intro -->
	<h3 align="center">LOGIN</h3>
    <?php
    session_start();
    include 'koneksi.php';
    $msg = "";
    if (isset($_POST["masuk"])) {
        $query = "SELECT * FROM mahasiswa WHERE username = :username AND password = :password";
        $statement = $dbConn->prepare($query);
        $statement->execute(
            array(
                'username'  =>  $_POST["username"],
                'password'  =>  $_POST["password"]
            )
        );
		
        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION["username"] = $_POST["username"];
            header("location:index1.php");
        } else {
            $msg ="Username dan password salah!";
        }
    }
    ?>
 
	<div class="kotak_login">
		<p class="tulisan_login" align="center">Silahkan login</p>
 
		<h5 class="card-title text-center"></h5>	
                        <form class="form-signin" action="index.php" method="post" align="center">
                            <div class="form-label-group" >
                                <label for="inputUsername">Username</label>
								<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

                            </div>
                            <div class="form-label-group">
								<label for="inputPassword" >Password</label>
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>
                            <input type="submit" name="masuk" value="Masuk" align="center">
                        </form>
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index1.php">kembali</a>
				<p>Belum Punya Akun Buat di sini?? <a class="link" href="tambah.php" bgcolor="blue">Buat Akun</a></p>
			</center>
		</form>
	</div>	
		<style>
			h1,h2,p,a{
				font-family: sans-serif;
				font-weight: normal;
			}
		 
			.jam-digital {
				overflow: hidden;
				width: 330px;
				margin: 20px auto;
				border: 5px solid #505050;
			}
			.kotak{
				float: left;
				width: 110px;
				height: 100px;
				background-color: white;
			}
			.jam-digital p {
				color: black;
				font-size: 36px;
				text-align: center;
				margin-top: 30px;
			}
		 
		 
		</style>
 
		<div class="jam-digital">
			<div class="kotak">
				<p id="jam"></p>
				<h6 align="center">Jam</h6>
			</div>
			<div class="kotak">
				<p id="menit"></p>
				<h6 align="center">Menit</h6>
			</div>
			<div class="kotak">
				<p id="detik"></p>
				<h6 align="center">Detik</h6>
			</div>
		</div>
		 
		<script>
			window.setTimeout("waktu()", 1000);
		 
			function waktu() {
				var waktu = new Date();
				setTimeout("waktu()", 1000);
				document.getElementById("jam").innerHTML = waktu.getHours();
				document.getElementById("menit").innerHTML = waktu.getMinutes();
				document.getElementById("detik").innerHTML = waktu.getSeconds();
			}
		</script>
		<script type='text/javascript' class="script" align="center">
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
		</script>
   <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h5><a href="index.html">Contact Us</a></h5>
              </div>
              <address>
							  <strong>Semantik Web Inc.</strong><br>
  							Ilmu Komputer,Universitas Sumatera Utara<br>
  							Medan 20155 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> 0812001101010<br>
                <i class="icon-envelope-alt"></i> email : kelompok2@gmail.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5><a href="index.html">Nama Kelompok</a></h5>
              <ul class="link-list">
                <li><a href="#">Muhammad Zulhamuddin Harahap (181401012)</a></li>
                <li><a href="#">Alvian Ridho Pramudyan (181401027)</a></li>
                <li><a href="#">Revaldi Irham Syaputra (181401030</a></li>
                <li><a href="#">Muhammad Afis Syah Habibi (181401060)</a></li>
              </ul>

            </div>
          </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>
