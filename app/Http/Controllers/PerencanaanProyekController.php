<?php

namespace App\Http\Controllers;

use App\Models\PermintaanPengembangan;
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
        $trx_permintaan_pengembangan = PermintaanPengembangan::all()->pluck('id_permintaan_pengembangan');
        return view('perencanaan_proyek.index',compact('trx_permintaan_pengembangan'));
    }

    public function data()
    {
        $trx_perencanaan_proyek = PerencanaanProyek::leftJoin('trx_permintaan_pengembangan', 'trx_permintaan_pengembangan.id_permintaan_pengembangan','trx_perencanaan_proyek.id_permintaan_pengembangan')
        ->select('id_permintaan_pengembangan.*', 'nama_proyek')
        ->get();

        return datatables()
            ->of($trx_perencanaan_proyek)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_perencanaan_proyek) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('perencanaan_proyek.update', $trx_perencanaan_proyek->id_perencanaan_proyek) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('perencanaan_proyek.destroy', $trx_perencanaan_proyek->id_perencanaan_proyek) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_perencanaan_proyek = PerencanaanProyek::latest()->first() ?? new PerencanaanProyek();
        $request['id_pengemangan_proyek'] = 'P'. tambah_nol_didepan((int)$trx_perencanaan_proyek->id_perencanaan_proyek +1, 6);

        $trx_perencanaan_proyek = PerencanaanProyek::create($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_perencanaan_proyek)
    {
        $trx_perencanaan_proyek = PerencanaanProyek::find($id_perencanaan_proyek);
        $trx_permintaan_pengembangan = PermintaanPengembangan::find($id_permintaan_pengembangan);

        return response()->json($trx_perencanaan_proyek);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_perencanaan_proyek)
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
    public function update(Request $request, $id_perencanaan_proyek)
    {
        $trx_perencanaan_proyek = PerencanaanProyek::find($id_perencanaan_proyek)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_perencanaan_proyek)
    {
        $trx_perencanaan_proyek = PerencanaanProyek::find($id_perencanaan_proyek);
        $trx_perencanaan_proyek->delete();

        return response(null, 204);
    }
}
