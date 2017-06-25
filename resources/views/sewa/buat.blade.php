<html>
	<head>
		<title>Tambah Transaksi Sewa</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
  		 <link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/table.css">
	</head>
	<body>
	<div class="page-header">
                <h1>
                    <center>SISTEM INFORMASI INDOJAYA MULTI RENTAL</center>
                    <center><img src="img/logo.jpg" ></center>
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
		<h2>Tambah Transaksi Sewa Baru</h2>
		<div class="container">
		<!-- Buka form inutan lalu ruju ke identitas route "buat" -->
		{{ Form::open(array('route' => 'buat sewa')) }}
		<div class="form-group">
			{{ Form::label('customer_id', 'Nama Customer') }}
			<br>
			{{ Form::select('customer_id', $customer) }}
			<!-- Bila ada errors validasi letakkan disini 
			variabel errors ($errors) berasal dari Controller ['withErrors'] -->
			@if($errors->has('customer_id'))
				{{ $errors->first('customer_id') }}
			@endif
		</div>	
			<br>
		<div class="form-group">
			{{ Form::label('mobil_id', 'Nama Mobil') }}
			<br>
			{{ Form::select('mobil_id', $mobil) }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('mobil_id'))
				{{ $errors->first('mobil_id') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('tanggal', 'Tanggal Sewa') }}
			<br>
			{{ Form::date('tanggal') }}
			@if($errors->has('tanggal'))
				{{ $errors->first('tanggal') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('tarif_sewa', 'Tarif Sewa') }}
			<br>
			{{ Form::text('tarif_sewa') }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('tarif_sewa'))
				{{ $errors->first('tarif_sewa') }}
			@endif
		</div>	
			<br>
		<div class="form-group">
			{{ Form::submit('Buat', ['class' => 'btn']) }}
			{!! Form::reset('Reset', ['class' => 'btn']) !!}
			{{ Form::close() }}
		</div>
		<a href="{{ ('sewa') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke Transaksi Sewa</a>
	</center>
</form>
	 </div>
        </div>
    </div>
     <footer class="well">
        <center><p>Copyright © Indojaya Multi Rental 2016</p></center>
      </footer>
</div>

     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>