<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            [
            'Judul' => 'Organisme Pengganggu Tanaman (OPT)',
            'Image' => 'img/blog/details/otp.jpg',
            'Pengertian' => 'Organisme pengganggu tanaman (OPT) adalah hewan atau tumbuhan baik berukuran mikro ataupun makro 
                             yang mengganggu, menghambat, bahkan mematikan tanaman yang dibudidayakan. Berdasarkan jenis seranganya 
                             OPT dibagi menjadi 3 kelompok, yaitu hama, vektor penyakit, dan gulma. Hama adalah hewan yang merusak 
                             secara langsung pada tanaman.',
            'Penyebab' => 'Hama terdapat beberapa jenis, diantaranya adalah insekta (serangga), 
                           moluska (bekicot, keong), rodenta (tikus), mamalia (babi), nematoda, dll. Serangan hama sangat terlihat 
                           dan dapat memberikan kerugian yang besar apabila terjadi secara massive. 
                           Vektor penyakit atau biasa disebut sebagai faktor pembawa penyakit adalah organisme yang memberikan gejala sakit, menurunkan imunitas, 
                           atau mengganggu metabolisme tanaman sehingga terjadi gejala abnormal pada sistem metabolisme tanaman tersebut. 
                           Beberapa vektor penyakit tanaman adalah virus, bakteri, dan cendawan. 
                           Sedangkan gulma bisa disebut juga sebagai kompetitor penyerap nutrisi daerah perakaran tanaman. Apabila pertumbuhan gulma lebih cepat 
                           dibandingkan tanaman, maka sudah dapat dipastikan tanaman yang dibudidayakan akan mengalami pertumbuhan yang tidak optimal. 
                           Beberapa jenis gulma bahkan ada yang memberikan efek racun pada perakaran tanaman, seperti kandungan metabolit sekunder (cairan) pada akar alang-alang.',
            'Pencegahan' => 'Sehubungan dengan konsep pertanian organik, maka tata cara pencegahan ataupun penganggulangan OPT harus menggunakan bahan-bahan organik dan teknis yang ramah lingkungan.',
            'Tips' => 'Selain menggunakan pestisida nabati, pencegahan dan penanggulangan dapat melalui kultur teknis dan predator hama. Kultur teknis adalah suatu perlakuan pada teknis budidaya tanaman untuk meningkatkan 
                       produktivitas dan mengurangi dampak serangan hama atau penyakit. Kultur teknis mulai dilakukan semenjak fase pembibitan tanaman hingga pemanenan. Beberapa contoh kegiatan kultur teknis diantaranya adalah 
                       menggunakan jarak tanam yang lebar, melakukan bera untuk tanaman sejenis atau satu famili, gilir varietas, dll. Sedangkan predator hama digunakan sebagai musuh alami hama yang menyerang tanaman. Setiap hama 
                       memiliki musuh alami atau pemangsanya masing-masing. Oleh karena itu, musuh alami perlu pertahankan secara alami di lahan atau dengan sengaja melepas musuh alami yang sudah dikembangbiakkan secara khusus.'
            ]
        ]);
    }
}
