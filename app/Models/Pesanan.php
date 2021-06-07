<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public function dataPetani()
    {
        return $this->belongsTo(DataPetani::class);
    }

    public function pesananDetail()
    {
        return $this->hasMany(PesananDetail::class);
    }
}
