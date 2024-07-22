<?php

namespace App\Http\Controllers;

use App\Models\AnalisisDesain;
use Illuminate\Http\Request;


class AnalisisDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('analisis_desain.index');
    }

    public function data()
    {
        $trx_analisis_desain = AnalisisDesain::orderBy('id')->get();

        return datatables()
            ->of($trx_analisis_desain)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_analisis_desain) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('analisis_desain.update', $trx_analisis_desain->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('analisis_desain.destroy', $trx_analisis_desain->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trx_analisis_desain = new AnalisisDesain();
        $trx_analisis_desain->nama_proyek = $request->nama_proyek;
        $trx_analisis_desain->deskripsi_proyek = $request->deskripsi_proyek;
        $trx_analisis_desain->manajer_proyek = $request->manajer_proyek;
        $trx_analisis_desain->kebutuhan_fungsi = $request->kebutuhan_fungsi;
        $trx_analisis_desain->gambaran_arsitektur = $request->gambaran_arsitektur;
        $trx_analisis_desain->detil_arsitektur = $request->detil_arsitektur;
        $trx_analisis_desain->lampiran_mockup = $request->lampiran_mockup;
        $trx_analisis_desain->nama_pemohon = $request->nama_pemohon;
        $trx_analisis_desain->jabatan_pemohon = $request->jabatan_pemohon;
        $trx_analisis_desain->tanggal_disiapkan = $request->tanggal_disiapkan;
        $trx_analisis_desain->nama = $request->nama;
        $trx_analisis_desain->jabatan = $request->jabatan;
        $trx_analisis_desain->tanggal_disetujui = $request->tanggal_disetujui;
        $trx_analisis_desain->status = $request->status;
        $trx_analisis_desain->save();
    
        return response()->json('Data berhasil disimpan', 200);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trx_analisis_desain = AnalisisDesain::find($id);

        return response()->json($trx_analisis_desain);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trx_analisis_desain = AnalisisDesain::find($id)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trx_analisis_desain = AnalisisDesain::find($id);
        $trx_analisis_desain->delete();

        return response(null, 204);
    }
}