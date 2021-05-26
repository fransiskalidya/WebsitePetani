<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Petani_BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $petani_barang = [
            [
                'petani_id'  => 12,
                'barang_id'  => 1,
                'harga'      => '50.000'
            ],
            [
                'petani_id'  => 12,
                'barang_id'  => 2,
                'harga'      => '50.000'
            ],
            [
                'petani_id'  => 123,
                'barang_id'  => 3,
                'harga'      => '50.000'
            ],
            [
                'petani_id'  => 1234,
                'barang_id'  => 1,
                'harga'      => '50.000'
            ]
        ];
        DB::table('petani_barang')->insert($petani_barang);
    }
}
