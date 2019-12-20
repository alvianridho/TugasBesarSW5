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
              <h1><a href="index.php">RDF Selfie</a></h1>

            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="active">
                      <a href="index.php">Home</a>
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
                        <li><a href="contact.php">Admin</a></li>
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
    <!-- end header --><?xml version="1.0"?>
	
	<div class="summary-list" style="width:400px;">
       <ul class="list">
		 </ul>
</div>

 <?php
					  require_once( "sparqllib.php" );
					  
					  $db = sparql_connect( "http://localhost:3030/rdfselfie/query" );
					  if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }
					  
					  sparql_ns("foaf", "http://xmlns.com/foaf/spec/");
					  sparql_ns("geo", "http://purl.org/geo/terms/URI");
					  
					  $sparql = "
						prefix mo:    <http://purl.org/ontology/mo/> 
						prefix geonames: <http://www.geonames.org/ontology#> 
						prefix rdf:   <http://www.w3.org/1999/02/22-rdf-syntax-ns#> 
						prefix foaf:  <http://xmlns.com/foaf/0.1/> 
						prefix dc:    <http://dublincore.org/documents/dcmi-namespace/> 
					SELECT ?type ?musicGroup ?countryCode ?birthday ?familyName ?gender ?givenName ?homepage ?project
						WHERE {
								?a dc:type ?type.
								?a mo:musicGroup ?musicGroup.
								?a geonames:countryCode ?countryCode.
								?a foaf:birthday ?birthday.
								?a foaf:familyName  ?familyName.
								?a foaf:gender ?gender.
								?a foaf:givenName ?givenName.
								?a foaf:homepage ?homepage.
								?a foaf:project  ?project.

							}
					  ";
					  $result = sparql_query( $sparql ); 
					   $fields =$result->field_array( $result );
					
					print "<table border=1 align=center>";
					print "<tr>";
					foreach( $fields as $field )
					{
						print "<th>$field</th>";
					}
					print "</tr>";
					while( $row = sparql_fetch_array( $result ) )
					{
						print "<tr>";
						foreach( $fields as $field )
						{
							print "<td>$row[$field]</td>";
						}
						print "</tr>";
					}
					print "</table>";
					?>
                    <br>
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
