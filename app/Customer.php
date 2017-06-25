<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    # Penamaan tabel yang digunakan
	protected $table = 'customer';
	# MASS ASSIGNMENT (maksudnya buatkan field-field yang diperbolehkan menerima inputan)
	protected $fillable = array('nama', 'usia', 'alamat', 'jenis_kelamin', 'telepon', 'email');

	public function sewa()
    {

    	return $this->hasMany(Sewa::class);
    }
}
?>