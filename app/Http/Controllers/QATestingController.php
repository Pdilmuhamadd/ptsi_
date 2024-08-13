<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QATesting;
use Barryvdh\DomPDF\Facade\Pdf;

class QATestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('qa_testing.index');
    }

    public function data()
    {
        $trx_qat = QATesting::orderBy('id_qat', 'desc')->get();

        return datatables()
            ->of($trx_qat)
            ->addIndexColumn()
            ->addColumn('select_all', function ($trx_qat) {
                return '
                    <input type="checkbox" name="id_qat[]" value="'. $trx_qat->id_qat .'">
                ';
            })
            ->addColumn('aksi', function ($trx_qat) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('qa_testing.update', $trx_qat->id_qat) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('qa_testing.destroy', $trx_qat->id_qat) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        // dd($request->all());
        // die;

        $trx_qat = QATesting::create($request->all());
        $trx_qat->save();

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
        $trx_qat = QATesting::find($id);

        return response()->json($trx_qat);
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
    public function update(Request $request, $id_qat)
    {
        $trx_qat = QATesting::find($id_qat)->update($request->all());

        return response()->json('Data berhasil diperbarui', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_qat)
    {
        $trx_qat = QATesting::find($id_qat);
        $trx_qat->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->id_qat;
        QATesting::whereIn('id_qat', $ids)->delete();
        return response()->json('Data berhasil dihapus', 200);
    }

    public function cetakDokumen(Request $request)
    {
        set_time_limit(300);

        $dataQAT = QATesting::whereIn('id_qat', $request->id_qat)->get();
        $no  = 1;

        $pdf = PDF::loadView('qa_testing.dokumen', compact('dataQAT', 'no'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Quality Assurance Testing (QAT).pdf');
    }
}
