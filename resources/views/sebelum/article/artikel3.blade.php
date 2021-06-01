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
                        <img src="img/blog/details/artikel3.jpg" alt="Popular" class="tm-popular-item-img" height="300px" width="1000px">
                        <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
                    </span>Petunjuk Lapangan Pengendalian Hama Wereng Coklat</h3><hr class="tm-popular-item-hr">
                    <p align="justify">Wereng coklat (Nilaparvata lugens Stal.) merupakan hama dari golongan insekta yang sangat merugikan usaha tani padi. 
                                       Serangan wereng coklat yang sangat berarti mengurangi hasil padi secara substansial, mengakibatkan kerugian di tingkat petani. Wereng menyerang pada smua stadia 
                                       pertumbuhan padi dengan cara menghisap cairan tanaman. Populasi tinggi wereng coklat dapat menyebabkan daun berubah kuning oranye sebelum menjadi coklat dan mati. 
                                       Kondisi ini disebut hopperburn, membunuh tanaman Wereng coklat juga dapat menularkan penyakit kerdil hampa dan kerdil rumput yang sampai saat ini tidak bisa diobati.
                                       Musuh alami wereng :<br>
                                       1. laba-laba serigala<br>
                                       2. kepik mirid<br>
                                       3. kumbang koksinelid<br>
                                       4. capung jarum<br>
                                       5. kumbang paedorus<br>
                                       6. belalang bertanduk panjang<br>
                                       7. kumbang karabid <br></p>
                    <p align="justify">Tanda-tanda serangan :<br>
                                       1. Menguning dan mengering dengan cepat.<br>
                                       2. Umumnya gejala terlihat mengumpul pada satu lokasi dan melingkar (hopperburn).<br>
                                       3. Wereng coklat merupakan vektor (penular) penyakit virus kerdil rumput tanaman padi </br></p>
                    <p align="justify">Cara mencegah terjadinya serangan wereng coklat : 
                                       <b>1.</b> Bersihkan gulma dari sawah dan areal sekitarnya.
                                       <b>2.</b> Penggunaan varietas unggul tahan wereng contoh adalah Inpari 6, Inpari 13 , Inpari 18, Inpari19, Inpari 23.
                                       <b>3.</b> Amati wereng di persemaian setiap hari, atau setiap minggu setelah tanam pindah pada batang dan permukaan air. Periksa kedua sisi persemaian. Pada tanaman yang lebih tua, pegang tanaman dan rebahkan sedikit dan tepuk dengan pelan dekat bagian basal untuk melihat kalau ada wereng yang jatuh ke permukaan air.
                                       <b>4.</b> Gunakan perangkap cahaya.
                                       <b>5.</b> Tanam jajar legowo.
                                       <b>6.</b> Pemupukan berimbang.<br></p>
                    <p align="justify">Pengendalian Wereng coklat</br>
                                       Wereng coklat (Nilapavarta lugens) merupakan salah satu hama penting pada tanaman padi, karena pada serangan yang berat dapat menyebabkan puso (gagal panen).<br>
                                       <b>a. Ekobiologi Wereng Coklat </b><br>
                                          • Menyukai tanaman yg dipupuk N dosis tinggi dengan jarak tanam rapat.<br>
                                          • Siklus hidup 21-33 hari.<br>
                                          • Stadia rentan adalah sejak pembibitan hingga fase masak susu.<br>
                                          • Hama menghisap cairan tanaman pada sistem vaskuler (pembuluh).<br>
                                       <b>b. Tanda Serangan </b><br>
                                          1. Menguning dan mengering dengan cepat.<br>
                                          2. Umumnya gejala terlihat mengumpul pada satu lokasi dan melingkar (hopperburn). <br>
                                          Selain sebagai hama, wereng coklat juga merupakan vektor (penular) penyakit virus kerdil rumput pada tanaman padi.<br>
                                       <b>c. Pencegahan </b><br>
                                          <b>1.</b> Bersihkan gulma dari sawah dan areal sekitarnya.
                                          <b>2.</b> Hindari penggunaan pestisida secara tidak tepat yang dapat menyebabkan terbunuhnya musuh alami.
                                          <b>3.</b>Gunakan varietas tahan, Inpari 6, Inpari 13 , Inpari 18, Inpari19, Inpari 23.
                                          <b>4.</b> Jumlah kritis: Pada kepadatan 1 wereng coklat/ batang atau kurang, masih ada peluang untuk bertindak guna menekan populasi.
                                          <b>5.</b> Amati wereng di persemaian setiap hari, atau setiap minggu setelah tanam pindah pada batang dan permukaan air. Periksa kedua sisi persemaian. Pada tanaman yang lebih tua, pegang tanaman dan rebahkan sedikit dan tepuk dengan pelan dekat bagian basal untuk melihat kalau ada wereng yang jatuh ke permukaan air.
                                          <b>6.</b> Gunakan perangkap cahaya pada waktu malam ketika terlihat ada gejala serangan wereng. Jangan tempatkan cahaya dekat persemaian atau sawah.
                                          <b>7.</b> Jarak tanam jajar legowo.
                                          <b>8.</b> Pemupukan berimbang.<br>	
                                       <b>d. Pengendalian secara mekanik dan fisik </b><br>
                                          <b>1.</b> Genangi persemaian, selama sehari, sampai hanya ujung bibit saja yang terlihat.
                                          <b>2.</b> Sapu persemaian dengan jaring untuk menghilangkan wereng (tapi tidak telurnya), terutama dari persemaian kering. Pada kepadatan wereng yang tinggi, penyapuan tidak akan dapat menghilangkan wereng dalam jumlah banyak dari bagian basal tanaman.<br>
                                       <b>e. Pengendalian hayati </b><br>
                                          <b>1.</b> Bila musuh alami lebih banyak jumlahnya dibandingkan dengan wereng, risiko ledakan serangan kecil. Musuh alami wereng termasuk laba-laba,kumbang tanah,paedorus dan beberapa jenis parasitoid telur.
                                          <b>2.</b> Pemanfaatan agensi hayati cendawan patogen seperti Beauveria sp, Metarhizium Anisoptiae, Verticillium.<br></p>
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
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">pupuk baru untuk jagung</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Alat siram tanaman untuk efisiensi waktu</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Harga lombok tinggi menjelang lebaran</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
