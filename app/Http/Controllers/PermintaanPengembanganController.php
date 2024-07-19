<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PermintaanPengembangan;

class PermintaanPengembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permintaan_pengembangan.index');
    }

    public function data()
    {
        $trx_permintaan_pengembangan = PermintaanPengembangan::orderBy('id')->get();

        return datatables()
            ->of($trx_permintaan_pengembangan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_permintaan_pengembangan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('permintaan_pengembangan.update', $trx_permintaan_pengembangan->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('permintaan_pengembangan.destroy', $trx_permintaan_pengembangan->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_permintaan_pengembangan = new PermintaanPengembangan();
        $trx_permintaan_pengembangan->id = $request->id;
        $trx_permintaan_pengembangan->latar_belakang  = $request-> latar_belakang;
        $trx_permintaan_pengembangan->tujuan = $request-> tujuan;
        $trx_permintaan_pengembangan->target_implementasi_sistem = $request->target_implementasi_sistem;
        $trx_permintaan_pengembangan->fungsi_sistem_informasi = $request-> fungsi_sistem_informasi;
        $trx_permintaan_pengembangan->jenis_aplikasi = $request-> jenis_aplikasi;
        $trx_permintaan_pengembangan->pengguna = $request-> pengguna;
        $trx_permintaan_pengembangan->uraian_permintaan_tambahan = $request-> uraian_permintaan_tambahan;
        $trx_permintaan_pengembangan->lampiran = $request-> lampiran;
        $trx_permintaan_pengembangan->nama_pemohon = $request-> nama_pemohon;
        $trx_permintaan_pengembangan->jabatan_pemohon = $request-> jabatan_pemohon;
        $trx_permintaan_pengembangan->tanggal_disiapkan = $request-> tanggal_disiapkan;
        $trx_permintaan_pengembangan->nama = $request-> nama;
        $trx_permintaan_pengembangan->jabatan = $request-> jabatan;
        $trx_permintaan_pengembangan->tanggal_disetujui = $request-> tanggal_disetujui;
        $trx_permintaan_pengembangan->save();

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
        $trx_permintaan_pengembangan = PermintaanPengembangan::find($id);

        return response()->json($trx_permintaan_pengembangan);
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
        $trx_permintaan_pengembangan = PermintaanPengembangan::find($id)->update($request->all());

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
        $trx_permintaan_pengembangan = PermintaanPengembangan::find($id);
        $trx_permintaan_pengembangan->delete();

        return response(null, 204);
    }
}
