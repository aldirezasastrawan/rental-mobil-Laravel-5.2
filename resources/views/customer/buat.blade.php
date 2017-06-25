<html>
	<head>
		<title>Tambah Customer</title>
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
		<h2>Tambah Customer Baru</h2>
		<div class="container">
		<!-- Buka form inutan lalu ruju ke identitas route "buat" -->
		{{ Form::open(array('route' => 'buat customer')) }}
		<div class="form-group">
			{{ Form::label('nama', 'Nama') }}
			<br>
			{{ Form::text('nama') }}
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
			{{ Form::text('usia') }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('usia'))
				{{ $errors->first('usia') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('alamat', 'Alamat') }}
			<br>
			{{ Form::textarea('alamat') }}
			<!-- Penjelasan sama seperti diatas -->
			@if($errors->has('alamat'))
				{{ $errors->first('alamat') }}
			@endif
		</div>
			<br>
		<div class="form-group">
			{{ Form::label('jenis_kelamin', 'Jenis Kelamin') }}
			<br>
			{{ Form::select('jenis_kelamin', $jenis_kelamin) }}
			@if($errors->has('jenis_kelamin'))
				{{ $errors->first('jenis_kelamin') }}
			@endif
		</div>	
			<br>
		<div class="form-group">	
			{{ Form::label('telepon', 'Telepon') }}
			<br>
			{{ Form::text('telepon') }}
			@if($errors->has('telepon'))
				{{ $errors->first('telepon') }}
			@endif
		</div>	
			<br>
		<div class="form-group">	
			{{ Form::label('email', 'Email') }}
			<br>
			{{ Form::text('email') }}
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>	
			<br>
		<div class="form-group">
			{{ Form::submit('Buat', ['class' => 'btn']) }}
			{!! Form::reset('Reset', ['class' => 'btn']) !!}
			{{ Form::close() }}
		</div>
		<a href="{{ ('customer') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke Customer</a>
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