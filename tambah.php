<?php
    include 'koneksi.php';
    $msg_succ = "";

    if(isset($_POST["tambah"])){
        $query = "INSERT INTO mahasiswa (id_mahasiswa, nama, jurusan, alamat, telepon, username, password) VALUES(:id_mahasiswa, :nama, :jurusan, :alamat, :telepon, :username, :password)";
        $statement = $dbConn->prepare($query);
        $statement->execute(
            array(
                'id_mahasiswa' => $_POST["id_mahasiswa"],
                'nama' => ucwords($_POST["nama"]),
                'jurusan' => $_POST["jurusan"],
                'alamat' => $_POST["alamat"],
                'telepon' => $_POST["telepon"],
                'username' => $_POST["username"],
				'password' => $_POST["password"],
            )
        );
        $msg_succ = "Sukses!";
    }
?>


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
                      <a href="index.php">Home</a>
                    </li>
                    <li>
                      <a href="rdfkelompoklain.php">Rdf Kelompok Lain</a>
                    </li>
                    <li class="dropdown">
                    <a href="#">Daftar</a>
					  <ul class="dropdown-menu">
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
<body><br>
    <div align="center">
        <h3>Daftar</h3>
        <h5>
            <p>
                <a href="index.php">Beranda</a>
                <a>Tambah Data</a>
            </p>
        </h5>
        <form action="tambah.php" method="post">
            <table align="center">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id_mahasiswa"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="jurusan">
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="text" name="telepon"></td>
                </tr>
				<tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
				<tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="tambah" value="Tambah"></td>
					<td><a class="link" href="index.php">Login</a></td>
                    <td>
                        <?php
                            if(!empty($msg_succ)){
                                echo $msg_succ;
                            }
                        ?>
                    </td>
                </tr>
                    				
            </table>
        </form>
    </div>
</body>
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
