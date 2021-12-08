<html>
    <head>
        <title>Website PetaniKu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="card" style="width: 24rem;">
                        <div class="card-header">
                            Edit Data Pengumuman
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
                        <form method="post" action="{{ route('pengumuman.update', $data->id) }}" id="myForm">
                            @csrf
                            @method('PUT')
                            {{-- <div class="form-group">
                                <label for="id">Id : </label>
                                <input type="text" name="id" class="form-control" id="disabledTextInput" value="{{$data->id}}" aria-describedby="id" >
                            </div> --}}

                            <div class="form-group">
                                <label for="Judul">Judul</label>
                                <input type="Judul" name="Judul" class="form-control" id="Judul" value="{{$data->Judul}}" aria-describedby="Judul" required>
                            </div>

                            <div class="form-group">
                                <label for="Isi">Isi</label>
                                <input type="Isi" name="Isi" class="form-control" id="alamat" value="{{$data->Isi}}" aria-describedby="alamat" required>
                            </div>

                            <br><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
