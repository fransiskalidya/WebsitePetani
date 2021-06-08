<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPetani extends Model
{
    use HasFactory;
    protected $table = "datapetani";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'no_tlpn',
    ];

    public function barang()
    {
        return $this->belongsToMany(Barang::class, 'petani_barang', 'petani_id', 'barang_id')->withPivot('harga');
    }
    public function pesanan()
    {
        return $this->hasMany('App\Models\Pesanan','id_petani', 'id');
    }
}
