<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sewa as Sewa;
use App\Customer;
use App\Mobil;
use App\Http\Requests;
use Input, Validator, Redirect, DB, View;

class SewaController extends Controller
{
    public function index()
    {
    	# Tarik semua isi tabel mobil kedalam variabel
    	// $sewa = Sewa::all();
    	$sewa = Sewa::orderBy('tanggal')->paginate(10);
    	# Tampilkan View
    	return View::make('sewa.index', compact('sewa'));
    }

    public function baru() {

		# Mengambil data dari tabel Customer dan Mobil
		$customer 	= Customer::pluck('nama', 'id');	//Eloquent Query Laravel sama dengan SQL Inner Join untuk memanggil variabel isi tabel lain
		$mobil 		= Mobil::pluck('nama_mobil', 'id');	//Eloquent Query Laravel sama dengan SQL Inner Join untuk memanggil variabel isi tabel lain
		# Tampilkan View
		return view('sewa.buat')
					->with(['customer' => $customer, 'mobil' => $mobil]);
	}

	public function buat(Request $request) {

	// dd($request->all());
		# Isi kedalam database
		Sewa::create($request->all()); //Mengisi sesuai apa yang ada di Model
		# Kehalaman beranda dengan pesan sukses
		return Redirect('sewa')->withPesan('Transaksi Sewa baru berhasil ditambahkan.');
	// }

	}

	public function lihat($id) {
		# Ambil data dalam berdasarkan berdasarkan id
		$sewa = Sewa::find($id);
		# Tampilkan view
		return View::make('sewa.lihat', compact('sewa'));
	}

	public function ubah($id) {

		$customer 	= Customer::pluck('nama', 'id');	//Eloquent Query Laravel sama dengan SQL Inner Join untuk memanggil variabel isi tabel lain
		$mobil 		= Mobil::pluck('nama_mobil', 'id');	//Eloquent Query Laravel sama dengan SQL Inner Join untuk memanggil variabel isi tabel lain
		$sewa 		= Sewa::find($id);
		//return View::make('mobil.ubah', compact('jenis_mobil', 'mobil'));
		return view('sewa.ubah')
					->with(['customer' => $customer, 'mobil' => $mobil, 'sewa' => $sewa]);
	}

	public function ganti($id) {
		
		$input = Input::except('_method', '_token');	//Memasukkan ke dalam database kecuali 2 field di Model
		Sewa::whereId($id)->update($input);				//Mengubah isi tabel
		return Redirect('sewa')->withPesan('Transaksi Sewa  berhasil diubah.');
	}

	public function hapus($id) {
		# Hapus mobil berdasarkan id
		Sewa::find($id)->delete();
		# Kembali kehalaman yang sama dengan pesan sukses
		return Redirect::back()->withPesan('Transaksi Sewa berhasil dihapus.');
	}

	 public function cari(Request $request)
    {
    	dd($request);
        $cari = $request->get('q');
        $hasil = Sewa::where('customer_id', 'LIKE', '%' . $cari . '%')->paginate(10);

        return view('sewa.hasil', compact('cari'));
    }
}
