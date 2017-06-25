<html>
	<head>
		<title>Transaksi Sewa {{ $sewa->nama }}</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
  		 <link href="../css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/table.css">
	</head>
	<body>
	<div class="page-header">
                <h1>
                    <center>SISTEM INFORMASI INDOJAYA MULTI RENTAL</center>
                    <center><img src="../img/logo.jpg" ></center>
                </h1>
            </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
            <div class="row">
            
            </div>
            </div>
            </div>

            <br>
            <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
            <center>
		<h2>Informasi Transaksi Sewa</h2>
		<p>Nama Customer: {{ $sewa->customer->nama }}</p>
		<p>Nama Mobil yang dipinjam : {{ $sewa->mobil->nama_mobil }}</p>
        <p>Tanggal Sewa : {{ date('d M Y', strtotime($sewa->tanggal)) }}</p>
		<p>Tarif Sewa : {{ $sewa->tarif_sewa }}</p>
		<br/>
		<a href="{{ ('../sewa')}}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke Transaksi Sewa</a>
</center>
</form>
	 </div>
        </div>
    </div>
     <footer class="well">
        <center><p>Copyright © Indojaya Multi Rental 2016</p></center>
      </footer>
</div>

     <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
  </body>
</html>