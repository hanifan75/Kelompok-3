<html lang="en">
	<head>
		<title>Profil</title>
       <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <script type="text/javascript"></script>      
                <link rel="stylesheet" href="css/bootstrap.css" >


		
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"> 
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/jquery.googlemaps1.01.js"></script>
		<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;hl=en&amp;sensor=true&amp;key=ABQIAAAAWCGzSMrk7YDL2KSdECDFthRCU6CW1wRB4NQsX5PSi053h5zzZhQIZ5ivn4VAQx53xyYuNrvkOmgO1w" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			   $('#map_canvas').googleMaps({
				   latitude: 	5.5575373,
						longitude:  95.3259311,
						markers: {
                                latitude: 	5.5575373,
						longitude:  95.3259311,
			             }
			   });
			});
		</script>
	</head>
    <body id="page5">
	<body>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
            
                <!-- Tampilkan brand dan toggle jika mobile view -->
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> <!-- end button -->

                    <a href="#" class="navbar-brand">
                        <strong><span style="color: green;">AL</span> <span style="color: #26c8ce;">FATIH</span></strong>
                    </a> <!-- end brand -->
                </div> <!-- end header -->

                <!-- menu untuk toggle -->
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav">
							<li><a href="Profil3">Profil</a></li>
                            <li><a href="Jadwal3">Jadwal</a></li>
							<li><a href="contact3" >Contact</a></li>
							<li><a href="Home-pasien">Beranda</a></li>
                    </ul>
                    <a href="index" class="navbar-btn btn-danger btn pull-right"><span class="glyphicon glyphicon-log-out"></span>&nbsp&nbsp&nbspLogout</a>
                
                </div> <!-- end collapse -->
            </div> <!-- end container -->
        </nav> <!-- end of navigation -->     
<!--==============================content================================-->
		    <br><br><br><br>
        <br>
        <br>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text">
            <div class="well">
                <section id="content">
			<div class="main">
				<div class="indent-left">
					<div class="wrapper">
						<article class="col-1">
							<h3>Our Address</h3>
							<div class="p1">
								<figure class="img-border">
									<div id="map_canvas"></div>
								</figure>
							</div>
							<dl>
							<dt>Jln. T. Daud Beureuh No.3, Beurawe-Banda Aceh</dt>
							</dl>
						</article>
                        
						<article class="col-2">
                            <form id="contact-form">
							<h2>
				            <label>
                            <span><dt>dr.Muhammad Al-fatih,SP MK,Sp THT-Kl</dt> </span>
				            </label>
		                    <label>
                            <dt>Spesialis Telinga, Hidung dan Tenggorokan</dt>
				            </label>
                            <label>
                            <dt><span>Telp:</span>(0651)8011011</dt>
				            </label>		
                            </h2>
						</article>
					</div>
				</div>
			</div>
		</section>
            </div>
          </div>
        </div>
    </div>
			 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script> 
    </body>
</html>