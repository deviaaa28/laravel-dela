@extends('partials.main')
{{-- partials : folder yang digunakan untuk menyimpan tampilan kecil (partial views) yang dapat digunakan kembali di banyak halaman. --}}
@section('content')
    <h1>Form Tambah Data</h1>
    <form action="{{ Route ('siswa.add.process') }}" method="post">
        {{-- digunakan untuk membuat **formulir HTML di Laravel** dengan **metode POST** yang mengarah ke rute `siswa.add.process --}}
@csrf
    <div class="row col-5">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
            @error('nama')
            <small class="text-danger">
                {{$message}}
            </small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" name="alamat" value="{{old('alamat')}} rows="3"></textarea>
            @error('alamat')
            <small class="text-danger">
                {{$message}}
            </small>
            @enderror
        </div>
        <div class="mb-3" class="form-check">
          <input value="perempuan" class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin"name="jeniskelamin" value="{{old('jeniskelamin')}}>
          <label class="form-check-label" for="jeniskelamin">
          Perempuan
          </label>
          @error('jeniskelamin')
          <small class="text-danger">
              {{$message}}
          </small>
          @enderror
        </div>
        <div class="form-check">
          <input value="laki-laki" class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" checked>
          <label class="form-check-label" for="jeniskelamin">
          Laki-Laki
          </label>
          @error('jeniskelamin')
          <small class="text-danger">
              {{$message}}
          </small>
          @enderror
        </div>
        <div class="mb-3"><button type="submit" class="btn btn-secondary">Sinpan</button></div>
        </div>



</form>
    </div>
@endsection
