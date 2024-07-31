<?php

namespace App\Http\Controllers;

use App\Models\PermintaanPengembangan;
use App\Models\Persetujuan;
use App\Models\PersetujuanAlasan;
use Illuminate\Http\Request;
use App\Models\PersetujuanPengembangan;
use Barryvdh\DomPDF\Facade\Pdf;

class PersetujuanPengembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trx_permintaan_pengembangan = PermintaanPengembangan::all()->pluck('nomor_proyek', 'id_permintaan_pengembangan');
        $mst_persetujuan = Persetujuan::all()->pluck('nama_persetujuan', 'id_mst_persetujuan');
        $mst_persetujuanalasan = PersetujuanAlasan::all()->pluck('nama_alasan', 'id_mst_persetujuanalasan');

        return view('persetujuan_pengembangan.index', compact('trx_permintaan_pengembangan', 'mst_persetujuan', 'mst_persetujuanalasan'));
    }


    public function data()
    {
        $trx_persetujuan_pengembangan = PersetujuanPengembangan::leftJoin('trx_permintaan_pengembangan', 'trx_permintaan_pengembangan.id_permintaan_pengembangan', '=', 'trx_persetujuan_pengembangan.id_permintaan_pengembangan')
            ->leftJoin('mst_persetujuan', 'mst_persetujuan.id_mst_persetujuan', '=', 'trx_persetujuan_pengembangan.id_mst_persetujuan')
            ->leftJoin('mst_persetujuanalasan', 'mst_persetujuanalasan.id_mst_persetujuanalasan', '=', 'trx_persetujuan_pengembangan.id_mst_persetujuanalasan')
            ->select('trx_persetujuan_pengembangan.*', 'trx_permintaan_pengembangan.nomor_proyek', 'mst_persetujuan.nama_persetujuan', 'mst_persetujuanalasan.nama_alasan')
            ->get();

        return datatables()
            ->of($trx_persetujuan_pengembangan)
            ->addIndexColumn()
            ->addColumn('select_all', function ($trx_persetujuan_pengembangan) {
                return '
                    <input type="checkbox" name="id_persetujuan_pengembangan[]" value="'. $trx_persetujuan_pengembangan->id_persetujuan_pengembangan .'">
                ';
            })
            ->addColumn('aksi', function ($trx_persetujuan_pengembangan) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`'. route('persetujuan_pengembangan.update', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`'. route('persetujuan_pengembangan.destroy', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi', 'select_all'])
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
        $trx_persetujuan_pengembangan = PersetujuanPengembangan::create($request->all());
        $trx_persetujuan_pengembangan->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_persetujuan_pengembangan)
    {
        $trx_persetujuan_pengembangan = PersetujuanPengembangan::find($id_persetujuan_pengembangan);

        return response()->json($trx_persetujuan_pengembangan);
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
    public function update(Request $request, $id_persetujuan_pengembangan)
    {
        $trx_persetujuan_pengembangan = PersetujuanPengembangan::find($id_persetujuan_pengembangan);
        $trx_persetujuan_pengembangan->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_persetujuan_pengembangan)
    {
        $trx_persetujuan_pengembangan = PersetujuanPengembangan::find($id_persetujuan_pengembangan);
        $trx_persetujuan_pengembangan->delete();

        return response(null, 204);
    }

    public function cetakDokumen(Request $request)
    {
        set_time_limit(300);

        $datapersetujuan = PersetujuanPengembangan::leftJoin('trx_permintaan_pengembangan', 'trx_permintaan_pengembangan.id_permintaan_pengembangan', '=', 'trx_persetujuan_pengembangan.id_permintaan_pengembangan')
            ->leftJoin('mst_persetujuan', 'mst_persetujuan.id_mst_persetujuan', '=', 'trx_persetujuan_pengembangan.id_mst_persetujuan')
            ->leftJoin('mst_persetujuanalasan', 'mst_persetujuanalasan.id_mst_persetujuanalasan', '=', 'trx_persetujuan_pengembangan.id_mst_persetujuanalasan')
            ->select('trx_permintaan_pengembangan.*', 'trx_persetujuan_pengembangan.*', 'mst_persetujuan.nama_persetujuan', 'mst_persetujuanalasan.nama_alasan')
            ->get();

        $pdf = PDF::loadView('persetujuan_pengembangan.dokumen', compact('datapersetujuan'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('persetujuan.pdf');
    }

    public function getAlasanPersetujuan($id_mst_persetujuan)
    {
        $alasan = PersetujuanAlasan::where('id_mst_persetujuan', $id_mst_persetujuan)->pluck('nama_alasan', 'id_mst_persetujuanalasan');
        return response()->json($alasan);
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->id_persetujuan_pengembangan;
        PersetujuanPengembangan::whereIn('id_persetujuan_pengembangan', $ids)->delete();
        return response()->json('Data berhasil dihapus', 200);
    }
}

