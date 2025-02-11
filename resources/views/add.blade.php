@extends('partials.main')

@section('content')
    <h1>Form Tambah Data</h1>
    <form action="{{ Route ('siswa.add.process') }}" method="post">
@csrf
    <div class="row col-5">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" rows="3"></textarea>
        </div>
        <div class="mb-3" class="form-check">
          <input value="perempuan" class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin">
          <label class="form-check-label" for="jeniskelamin">
          Perempuan
          </label>
        </div>
        <div class="form-check">
          <input value="laki-laki" class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" checked>
          <label class="form-check-label" for="jeniskelamin">
          Laki-Laki
          </label>
        </div>
        <div class="mb-3"><button type="submit" class="btn btn-secondary">Sinpan</button></div>
        </div>



</form>
    </div>
@endsection
