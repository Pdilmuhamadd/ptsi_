<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesainSistem;

class DesainSistemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('desain_sistem.index');
    }

    public function data()
    {
        $trx_desain_sistem = DesainSistem::orderBy('id')->get();

        return datatables()
            ->of($trx_desain_sistem)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_desain_sistem) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('desain_sistem.update', $trx_desain_sistem->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('desain_sistem.destroy', $trx_desain_sistem->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_desain_sistem = new DesainSistem();
        $trx_desain_sistem->id = $request->id;
        $trx_desain_sistem->tujuan = $request->tujuan;
        $trx_desain_sistem->ruang_lingkup = $request->ruang_lingkup;
        $trx_desain_sistem->definisi_akronim_singkatan = $request->definisi_akronim_singkatan;
        $trx_desain_sistem->referensi = $request->referensi;
        $trx_desain_sistem->gambaran_dokumen = $request->gambaran_dokumen;
        $trx_desain_sistem->deskripsi_sistem = $request->deskripsi_sistem;
        $trx_desain_sistem->lingkungan_operasional = $request->lingkungan_operasional;
        $trx_desain_sistem->diagram_arsitektur = $request->diagram_arsitektur;
        $trx_desain_sistem->komponen_sistem = $request->komponen_sistem;
        $trx_desain_sistem->hubungan_antar_komponen = $request->hubungan_antar_komponen;
        $trx_desain_sistem->desain_modul = $request->desain_modul;
        $trx_desain_sistem->diagram_kelas = $request->diagram_kelas;
        $trx_desain_sistem->diagram_urutan = $request->diagram_urutan;
        $trx_desain_sistem->model_data = $request->model_data;
        $trx_desain_sistem->skema_basis_data = $request->skema_basis_data;
        $trx_desain_sistem->aturan_integritas = $request->aturan_integritas;
        $trx_desain_sistem->prototipe_antarmuka = $request->prototipe_antarmuka;
        $trx_desain_sistem->navigasi_antarmuka = $request->navigasi_antarmuka;
        $trx_desain_sistem->elemen_ui = $request->elemen_ui;
        $trx_desain_sistem->mekanisme_keamanan = $request->mekanisme_keamanan;
        $trx_desain_sistem->protokol_keamanan = $request->protokol_keamanan;
        $trx_desain_sistem->persyaratan_kinerja = $request->persyaratan_kinerja;
        $trx_desain_sistem->strategi_kinerja = $request->strategi_kinerja;
        $trx_desain_sistem->persyaratan_hardware = $request->persyaratan_hardware;
        $trx_desain_sistem->persyaratan_software = $request->persyaratan_software;
        $trx_desain_sistem->strategi_implementasi = $request->strategi_implementasi;
        $trx_desain_sistem->step_implementasi = $request->step_implementasi;

        $trx_desain_sistem->save();

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
        $trx_desain_sistem = DesainSistem::find($id);

        return response()->json($trx_desain_sistem);
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
        $trx_desain_sistem = DesainSistem::find($id)->update($request->all());

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
        $trx_desain_sistem = DesainSistem::find($id);
        $trx_desain_sistem->delete();

        return response(null, 204);
    }
}
