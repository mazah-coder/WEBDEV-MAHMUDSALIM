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

<h1 class="mb-4">
    Data Santri
</h1>

<a href="#" class="btn btn-primary mb-4">Tambah Santri</a>

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

        </div>
@endforeach
    </div>

</div>
</body>
</html>