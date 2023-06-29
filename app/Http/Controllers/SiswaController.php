<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
{
    public function index(){
       $siswa = Siswa::all();
       return view('siswa.index',compact(['siswa']));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public functioN store(Request $request)
    {
      //dd($request->except(['_token','submit']));
      Siswa::create($request->except(['_token','submit']));
      return Redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit',compact(['siswa']));
    }

    public function update($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->except(['_token','submit']));
        return Redirect('/siswa');
    }

    public function destroy ($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return Redirect('/siswa');
    }
}
