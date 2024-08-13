<?php

namespace App\Http\Controllers;

use App\Models\AnalisisDesain;
use App\Models\serahterimaaplikasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class serahterimaaplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('serah_terima_aplikasi.index');
    }

    public function data()
    {
        $trx_serah_terima_aplikasi = serahterimaaplikasi::orderBy('id_serah_terima_aplikasi')->get();

        return datatables()
            ->of($trx_serah_terima_aplikasi)
            ->addIndexColumn()
            ->addColumn('select_all', function ($trx_serah_terima_aplikasi) {
                return '
                    <input type="checkbox" name="id_analisis_desain[]" value="'. $trx_serah_terima_aplikasi->id_serah_terima_aplikasi .'">
                ';
            })
            ->addColumn('aksi', function ($trx_serah_terima_aplikasi) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('analisis_desain.update', $trx_serah_terima_aplikasi->id_serah_terima_aplikasi) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('analisis_desain.destroy', $trx_serah_terima_aplikasi->id_serah_terima_aplikasi) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_serah_terima_aplikasi = serahterimaaplikasi::create($request->all());
        $trx_serah_terima_aplikasi->save();

        return response()->json('Data berhasil disimpan', 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_serah_terima_aplikasi)
    {
        $trx_serah_terima_aplikasi = serahterimaaplikasi::find($id_serah_terima_aplikasi);

        return response()->json($trx_serah_terima_aplikasi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_serah_terima_aplikasi)
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
    public function update(Request $request, $id_serah_terima_aplikasi)
    {
        $trx_serah_terima_aplikasi = serahterimaaplikasi::find($id_serah_terima_aplikasi)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_serah_terima_aplikasi)
    {
        $trx_serah_terima_aplikasi = serahterimaaplikasi::find($id_serah_terima_aplikasi);
        $trx_serah_terima_aplikasi->delete();

        return response(null, 204);
    }

    public function cetakDokumen(Request $request)
    {
        set_time_limit(300);

        $serahterimaaplikasi = serahterimaaplikasi::whereIn('id_analisis_desain', $request->id_serah_terima_aplikasi)->get();
        $no  = 1;

        $pdf = PDF::loadView('serah_terima_aplikasi.dokumen', compact('serahterimaaplikasi', 'no'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('analisis.pdf');
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->id_serah_terima_aplikasi;
        serahterimaaplikasi::whereIn('id_serah_terima_aplikasi', $ids)->delete();
        return response()->json('Data berhasil dihapus', 200);
    }
}
