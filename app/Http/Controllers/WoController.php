<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\wo;
use App\Exports\WoExport;
use App\Imports\WoImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class WoController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $data = wo::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = wo::paginate(5);
        }
        return view('datawo', compact('data'));
    }

    public function tambahwo()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {

        $data = wo::create($request->all());
        if ($request->hasFile('foto_open')) {
            $request->file('foto_open')->move('fotoopen/', $request->file('foto_open')->getClientOriginalName());
            $data->foto_open = $request->file('foto_open')->getClientOriginalName();
            $data->save();
            $request->file('foto_close')->move('fotoclose/', $request->file('foto_close')->getClientOriginalName());
            $data->foto_close = $request->file('foto_close')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('wo')->with('success', 'WO Berhasil ditambahkan');
    }

    public function tampilkandata($id)
    {
        $data = wo::find($id);
        //dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {

        $data = wo::find($id);
        $data->update($request->all());

        return redirect()->route('wo')->with('success', 'WO Berhasil diupdate');
    }

    public function delete($id)
    {
        $data = wo::find($id);
        $data->delete();
        return redirect()->route('wo')->with('success', 'WO Berhasil dihapus');
    }

    public function exportpdf()
    {
        $data = wo::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datawo-pdf');
        return $pdf->download('data.pdf');
    }

    public function exportexcel()
    {
        return Excel::download(new WoExport, 'datawo.xlsx');
    }

    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('WoData', $namafile);

        Excel::import(new WoImport, \public_path('/WoData/' . $namafile));
        return \redirect()->back();
    }
}
