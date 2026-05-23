<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layout.app')
    @section('content')

<h1 class="mb-4">Data Santri</h1>

<a href="/santri/create" class="btn btn-primary mb-3">Tambah Santri</a>

<div class="card">

    <div class="card-body">

        <div class="row fw-bold border-bottom pb-3 mb-3">

            <div class="col">No</div>

            <div class="col">Nama</div>

            <div class="col"> Kelas</div>

            <div class="col">Alamat</div>
            

        </div>

        @foreach ($santris as $santri)

        <div class="row mb-3">

            <div class="col">{{ $loop->iteration }}</div>

            <div class="col">{{ $santri->nama }}</div>

            <div class="col">{{ $santri->kelas }}</div>

            <div class="col">{{ $santri->alamat }}</div>
            
            <div>
                <a href="/santri/{{ $santri->id }}" class="btn btn-info btn-sm">Edit</a>
                <form action="/santri/{{ $santri->id }}" method="POST" dtyle="display:inline;">
                    @csrf
                    @method('DELETE')

                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </div>

        </div>
@endforeach
    </div>

</div>
</body>
</html>