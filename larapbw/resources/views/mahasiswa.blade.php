@extends('layouts.main')
@section('title','Mahasiswa')
@section('navcontent')
<a class="btn btn-primary btn-sm me-auto " href="/form"><i class="bi bi-file-plus"></i>Add Mahasiswa</a>
                      <form class="d-flex justify-content-end" method="GET" action="/mahasiswa/cari">
    <input class="form-control-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
  </form>
  @endsection
@section('content')
<table class="table table-hover">
                        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">gender</th>
      <th scope="col">jurusan</th>
      <th scope="col">bidang minat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($mahasiswa as $no=> $m)
      <tr>
      <th scope="row">{{$mahasiswa->firstItem()+ $no}}</th>
      <td>{{$m ->nim}}</td>
      <td>{{$m ->nama}}</td>
      <td>{{$m ->gender}}</td>
      <td>{{$m ->jurusan}}</td>
      <td>{{$m ->bidang_minat}}</td>
      <td>
        <a href="/form/edit/{{$m->nim}}" class="btn btn-outline-success"><i class="bi bi-pencil"></i></a>
        <a href="/mahasiswa/hapus/{{$m->nim}}" class="btn btn-outline-danger" onclick="return confirm('Yakin Data Ingin di HAPUS?')"><i class="bi bi-trash2"></i></a>
      </td>
    </tr>
      @endforeach
  </tbody>
                        </table>
                        <span class="d-flex align-items-end flex-column bd-highlight mb-3">{{$mahasiswa->links()}}<span>
                        <span>total data : {{$mahasiswa->total()}}<span><br>
                        <span>halaman : {{$mahasiswa->currentpage()}}<span><br>
                        <span>total data halaman : {{$mahasiswa->count()}}<span>
 @endsection