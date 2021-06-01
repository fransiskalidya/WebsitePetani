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
                        <img src="img/blog/details/populer2.jpg" alt="Popular" class="tm-popular-item-img" height="300px" width="1000px">
                        <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
                    </span>Peningkatan Produtivitas Padi Sawah Melalui Penerapan Teknologi PTT</h3><hr class="tm-popular-item-hr">
                    <p align="justify">Peningkatan produksi padi melalui perluasan areal tanam tidak dapat terus menerus dilakukan karena luas lahan pertanian yang terus berkurang akibat tingginya alih fungsi lahan, sehingga upaya yang lebih memungkinkan untuk dilakukan adalah mendorong peningkatan produktivitas. Konsekuensi dari peningkatan produksi 
                                       dengan penekanan pada peningkatan produktivitas adalah : 1). tersedianya teknologi spesifik lokasi yang efektif, efisien dan tidak merusak lingkungan; 2). penerapan teknologi rekomendasi oleh petani secara mandiri, bersifat masal dan berkelanjutan. Dari aspek penyediaan teknologi rekomendasi saat ini telah diciptakan 
                                       teknologi produksi padi dengan pendekatan Pengelolaan Tanaman Terpadu (PTT) yang telah teruji mampu meningkatkan produktivitas padi hingga 15%.  Persoalannya teknologi dengan pendekatan yang relative baru tidak mudah untuk diadopsi petani secara meluas dan berkelanjutan dalam kurun waktu yang singkat. Dalam hubungan 
                                       inilah kegiatan pendampingan pengawalan terhadap petani pada penerapan teknologi menjadi sangat penting untuk dilakukan.<br></p>
                    <p align="justify">Kegiatan pendampingan penerapan teknologi merupakan upaya penyebar luasan (diseminasi) teknologi yang dilaksanakan secara terencana, sistematis dan terkoordinasi agar petani memperoleh bimbingan langsung baik dari peneliti maupun penyuluh sebagai sumber teknologi guna memudahkan, mempercepat dan memperluas adopsi. 
                                       Melalui kegiatan pendampingan, petani akan mendapatkan bimbingan dalam menentukan komponen teknologi yang paling sesuai dengan kebutuhan di daerah setempat (spesifik lokasi), cara menerapkan teknologi yang benar, memudahkan petani untuk berkonsultasi terkait permasalahan dan cara mengatasi masalah yang dihadapi. 
                                       Dengan demikian petani benar-benar menerapkan teknologi spesifik lokasi yang dilakukan dengan tepat sehingga mampu meningkatkan produktivitas dan pendapatan petani secara nyata dan pada gilirannya akan dapat memotivasi petani untuk mengadopsi teknologi secara berkelanjutan.<br></p>
                    <p align="justify">Hasil pertanian dengan teknologi PTT menunjukkan bahwa dengan penerapan teknologi PTT mampu meningkatkan produktivitas sebesar 20% untuk Inpari 32 dan 25% untuk Inpari 33 dibandingkan dengan produktivitas padi inpari 32 dengan budidaya padi yang biasa diterapkan petani. Hasil penelitian Sirappa (2011), melaporkan  
                                       penerapan inovasi teknologi PTT melalui penggunaan varietas unggul baru dengan sistem tanam legowo memberikan hasil gabah yang cukup tinggi dibandingkan dengan teknologi yang diterapkan petani. Varietas padi Memberamo, Mekongga, Cigeulis yang ditanam dengan sistem legowo rata-rata memberikan hasil gabah lebih tinggi sebesar (5,5 - 8,3 t/ha) 
                                       dibandingkan dengan teknologi petani (non PTT) yang hanya sekitar 4 t/ha. Penelitian Rusmawan et al. (2011), menunjukkan bahwa produktivitas padi sawah di Bangka Belitung dengan penerapan PTT padi sawah dapat mencapai 8, t/ha varietas Mekongga dan 5,1 t/ha varietas Ciherang. Komponen teknologi harus saling melengkapi, bila perlu dilihat 
                                       kemungkinan adanya efek sinergisme antara komponen. Arsyad (2011), menyatakan bahwa inovasi teknologi yang berpeluang tinggi akan diadopsi petani adalah Varietas Unggul Baru. Hal ini disebabkan penggunaan VUB secara teknis mudah dilakukan, daya hasil tinggi, tahan terhadap hama penyakit tertentu.<br></p>
                    <p align="justify">Peningkatan produktivitas yang diperoleh petani kooperator pada lokasi pendampingan terjadi karena teknologi budidaya yang diterapkan oleh petani kooperator terutama pada komponen jarak tanam yang menggunakan jajar legowo 2:1. Selain itu, penerapan pemupukan berimbang dan waktu pemupukan yang tepat  berperan cukup 
                                       penting terhadap peningkatan produktivitas. Penerapan pemupukan berimbang ditujukan untuk menyesuaikan kebutuhan tanaman dengan ketersediaan hara di dalam tanah. Dosis pupuk yang diberikan oleh petani kooperator sesuai dengan rekomendasi desa setempat dan waktu pemberian pupuk sesuai dengan kebutuhan tanaman sehingga penyerapan unsur 
                                       hara oleh tanaman dapat maksimal untuk menunjang pertumbuhan dan perkembangan tanaman, sedangkan pada petani non kooperator pemupukan dilakukan tidak di dasarkan pada jumlah/dosis yang dibutuhkan serta waktu pemupukan yang tidak disesuaikan kebutuhan tanaman sehingga pemanfaatan pupuk oleh tanaman menjadi tidak efisien, sesuai dengan hasil 
                                       kajian Fachrista dan Sarwendah (2014) bahwa komponen utama PTT yang langsung dapat di adopsi oleh petani adalah penggunaan VUB, benih bermutu dan berlabel serta penggunaan bahan organik, sedangkan untuk komponen pendukung lainnya yang terdiri atas tanam bibit muda, tanam 1-3 bibit/lubang dan panen tepat waktu.<br></p>
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