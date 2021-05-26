<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'nama_barang'   => 'Urea',
                'harga'         => '50.000',
            ],
            [
                'nama_barang'   => 'Za',
                'harga'         => '50.000',
            ],
            [
                'nama_barang'   => 'Phonska',
                'harga'         => '50.000',
            ],
            [
                'nama_barang'   => 'Organik',
                'harga'         => '50.000',
            ],
        ];
        
        DB::table('barang')->insert($barang);
    }
}
