@extends('sebelum.layouts.app')

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <h2 class="gold-text tm-welcome-header-2">
                            <span style="color: 7FAD39">PENGUMUMAN</span>

                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            {{-- <li class="active"><a href="{{'/'}}">Home</a></li> --}}
                            <li ><a href="{{'/'}}">Home</a></li>
                            <li ><a href="{{'/contact'}}">Contact</a></li>
                            <li ><a href="{{'dataPetani/tampil'}}">Data Penerima Subsidi</a></li>
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

    {{-- content --}}
    {{-- @extends('sebelum.layouts') --}}

    {{-- @section('content') --}}
        <div class="row g-2">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                </div>

                <!-- Form Search -->

                <div class="float-left my-3 mx-5">
                    <form action="{{route('pengumuman.index')}}" class="row g-3" method="GET">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- End Form Search -->

                <div class="float-right my-3 mx-5">
                    <a class="btn btn-success" href="{{'/inputPengumuman'}}"> Input Pengumuman</a>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">

            @foreach ($pgm as $data)
            <tr>

                <td><b>{{ $data->Judul }}</b><br><br>
                {{ $data->Isi }}

                <td>
                <form action="{{ route('pengumuman.destroy',$data->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('pengumuman.edit',$data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
                </td>
            </tr>
            @endforeach
            </table>
        </div>

        {{-- @endsection --}}
