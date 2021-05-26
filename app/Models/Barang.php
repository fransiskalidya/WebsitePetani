<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'harga',
        'nama_penerima',

    ];

    
    public function datapetani(){
        return $this->belongsToMany(DataPetani::class, 'petani_barang', 'barang_id', 'petani_id')->withPivot('harga');
    }
}
