<html>
	<head>
		<title>Ubah Customer {{ $customer->nama }}</title>
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
		<h2>Ubah Informasi Customer</h2>
		<div class="container">
		<!-- Kita gunaka model karena kita akan mengubah data yang telah ada -->
		{{ Form::model($customer, array('route' => array('ganti customer', $customer->id), 'method' => 'PUT')) }}
		<div class="form-group">
			{{ Form::label('nama', 'Nama') }}
			<!-- Parameter kedua merupakan value, jadi terlihat terisi dengan data nama sebelumnya -->
			<br>
			{{ Form::text('nama', $customer->nama) }}
			<!-- Bila ada errors validasi letakkan disini 
			variabel errors ($errors) berasal dari Controller ['withErrors'] -->
			@if($errors->has('nama'))
				{{ $errors->first('nama') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('usia', 'Usia') }}
			<br>
			{{ Form::text('usia', $customer->usia) }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('usia'))
				{{ $errors->first('usia') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('alamat', 'Alamat') }}
			<br>
			{{ Form::textarea('alamat', $customer->alamat) }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('alamat'))
				{{ $errors->first('alamat') }}
			@endif
		</div>
			<br>
		<div class="form-group">	
			{{ Form::label('jenis_kelamin', 'Jenis Kelamin') }}
			<!-- Untuk select, parameter 1 = id, parameter 2 = option, parameter 3 = value -->
			<br>
			{{ Form::select('jenis_kelamin', $jenis_kelamin, $customer->jenis_kelamin) }}
			@if($errors->has('jenis_kelamin'))
				{{ $errors->first('jenis_kelamin') }}
			@endif
		</div>
			<br>
		<div class="form-group">	
			{{ Form::label('telepon', 'Telepon') }}
			<br>
			{{ Form::text('telepon', $customer->telepon) }}
			@if($errors->has('telepon'))
				{{ $errors->first('telepon') }}
			@endif
		</div>	
			<br>
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			<br>
			{{ Form::text('email', $customer->email) }}
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>	
			<br>
		<div class="form-group">	
			{{ Form::submit('Ubah', ['class' => 'btn']) }}
			{!! Form::reset('Reset', ['class' => 'btn']) !!}
			{{ Form::close() }}
		</div>
		<a href="{{ ('../customer') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke Customer</a>
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