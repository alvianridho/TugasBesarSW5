<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Negara</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/background.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/icon.png" />
</head>

<body>

<?php
require_once( "sparqllib.php" );
 
$db = sparql_connect( "http://sparql.data.southampton.ac.uk/" );
if( !$db ) { print $db->errno() . ": " . $db->error(). "\n"; exit; }
sparql_ns( "rooms","http://vocab.deri.ie/rooms#" );
 
$sparql = "prefix geo:   <http://www.w3.org/2003/01/geo/wgs84_pos#> 
prefix gn:    <http://www.geonames.org/ontology#> 
prefix fo:    <http://xmlns.com/foaf/spec/#> 
prefix dc:    <http://dublincore.org/documents/dcmi-namespace/> 

SELECT ?type ?jenis ?tahun_pembuatan ?harga
WHERE {
		?a geo:type ?type.
  		?a geo:jenis ?jenis.
  		?a geo:tahun_pembuatan ?tahun_pembuatan.
  		?a geo:harga ?harga.
	}
";
$result = $db->query( $sparql ); 
if( !$result ) { print $db->errno() . ": " . $db->error(). "\n"; exit; }
 
$fields = $result->field_array( $result );
 
  ?>
  
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="https://web.facebook.com/zulhamuddin.zulham" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
              <h1><a href="index.html">Negara</a></h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.html">Home</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Galery</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Tahun 2017</a></li>
                        <li><a href="#">Tahun 2018</a></li>
                        <li><a href="#">Tahun 2019</a></li>
                        <li><a href="#">Tahun 2020</a></li>

                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Berita</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Ekonomi</a></li>
                        <li><a href="#">Hukum</a></li>
                        <li><a href="#">Opini</a></li>
						<li><a href="#">Peristiwa</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="download.php">Download</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Contact</a>
					  <ul class="dropdown-menu">
                        <li><a href="contact.html">Admin</a></li>
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
	
	<section class="intro-single" style="padding-top:12rem!important;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-16">
          <div class="title-single-box">
            <h1 class="title-single"> Hasil Query : 
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
		  </div>
  </div>
	<table class="w3-table-all w3-hoverable w3-center">
	   <tr>
	   <?php foreach ($fieldsnegara as $fieldnegara):?>
		<th style="background-color:salmon;">  <?php echo $fieldnegara; ?> </th> 
	   <?php endforeach; ?> 
	  </tr>
	 <?php while($rownegara= $resultnegara->fetch_array()): ?>
	  <tr>
		<?php foreach ($fieldsnegara as $fieldnegara):?>
		 <td><?php echo $rownegara[$fieldnegara]; ?></td>
		<?php endforeach; ?>
	  </tr>
	 <?php endwhile; ?>
	</table>
  
   <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><a href="index.html">Contact Kami</a></h3>
              </div>
              <address>
							  <strong>Semantik Web Inc.</strong><br>
  							Ilmu Komputer,Universitas Sumatera Utara<br>
  							Medan 20155 Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> 082274044179<br>
                <i class="icon-envelope-alt"></i> email : mhdzulhamuddin@gmail.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Nama Kelompok</h5>
              <ul class="link-list">
                <li><a href="#">Muhammad Zulhamuddin Harahap (181401012)</a></li>
                <li><a href="#">Fathur Rachman Nasution (181401060)</a></li>
                <li><a href="#">Muhammad Ichsanul Daffa Siregar (181401054)</a></li>
                <li><a href="#">Aditiya Wangsa (181401111)</a></li>
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

