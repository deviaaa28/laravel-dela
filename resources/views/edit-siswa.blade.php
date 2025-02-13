@extends('partials.main')
{{-- partials : folder yang digunakan untuk menyimpan tampilan kecil (partial views) yang dapat digunakan kembali di banyak halaman. --}}
@section('content')

    <h1>Edit Data</h1>


    <form action="{{ Route ('siswa.update', $data['id']) }}" method="post">
@csrf
@method('PUT')

    <div class="row col-5">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$data['nama']}}">
            @error('nama')
            <small class="text-danger">
                {{$message}}
            </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" rows="3">"{{$data['nama']}}</textarea>
            @error('alamat')
            <small class="text-danger">
                {{$message}}
            </small>
            @enderror
        </div>
        <div class="mb-3" class="form-check">
          <input value="perempuan" class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin"{{$data['jeniskelamin'] == "perempuan" ? 'checked' : ''}}>
          <label class="form-check-label" for="jeniskelamin">
          Perempuan
          </label>
        </div>
        <div class="form-check">
          <input value="laki-laki" class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" jeniskelamin" {{$data['jeniskelamin'] == "laki-laki" ? 'checked' : ''}}>
          <label class="form-check-label" for="jeniskelamin">
          Laki-Laki
          </label>
        </div>
        @error('jeniskelamin')
        <small class="text-danger">
            {{$message}}
        </small>
        @enderror
        <div class="mb-3"><button type="submit" class="btn btn-secondary">Simpan</button></div>
        </div>



</form>
    </div>
    {{-- digunakan untuk **menutup blok --}}
@endsection
