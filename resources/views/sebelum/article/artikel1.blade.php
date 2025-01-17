@extends('sebelum.layouts.app')

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <h2 class="gold-text tm-welcome-header-2">
                        <span style="color: 7FAD39">PETANI</span>
                        <span style="color: black">KU</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        {{-- <li class="active"><a href="{{'/'}}">Home</a></li> --}}
                        <li class="active"><a href="{{'/'}}">Home</a></li>
                        <li ><a href="{{'/contact'}}">Contact</a></li>
                        <li><a href="{{route('dataPetani.tampil')}}">Data Penerima Subsidi</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Pengumuman</span>
                        </div>
                        <ul>
                            <li><a href="#">Sosialisasi Penanaman Lombok</a></li>
                            <li><a href="#">Sosialisasi Alat Perontok Padi</a></li>
                            <li><a href="#">Jadwal Pembagian Pupuk bulan Mei</a></li>
                            {{-- <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        {{-- <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h4>Widget cuaca</h4>
                            <div id="ml_5fa291f9">
                                <div style="padding:0;margin:0;" id="ml_5fa291f9_i" v='1.1' a='{"t":"v","lang":"id","ids":[],"a_dt_bg":"rgba(127,173,57,1)","a_dt_c":"#FFFFFF","a_wn_bg":"rgba(100,130,53,1)","a_wn_c":"#FFFFFF","a_wi_bg":"rgba(127,173,57,1)","a_wi_c":"#FFFFFF","p_w":235}'>
                                </div>
                                <div id="ml_5fa291f9_c" style="padding:0;margin:0;padding:7px 5px;">
                                    <img src="https://cuacalab.id/assets/img/logo_z_b.svg" style="width:15px;opacity:0.7;margin-right:5px;position:relative;top:1px;display:inline-block;">
                                    <a href="https://cuacalab.id/cuaca_surabaya/hari_ini/" style="color:grey;font-size:12px;text-decoration:none;" target="_blank" id="ml_5fa291f9_u">Cuaca Hari ini</a>
                                </div>
                            </div>
                            <script async src="https://app.cuacalab.id/js/?id=ml_5fa291f9"></script>
                            {{-- <ul>
                                <li><a href="#">A</a></li>
                                <li><a href="#">B (20)</a></li>
                                <li><a href="#">C (5)</a></li>
                                <li><a href="#">D (9)</a></li>
                                <li><a href="#">E (10)</a></li>
                            </ul> --}}
                        </div>

                        <div class="blog__sidebar__item">
                            <h4>Artikel terbaru</h4>
                            <div class="blog__sidebar__recent">
                                <a href="{{ url('/artikel1') }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/artikel1.jpg" alt="" height="80px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Peluang, Tantangan, dan Strategi<br /> Dalam Pengembangan Sistem Pertanian Organik</h6>
                                        <ul>
                                            <li>
                                                <span>Juni 01, 2021</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="#">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{ url('/artikel2') }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/artikel2.jpg" alt="" height="80px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tikus Sawah (Rattus-Rattus Argentiventer) dan<br /> Pengaruhnya Terhadap Pola Kerusakan Padi</h6>
                                        <ul>
                                            <li>
                                                <span>Juni 01, 2021</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="#">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{ url('/artikel3') }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/artikel3.jpg" alt="" height="80px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Petunjuk Lapangan Pengendalian<br />Hama Wereng Coklat</h6>
                                        <ul>
                                            <li>
                                                <span>Juni 01, 2021</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="#">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                      
                        {{-- <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">

                    <div class="blog__details__text">
                        <img src="img/blog/details/artikel1.jpg" alt="Popular" class="tm-popular-item-img" height="300px" width="1000px">
                        <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
                    </span>Peluang, Tantangan, dan Strategi Pengembangan Dalam Pertanian Organik</h3><hr class="tm-popular-item-hr">
                    <p align="justify">Pertanian organik merupakan teknik budidaya pertanian yang berorientasi pada pemanfaatan bahan-bahan alami (lokal)
                                       tanpa menggunakan bahan-bahan kimia sintesis seperti pupuk, pestisida (kecuali bahan yang diperkenankan).  Teknik 
                                       budidaya lainnya bertumpu pada peningkatan  produksi, pendapatan serta berwawasan lingkungan dan berkelanjutan. 
                                       Tujuan utama pertanian organik adalah menyediakan produk-produk pertanian, terutama bahan pangan yang aman bagi 
                                       kesehatan produsen dan konsumen dan tidak merusak lingkungan.  Slogan “hidup sehat” telah melembaga secara internasional 
                                       sehingga produk-produk pertanian disyaratkan memiliki atribut jaminan mutu “ aman konsumsi (food safety attributes), 
                                       kandungan nutrisi tinggi (nutritional attributes), dan ramah lingkungan (eco-labelling attributes).<br></p>
                    <p align="justify">Dalam pelaksanaan dan pengembangan sistim pertanian organik, beberapa masalah dan tantangan yang dihadapi adalah sebagai berikut :<br>
                                    <b>1.</b> Pertanian organik menekankan  pemberian bahan organik (pupuk organik).
                                    <b>2.</b> Produktivitas pertanian organik lebih rendah, sehingga jika tidak ada insentif harga untuk produk organik maka petani tidak akan tertarik berusaha tani pertanian organik.
                                    <b>3.</b> Pengakuan sebagai pelaku pertanian organik harus melalui proses akreditasi dan sertifikasi. Pembentukan lembaga akreditasi untuk produk tiap sub sektor di Indonesia mungkin belum terpenuhi. Karena itu masih memerlukan waktu yang cukup untuk bisa mengembangkan pertanian organik tiap komoditas.
                                    <b>4.</b> Biaya sertifikasi lahan/produk cukup mahal, tidak terjangkau petani perorangan.
                                    <b>5.</b> Lembaga pendukung kelompok tani, penyuluh, lembaga pemasaran, serta pendukung lainnya harus dipersiapkan.</br></p>
                    <p align="justify">Pengembangan sistem pertanian organik ke depan dalam jangka pendek lebih baik di arahkan ke daerah-daerah yang masih mempertahankan
                                       sistem pertanian lokal-tradisional (daerah pegunungan, pedalaman).  Komoditas-komoditas yang dimungkinkan antara lain kopi, teh, padi-padi 
                                       lokal bermutu baik, tanaman rempah dan obat serta sayuran dan buah-buahan. Kakao, merica, jambu mete (tanaman ekspor) juga potensial untuk 
                                       diusahakan dalam pertanian organik. Sistem integrasi tanaman-ternak juga merupakan pilihan untuk dikembangkan kedepan. Pemerintah perlu mendorong 
                                       terbentuknya lembaga sertifikasi produk pertanian organik yang dibutuhkan (yang belum ada).  Disamping itu pembentukan, pengembangan, dan penguatan 
                                       lembaga-lembaga pendukung seperti kelompok tani, penyuluh, lembaga pemasaran (pasar khusus produk oragnik) perlu persiapan dan pembenahan. Selain itu 
                                       diperlukan kegiatan sosialisasi untuk member pemahaman dan bekal tentang makna dan manfaat pertanian organik kepada masyarakat produsen (petani), konsumen (pengguna), 
                                       pedagang, pemerintah daerah, penyuluh serta pelaku pertanian dan institusi terkait lainnya. Dukungan dalam bentuk kebijakan oleh pemerintah berupa insentif harga produk 
                                       dan subsidi biaya sertifikasi lahan (produk) diperlukan dalam rangka pengembangan pertanian organik.<br></p>
                    <p align="justify">Untuk dapat bercocok tanam dengan sistem pertanian organik secara baik, maka harus dipersiapkan hal - hal berikut :<br>
                                    <b>1.</b> Lingkungan : Lokasi kebun harus bebas dari kontaminasi bahan-bahan sintetik. 
                                    <b>2.</b> Bahan Tanaman : Varietas yang ditanam sebaiknya yang telah beradaptasi baik di daerah yang bersangkutan, dan tidak berdampak negative terhadap lingkungan.
                                    <b>3.</b> Pola Tanam : Pola tanam hendaknya berpijak pada prinsip-prinsip konservasi tanah dan air, berwawasan lingkungan menuju pertanian berkelanjutan.
                                    <b>4.</b> Pemupukan dan Zat Pengatur Tumbuh : Bahan organik sebagai pupuk yakni berasal dari kebun atau luar kebun yang diusahakan secara organik. Kotoran ternak, kompos sisa tanaman, pupuk hijau, jerami, mulsa lain, urin ternak, sampak kota (kompos) dan lain-lain bahan organik asalkan tidak tercemar bahan kimia sintetik atau zat-zat beracun. 
                                    <b>5.</b> Pengelolaan Organisme Pengganggu : Semua pestisida buatan (kimia) tidak boleh digunakan, kecuali yang diizinkan dan terdaftar pada IFOAM . Pestisida hayati diperbolehkan.</br></p>
                        </div>
                    </div>

                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Supardi</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Food</li>
                                        <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Artikel Populer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/sidebar/populer1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> Juni 01,2021</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="{{ url('/populer1') }}">Cara dan Dosis Pemupukan yang Tepat Dapat Melipatgandakan Hasil Jagung Petani</a></h5>
                            <p>Jagung merupakan komuditas penting kedua setelah padi karena jagung dapat digunakan sebagai bahan baku pangan dan pakan...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/sidebar/populer2.jpg" alt="" height="220px" width="45px">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="{{ url('/populer2') }}">Peningkatan Produtivitas Padi Sawah Melalui Penerapan Teknologi PTT</a></h5>
                            <p>Meningkatan produksi padi melalui perluasan areal tanam tidak dapat terus menerus dilakukan karena luas lahan pertanian...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/sidebar/populer3.jpg" alt="" height="220px" width="45px">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="{{ url('/populer3') }}">Budidaya Padi Gogo</a></h5>
                            <p>Padi merupakan komoditas tanaman pangan penting karena menjadi bahan makanan pokok...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
