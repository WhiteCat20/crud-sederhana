@extends('template');

@section('content')
    <h1 class="text-center mt-5">Data Mahasiswa</h1>
    <div class="container mx-auto  border pb-3" id="container-wrapper">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Domisili</th>
                    <th scope="col">Jurusan</th>
                    <th scope="">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->domisili }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>
                            <a href="/mahasiswa/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                            <form action="/mahasiswa/{{ $item->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"
                                    onclick="return confirm('Yakin mau Hapus {{ $item->nama }} ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/mahasiswa/create" class="btn btn-primary">Create</a>
    </div>
@endsection
