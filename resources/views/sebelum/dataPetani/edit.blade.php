    <!-- Header Section Begin -->
    {{-- <header class="header">
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
                            <li class="active"><a href="{{'/'}}">Home</a></li>
                            <li ><a href="{{'/'}}">Home</a></li>
                            <li ><a href="{{'/contact'}}">Contact</a></li>
                            <li ><a href="{{route('dataPetani.tampil')}}">Data Penerima Subsidi</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header> --}}
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Input Data Petani</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Input Data Petani</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb Section End -->
    @extends('sebelum.dataPetani.layout')

    @section('content')
    {{-- Input Data section begin --}}


<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Petani
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('dataPetani.update', $data->id) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="id">Id Petani : </label>
                    <input type="text" name="id" class="form-control" id="id" value="{{$data->id}}" aria-describedby="id" >
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="nama" name="nama" class="form-control" id="nama" value="{{$data->nama}}" aria-describedby="nama" >
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{$data->alamat}}" aria-describedby="alamat" >
                </div>

                <div class="form-group">
                    <label for="no_tlpn">No Telepon</label>
                    <input type="no_tlpn" name="no_tlpn" class="form-control" id="no_tlpn" value="{{$data->no_tlpn}}" aria-describedby="no_tlpn" >
                </div>

                <br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('dataPetani.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
