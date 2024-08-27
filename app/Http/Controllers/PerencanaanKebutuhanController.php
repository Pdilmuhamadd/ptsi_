<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PersetujuanPengembangan;
use App\Models\PerencanaanKebutuhan;
use Barryvdh\DomPDF\Facade\Pdf;

class PerencanaanKebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_proyek_terpakai = PerencanaanKebutuhan::pluck('id_persetujuan_pengembangan')->toArray();

        $trx_persetujuan_pengembangan = PersetujuanPengembangan::whereNotIn('id_persetujuan_pengembangan', $nama_proyek_terpakai)->pluck('nama_proyek', 'id_persetujuan_pengembangan');

        return view('perencanaan_kebutuhan.index',compact('trx_persetujuan_pengembangan'));
    }

    public function data()
    {
        $trx_perencanaan_kebutuhan = PersetujuanPengembangan::leftJoin('trx_perencanaan_kebutuhan', 'trx_perencanaan_kebutuhan.id_persetujuan_pengembangan', '=', 'trx_persetujuan_pengembangan.id_persetujuan_pengembangan')
        ->leftJoin('trx_perencanaan_kebutuhan', 'trx_perencanaan_kebutuhan.id_perencanaan_proyek', '=', 'trx_perencanaan_proyek.id_perencanaan_proyek')
        ->select('trx_perencanaan_kebutuhan.*', 'trx_persetujuan_pengembangan.*','trx_perencanaan_proyek.*')
        ->get();

        return datatables()
            ->of($trx_perencanaan_kebutuhan)
            ->addIndexColumn()
            ->addColumn('select_all', function ($trx_perencanaan_kebutuhan) {
                return '
                    <input type="checkbox" name="id_perencanaan_kebutuhan[]" value="'. $trx_perencanaan_kebutuhan->id_perencanaan_kebutuhan .'">
                ';
            })
            ->addColumn('deskripsi', function($trx_persetujuan_pengembangan){
                return $trx_persetujuan_pengembangan->deskripsi;
            })
            ->addColumn('pemilik_proyek', function($trx_perencanaan_proyek){
                return $trx_perencanaan_proyek->pemilik_proyek;
            })
            ->addColumn('manajer_proyek', function($trx_perencanaan_proyek){
                return $trx_perencanaan_proyek->manajer_proyek;
            })
            ->addColumn('aksi', function ($trx_persetujuan_pengembangan) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('perencanaan_kebutuhan.update', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('perencanaan_kebutuhan.destroy', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                    <button onclick="UploadPDF(`'. route('perencanaan_kebutuhan.store', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-upload"></i></button>
                    <button onclick="viewForm(`'. route('perencanaan_kebutuhan.view', $trx_persetujuan_pengembangan->id_persetujuan_pengembangan) .'`)" class="btn btn-xs btn-primary btn-flat"><i class="fa fa-eye"></i></button>
                </div>
                ';
            })
            ->addColumn('file_pdf', function ($trx_perencanaan_kebutuhan) {
                if ($trx_perencanaan_kebutuhan->file_pdf) {
                    return '<a href="/storage/assets/pdf/' . $trx_perencanaan_kebutuhan->file_pdf . '" target="_blank">Lihat PDF</a>';
                }
                return '-';
            })
            ->rawColumns(['aksi', 'select_all','file_pdf'])
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
        $data = $request->all();

        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();

            $path = $file->storeAs('assets/lampiran', $filename, 'public');

            $data['lampiran'] = $filename;
        }

        if ($request->hasFile('file_pdf')) {
            $file = $request->file('file_pdf');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('assets/pdf', $filename, 'public');
            $data['file_pdf'] = $filename;
        }

        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::create($data);
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
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::find($id);

        return response()->json($trx_perencanaan_kebutuhan);
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
    public function update(Request $request, $id_perencanaan_kebutuhan)
    {
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::findOrFail($id_perencanaan_kebutuhan);
        $data = $request->all();

        if ($request->hasFile('lampiran')) {
            $file = $request->file('lampiran');

            $path = $file->storeAs('assets/lampiran', $file->getClientOriginalName(), 'public');

            $data['lampiran'] = 'storage/' . $path;
        }

        $trx_perencanaan_kebutuhan->update($data);
        return response()->json('Data berhasil diperbarui', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::find($id);
        $trx_perencanaan_kebutuhan->delete();

        return response(null, 204);
    }

    public function deleteSelected(Request $request)
    {
        $ids = $request->id_perencanaan_kebutuhan;
        PerencanaanKebutuhan::whereIn('id_perencanaan_kebutuhan', $ids)->delete();
        return response()->json('Data berhasil dihapus', 200);
    }

    public function cetakDokumen(Request $request)
    {
        set_time_limit(300);
        $datakebutuhan = PerencanaanKebutuhan::whereIn('id_perencanaan_kebutuhan', $request->id_perencanaan_kebutuhan)->get();
        $no  = 1;
        $pdf = PDF::loadView('perencanaan_kebutuhan.dokumen', compact('datakebutuhan', 'no'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('PerencanaanKebutuhan.pdf');
    }

    public function view($id)
    {
        $trx_perencanaan_kebutuhan = PerencanaanKebutuhan::findOrFail($id);
        return response()->json($trx_perencanaan_kebutuhan);
    }
}
