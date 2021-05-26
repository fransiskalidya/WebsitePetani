<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPetani extends Model
{
    use HasFactory;
    protected $table = "datapetani";
    public $timestamps = false;
    protected $primaryKey = 'id_petani';

    protected $fillable = [
        'id_petani',
        'nama',
        'alamat',
        'no_tlpn',
    ];

    public function barang(){
        return $this->belongsToMany(Barang::class, 'petani_barang', 'petani_id', 'barang_id')->withPivot('harga');
    }
}
