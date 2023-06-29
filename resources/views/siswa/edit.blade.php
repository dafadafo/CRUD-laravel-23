@extends('layouts.desain')

@section('content')
<h4 class="text-center mb-6">Edit Data</h4>
<div class="container">
        <form action="/siswa/{{$siswa->id}}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">nama</label>
            <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="{{$siswa->nama_siswa}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor identitas siswa" value="{{$siswa->nis}}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas" value="{{$siswa->kelas}}">
        </div>

        <select class="custom-select" name="jenis_kelamin" >
        <option selected > Pilih Jenis Kelamin</option>
                <option value="L" @if($siswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($siswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select>
        <br>
        <br>
        <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label"> ALAMAT </label>
                    <textarea class="form-control" name="alamat"rows="10">{{$siswa->alamat}}</textarea><br>
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="SIMPAN PERUBAHAN">

        </form>
</div>

@endsection