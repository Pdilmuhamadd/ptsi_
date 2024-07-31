<?php

namespace App\Http\Controllers;

use App\Models\AnalisisDesain;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class AnalisisDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('analisis_desain.index');
    }

    public function data()
    {
        $trx_analisis_desain = AnalisisDesain::orderBy('id_analisis_desain')->get();

        return datatables()
            ->of($trx_analisis_desain)
            ->addIndexColumn()
            ->addColumn('select_all', function ($trx_persetujuan_pengembangan) {
                return '
                    <input type="checkbox" name="id_persetujuan_pengembangan[]" value="'. $trx_persetujuan_pengembangan->id_persetujuan_pengembangan .'">
                ';
            })
            ->addColumn('aksi', function ($trx_analisis_desain) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('analisis_desain.update', $trx_analisis_desain->id_analisis_desain) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('analisis_desain.destroy', $trx_analisis_desain->id_analisis_desain) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_analisis_desain = AnalisisDesain::create($request->all());
        $trx_analisis_desain->save();

        return response()->json('Data berhasil disimpan', 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_analisis_desain)
    {
        $trx_analisis_desain = AnalisisDesain::find($id_analisis_desain);

        return response()->json($trx_analisis_desain);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_analisis_desain)
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
    public function update(Request $request, $id_analisis_desain)
    {
        $trx_analisis_desain = AnalisisDesain::find($id_analisis_desain)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_analisis_desain)
    {
        $trx_analisis_desain = AnalisisDesain::find($id_analisis_desain);
        $trx_analisis_desain->delete();

        return response(null, 204);
    }

    public function cetakDokumen(Request $request)
    {
        set_time_limit(300);

        $dataanalisis = AnalisisDesain::whereIn('id_analisis_desain', $request->id_analisis_desain)->get();
        $no = 1;

        $pdf = PDF::loadView('analisis_desain.dokumen', compact('dataanalisis', 'no'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('analisis_desain.pdf');
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->id_analisis_desain;
        AnalisisDesain::whereIn('id_analisis_desain', $ids)->delete();
        return response()->json('Data berhasil dihapus', 200);
    }
}
