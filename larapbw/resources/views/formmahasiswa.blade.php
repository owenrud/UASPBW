@extends('layouts.main')
@section('title','Form')
@section('content')
  <form method="POST" action="/mahasiswa/simpan">
      @csrf
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama Anda">
  </div>
  <label  class="form-label">Gender</label>
  <div class="form-check">
  <input class="form-check-input" name="Gender" value="Pria" type="radio" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Pria
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" name="Gender" value="Wanita" type="radio" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Wanita
  </label>
</div>
  <div class="mb-3">
    <label  class="form-label">jurusan</label>
    <select name="jurusan" class="form-select" aria-label="Default select example">
  <option value ="0" selected>Pilih Jurusan</option>
  <option value="SI">Sistem Informasi</option>
  <option value="TI">Teknologi Informatika</option>
  <option value="DR">Dokter</option>
  <option value="dll">Lainnya</option>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">bidang minat</label>
    <div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="BT" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Bulu tangkis
  </label>
</div>
<div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="SB" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
    Sepak bola
  </label>
</div>
<div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="R" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
    Renang
  </label>
</div>
<div class="form-check">
  <input name="cb[]" class="form-check-input" type="checkbox" value="B" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Basket
  </label>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button><br>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection