@extends('layouts.main')
@section('title','Form')
@section('content')
  <form method="POST" action="/user/update/{{$user->id}}">
      @csrf
      @method('PUT')
      <div class="mb-3">
    <label  class="form-label">NIK</label>
    <input name="nik" type="text" class="form-control" value="{{$user->nik_user}}" placeholder="Masukkan Nama Anda" readonly>
  </div>
  <div class="mb-3">
    <label  class="form-label">Nama</label>
    <input name="nama" type="text" class="form-control" value="{{$user->nama_user}}" placeholder="Masukkan Nama Anda">
  </div>
  <div class="mb-3">
    <label  class="form-label">No. Handphone</label>
    <input name="no_hp" type="text" class="form-control" value="{{$user->no_hp}}" placeholder="Masukkan Nama Anda">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input name="password" type="password" class="form-control"  placeholder="Confirm Password">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button><br>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
