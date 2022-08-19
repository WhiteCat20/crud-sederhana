@extends('template')

@section('content')
    <h1 class="text-center mt-5">Edit Data Mahasiswa</h1>
    <div class="container mx-auto" id="create-wrapper">
        <form class="mt-5" action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $mahasiswa->email }}">
            </div>
            <div class="mb-3">
                <label for="domisili" class="form-label">Domisili</label>
                <input type="text" class="form-control" id="domisili" name="domisili"
                    value="{{ $mahasiswa->domisili }}">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Edit</button>
        </form>
    </div>
@endsection
