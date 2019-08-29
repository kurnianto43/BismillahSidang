@extends('layouts.master')

@section('content')
<h3 style="text-align: center; margin-bottom: 50px">Data Mahasiswa</h3>
@include('layouts._alert')
    <a style="margin-bottom: 10px" class="btn btn-primary" href="{{ route('sidang.create') }}">Tambah</a>
    <a style="margin-bottom: 10px" target="_blank" class="btn btn-secondary" href="{{ route('sidang.laporan') }}">Cetak</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Mahasiswa</th>
          <th>NPM</th>
          <th>Jurusan</th>
          <th>No Hp</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0;?>
        @foreach($sidangs as $sidang)
        <?php $no++ ;?>
        <tr>
          <td>{{$no}}</td>
          <td>{{ $sidang->nama_mahasiswa }}</td>
          <td>{{ $sidang->npm }}</td>
          <td>{{ $sidang->jurusan }}</td>
          <td>{{ $sidang->no_hp }}</td>
          <td width="150px"> <a class="btn btn-warning btn-sm" href="{{ route('sidang.edit', $sidang) }}">Ubah</a>
                        <div class="float-right">
                          <form action="{{ route('sidang.destroy', $sidang) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                        </div>
                        
                      </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection