@extends('sebelum.layouts.app')
    <head>
        <title>PETANIKU</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="background-color: #ADD8E6">

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #afd476">
            <div class="container-fluid  offset-md-1">
            <h2 class="gold-text tm-welcome-header-2" href="{{'/'}}">
                <span style="color: #7FAD39">PETANI</span>
                <span style="color: black">KU</span>
            </h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse offset-md-1" id="navbarNav">
                <ul class="navbar-nav" style="font-weight: bolder">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{'/'}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/contact'}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="active" href="{{route('dataPetani.tampil')}}">Data Penerima Subsidi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="row g-2">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                </div>
                {{-- <div class="float-right my-3 mx-5">
                    <a class="btn btn-success" href="{{'/inputPengumuman'}}"> Input Pengumuman</a>
                </div> --}}
            </div>
        </div>
        <div class="col-xl-12 col-md-2">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <br>
        <table class="table table-bordered">

            <tr>
        
            <h2 class="gold-text tm-welcome-header-2" href="{{'/'}}">
                <span style="color: #0000FF">PENGUMUMAN</span>
            </h2>
            <br>

                <td><b>{{ $pgm->Judul }}</b><br><br>
                {{ $pgm->Isi }}


                {{-- <td>
                <form action="{{ route('pengumuman.destroy',$data->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('pengumuman.edit',$data->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form></td> --}}
                </td>
            </tr>
            </table>
        </div>
        <br>
        <br>


       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <br>
    <br>

        </div>
    </body>
</html>
