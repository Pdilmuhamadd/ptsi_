<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudiKelayakan;

class StudiKelayakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('studi_kelayakan.index');
    }

    public function data()
    {
        $trx_studi_kelayakan = StudiKelayakan::orderBy('id_studi_kelayakan')->get();

        return datatables()
            ->of($trx_studi_kelayakan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_studi_kelayakan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('studi_kelayakan.update', $trx_studi_kelayakan->id_studi_kelayakan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('studi_kelayakan.destroy', $trx_studi_kelayakan->id_studi_kelayakan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_studi_kelayakan = new StudiKelayakan();
        $trx_studi_kelayakan->id_studi_kelayakan = $request->id_studi_kelayakan;
        $trx_studi_kelayakan->tujuan_dok = $request->tujuan_dok;
        $trx_studi_kelayakan->ikhtisar = $request->ikhtisar;
        $trx_studi_kelayakan->latar_belakang = $request->latar_belakang;
        $trx_studi_kelayakan->konteks_bisnis = $request->konteks_bisnis;
        $trx_studi_kelayakan->tujuan = $request->tujuan;
        $trx_studi_kelayakan->sasaran = $request->sasaran;
        $trx_studi_kelayakan->analisis_opsi = $request->analisis_opsi;
        $trx_studi_kelayakan->lingkup_fungsional = $request->lingkup_fungsional;
        $trx_studi_kelayakan->lingkup_nonfungsional = $request->lingkup_nonfungsional;
        $trx_studi_kelayakan->manfaat_finansial = $request->manfaat_finansial;
        $trx_studi_kelayakan->manfaat_nonfinansial = $request->manfaat_nonfinansial;
        $trx_studi_kelayakan->biaya_pengembangan = $request->biaya_pengembangan;
        $trx_studi_kelayakan->biaya_operasional = $request->biaya_operasional;
        $trx_studi_kelayakan->identifikasi_risiko = $request->identifikasi_risiko;
        $trx_studi_kelayakan->analisis_dampak_risiko = $request->analisis_dampak_risiko;
        $trx_studi_kelayakan->strategi_mitigasi_risiko = $request->strategi_mitigasi_risiko;
        $trx_studi_kelayakan->timeline_proyek = $request->timeline_proyek;
        $trx_studi_kelayakan->tgl_awal = $request->tgl_awal;
        $trx_studi_kelayakan->tgl_akhir = $request->tgl_akhir;
        $trx_studi_kelayakan->kriteria_keberhasilan = $request->kriteria_keberhasilan;
        $trx_studi_kelayakan->persetujuan = $request->persetujuan;
        $trx_studi_kelayakan->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_studi_kelayakan)
    {
        $trx_studi_kelayakan = StudiKelayakan::find($id_studi_kelayakan);

        return response()->json($trx_studi_kelayakan);
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
    public function update(Request $request, $id_studi_kelayakan)
    {
        $trx_studi_kelayakan = StudiKelayakan::find($id_studi_kelayakan)->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_studi_kelayakan)
    {
        $trx_studi_kelayakan = StudiKelayakan::find($id_studi_kelayakan);
        $trx_studi_kelayakan->delete();

        return response(null, 204);
    }
}
