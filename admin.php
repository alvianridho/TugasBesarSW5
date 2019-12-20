<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Admin</title>
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
                      <a href="index1.php">Home</a>
                    </li>
                    <li>
                      <a href="rdfkelompoklain.php">Rdf Kelompok Lain</a>
                    </li>
                    <li class="dropdown">
                    <a href="#">admin</a>
					  <ul class="dropdown-menu">
                        <li><a href="admin.php">Admin</a></li>
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

    <section id="content">
      <div class="container">
        <div class="row">
		<div align="center">
        <div align="center">
        <font size="10"><b>Data User</b></font><br><br>
        <h6>
            <p>
                <a href="tambah.php">Tambah Data</a>
            </p>
        </h6>
        <table width="1000" border="2" cellpadding="1" cellspacing="1">
            <tr>
                <th >ID</th>
                <th >Nama</th>
                <th >Jurusan</th>
                <th >Alamat</th>
                <th >Telepon</th>
                <th >Username</th>
                <th >Password</th>
                <th >Opsi</th>
            </tr>
            <?php
                include 'koneksi.php';
                $query = "SELECT*FROM mahasiswa ORDER BY id_mahasiswa ASC";
                $statement = $dbConn->prepare($query);
                $statement->execute();
                $count = $statement->rowCount();
                if ($count == 0) {
                    echo '<tr align="center"><td colspan="8">Tidak ada data!</td></tr>';
                } else {
                    while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr class="text-center">';
                        echo '<td>' . $data['id_mahasiswa'] . '</td>';
                        echo '<td>' . $data['nama'] . '</td>';
                        echo '<td>' . $data['jurusan'] . '</td>';
                        echo '<td>' . $data['alamat'] . '</td>';
                        echo '<td>' . $data['telepon'] . '</td>';
                        echo '<td>' . $data['username'] . '</td>';
                        echo '<td>' . $data['password'] . '</td>';
                        echo '<td><a href="edit.php?id=' . $data['id_mahasiswa'] . '">Edit</a> &nbsp; <a href="hapus.php?id=' . $data['id_mahasiswa'] . '" onclick="return confirm(\'Anda akan menghapus ' . $data['nama'] . ' dari database?\')">Hapus</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
		  </table>
		</div>    
	<div class="span6">			
	</div>
    </section>


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
