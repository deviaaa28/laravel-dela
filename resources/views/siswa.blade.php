@extends('partials.main')
{{-- partials : folder yang digunakan untuk menyimpan tampilan kecil (partial views) yang dapat digunakan kembali di banyak halaman. --}}
@section('content')
    <h1>Data Siswa</h1>
    <a href="{{ Route('siswa.add') }}" class= "btn btn-success">Tambah Data</a>
    <table class="table table-hover mt-3">

        <table border="10">
            <table class="table table-striped">

                <tr class="table table-dark table-striped-columns">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Opsi</th>
                    <th></th>
                </tr>

                @foreach ($siswa as $sw)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sw['nama'] }}</td>
                        <td>{{ $sw['alamat'] }}</td>
                        <td>{{ $sw['jeniskelamin'] }}</td>
                        <td>
                            <form action="{{ Route('siswa.delete', $sw['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary"  type="submit" onclick="return confirm('yakin ingin menghapus data ini')">Delete</button>
                                <a class="btn btn-primary" href="siswa/edit/{{ $sw['id'] }}">Edit</a>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        @endsection
