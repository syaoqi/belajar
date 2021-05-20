<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UjianController extends Controller
{
public function index(){
    $ujian = Ujian::all();
    return view("ujian.index", compact("ujian"));
}

public function tambah()
{
    return view("ujian.tambah");
}

public function aksi_tambah(Request $request)
{
    $ujian = new Ujian;
    $ujian->nama_mk = $request->get("nama_mk");
    $ujian->dosen = $request->get("dosen");
    $ujian->jumlah_soal = $request->get("jumlah_soal");
    $ujian->keterangan = $request->get("keterangan");

    $ujian->save();

    return redirect()->route('ujian');
}

public function edit($id)
{
    $ujian = Ujian::find($id);

    return view("ujian.edit", compact("ujian"));
}

public function aksi_edit(Request $request, $id)
{
    $ujian = Ujian::findOrFail($id);
    $ujian->nama_mk = $request->get("nama_mk");
    $ujian->dosen = $request->get("dosen");
    $ujian->jumlah_soal = $request->get("jumlah_soal");
    $ujian->keterangan = $request->get("keterangan");

    $ujian->update();
    return redirect()->route('ujian');
}

public function delete($id)
{
    $ujian = Ujian::findOrFail($id);

    $ujian->delete();

    return redirect()->route('ujian');
}

}
