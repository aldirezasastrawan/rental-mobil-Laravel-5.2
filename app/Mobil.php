<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    # Penamaan tabel yang digunakan
	protected $table = 'mobil';
	# MASS ASSIGNMENT (maksudnya buatkan field-field yang diperbolehkan menerima inputan)
	protected $fillable = array('plat_nomor', 'nama_mobil', 'jenis_mobil', 'tarif_sewa');

	public function sewa()
    {

    	return $this->hasMany(Sewa::class);
    }
}
?>
