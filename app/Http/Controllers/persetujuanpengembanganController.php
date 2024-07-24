<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persetujuanpengembangan;

class persetujuanpengembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('persetujuan_pengembangan.index');
    }

    public function data()
    {
        $trx_persetujuan_pengembangan = persetujuanpengembangan::orderBy('id_persetujuan_pengembangan')->get();

        return datatables()
            ->of($trx_persetujuan_pengembangan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_persetujuan_pengembangan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('persetujuan_pengembangan.update', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('persetujuan_pengembangan.destroy', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_persetujuan_pengembangan = persetujuanpengembangan::create($request->all());
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
        $trx_persetujuan_pengembangan = persetujuanpengembangan::find($id_persetujuan_pengembangan);

        return response()->json($trx_persetujuan_pengembangan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_persetujuan_pengembangan)
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
        $trx_persetujuan_pengembangan = persetujuanpengembangan::find($id_persetujuan_pengembangan)->update($request->all());

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
        $trx_persetujuan_pengembangan = persetujuanpengembangan::find($id_persetujuan_pengembangan);
        $trx_persetujuan_pengembangan->delete();

        return response(null, 204);
    }
}
