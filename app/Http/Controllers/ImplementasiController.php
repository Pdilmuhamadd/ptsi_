<?php

namespace App\Http\Controllers;

use App\Models\Implementasi;
use Illuminate\Http\Request;


class ImplementasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Implementasi.index');
    }

    public function data()
    {
        $trx_Implementasi = Implementasi::orderBy('id')->get();

        return datatables()
            ->of($trx_Implementasi)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_Implementasi) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('Implementasi.update', $trx_Implementasi->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('Implementasi.destroy', $trx_Implementasi->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_Implementasi = new Implementasi();
        $trx_Implementasi->id = $request->id;
        $trx_Implementasi->nama_proyek = $request->nama_proyek;
        $trx_Implementasi->manajer_proyek = $request->manajer_proyek;
        $trx_Implementasi->tim_implementasi = $request->tim_implementasi;
        $trx_Implementasi->tgl_laporan_implementasi = $request->tgl_laporan_implementasi;
        $trx_Implementasi->tujuan_implementasi = $request->tujuan_implementasi;
        $trx_Implementasi->lingkup_implementasi = $request->lingkup_implementasi;
        $trx_Implementasi->aktivitas_implementasi = $request->aktivitas_implementasi;
        $trx_Implementasi->tgl_aktivitas_implementasi = $request->tgl_aktivitas_implementasi;
        $trx_Implementasi->deskripsi_aktivitas_implementasi = $request->deskripsi_aktivitas_implementasi;
        $trx_Implementasi->status_aktivitas = $request->status_aktivitas;
        $trx_Implementasi->risiko = $request->risiko;
        $trx_Implementasi->deskripsi_risiko = $request->deskripsi_risiko;
        $trx_Implementasi->mitigasi = $request->mitigasi;
        $trx_Implementasi->status_risiko = $request->status_risiko;
        $trx_Implementasi->masalah_ditemui = $request->masalah_ditemui;
        $trx_Implementasi->deskripsi_masalah = $request->deskripsi_masalah;
        $trx_Implementasi->solusi = $request->solusi;
        $trx_Implementasi->status_masalah = $request->status_masalah;
        $trx_Implementasi->rencana_tindak_lanjut = $request->rencana_tindak_lanjut;
        $trx_Implementasi->dokumentasi = $request->dokumentasi;
        $trx_Implementasi->rencana_dukungan = $request->rencana_dukungan;
        $trx_Implementasi->kriteria_kesuksesan = $request->kriteria_kesuksesan;
        $trx_Implementasi->perstujuan = $request->persetujuan;
        $trx_Implementasi->save();

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
        $trx_Implementasi = Implementasi::find($id);

        return response()->json($trx_Implementasi);
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
        $trx_Implementasi = Implementasi::find($id)->update($request->all());

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
        $trx_Implementasi = Implementasi::find($id);
        $trx_Implementasi->delete();

        return response(null, 204);
    }
}
