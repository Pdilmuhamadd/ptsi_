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
        $trx_permintaan_pengembangan = PermintaanPengembangan::orderBy('id_permintaan_pengembangan', 'desc')->get();

        return datatables()
            ->of($trx_permintaan_pengembangan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_permintaan_pengembangan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('permintaan_pengembangan.update', $trx_permintaan_pengembangan->id_permintaan_pengembangan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('permintaan_pengembangan.destroy', $trx_permintaan_pengembangan->id_permintaan_pengembangan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_permintaan_pengembangan = PermintaanPengembangan::create($request->all());
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
        $trx_permintaan_pengembangan->update();

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
