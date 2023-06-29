@extends('layouts.desain')

@section('content')
<h4 class="text-center mb-6">Tambah Data Siswa</h4>
<div class="container">
<form action="/siswa/store" method="post">
@csrf    
    <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">NIS</label>
        <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor identitas siswa">
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Kelas</label>
        <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas">
    </div>

    <select class="custom-select" name="jenis_kelamin" >
    <option selected > Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
    </select>
    <br>
    <br>
    <div class="mb-3">
                <label for="exampleInputEmail" class="form-label"> ALAMAT </label>
                <textarea class="form-control" name="alamat" rows="10"></textarea><br>
    </div>
    <input type="submit" name="submit" class="btn btn-info" value="SIMPAN">
</form>
</div>
