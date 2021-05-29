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
                        <li><a href="{{'/'}}">Home</a></li>
                        <li><a href="{{'/contact'}}">Contact</a></li>
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
