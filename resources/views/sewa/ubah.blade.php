<html>
	<head>
		<title>Ubah Transaksi Sewa {{ $sewa->customer->nama }}</title>
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
		<h2>Ubah Informasi Transaksi Sewa</h2>
		<div class="container">
		<!-- Kita gunaka model karena kita akan mengubah data yang telah ada -->
		{{ Form::model($sewa, array('route' => array('ganti sewa', $sewa->id), 'method' => 'PUT')) }}
		<div class="form-group">
			{{ Form::label('customer_id', 'Nama Customer') }}
			<!-- Parameter kedua merupakan value, jadi terlihat terisi dengan data nama sebelumnya -->
			<br>
			{{ Form::select('customer_id', $customer) }}
			<!-- Bila ada errors validasi letakkan disini 
			variabel errors ($errors) berasal dari Controller ['withErrors'] -->
			
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('mobil_id', 'Nama Mobil') }}
			<br>
			{{ Form::select('mobil_id', $mobil) }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('nama_mobil'))
				{{ $errors->first('nama_mobil') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('tanggal', 'Tanggal Sewa') }}
			<!-- Untuk select, parameter 1 = id, parameter 2 = option, parameter 3 = value -->
			<br>
			{{ Form::date('tanggal', $sewa->tanggal) }}
			@if($errors->has('tanggal'))
				{{ $errors->first('tanggal') }}
			@endif
		</div>
			<br>
		<div class="form-group">	
			{{ Form::label('tarif_sewa', 'Tarif Sewa') }}
			<br>
			{{ Form::text('tarif_sewa', $sewa->tarif_sewa) }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('tarif_sewa'))
				{{ $errors->first('tarif_sewa') }}
			@endif
		</div>	
			<br>
		<div class="form-group">	
			{{ Form::submit('Ubah', ['class' => 'btn']) }}
			{!! Form::reset('Reset', ['class' => 'btn']) !!}
			{{ Form::close() }}
		</div>
		<a href="{{ ('../sewa') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke Transaksi Sewa</a>
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