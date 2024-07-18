<?php

namespace App\Http\Controllers;

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
        return view('perencanaan_proyek.index');
    }

    public function data()
    {
        $trx_perencanaan_proyek = PerencanaanProyek::orderBy('id')->get();

        return datatables()
            ->of($trx_perencanaan_proyek)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_perencanaan_proyek) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('perencanaan_proyek.update', $trx_perencanaan_proyek->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('perencanaan_proyek.destroy', $trx_perencanaan_proyek->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_perencanaan_proyek = new PerencanaanProyek();
        $trx_perencanaan_proyek->id = $request->id;
        $trx_perencanaan_proyek->latar_belakang_proyek = $request->latar_belakang_proyek;
        $trx_perencanaan_proyek->tujuan_proyek = $request->tujuan_proyek;
        $trx_perencanaan_proyek->ruang_lingkup_proyek = $request->ruang_lingkup_proyek;
        $trx_perencanaan_proyek->struktur_tim = $request->struktur_tim;
        $trx_perencanaan_proyek->tanggung_jawab_anggota_tim = $request->tanggung_jawab_anggota_tim;
        $trx_perencanaan_proyek->identifikasi_risiko = $request->identifikasi_risiko;
        $trx_perencanaan_proyek->analisis_risiko = $request->analisis_risiko;
        $trx_perencanaan_proyek->strategi_mitigasi_risiko = $request->strategi_mitigasi_risiko;
        $trx_perencanaan_proyek->fase_proyek = $request->fase_proyek;
        $trx_perencanaan_proyek->kegiatan_utama = $request->kegiatan_utama;
        $trx_perencanaan_proyek->milestones = $request->milestones;
        $trx_perencanaan_proyek->estimasi_biaya = $request->estimasi_biaya;
        $trx_perencanaan_proyek->sumber_pendanaan = $request->sumber_pendanaan;
        $trx_perencanaan_proyek->pengendalian_biaya = $request->pengendalian_biaya;
        $trx_perencanaan_proyek->standar_kualitas = $request->standar_kualitas;
        $trx_perencanaan_proyek->metriks_kualitas = $request->metriks_kualitas;
        $trx_perencanaan_proyek->audit_review_kualitas = $request->audit_review_kualitas;
        $trx_perencanaan_proyek->rencana_komunikasi = $request->rencana_komunikasi;
        $trx_perencanaan_proyek->laporan_status = $request->laporan_status;
        $trx_perencanaan_proyek->pertemuan_tim = $request->pertemuan_tim;
        $trx_perencanaan_proyek->kebutuhan_sdm = $request->kebutuhan_sdm;
        $trx_perencanaan_proyek->kebutuhan_teknologi_komunikasi = $request->kebutuhan_teknologi_komunikasi;
        $trx_perencanaan_proyek->save();

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
        $trx_perencanaan_proyek = PerencanaanProyek::find($id);

        return response()->json($trx_perencanaan_proyek);
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
        $trx_perencanaan_proyek = PerencanaanProyek::find($id)->update($request->all());

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
        $trx_perencanaan_proyek = PerencanaanProyek::find($id);
        $trx_perencanaan_proyek->delete();

        return response(null, 204);
    }
}
