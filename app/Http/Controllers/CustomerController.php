<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer as Customer;
use App\Http\Requests;
use Input, Validator, Redirect, DB, View;

class CustomerController extends Controller
{
    # GET localhost:8000/customer
	public function index() 
	{
		# Tarik semua isi tabel customer kedalam variabel
		$customer = Customer::all();
		# Tampilkan View
		return View::make('customer.index', compact('customer'));
	}

	# GET localhost:8000/buat
	public function baru_customer() {
		# Buat dropdown jenis kelamin
		$jenis_kelamin = array(
			'Laki-laki' => 'Laki-laki', 
			'Perempuan' => 'Perempuan');
		# Tampilkan halaman pembuatan customer
		return View::make('customer.buat', compact('jenis_kelamin'));
	}

	# POST localhost:8000/buat
	public function buat_customer() {
		# Tarik semua inputan dari form kedalam variabel input
		$input = Input::all();
		# Buat aturan validasi
		$aturan = array(
			'nama' => 'required|min:3', 
			'usia' => 'required',
			'alamat' => 'required', 
			'telepon' => 'required', 
			'email' => 'required|email'
		);
		# Buat pesan error validasi manual
		$pesan = array(
			'nama.required' => 'Inputan Nama wajib diisi.',
			'nama.min' => 'Inputan Nama minimal 3 karakter.',
			'usia.required' => 'Inputan Usia wajib diisi.',
			'alamat.required' => 'Inputan Alamat wajib diisi.',
			'telepon.required' => 'Inputan Telepon wajib diisi.',
			'email.required' => 'Inputan Email wajib diisi.',
			'email.email' => 'Inputan harus berupa Email.'
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
			$nama = Input::get('nama');
			$usia = Input::get('usia');
			$alamat = Input::get('alamat');
			$jenis_kelamin = Input::get('jenis_kelamin');
			$telepon = Input::get('telepon');
			$email = Input::get('email');
			# Isi kedalam database
			Customer::create(compact('nama', 'usia', 'alamat', 'jenis_kelamin', 'telepon', 'email'));
			# Kehalaman customer dengan pesan sukses
			return Redirect('customer')->withPesan('Customer baru berhasil ditambahkan.');
		}

	}

	# GET localhost:8000/lihat/{id}
	public function lihat($id) {
		# Ambil data dalam berdasarkan berdasarkan id
		$customer = Customer::find($id);
		# Tampilkan view
		return View::make('customer.lihat', compact('customer'));
	}

	# GET localhost:8000/ubah/{id}
	public function ubah_customer($id) {
		# Buat dropdown jenis kelamin
		$jenis_kelamin = array(
			'Laki-laki' => 'Laki-laki', 
			'Perempuan' => 'Perempuan');
		# Tentukan customer yang ingin diubah berdasarkan id
		$customer = Customer::find($id);
		# Tampilkan view
		return View::make('customer.ubah', compact('jenis_kelamin', 'customer'));
	}

	# PUT localhost:8000/ubah/{id}
	public function ganti_customer($id) {
		# Tarik semua inputan dari form kedalam variabel input
		$input = Input::all();
		# Buat aturan validasi
		$aturan = array(
			'nama' => 'required|min:3', 
			'usia' => 'required',
			'alamat' => 'required', 
			'telepon' => 'required', 
			'email' => 'required|email'
		);
		# Buat pesan error validasi manual
		$pesan = array(
			'nama.required' => 'Inputan Nama wajib diisi.',
			'nama.min' => 'Inputan Nama minimal 3 karakter.',
			'usia.required' => 'Inputan Usia wajib diisi.',
			'alamat.required' => 'Inputan Alamat wajib diisi.',
			'telepon.required' => 'Inputan Telepon wajib diisi.',
			'email.required' => 'Inputan Email wajib diisi.',
			'email.email' => 'Inputan harus berupa Email.'
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
			$ganti = Customer::find($id);

			$ganti->nama			= Input::get('nama');
			$ganti->usia 			= Input::get('usia');
			$ganti->alamat 			= Input::get('alamat');
			$ganti->jenis_kelamin 	= Input::get('jenis_kelamin');
			$ganti->telepon 		= Input::get('telepon');
			$ganti->email 			= Input::get('email');
			$ganti->save();
			# Kehalaman customer dengan pesan sukses
			return Redirect('customer')->withPesan('Customer berhasil dirubah.');
		}
	}

	# DELETE localhost:8000/hapus/{id}
	public function hapus($id) {
		# Hapus customer berdasarkan id
		Customer::find($id)->delete();
		# Kembali kehalaman yang sama dengan pesan sukses
		return Redirect::back()->withPesan('Customer berhasil dihapus.');
	}
}

?>