<html>
	<head>
		<title>MOBIL - INDOJAYA MULTI RENTAL</title>
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
		<h1>Daftar Mobil Rental</h1>
		<!-- Siapkan variabel pesan untuk menampilkan nilai variabel yang diterima dari controller -->
		@if(Session::has('pesan'))
			{{ Session::get('pesan') }}
		@endif
		<!-- Jika tabel mobil memiliki isi, tampilkan isi berikut -->
		@if($mobil->count())
		<!-- Siapkan tombol untuk membuat mobil baru -->
		<p><a href="{{ route('baru mobil') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Tambah</a></p>
		
  			<table class="table table-striped table-hover table-reflow">
			<thead>
				<tr>
					<th>Plat Nomor</th>
					<th>Nama Mobil</th>
					<th>Jenis Mobil</th>
					<th>Tarif Sewa</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<!-- Lakukan Perulangan untuk menampilkan seluruh isi tabel -->
				@foreach($mobil as $data)
				<tr>					
					<td>{{ $data->plat_nomor }}</td>
					<td>{{ $data->nama_mobil }}</td>
					<td>{{ $data->jenis_mobil }}</td>
					<td>{{ $data->tarif_sewa }}</td>
					<!-- Siapkan tombol untuk edit dan hapus item tertentu -->
					<td>
						<a href="{{ route('lihat', $data->id) }}">Lihat</a>||
						<a href="{{ route('ubah', $data->id) }}">Edit</a>||
						<a href="{{ route('hapus', $data->id) }}">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		<p><a href="{{ ('../public/') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke index</a></p>
		<!-- Sedangkan, bila tidak ada isinya, tampilkan isi berikut -->
		@else
		<p>Anda belum memiliki isi pada tabel mobil.</p>
		<p><a href="{{ route('baru mobil') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Tambah</a></p>
		<p><a href="{{ ('../public/') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke index</a></p>
			</center>
		@endif

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