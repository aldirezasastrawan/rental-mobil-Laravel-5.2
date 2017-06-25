
<?php
Route::get('/', function () {
    return view('welcome');
});
# Halaman muka, untuk menampilkan semua data yang ada.

//Customer
Route::get('customer', array('as' => 'beranda customer', 'uses' => 'CustomerController@index'));

//Mobil
Route::get('mobil', array('as' => 'beranda', 'uses' => 'MobilController@index'));

//Sewa
Route::get('sewa', array('as' => 'beranda', 'uses' => 'SewaController@index'));

# Halaman yang berisi Form inputan Customer baru [localhost:8000/buat]

//Customer
Route::get('buat customer', array('as' => 'baru customer', 'uses' => 'CustomerController@baru_customer'));

//Mobil
Route::get('buat mobil', array('as' => 'baru mobil', 'uses' => 'MobilController@baru'));

//sewa
Route::get('buat sewa', array('as' => 'baru sewa', 'uses' => 'SewaController@baru'));

# Memproses Form lalu mengirimnya kedalam database [localhost:8000/buat]

//Customer
Route::post('buat customer', array('as' => 'buat customer', 'uses' => 'CustomerController@buat_customer'));

//Mobil
Route::post('buat mobil', array('as' => 'buat mobil', 'uses' => 'MobilController@buat'));

//sewa
Route::post('buat sewa', array('as' => 'buat sewa', 'uses' => 'SewaController@buat'));

# Menampilkan Customer perorangan [localhost:8000/lihat/{id}]

//Customer
Route::get('lihat customer/{id}', array('as' => 'lihat customer', 'uses' => 'CustomerController@lihat'));

//Mobil
Route::get('lihat/{id}', array('as' => 'lihat', 'uses' => 'MobilController@lihat'));

//Sewa
Route::get('lihat sewa/{id}', array('as' => 'lihat sewa', 'uses' => 'SewaController@lihat'));

# Form untuk mengubah isi Customer dalam database [localhost:8000/ubah/{id}]

//Customer
Route::get('ubah customer/{id}', array('as' => 'ubah customer', 'uses' => 'CustomerController@ubah_customer'));

//Mobil
Route::get('ubah mobil/{id}', array('as' => 'ubah', 'uses' => 'MobilController@ubah'));

//Sewa
Route::get('ubah sewa/{id}', array('as' => 'ubah sewa', 'uses' => 'SewaController@ubah'));

# Memproses Form lalu mengirim yang baru kedalam database [localhost:8000/ubah/{id}]

//Customer
Route::put('ubah customer/{id}', array('as' => 'ganti customer', 'uses' => 'CustomerController@ganti_customer'));

//Mobil
Route::put('ubah mobil/{id}', array('as' => 'ganti mobil', 'uses' => 'MobilController@ganti'));

//Sewa
Route::put('ubah sewa/{id}', array('as' => 'ganti sewa', 'uses' => 'SewaController@ganti'));

# Tindakan untuk menghapus Customer [localhost:8000/{id}/hapus]

//Customer
Route::get('hapus customer/{id}', array('as' => 'hapus customer', 'uses' => 'CustomerController@hapus'));

//Mobil
Route::get('hapus/{id}', array('as' => 'hapus', 'uses' => 'MobilController@hapus'));

//Sewa
Route::get('hapus sewa/{id}', array('as' => 'hapus sewa', 'uses' => 'SewaController@hapus'));



// Route::get('cari', 'SewaController@cari');

?>