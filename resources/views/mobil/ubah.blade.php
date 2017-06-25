<html>
	<head>
		<title>Ubah Mobil {{ $mobil->plat_nomor }}</title>
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
		<h2>Ubah Informasi Mobil</h2>
		<div class="container">
		<!-- Kita gunaka model karena kita akan mengubah data yang telah ada -->
		{{ Form::model($mobil, array('route' => array('ganti mobil', $mobil->id), 'method' => 'PUT')) }}
		<div class="form-group">
			{{ Form::label('plat_nomor', 'Plat Nomor') }}
			<!-- Parameter kedua merupakan value, jadi terlihat terisi dengan data nama sebelumnya -->
			<br>
			{{ Form::text('plat_nomor', $mobil->plat_nomor) }}
			<!-- Bila ada errors validasi letakkan disini 
			variabel errors ($errors) berasal dari Controller ['withErrors'] -->
			@if($errors->has('plat_nomor'))
				{{ $errors->first('plat_nomor') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('nama_mobil', 'Nama Mobil') }}
			<br>
			{{ Form::text('nama_mobil', $mobil->nama_mobil) }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('nama_mobil'))
				{{ $errors->first('nama_mobil') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('jenis_mobil', 'Jenis Mobil') }}
			<!-- Untuk select, parameter 1 = id, parameter 2 = option, parameter 3 = value -->
			<br>
			{{ Form::select('jenis_mobil', $jenis_mobil, $mobil->jenis_mobil) }}
			@if($errors->has('jenis_mobil'))
				{{ $errors->first('jenis_mobil') }}
			@endif
		</div>
			<br>
		<div class="form-group">	
			{{ Form::label('tarif_sewa', 'Tarif Sewa') }}
			<br>
			{{ Form::text('tarif_sewa', $mobil->tarif_sewa) }}
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
		<a href="{{ route('beranda') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke Mobil</a>
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