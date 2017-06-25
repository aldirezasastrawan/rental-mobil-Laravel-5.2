<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $table = 'sewa'; // Penamaan tabel yang digunakan

    protected $fillable = ["customer_id", "mobil_id", "tanggal", "tarif_sewa"]; // MASS ASSIGNMENT (maksudnya buatkan field-field yang diperbolehkan menerima inputan)

    protected $guarded = ['_method', '_token']; //MASS ASSIGNMENT (maksudnya buatkan field-field yang tidak diperbolehkan menerima inputan)

    public function mobil()
    {
    	 return $this->belongsTo(Mobil::class,'mobil_id'); // relasi ke tabel mobil One to Many
    }

    public function customer()
    {
    	 return $this->belongsTo(Customer::class,'customer_id'); // relasi ke tabel customer One to Many
    }
}
