@extends('layouts.main')
@section('title','Form')
@section('content')
      @php
      $mhs = explode(',' , $mahasiswa->bidang_minat);
      @endphp
  <form method="POST" action="/mahasiswa/update/{{$mahasiswa->nim}}">
      @csrf
      @method('PUT')
      <div class="mb-3">
    <label  class="form-label">NIM</label>
    <input name="nim" type="text" class="form-control" value="{{$mahasiswa->nim}}" placeholder="Masukkan Nama Anda" readonly>
  </div>
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" value="{{$mahasiswa->nama}}" placeholder="Masukkan Nama Anda">
  </div>
  <label  class="form-label">Gender</label>
  <div class="form-check">
  <input class="form-check-input" name="Gender" value="Pria" type="radio" id="flexRadioDefault1" {{ $mahasiswa->gender=='Pria'?'checked':''}}>
  <label class="form-check-label" for="flexRadioDefault1">
    Pria
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="Gender" value="Wanita" type="radio" id="flexRadioDefault2" {{ $mahasiswa->gender=='Wanita'?'checked':''}}>
  <label class="form-check-label" for="flexRadioDefault2">
    Wanita
  </label>
</div>
  <div class="mb-3">
    <label  class="form-label">jurusan</label>
    <select name="jurusan" class="form-select" aria-label="Default select example">
  <option value ="0">Pilih Jurusan</option>
  <option value="SI" {{ $mahasiswa->jurusan=='SI' ? 'selected':'' }}>Sistem Informasi</option>
  <option value="TI" {{ $mahasiswa->jurusan=='TI' ? 'selected':'' }}>Teknologi Informatika</option>
  <option value="DR" {{ $mahasiswa->jurusan=='DR' ? 'selected':'' }}>Dokter</option>
  <option value="dll"{{ $mahasiswa->jurusan=='dll' ? 'selected':'' }}>Lainnya</option>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">bidang minat</label>
    <div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="BT" id="flexCheckDefault" {{in_array('BT',$mhs) ?'checked':''}}>
  <label class="form-check-label" for="flexCheckDefault">
    Bulu tangkis
  </label>
</div>
<div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="SB" id="flexCheckChecked" {{in_array('SB',$mhs) ?'checked':''}}>
  <label class="form-check-label" for="flexCheckChecked">
    Sepak bola
  </label>
</div>
<div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="R" id="flexCheckChecked" {{in_array('R',$mhs) ?'checked':''}} >
  <label class="form-check-label" for="flexCheckChecked">
    Renang
  </label>
</div>
<div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="B" id="flexCheckChecked" {{in_array('B',$mhs) ?'checked':''}}>
  <label class="form-check-label" for="flexCheckChecked">
    Basket
  </label>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button><br>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
