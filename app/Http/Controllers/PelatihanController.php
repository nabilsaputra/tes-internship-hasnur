<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PelatihanController extends Controller
{
    function tampil(Request $request){
        $pelatihan = Pelatihan::get();

        if($request->get('export') == 'pdf'){
            $pdf = Pdf::loadView('pdf.rekap', ['pelatihan' => $pelatihan]);
           return $pdf->stream('Rekapitulasi.pdf');
        }
        return view('pelatihan.tampil', compact('pelatihan'));
    }

    function tambah(){
        return view('pelatihan.tambah');
    }

    function submit(Request $request){
        $pelatihan = new Pelatihan();
        $pelatihan->nama_trainer = $request->nama_trainer;
        $pelatihan->tanggal = $request->tanggal;
        $pelatihan->sesi = $request->sesi;
        $pelatihan->waktu = $request->waktu;
        $pelatihan->topik = $request->topik;
        $pelatihan->save();

        return redirect()->route('pelatihan.tampil');
    }

    function edit($id){
        $pelatihan = Pelatihan::find($id);
        return view('pelatihan.edit', compact('pelatihan'));
    }

    function update(Request $request, $id){
        $pelatihan = Pelatihan::find($id);
        $pelatihan->nama_trainer = $request->nama_trainer;
        $pelatihan->tanggal = $request->tanggal;
      
        $pelatihan->waktu = $request->waktu;
        $pelatihan->topik = $request->topik;
        $pelatihan->update();
        return redirect()->route('pelatihan.tampil');
    }

    function delete($id){
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();
        return redirect()->route('pelatihan.tampil');
    }
}
