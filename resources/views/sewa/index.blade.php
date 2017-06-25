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
		<h1>Daftar Transaksi Sewa</h1>
		<!-- Siapkan variabel pesan untuk menampilkan nilai variabel yang diterima dari controller -->
		@if(Session::has('pesan'))
			{{ Session::get('pesan') }}
		@endif
		<!-- Jika tabel sewa memiliki isi, tampilkan isi berikut -->
		@if($sewa->count())
		<!-- Siapkan tombol untuk membuat sewa baru -->
		<p><a href="{{ route('baru sewa') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Tambah</a></p>
		
  			<table class="table table-striped table-hover table-reflow">
			<thead>
				<tr>
					<th>Nama Customer</th>
					<th>Nama Mobil</th>
					<th>Tanggal Sewa</th>
					<th>Tarif Sewa</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<!-- Lakukan Perulangan untuk menampilkan seluruh isi tabel -->
				@foreach($sewa as $data)
				<tr>			
					<td>{{ $data->customer->nama }}</td>
					<td>{{ $data->mobil->nama_mobil }}</td>
					<td>{{ date('d M Y', strtotime($data->tanggal)) }}</td>
					<td>{{ $data->tarif_sewa }}</td>
					<!-- Siapkan tombol untuk edit dan hapus item tertentu -->
					<td>
						<a href="{{ route('lihat sewa', $data->id) }}">Lihat</a>||
						<a href="{{ route('ubah sewa', $data->id) }}">Edit</a>||
						<a href="{{ route('hapus sewa', $data->id) }}">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
		<p><a href="{{ ('../public/') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Kembali ke index</a></p>
		<!-- Sedangkan, bila tidak ada isinya, tampilkan isi berikut -->
		@else
		<p>Anda belum memiliki isi pada tabel sewa.</p>
		<p><a href="{{ route('baru sewa') }}" style="border: 2px solid #ccc; border-radius: 5px; padding: 5px; background: #eaebec;text-decoration:none; ">Tambah</a></p>
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