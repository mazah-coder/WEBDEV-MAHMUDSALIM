

    @extends('layout.app')
    @section('content')


<div class="container mt-5">

    <h1 class="text-center mb-4">Data Santri PonPes At-Tauchid</h1>

    <a href="/santri/create" class="btn btn-primary mb-4">
        Tambah Santri
    </a>

    {{-- Header --}}
    <div class="row fw-bold border-bottom pb-2 mb-3">

        <div class="col-1">No</div>

        <div class="col-3">Nama</div>

        <div class="col-2">Kelas</div>

        <div class="col-3">Alamat</div>

        <div class="col-3">Aksi</div>

    </div>

    {{-- Data --}}
    @foreach($santris as $santri)

    <div class="row align-items-center mb-3">

        <div class="col-1">
            {{ $loop->iteration }}
        </div>

        <div class="col-3">
            {{ $santri->nama }}
        </div>

        <div class="col-2">
            {{ $santri->kelas }}
        </div>

        <div class="col-3">
            {{ $santri->alamat }}
        </div>

        <div class="col-3">

            <a href="/santri/{{ $santri->id }}/edit"
                class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="/santri/{{ $santri->id }}"
                method="POST"
                style="display:inline;">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm">
                    Hapus
                </button>

            </form>

        </div>

    </div>

    @endforeach
    @endsection
