<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.app')
    @section('content')
    <div class="container mt-5">
        <h2>Edit Santri</h2>

        <form action="/santri/{{ $santri->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $santri->nama }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" value="{{ $santri->kelas }}" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control">{{$santri->alamat}}</textarea>
            </div>
            <button class="btn btn-succes">Update</button>
        </form>
    </div>
@endsection
</body>
</html>