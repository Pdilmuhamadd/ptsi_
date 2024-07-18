<?php

use App\Http\Controllers\{
    DashboardController,
    KategoriController,
    LaporanController,
    ProdukController,
    MemberController,
    PengeluaranController,
    PembelianController,
    PembelianDetailController,
    PenjualanController,
    PenjualanDetailController,
    StudiKelayakanController,
    PerencanaanProyekController,
    PostImplementationReviewController,
    ImplementasiController,
    SettingController,
    SupplierController,
    UserController,
    AnalisisKebutuhanController,
};
use App\Http\Controllers\DesainSistemController;
use App\Models\AnalisisKebutuhan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => 'level:1'], function () {
        Route::get('/kategori/data', [KategoriController::class, 'data'])->name('kategori.data');
        Route::post('/kategori/delete-selected', [KategoriController::class, 'deleteSelected'])->name('kategori.delete_selected');
        Route::resource('/kategori', KategoriController::class);

        Route::get('/studi_kelayakan', [StudiKelayakanController::class, 'index'])->name('studi_kelayakan.index');
        Route::get('/studi_kelayakan/data', [StudiKelayakanController::class, 'data'])->name('studi_kelayakan.data');
        Route::post('/studi_kelayakan/delete-selected', [StudiKelayakanController::class, 'deleteSelected'])->name('studi_kelayakan.delete_selected');
        Route::resource('/studi_kelayakan', StudiKelayakanController::class);

        Route::get('/perencanaan_proyek', [PerencanaanProyekController::class, 'index'])->name('perencanaan_proyek.index');
        Route::get('/perencanaan_proyek/data', [PerencanaanProyekController::class, 'data'])->name('perencanaan_proyek.data');
        Route::post('/perencanaan_proyek/delete-selected', [PerencanaanProyekController::class, 'deleteSelected'])->name('perencanaan_proyek.delete_selected');
        Route::resource('/perencanaan_proyek', PerencanaanProyekController::class);

        Route::get('/desain_sistem', [DesainSistemController::class, 'index'])->name('desain_sistem.index');
        Route::get('/desain_sistem/data', [DesainSistemController::class, 'data'])->name('desain_sistem.data');
        Route::post('/desain_sistem/delete-selected', [DesainSistemController::class, 'deleteSelected'])->name('desain_sistem.delete_selected');
        Route::resource('/desain_sistem', DesainSistemController::class);

        Route::get('/post_implementation_review', [PostImplementationReviewController::class, 'index'])->name('post_implementation_review.index');
        Route::get('/post_implementation_review/data', [PostImplementationReviewController::class, 'data'])->name('post_implementation_review.data');
        Route::post('/post_implementation_review/delete-selected', [PostImplementationReviewController::class, 'deleteSelected'])->name('post_implementation_review.delete_selected');
        Route::resource('/post_implementation_review', PostImplementationReviewController::class);

        Route::get('/analisis_kebutuhan', [AnalisisKebutuhanController::class, 'index'])->name('analisis_kebutuhan.index');
        Route::get('/analisis_kebutuhan/data', [AnalisisKebutuhanController::class, 'data'])->name('analisis_kebutuhan.data');
        Route::post('/analisis_kebutuhan/delete-selected', [AnalisisKebutuhanController::class, 'deleteSelected'])->name('analisis_kebutuhan.delete_selected');
        Route::resource('/analisis_kebutuhan', AnalisisKebutuhanController::class);

        Route::get('/implementasi', [ImplementasiController::class, 'index'])->name('implementasi.index');
        Route::get('/implementasi/data', [ImplementasiController::class, 'data'])->name('implementasi.data');
        Route::post('/implementasi/delete-selected', [ImplementasiController::class, 'deleteSelected'])->name('implementasi.delete_selected');
        Route::resource('/implementasi', ImplementasiController::class);

        Route::get('/produk/data', [ProdukController::class, 'data'])->name('produk.data');
        Route::post('/produk/delete-selected', [ProdukController::class, 'deleteSelected'])->name('produk.delete_selected');
        Route::post('/produk/cetak-barcode', [ProdukController::class, 'cetakBarcode'])->name('produk.cetak_barcode');
        Route::resource('/produk', ProdukController::class);

        Route::get('/member/data', [MemberController::class, 'data'])->name('member.data');
        Route::post('/member/cetak-member', [MemberController::class, 'cetakMember'])->name('member.cetak_member');
        Route::resource('/member', MemberController::class);

        Route::get('/supplier/data', [SupplierController::class, 'data'])->name('supplier.data');
        Route::resource('/supplier', SupplierController::class);

        Route::get('/pengeluaran/data', [PengeluaranController::class, 'data'])->name('pengeluaran.data');
        Route::resource('/pengeluaran', PengeluaranController::class);

        Route::get('/pembelian/data', [PembelianController::class, 'data'])->name('pembelian.data');
        Route::get('/pembelian/{id}/create', [PembelianController::class, 'create'])->name('pembelian.create');
        Route::resource('/pembelian', PembelianController::class)
            ->except('create');

        Route::get('/pembelian_detail/{id}/data', [PembelianDetailController::class, 'data'])->name('pembelian_detail.data');
        Route::get('/pembelian_detail/loadform/{diskon}/{total}', [PembelianDetailController::class, 'loadForm'])->name('pembelian_detail.load_form');
        Route::resource('/pembelian_detail', PembelianDetailController::class)
            ->except('create', 'show', 'edit');

        Route::get('/penjualan/data', [PenjualanController::class, 'data'])->name('penjualan.data');
        Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
        Route::get('/penjualan/{id}', [PenjualanController::class, 'show'])->name('penjualan.show');
        Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
    });

    Route::group(['middleware' => 'level:1,2'], function () {
        Route::get('/transaksi/baru', [PenjualanController::class, 'create'])->name('transaksi.baru');
        Route::post('/transaksi/simpan', [PenjualanController::class, 'store'])->name('transaksi.simpan');
        Route::get('/transaksi/selesai', [PenjualanController::class, 'selesai'])->name('transaksi.selesai');
        Route::get('/transaksi/nota-kecil', [PenjualanController::class, 'notaKecil'])->name('transaksi.nota_kecil');
        Route::get('/transaksi/nota-besar', [PenjualanController::class, 'notaBesar'])->name('transaksi.nota_besar');

        Route::get('/transaksi/{id}/data', [PenjualanDetailController::class, 'data'])->name('transaksi.data');
        Route::get('/transaksi/loadform/{diskon}/{total}/{diterima}', [PenjualanDetailController::class, 'loadForm'])->name('transaksi.load_form');
        Route::resource('/transaksi', PenjualanDetailController::class)
            ->except('create', 'show', 'edit');
    });

    Route::group(['middleware' => 'level:1'], function () {
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/laporan/data/{awal}/{akhir}', [LaporanController::class, 'data'])->name('laporan.data');
        Route::get('/laporan/pdf/{awal}/{akhir}', [LaporanController::class, 'exportPDF'])->name('laporan.export_pdf');

        Route::get('/user/data', [UserController::class, 'data'])->name('user.data');
        Route::resource('/user', UserController::class);

        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::get('/setting/first', [SettingController::class, 'show'])->name('setting.show');
        Route::post('/setting', [SettingController::class, 'update'])->name('setting.update');
    });

    Route::group(['middleware' => 'level:1,2'], function () {
        Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');
        Route::post('/profil', [UserController::class, 'updateProfil'])->name('user.update_profil');
    });
});
