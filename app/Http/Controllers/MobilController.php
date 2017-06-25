<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil as Mobil;
use App\Http\Requests;
use Input, Validator, Redirect, DB, View;

class MobilController extends Controller
{
    # GET localhost:8000/mobil
	public function index() 
	{
		# Tarik semua isi tabel mobil kedalam variabel
		// $mobil = Mobil::all();
		$mobil = Mobil::orderBy('tarif_sewa')->paginate(10); 
		# Tampilkan View
		return View::make('mobil.index', compact('mobil'));
	}

	# GET localhost:8000/buat
	public function baru() {
		# Buat dropdown jenis kelamin
		$jenis_mobil = array(
			'Sedan' => 'Sedan', 
			'Mini Bus' => 'Mini Bus',
			'City Car' => 'City Car',
			'SUV' => 'SUV');
		# Tampilkan halaman pembuatan mobil
		return View::make('mobil.buat', compact('jenis_mobil'));
	}

	# POST localhost:8000/buat
	public function buat() {
		# Tarik semua inputan dari form kedalam variabel input
		$input = Input::all();
		# Buat aturan validasi
		$aturan = array(
			'plat_nomor' => 'required', 
			'nama_mobil' => 'required', 
			'tarif_sewa' => 'required'
		);
		# Buat pesan error validasi manual
		$pesan = array(
			'plat_nomor.required' => 'Inputan Plat Nomor wajib diisi.',
			'plat_nomor.min' => 'Inputan Plat Nomor minimal 3 karakter.',
			'nama_mobil.required' => 'Inputan Nama Mobil wajib diisi.',
			'tarif_sewa.required' => 'Inputan Tarif Sewa wajib diisi.'
		);
		# Validasi
		$validasi = Validator::make($input, $aturan, $pesan);
		# Bila validasi gagal
		if($validasi->fails()) {
			# Kembali kehalaman yang sama dengan pesan error
			return Redirect::back()->withErrors($validasi)->withInput();
		# Bila validasi sukses
		} else {
			# Buatkan variabel tiap inputan
			$plat_nomor = Input::get('plat_nomor');
			$nama_mobil = Input::get('nama_mobil');
			$jenis_mobil = Input::get('jenis_mobil');
			$tarif_sewa = Input::get('tarif_sewa');
			# Isi kedalam database
			Mobil::create(compact('plat_nomor', 'nama_mobil', 'jenis_mobil', 'tarif_sewa'));
			# Kehalaman beranda dengan pesan sukses
			return Redirect('mobil')->withPesan('Mobil baru berhasil ditambahkan.');
		}

	}

	# GET localhost:8000/lihat/{id}
	public function lihat($id) {
		# Ambil data dalam berdasarkan berdasarkan id
		$mobil = Mobil::find($id);
		# Tampilkan view
		return View::make('mobil.lihat', compact('mobil'));
	}

	# GET localhost:8000/ubah/{id}
	public function ubah($id) {
		# Buat dropdown jenis kelamin
		$jenis_mobil = array(
			'Sedan' => 'Sedan', 
			'Mini Bus' => 'Mini Bus',
			'City Car' => 'City Car',
			'SUV' => 'SUV');
		# Tentukan mobil yang ingin diubah berdasarkan id
		$mobil = Mobil::find($id);
		# Tampilkan view
		return View::make('mobil.ubah', compact('jenis_mobil', 'mobil'));
	}

	# PUT localhost:8000/ubah/{id}
	public function ganti($id) {
		# Tarik semua inputan dari form kedalam variabel input
		$input = Input::all();
		# Buat aturan validasi
		$aturan = array(
			'plat_nomor' => 'required', 
			'nama_mobil' => 'required', 
			'tarif_sewa' => 'required'
		);
		# Buat pesan error validasi manual
		$pesan = array(
			'plat_nomor.required' => 'Inputan Plat Nomor wajib diisi.',
			'plat_nomor.min' => 'Inputan Plat Nomor minimal 3 karakter.',
			'nama_mobil.required' => 'Inputan Nama Mobil wajib diisi.',
			'tarif_sewa.required' => 'Inputan Tarif Sewa wajib diisi.'
		);
		# Validasi
		$validasi = Validator::make($input, $aturan, $pesan);
		# Bila validasi gagal
		if($validasi->fails()) {
			# Kembali kehalaman yang sama dengan pesan error
			return Redirect::back()->withErrors($validasi)->withInput();
		# Bila validasi sukses
		} else {
			# Ubah isi database berdasarkan id
			$ganti = Mobil::find($id);

			$ganti->plat_nomor			= Input::get('plat_nomor');
			$ganti->nama_mobil 			= Input::get('nama_mobil');
			$ganti->jenis_mobil 		= Input::get('jenis_mobil');
			$ganti->tarif_sewa 			= Input::get('tarif_sewa');
			$ganti->save();
			# Kehalaman beranda dengan pesan sukses
			return Redirect('mobil')->withPesan('Mobil berhasil diubah.');
		}
	}

	# DELETE localhost:8000/hapus/{id}
	public function hapus($id) {
		# Hapus mobil berdasarkan id
		Mobil::find($id)->delete();
		# Kembali kehalaman yang sama dengan pesan sukses
		return Redirect::back()->withPesan('Mobil berhasil dihapus.');
	}
}
?>