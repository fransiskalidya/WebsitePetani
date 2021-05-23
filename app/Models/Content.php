<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;  //Model Eloquent
use App\Models\Content;

class Content extends Model
{
    protected $table="content"; // Eloquent akan membuat model content menyimpan record di tabel mahasiswas
    public $timestamp = false;
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable. *
     * @var array
     */
    protected $fillable = [ 
        'Judul',
        'Image',
        'Pengertian', 
        'Penyebab', 
        'Pencegahan', 
        'Tips',
    ]; 
};