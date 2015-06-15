<html lang="en">
	<head>
		<title>DataPasien</title>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <script type="text/javascript"></script>      
                <link rel="stylesheet" href="css/bootstrap.css" >
                <link rel="stylesheet" href="css/style1.css." >
		        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"> 
    </head>
   
	<body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <!-- Tampilkan brand dan toggle jika mobile view -->
        <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
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
							<li><a href="Profil2">Profil</a></li>
							<li><a href="Jadwal2">Jadwal</a></li>
							<li><a href="contact2" >Contact</a></li>
							<li><a href="datapasien" >Tabel Pasien</a></li>
                    </ul>
                  	<a href="index" class="navbar-btn btn-danger btn pull-right"><span class="glyphicon glyphicon-log-out"></span>&nbsp&nbsp&nbspLogout</a>
                </div> <!-- end collapse -->
            </div> <!-- end container -->
        </nav> <!-- end of navigation -->     
<!--==============================content================================-->
<div id="closed"></div> 
<div class="popup-wrapper" id="popup">
<div class="popup-container">
    <form action="datapasien1" method="post" class="popup-form">
    <P align="center">Pemberitahuan</P>
    <p>Nama :Reno Raditya.</p>
    <p>No.MR :35</p>
    <input type="submit" value="OK" > 
    </form>
    <a class="popup-close" href="#closed">X</a>
</div>
</div>  
        
        
        <br><br><br><br><br><br>
        
      <div class="col-md-6 col-md-offset-3 padding">
		<table class="table table-bordered table-hover"><br><br>
	    	<thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>No. MR</th>
            <th>Keterangan</th>
			<th>Tanggal Berobat</th>
            <th>Jam Berobat</th>
            <th>Action</th>
        </tr>
       </thead>
    	<tbody>
        <tr>
            <td>1</td>
            <td>Alyysa Citra</td>
            <td>27</td>
            <td>Selesai</td>
			<td>20-05-2015</td>
            <td>17.10</td>
            <td><a href="#" class="btn btn-primary sm"><span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbspKirim</a></td>
        </tr>
        
        <tr>
            <td>2</td>
            <td>Nada Octavira</td>
            <td>10</td>
            <td>Selesai</td>
			<td>20-05-2015</td>
            <td>18.00</td>
            <td><a href="#" class="btn btn-primary sm"><span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbspKirim</a></td>
        </tr>

        <tr>
            <td>3</td>
            <td>Reno Raditya</td>
            <td>35</td>
            <td>Datang</td>
			<td>20-05-2015</td>
            <td>18.40</td>
           <td><a href="#popup" class="btn btn-primary sm"><span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbspKirim</a></td>
        </tr>
			</tbody>
		</table> 
        </div>
        
        </div>
        </div> 
	<div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">Al-Fatih</p>
            </div>  
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>   
    </body>
</html>