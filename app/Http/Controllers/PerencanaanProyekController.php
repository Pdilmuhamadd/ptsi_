<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerencanaanProyek;

class PerencanaanProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perencanaan_proyek.index');
    }

    public function data()
    {
        $trx_perencanaan_proyek = PerencanaanProyek::orderBy('id')->get();

        return datatables()
            ->of($trx_perencanaan_proyek)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_perencanaan_proyek) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('perencanaan_proyek.update', $trx_perencanaan_proyek->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('perencanaan_proyek.destroy', $trx_perencanaan_proyek->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_perencanaan_proyek = new PerencanaanProyek();
        $trx_perencanaan_proyek->id = $request->id;
        $trx_perencanaan_proyek->nama_proyek = $request->nama_proyek;
        $trx_perencanaan_proyek->deskripsi = $request->deskripsi;
        $trx_perencanaan_proyek->pemilik_proyek = $request->pemilik_proyek;
        $trx_perencanaan_proyek->manajer_proyek = $request->manajer_proyek;
        $trx_perencanaan_proyek->ruang_lingkup = $request->ruang_lingkup;
        $trx_perencanaan_proyek->tanggal_mulai = $request->tanggal_mulai;
        $trx_perencanaan_proyek->target_selesai = $request->target_selesai;
        $trx_perencanaan_proyek->estimasi_biaya = $request->estimasi_biaya;
        $trx_perencanaan_proyek->nama_pemohon = $request->nama_pemohon;
        $trx_perencanaan_proyek->jabatan_pemohon = $request->jabatan_pemohon;
        $trx_perencanaan_proyek->tanggal_disiapkan = $request->tanggal_disiapkan;
        $trx_perencanaan_proyek->nama = $request->nama;
        $trx_perencanaan_proyek->jabatan = $request->jabatan;
        $trx_perencanaan_proyek->tanggal_disetujui = $request->tanggal_disetujui;

        $trx_perencanaan_proyek->save();

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
        $trx_perencanaan_proyek = PerencanaanProyek::find($id);

        return response()->json($trx_perencanaan_proyek);
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
        $trx_perencanaan_proyek = PerencanaanProyek::find($id)->update($request->all());

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
        $trx_perencanaan_proyek = PerencanaanProyek::find($id);
        $trx_perencanaan_proyek->delete();

        return response(null, 204);
    }
}
