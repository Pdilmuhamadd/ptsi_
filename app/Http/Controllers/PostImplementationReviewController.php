<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostImplementationReview;

class PostImplementationReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post_implementation_review.index');
    }

    public function data()
    {
        $trx_post_implementation_review = PostImplementationReview::orderBy('id')->get();

        return datatables()
            ->of($trx_post_implementation_review)
            ->addIndexColumn()
            ->addColumn('aksi', function ($trx_post_implementation_review) {
                return '
                <div class="btn-group">
                    <button onclick="editForm(`'. route('post_implementation_review.update', $trx_post_implementation_review->id) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button onclick="deleteData(`'. route('post_implementation_review.destroy', $trx_post_implementation_review->id) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
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
        $trx_post_implementation_review = new PostImplementationReview();
        $trx_post_implementation_review->id = $request->id;
        $trx_post_implementation_review->nama_proyek = $request->nama_proyek;
        $trx_post_implementation_review->tgl_mulai = $request->tgl_mulai;
        $trx_post_implementation_review->tgl_selesai = $request->tgl_selesai;
        $trx_post_implementation_review->manajer_proyek = $request->manajer_proyek;
        $trx_post_implementation_review->tujuan_pir = $request->tujuan_pir;
        $trx_post_implementation_review->deskripsi = $request->deskripsi;
        $trx_post_implementation_review->tujuan_proyek = $request->tujuan_proyek;
        $trx_post_implementation_review->ruang_lingkup_proyek = $request->ruang_lingkup_proyek;
        $trx_post_implementation_review->waktu = $request->waktu;
        $trx_post_implementation_review->biaya = $request->biaya;
        $trx_post_implementation_review->ruang_lingkup_pencapaian = $request->ruang_lingkup_pencapaian;
        $trx_post_implementation_review->fungsionalitas = $request->fungsionalitas;
        $trx_post_implementation_review->kinerja = $request->kinerja;
        $trx_post_implementation_review->keandalan = $request->keandalan;
        $trx_post_implementation_review->pengguna = $request->pengguna;
        $trx_post_implementation_review->feedback_positif = $request->feedback_positif;
        $trx_post_implementation_review->feedback_negatif = $request->feedback_negatif;
        $trx_post_implementation_review->efisiensi = $request->efisiensi;
        $trx_post_implementation_review->akurasi = $request->akurasi;
        $trx_post_implementation_review->kepuasan_pengguna = $request->kepuasan_pengguna;
        $trx_post_implementation_review->masalah = $request->masalah;
        $trx_post_implementation_review->solusi = $request->solusi;
        $trx_post_implementation_review->pelajaran_yang_dipetik = $request->pelajaran_yang_dipetik;
        $trx_post_implementation_review->kesimpulan = $request->kesimpulan;
        $trx_post_implementation_review->rekomendasi = $request->rekomendasi;
        $trx_post_implementation_review->pemangku_kepentingan = $request->pemangku_kepentingan;
        $trx_post_implementation_review->tanggal_persetujuan = $request->tanggal_persetujuan;
        $trx_post_implementation_review->save();

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
        $trx_post_implementation_review = PostImplementationReview::find($id);

        return response()->json($trx_post_implementation_review);
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
        $trx_post_implementation_review = PostImplementationReview::find($id)->update($request->all());

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
        $trx_post_implementation_review = PostImplementationReview::find($id);
        $trx_post_implementation_review->delete();

        return response(null, 204);
    }
}
