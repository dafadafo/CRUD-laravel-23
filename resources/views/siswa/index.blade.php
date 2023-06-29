<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DATA SISWA</title>
  </head>
  <body>
    @yield('content')
  </body>
</html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('siswa') }}</div>

                <div class="card-body">
                <a class="btn btn-primary mb-3" href="/siswa/create">Tambahkan siswa</a>
            <table class="table table-sm">
                <tr>
                    <th>No</th>
                    <th>NAMA</th>
                    <th>NIS</th>
                    <th>KELAS</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
                @foreach($siswa as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->nama_siswa}}</td>
                        <td>{{$s->nis}}</td>
                        <td>{{$s->kelas}}</td>
                        <td>{{$s->jenis_kelamin}}</td>
                        <td>{{$s->alamat}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-warning" href="/siswa/{{$s->id}}/edit">Edit</a>
                                <form action="/siswa/{{$s->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                <input class="btn btn-danger" type="submit" name="Hapus" value="Hapus" >
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
