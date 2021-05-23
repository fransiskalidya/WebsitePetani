@extends('sebelum.layouts.app')

    <!-- Header Section Begin -->
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
                            <li ><a href="{{'/'}}">Home</a></li>
                            <li ><a href="{{'/contact'}}">Contact</a></li>
                            <li class="active"><a href="{{'/inputData'}}">Data Penerima Subsidi</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Data Penerima</h2>
                        <div class="breadcrumb__option">
                            <a href="{{'home'}}">Home</a>
                            <span>Data Penerima</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    {{-- content --}}
    {{-- @extends('sebelum.layouts') --}}

    {{-- @section('content') --}}
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                </div>

                <!-- Form Search -->

                <div class="float-left my-2">
                    <form action="{{route('dataPetani.index')}}" class="row g-3" method="GET">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- End Form Search -->

                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{'/inputData'}}"> Input data petani</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Id Petani</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th width="250px">Action</th>
            </tr>
            @foreach ($datas as $data)
            <tr>

                <td>{{ $data->id_petani }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_tlpn }}</td>
                <td>
                <form action="{{ route('dataPetani.destroy',$data->id_petani) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('dataPetani.show',$data->id_petani) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('dataPetani.edit',$data->id_petani) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
            </table>
        {{-- @endsection --}}
