@extends('partials.main')

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
                            <form action="siswa/{{ $sw['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary">Delete</button>
                            </form>

                            <a class="btn btn-primary" href="{{Route('siswa.edit',$sw['id'])}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endsection
