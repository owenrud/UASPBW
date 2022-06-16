@extends('layouts.main')
@section('title','User')
@section('navcontent')
<a class="btn btn-primary btn-sm me-auto " href="/formuser"><i class="bi bi-file-plus"></i>Add User</a>
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
      <th scope="col">NIK_user</th>
      <th scope="col">Nama_user</th>
      <th scope="col">No.Handphone</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($User as $no=> $u)
      <tr>
      <th scope="row">{{$User->firstItem()+ $no}}</th>
      <td>{{$u ->nik_user}}</td>
      <td>{{$u ->nama_user}}</td>
      <td>{{$u ->no_hp}}</td>
      <td>
        <a href="/formuser/edit/{{$u->id}}" class="btn btn-outline-success"><i class="bi bi-pencil"></i></a>
        <a href="/user/hapus/{{$u->id}}" class="btn btn-outline-danger" onclick="return confirm('Yakin Data Ingin di HAPUS?')"><i class="bi bi-trash2"></i></a>
      </td>
    </tr>
      @endforeach
  </tbody>
                        </table>
                        <span class="d-flex align-items-end flex-column bd-highlight mb-3">{{$User->links()}}<span>
                        <span>total data : {{$User->total()}}<span><br>
                        <span>halaman : {{$User->currentpage()}}<span><br>
                        <span>total data halaman : {{$User->count()}}<span>
 @endsection