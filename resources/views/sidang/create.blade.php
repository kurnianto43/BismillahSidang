@extends('layouts.master')

@section('content')
<h3 style="text-align: center; margin-bottom: 50px">Tambah Data</h3>
    <form role="form" method="post" action="{{ route('sidang.store') }}">
              {{ csrf_field()}}
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-8">
          <input name="nama_mahasiswa" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">NPM</label>
        <div class="col-sm-8">
          <input name="npm" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-3 col-form-label">Jurusan</label>
        <div class="col-sm-8">
          <input name="jurusan" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">No Hp</label>
        <div class="col-sm-8">
          <input type="text" name="no_hp" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-4 offset-3">
          <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
      </div>
      
    </form>
@endsection