<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerencanaanKebutuhan;

class PerencanaanKebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perencanaan_kebutuhan.index');
    }

    public function data()
    {
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::orderBy('id_perencanaan_kebutuhan')->get();

        return datatables()
            ->of($trx_perencanaan_kebutuhan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_perencanaan_kebutuhan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('perencanaan_kebutuhan.update', $trx_perencanaan_kebutuhan->id_perencanaan_kebutuhan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('perencanaan_kebutuhan.destroy', $trx_perencanaan_kebutuhan->id_perencanaan_kebutuhan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_perencanaan_kebutuhan = new PerencanaanKebutuhan();
        $trx_perencanaan_kebutuhan->id = $request->id;
        $trx_perencanaan_kebutuhan->nama_proyek = $request-> nama_proyek;
        $trx_perencanaan_kebutuhan->deskripsi = $request-> deskripsi;
        $trx_perencanaan_kebutuhan->pemilik_proyek = $request-> pemilik_proyek;
        $trx_perencanaan_kebutuhan->manajer_proyek = $request-> manajer_proyek;
        $trx_perencanaan_kebutuhan->stakeholders = $request-> stakeholders;
        $trx_perencanaan_kebutuhan->kebutuhan_fungsional = $request-> kebutuhan_fungsional;
        $trx_perencanaan_kebutuhan->kebutuhan_nonfungsional = $request-> kebutuhan_nonfungsional;
        $trx_perencanaan_kebutuhan->lampiran = $request-> lampiran;
        $trx_perencanaan_kebutuhan->nama_pemohon = $request-> nama_pemohon;
        $trx_perencanaan_kebutuhan->jabatan_pemohon = $request-> jabatan_pemohon;
        $trx_perencanaan_kebutuhan->tanggal_disiapkan = $request-> tanggal_disiapkan;
        $trx_perencanaan_kebutuhan->nama = $request-> nama;
        $trx_perencanaan_kebutuhan->jabatan = $request-> jabatan;
        $trx_perencanaan_kebutuhan->tanggal_disetujui = $request-> tanggal_disetujui;

        $trx_perencanaan_kebutuhan->save();

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
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::find($id);

        return response()->json($trx_perencanaan_kebutuhan);
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
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::find($id)->update($request->all());

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
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::find($id);
        $trx_perencanaan_kebutuhan->delete();

        return response(null, 204);
    }
}
