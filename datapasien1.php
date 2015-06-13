<html lang="en">
	<head>
		<title>DataPasien</title>
        <meta charset="utf-8">
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
							<li><a href="Profil.php">Profil</a></li>
							<li><a href="Jadwal">Jadwal</a></li>
							<li><a href="contact" >Contact</a></li>
							<li><a href="datapasien.php" >Tabel Pasien</a></li>
                            <li><a href="logout" >Logout</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">                      
                      <a href="Notifikasi" >Notifikasi</a>                      
                    </form>
                
                </div> <!-- end collapse -->
            </div> <!-- end container -->
        </nav> <!-- end of navigation -->     
<!--==============================content================================-->
        <br><br><br><br>
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text">
            <div class="well">
            <h3 >Data Pasien</h3>
                
<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n) > th {
    }
    tbody > tr:nth-child(2n) > td, tbody > tr:nth-child(2n) > th {
    }
    table{
        width: 100%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #166283;
    }
</style>
                
<div id="boxmodel21"> 

    
<h4>
    <table border='2' >
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>No. MR</th>
            <th>Keterangan</th>
            <th>Waktu</th>
            <th>Action</th>
        </tr>
        </h4>
    
        <tr>
            <td>1</td>
            <td>Alyysa Citra</td>
            <td>27</td>
            <td>Selesai</td>
            <td>17.45</td>
            <td><a href="#">Kirim</a>            
        </tr>
        
        <tr>
            <td>2</td>
            <td>Nada Octavira</td>
            <td>10</td>
            <td>Selesai</td>
            <td>18.00</td>
            <td><a href="#">Kirim</a>            
        </tr>

        <tr>
            <td>3</td>
            <td>Reno Raditya</td>
            <td>35</td>
            <td>Selesai</td>
            <td>18.30</td>
           <td><a href="#">Kirim</a>          
        </tr>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>