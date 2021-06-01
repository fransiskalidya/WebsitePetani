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
                        <img src="img/blog/details/populer1.jpg" alt="Popular" class="tm-popular-item-img" height="300px" width="1000px">
                        <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
                    </span>Cara dan Dosis Pemupukan yang Tepat Dapat Melipatgandakan Hasil Jagung Petani</h3><hr class="tm-popular-item-hr">
                    <p align="justify">Jagung merupakan komuditas penting kedua setelah padi karena jagung dapat digunakan sebagai bahan baku pangan dan pakan. Badan Litbang Pertanian Kementerian Pertanian telah menghasilkan teknologi budidaya jagung dalam upaya mencapai produktivitas maximal yaitu pengeloaan tanaman secara terpadu (PTT). Beberapa komponen teknologi PTT yang mampu 
                                       meningkatkan produktivitas jagung antara lain penggunaan varietas unggul baru yang dikombinasi dengan komponen teknologi lainnya seperti pemupukan.<br></p>
                    <p align="justify">Unsur hara N, P,dan K merupakan unsur hara yang sangat dibutuhkan oleh tanaman. Terlebih lagi untuk  tanaman jagung membutuhkan unsur N sepanjang hidupnya yang dapat mempengaruhi kebutuhan protein dan klorofil (Sudjana et al. 1991). Menurut Pinus L, (2008) Unsur N berperan dalam pembentukan hijau daun yang sangat berguna dalam proses fotosintesis, 
                                       unsur P berfungsi mempercepat pembungaan, pemasakan biji dan buah sedangkan unsur K sebagai sumber kekuatan bagi tanaman dalam menghadapi kekeringan dan penyakit.  <br></p>
                    <p align="justify">Cara dan waktu pemupukan berpengaruh terhadap hasil jagung, dimana pemupukan dengan cara menyebar di atas permukaan tanah menyebabkan sebagian pupuk  yang diberikan menguap dan hilang sehingga sebagian kecil pupuk yang bisa dimanfaatkan oleh tanaman karena dibiarkan terbuka. Unsur hara N yang terkandung dalam pupuk urea umumnya dalam tanah bersifat mobile, 
                                       mudah hilang karena penguapan dan tercuci. Untuk mengurangi kehilangan pupuk terutama urea sebaiknya pemupukan dilakukan dengan cara ditugal dan dilakukan beberapa kali atau  bertahap. Menurut akil dkk (2009) menyatakan bahwa pemupukan dengan cara ditugal dapat meningkatkan hasil jagung baik pada lahan sawah tadah hujan maupun lahan kering dibandingkan 
                                       dengan aplikasi  disebar diatas permukaan tanah maupun dengan cara dilarutkan sebelum  diaplikasikan di sekililing tanaman.  Pemupukan dengan cara ditugal menyebabkan hara  yang terkandung dalam pupuk dapat diserap oleh tanaman  secara bertahap sesuai dengan kebutuhan tanaman dan mencegah terjadinya penguapan hara.   Dari hasil penelitian menunjukkan bahwa 
                                       pemberian pupuk urea sebanyak 3 kali  yaitu pada umur 7, 25 dan 40 hari setelah tanam, akan memberikan produktivitas hasil yang lebih tinggi dibandingkan dengan pemberian urea sebanyak 2 kali atau 1 kali. Sedangkan untuk unsur hara P bergerak  sangat lambat di dalam tanah  sehingga aplikasinya perlu dilakukan pada saat awal pertumbuhan tanaman yaitu  pada umur 
                                       7 hari setelah tanam, agar pupuk dapat diserap tanaman dengan lebih optimal.<br></p>
                    <p align="justify">Dalam hal ini Dosis pemupukan yang dilakukan berdasarkan rekomendasi menggunakan uji tanah PUTS sehingga diperoleh rekomendasi pemupukan ialah urea 200 kg/ha + NPK Phonska 200 kg/ha. Pemupukan pertama umur 7-14 hari setelah tanam (hst) dengan dosis  NPK Phonska 200 kg/ha + 20% urea (40 kg/ha), dan pemupukan kedua pada umur 30 – 35 hst dengan dosis Urea 160 kg/ha. 
                                       Aplikasi pupuk dengan cara ditugal 5-10 cm dari batang tanaman, setelah pupuk diletakkan dalam lubang tanam, lalu ditutup dengan tanah atau pupuk kandang, agar pupuk tidak menguap/hilang. Pemupukan dengan cara ini dapat meningkatkan  Produktivitas jagung  petani sebesar 9,1 ton/ha,  dibandingkan petani yang tidak menerapakan teknologi tersebut hanya mampu menghasilkan 
                                       jagung sebesar 6,9 ton/ha. Cara dan dosis pemupukan ini tentunya dapat dijadikan acuan bagi petani jagung, agar dapat meningkatkan produktivitas jagungnya, khususnya untuk petani kecamatan Pringgarata dan Petani jagung umumnya yang ada di NTB.<br></p>
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
