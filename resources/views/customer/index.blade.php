<html>
	<head>
		<title>CUSTOMER - INDOJAYA MULTI RENTAL</title>
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
		<h1>Daftar Customer</h1>
		<!-- Siapkan variabel pesan untuk menampilkan nilai variabel yang diterima dari controller -->
		@if(Session::has('pesan'))
			{{ Session::get('pesan') }}
		@endif
		<!-- Jika tabel customer memiliki isi, tampilkan isi berikut -->
		@if($customer->count())
		<!-- Siapkan tombol untuk membuat customer baru -->
		<p><a href="{{ ('buat customer') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Tambah</a></p>
		<table class="table table-striped table-hover table-reflow">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Usia</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Telepon</th>
					<th>Email</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<!-- Lakukan Perulangan untuk menampilkan seluruh isi tabel -->
				@foreach($customer as $data)
				<tr>
					<td>{{ $data->id }}</td>					
					<td>{{ $data->nama }}</td>
					<td>{{ $data->usia }}</td>
					<td>{{ $data->alamat }}</td>
					<td>{{ $data->jenis_kelamin }}</td>
					<td>{{ $data->telepon }}</td>
					<td>{{ $data->email }}</td>
					<!-- Siapkan tombol untuk edit dan hapus item tertentu -->
					<td>
						<a href="{{ route('lihat customer', $data->id) }}">Lihat</a>||
						<a href="{{ route('ubah customer', $data->id) }}">Edit</a>||
						<a href="{{ route('hapus customer', $data->id) }}">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<p><a href="{{ ('../public/') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke index</a></p>
		<!-- Sedangkan, bila tidak ada isinya, tampilkan isi berikut -->
		@else
		<p>Anda belum memiliki isi pada tabel customer.</p>
		<p><a href="{{ route('baru customer') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Tambah</a></p>
		<p><a href="{{ ('../public/') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke index</a></p>
		@endif
		</center>
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