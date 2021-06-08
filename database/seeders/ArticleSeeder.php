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
            'Judul' => 'Peluang, Tantangan, dan Strategi Pengembangan Dalam Pertanian Organik',
            'Image' => 'img/blog/details/artikel1.jpg',
            'Pengertian' => 'Pertanian organik merupakan teknik budidaya pertanian yang berorientasi pada pemanfaatan bahan-bahan alami (lokal)
                            tanpa menggunakan bahan-bahan kimia sintesis seperti pupuk, pestisida (kecuali bahan yang diperkenankan).  Teknik 
                            budidaya lainnya bertumpu pada peningkatan  produksi, pendapatan serta berwawasan lingkungan dan berkelanjutan. 
                            Tujuan utama pertanian organik adalah menyediakan produk-produk pertanian, terutama bahan pangan yang aman bagi 
                            kesehatan produsen dan konsumen dan tidak merusak lingkungan.  Slogan “hidup sehat” telah melembaga secara internasional 
                            sehingga produk-produk pertanian disyaratkan memiliki atribut jaminan mutu “ aman konsumsi (food safety attributes), 
                            kandungan nutrisi tinggi (nutritional attributes), dan ramah lingkungan (eco-labelling attributes).',
            'Penyebab' => 'Dalam pelaksanaan dan pengembangan sistim pertanian organik, beberapa masalah dan tantangan yang dihadapi adalah sebagai berikut :<br>
                        1. Pertanian organik menekankan  pemberian bahan organik (pupuk organik).
                        2. Produktivitas pertanian organik lebih rendah, sehingga jika tidak ada insentif harga untuk produk organik maka petani tidak akan tertarik berusaha tani pertanian organik.
                        3. Pengakuan sebagai pelaku pertanian organik harus melalui proses akreditasi dan sertifikasi. Pembentukan lembaga akreditasi untuk produk tiap sub sektor di Indonesia mungkin belum terpenuhi. Karena itu masih memerlukan waktu yang cukup untuk bisa mengembangkan pertanian organik tiap komoditas.
                        4. Biaya sertifikasi lahan/produk cukup mahal, tidak terjangkau petani perorangan.
                        5. Lembaga pendukung kelompok tani, penyuluh, lembaga pemasaran, serta pendukung lainnya harus dipersiapkan.',
            'Pencegahan' => 'Pengembangan sistem pertanian organik ke depan dalam jangka pendek lebih baik di arahkan ke daerah-daerah yang masih mempertahankan
                            sistem pertanian lokal-tradisional (daerah pegunungan, pedalaman).  Komoditas-komoditas yang dimungkinkan antara lain kopi, teh, padi-padi 
                            lokal bermutu baik, tanaman rempah dan obat serta sayuran dan buah-buahan. Kakao, merica, jambu mete (tanaman ekspor) juga potensial untuk 
                            diusahakan dalam pertanian organik. Sistem integrasi tanaman-ternak juga merupakan pilihan untuk dikembangkan kedepan. Pemerintah perlu mendorong 
                            terbentuknya lembaga sertifikasi produk pertanian organik yang dibutuhkan (yang belum ada).  Disamping itu pembentukan, pengembangan, dan penguatan 
                            lembaga-lembaga pendukung seperti kelompok tani, penyuluh, lembaga pemasaran (pasar khusus produk oragnik) perlu persiapan dan pembenahan. Selain itu 
                            diperlukan kegiatan sosialisasi untuk member pemahaman dan bekal tentang makna dan manfaat pertanian organik kepada masyarakat produsen (petani), konsumen (pengguna), 
                            pedagang, pemerintah daerah, penyuluh serta pelaku pertanian dan institusi terkait lainnya. Dukungan dalam bentuk kebijakan oleh pemerintah berupa insentif harga produk 
                            dan subsidi biaya sertifikasi lahan (produk) diperlukan dalam rangka pengembangan pertanian organik.',
            'Tips' => 'Untuk dapat bercocok tanam dengan sistem pertanian organik secara baik, maka harus dipersiapkan hal - hal berikut :
                    1. Lingkungan : Lokasi kebun harus bebas dari kontaminasi bahan-bahan sintetik. 
                    2. Bahan Tanaman : Varietas yang ditanam sebaiknya yang telah beradaptasi baik di daerah yang bersangkutan, dan tidak berdampak negative terhadap lingkungan.
                    3. Pola Tanam : Pola tanam hendaknya berpijak pada prinsip-prinsip konservasi tanah dan air, berwawasan lingkungan menuju pertanian berkelanjutan.
                    4. Pemupukan dan Zat Pengatur Tumbuh : Bahan organik sebagai pupuk yakni berasal dari kebun atau luar kebun yang diusahakan secara organik. Kotoran ternak, kompos sisa tanaman, pupuk hijau, jerami, mulsa lain, urin ternak, sampak kota (kompos) dan lain-lain bahan organik asalkan tidak tercemar bahan kimia sintetik atau zat-zat beracun. 
                    5. Pengelolaan Organisme Pengganggu : Semua pestisida buatan (kimia) tidak boleh digunakan, kecuali yang diizinkan dan terdaftar pada IFOAM . Pestisida hayati diperbolehkan.'
            ],

            [
                'Judul' => 'Tikus Sawah (Rattus-Rattus Argentiventer) dan Pengaruhnya Terhadap Pola Kerusakan Padi',
                'Image' => 'img/blog/details/artikel2.jpg',
                'Pengertian' => 'Salah satu kendala utama dalam budidaya tanaman padi adalah adanya serangan hama tikus (Rattus-rattus spp.), terutama pada musim tanam gadu atau musim kemarau. Berdasarkan peringkat 
                                yang dibuat oleh Gedes (Singleton & Petch, 1994) hama tikus di Indonesia menempati urutan pertama pada pertanaman padi, kemudian diikuti oleh penggerek batang, wereng coklat, dan walang 
                                sangit. Peringkat tersebut juga memperlihatkan bahwa di Asia Tenggara tikus juga menempati urutan pertama, diikuti oleh hama-hama utama yang lain dengan peringkat yang hampir sama. 
                                Berdasarkan laporan dari Laboratorioum pengamatan Hama dan Penyakit Trimurjo (1999), di Lampung Tengah dari musim tanam 1989/1990 sampai 1999/2000 ada 20 musim tanam, ternyata 19 musim 
                                tanam di antaranya terserang tikus dengan intensitas ringan sampai puso. Dengan kata lain, pada hampir semua musim tanam serangan tikus menjadi masalah dalam budidaya padi. Selanjutnya 
                                dilaporkan bahwa dari 19 musim tanam tersebut memang tidak semua kecamatan terserang, tetapi hal ini mengindikasikan bahwa serangan hama tikus pada pertanaman padi perlu untuk dikaji lebih lanjut. 
                                Kerugian yang diakibatkan oleh serangan tikus.',
                'Penyebab' => 'Pada pengamatan adaptasi berbagai varietas padi di tanah rawa tahun 2000 diperoleh hasil berupa pola kerusakan hasil yang khas yang disebabkan oleh serangan tikus sawah. Pertanaman yang 
                              terdiri atas enam varietas padi pada beberapa petak tersebut menunjukkan adanya pola kerusakan yang selalu mengikuti jenis atau varietas padi Dodokan. Varietas padi yang ditanam adalah Atomita, 
                              Cempo Lombok, IR64, Ciliwung, Dodokan, dan Cianjur.',
                'Pencegahan' => 'Pada tingkat serangan yang tinggi, tikus hanya menyisakan tanaman selebar satu meter dari pematang mengikuti arah pematang tersebut. Pola kerusakan yang ditimbulkan masih mirip dengan pola kerusakan 
                                yang umum (mirip stadion). Pernah terjadi hal yang menarik ketika varietas Dodokan ditanam membentuk satu baris lurus ternyata kerusakan oleh tikus terjadi sampai dengan rumpun yang berdekatan dengan 
                                pematang. Artinya tikus ternyata juga mau menyerang rumpun padi yang berada dekat dengan pematang kemungkinan karena tikus menyenangi varietas Dodokan. Bahkan yang lebih menarik adalah, pada musim tanam gadu 2002, 
                                di Lampung Tengah khususnya Kecamatan Punggur, serangan tikus pada fase vegetatif tidak menyisakan tanaman sama sekali (puso). Berdasarkan fakta di atas maka sangat mungkin untuk melakukan rekayasa terhadap perilaku 
                                tikus dalam menyerang atau merusak pertanaman padi, misalnya apakah pola umum kerusakan tanaman padi memang tetap (konsisten) menyerupai stadion sepakbola jika di suatu petak ditanami lebih dari satu varietas. 
                                Artinya apakah perilaku tikus sawah dalam merusak pertanaman padi bisa dipengaruhi oleh faktor yang lain, misalnya saja adalah kesukaan (preferensi) terhadap varietas tertentu.',
                'Tips' => 'Tikus lebih menyenangi daerah tengah petakan karena lebih aman dari pengganggu, contohnya adalah predator, kucing misalnya. Kucing dan beberapa predator lainnya tidak akan masuk ke dalam petakan sawah jika kondisi petakan 
                        berair. Pernah terjadi hal yang menarik pada musim tanam gadu 2002, serangan tikus tidak menyisakan tanaman (rumpun) sama sekali, jadi serangan sampai di daerah pinggir pematang. Penyebab mengapa tikus memperlihatkan perilaku 
                        makan yang demikian perlu diteliti lebih lanjut. Bisa saja hal ini disebabkan oleh kondisi pengairan yang kurang mencukupi untuk pertanaman padi. Kedua, Serangan tikus yang terjadi di rumpun padi yang berada di bagian tengah petakan 
                        sawah mungkin disebabkan oleh pengaruh (kadar) CO2 yang lebih tinggi di bagian tersebut. Tanaman menghasilkan gas CO2 pada malam hari dan gas ini akan terperangkap oleh rimbunnya pertanaman padi karena terjadinya turbulensi udara, berbeda 
                        keadaannya dengan daerah sekitar pematang yang sangat mudah bagi CO2 untuk bergerak. Berdasarkan hasil penelitian, tikus sangat sensitif terhadap kandungan dan laju aliran CO2 di suatu tempat (Niel et al., 2008), bahkan terhadap tipe atau 
                        kualitas air (Holm & Ladewig, 2006) sehingga tempat tersebut menjadi disenangi atau justru tidak disenangi oleh tikus.'  
            ],
                
            [
                'Judul' => 'Petunjuk Lapangan Pengendalian Hama Wereng Coklat',
                'Image' => 'img/blog/details/artikel3.jpg',
                'Pengertian' => 'Wereng coklat (Nilaparvata lugens Stal.) merupakan hama dari golongan insekta yang sangat merugikan usaha tani padi. 
                Serangan wereng coklat yang sangat berarti mengurangi hasil padi secara substansial, mengakibatkan kerugian di tingkat petani. Wereng menyerang pada smua stadia 
                pertumbuhan padi dengan cara menghisap cairan tanaman. Populasi tinggi wereng coklat dapat menyebabkan daun berubah kuning oranye sebelum menjadi coklat dan mati. 
                Kondisi ini disebut hopperburn, membunuh tanaman Wereng coklat juga dapat menularkan penyakit kerdil hampa dan kerdil rumput yang sampai saat ini tidak bisa diobati.
                Musuh alami wereng :
                1. laba-laba serigala
                2. kepik mirid
                3. kumbang koksinelid
                4. capung jarum
                5. kumbang paedorus
                6. belalang bertanduk panjang
                7. kumbang karabid.',
                'Penyebab' => 'Tanda-tanda serangan :
                1. Menguning dan mengering dengan cepat.
                2. Umumnya gejala terlihat mengumpul pada satu lokasi dan melingkar (hopperburn).
                3. Wereng coklat merupakan vektor (penular) penyakit virus kerdil rumput tanaman padi.',
                'Pencegahan' => 'Cara mencegah terjadinya serangan wereng coklat : 
                 1. Bersihkan gulma dari sawah dan areal sekitarnya.
                 2. Penggunaan varietas unggul tahan wereng contoh adalah Inpari 6, Inpari 13 , Inpari 18, Inpari19, Inpari 23.
                 3. Amati wereng di persemaian setiap hari, atau setiap minggu setelah tanam pindah pada batang dan permukaan air. Periksa kedua sisi persemaian. Pada tanaman yang lebih tua, pegang tanaman dan rebahkan sedikit dan tepuk dengan pelan dekat bagian basal untuk melihat kalau ada wereng yang jatuh ke permukaan air.
                 4. Gunakan perangkap cahaya.
                 5. Tanam jajar legowo.
                 6. Pemupukan berimbang.',
                'Tips' => 'Pengendalian Wereng coklat
                Wereng coklat (Nilapavarta lugens) merupakan salah satu hama penting pada tanaman padi, karena pada serangan yang berat dapat menyebabkan puso (gagal panen).
                a. Ekobiologi Wereng Coklat 
                   • Menyukai tanaman yg dipupuk N dosis tinggi dengan jarak tanam rapat.
                   • Siklus hidup 21-33 hari.
                   • Stadia rentan adalah sejak pembibitan hingga fase masak susu.
                   • Hama menghisap cairan tanaman pada sistem vaskuler (pembuluh).
                b. Tanda Serangan
                   1. Menguning dan mengering dengan cepat.
                   2. Umumnya gejala terlihat mengumpul pada satu lokasi dan melingkar (hopperburn). 
                   Selain sebagai hama, wereng coklat juga merupakan vektor (penular) penyakit virus kerdil rumput pada tanaman padi.
                c. Pencegahan 
                   1. Bersihkan gulma dari sawah dan areal sekitarnya.
                   2. Hindari penggunaan pestisida secara tidak tepat yang dapat menyebabkan terbunuhnya musuh alami.
                   3. Gunakan varietas tahan, Inpari 6, Inpari 13 , Inpari 18, Inpari19, Inpari 23.
                   4. Jumlah kritis: Pada kepadatan 1 wereng coklat/ batang atau kurang, masih ada peluang untuk bertindak guna menekan populasi.
                   5. Amati wereng di persemaian setiap hari, atau setiap minggu setelah tanam pindah pada batang dan permukaan air. Periksa kedua sisi persemaian. Pada tanaman yang lebih tua, pegang tanaman dan rebahkan sedikit dan tepuk dengan pelan dekat bagian basal untuk melihat kalau ada wereng yang jatuh ke permukaan air.
                   6. Gunakan perangkap cahaya pada waktu malam ketika terlihat ada gejala serangan wereng. Jangan tempatkan cahaya dekat persemaian atau sawah.
                   7. Jarak tanam jajar legowo.
                   8. Pemupukan berimbang.	
                d. Pengendalian secara mekanik dan fisik 
                   1. Genangi persemaian, selama sehari, sampai hanya ujung bibit saja yang terlihat.
                   2. Sapu persemaian dengan jaring untuk menghilangkan wereng (tapi tidak telurnya), terutama dari persemaian kering. Pada kepadatan wereng yang tinggi, penyapuan tidak akan dapat menghilangkan wereng dalam jumlah banyak dari bagian basal tanaman.
                e. Pengendalian hayati 
                   1. Bila musuh alami lebih banyak jumlahnya dibandingkan dengan wereng, risiko ledakan serangan kecil. Musuh alami wereng termasuk laba-laba,kumbang tanah,paedorus dan beberapa jenis parasitoid telur.
                   2. Pemanfaatan agensi hayati cendawan patogen seperti Beauveria sp, Metarhizium Anisoptiae, Verticillium.'  
            ]
        ]);
    }
}
