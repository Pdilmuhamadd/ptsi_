<?php

namespace App\Http\Controllers;

use App\Models\AnalisisKebutuhan;
use Illuminate\Http\Request;


class AnalisisKebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('analisis_kebutuhan.index');
    }

    public function data()
    {
        $trx_analisis_kebutuhan = AnalisisKebutuhan::orderBy('id')->get();

        return datatables()
            ->of($trx_analisis_kebutuhan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_analisis_kebutuhan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('analisis_kebutuhan.update', $trx_analisis_kebutuhan->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('analisis_kebutuhan.destroy', $trx_analisis_kebutuhan->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_analisis_kebutuhan = new AnalisisKebutuhan();
        $trx_analisis_kebutuhan->id = $request->id;
        $trx_analisis_kebutuhan->NamaProyek = $request->NamaProyek;
        $trx_analisis_kebutuhan->TujuandanDeskripsi = $request->TujuandanDeskripsi;
        $trx_analisis_kebutuhan->fungsiproyekproduk = $request->fungsiproyekproduk;
        $trx_analisis_kebutuhan->KebutuhanFungsional = $request->KebutuhanFungsional;
        $trx_analisis_kebutuhan->acc = $request->acc;
        $trx_analisis_kebutuhan->save();

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
        $trx_analisis_kebutuhan = AnalisisKebutuhan::find($id);

        return response()->json($trx_analisis_kebutuhan);
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
        $trx_analisis_kebutuhan = AnalisisKebutuhan::find($id)->update($request->all());

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
        $trx_analisis_kebutuhan = AnalisisKebutuhan::find($id);
        $trx_analisis_kebutuhan->delete();

        return response(null, 204);
    }
}
