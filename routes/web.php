<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

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

Route::get('home', function () {
    $home = DB::table('home')->get();

    return view('home',['home' => $home],["title" => "home"]);
});
Route::get('/', function () {
    $home = DB::table('home')->get();

    return view('home',['home' => $home],["title" => "home"]);
});
Route::get('login',[UserController::class, 'login'])->name('login');
Route::post('loginPost',[UserController::class, 'authenticate'])->name('authenticate');
Route::get('register',[UserController::class, 'register'])->name('register');
Route::post('register',[UserController::class, 'registerPost'])->name('registerPost');
Route::post('logout',[UserController::class, 'logout'])->name('logout');
Route::get('logout',[UserController::class, 'logout'])->name('logout');
Route::get('admin', function () {
    if (Auth::user()->level === 'USER') {
        return redirect('/');
    }else {
        return view('dashboard',["title" => "dashboard"]);
    }
});
Route::get('lokasi', function () {
    $lokasi = DB::table('lokasi')->get();
    return view('lokasi',['lokasi' => $lokasi],["title" => "lokasi"]);
});
Route::get('contact', function () {
    return view('contact',["title" => "contact"]);
});
Route::get('carabayar', function () {
    return view('carabayar',["title" => "carabayar"]);
});
Route::get('transaksional', function () {
    return view('transaksional',["title" => "transaksional"]);
});


Route::get('adminHome',[AdminController::class, 'adminHome'])->name('adminHome');
Route::post('updateHome',[AdminController::class, 'updateHome'])->name('updateHome');



Route::get('adminlokasi', function () {
    return view('lokasi/index',["title" => "lokasi"]);
});
Route::get('addLokasi',[AdminController::class, 'AddLokasi'])->name('AddLokasi');
Route::post('addLokasi',[AdminController::class, 'AddLokasiPost'])->name('AddLokasiPost');
Route::get('deleteLokasi/{id_lokasi}',[AdminController::class, 'deleteLokasi'])->name('deleteLokasi');
Route::get('editLokasi/{id_lokasi}',[AdminController::class, 'editLokasi'])->name('editLokasi');
Route::post('updateLokasi',[AdminController::class,'updateLokasi'])->name('updateLokasi');
Route::get('detailLokasi/{id_lokasi}',[AdminController::class, 'detailLokasi'])->name('detailLokasi');



Route::get('adminworks', function () {
    return view('works/index',["title" => "works"]);
});
Route::get('addWorks',[AdminController::class, 'addWorks'])->name('addWorks');
Route::post('addWorksPost',[AdminController::class, 'addWorksPost'])->name('addWorksPost');
Route::get('deleteWorks/{id_works}',[AdminController::class, 'deleteWorks'])->name('deleteWorks');
Route::get('editWorks/{id_works}',[AdminController::class, 'editWorks'])->name('editWorks');
Route::post('updateWorks',[AdminController::class,'updateWorks'])->name('updateWorks');
Route::get('detailWorks/{id_works}',[AdminController::class, 'detailWorks'])->name('detailWorks');



Route::get('adminteam', function () {
    return view('team/index',["title" => "team"]);
});
Route::get('addTeam',[AdminController::class, 'addTeam'])->name('addTeam');
Route::post('addTeamPost',[AdminController::class, 'addTeamPost'])->name('addTeamPost');
Route::get('deleteTeam/{id_team}',[AdminController::class, 'deleteTeam'])->name('deleteTeam');
Route::get('editTeam/{id_team}',[AdminController::class, 'editTeam'])->name('editTeam');
Route::post('updateTeam',[AdminController::class, 'updateTeam'])->name('updateTeam');
Route::get('detailTeam/{id_team}',[AdminController::class, 'detailTeam'])->name('detailTeam');



Route::get('admincustomers', function () {
    return view('customers/index',["title" => "customers"]);
});
Route::get('deleteCustomers/{id_customers}',[AdminController::class, 'deleteCustomers'])->name('deleteCustomers');
Route::get('detailCustomers/{id_customers}',[AdminController::class, 'detailCustomers'])->name('detailCustomers');
Route::get('editCustomers/{id_customers}',[AdminController::class, 'editCustomers'])->name('editCustomers');
Route::post('addCustomersPost',[AdminController::class, 'addCustomersPost'])->name('addCustomersPost');
Route::get('addCustomers',[AdminController::class, 'addCustomers'])->name('addCustomers');
Route::post('updateCustomers',[AdminController::class, 'updateCustomers'])->name('updateCustomers');



Route::get('adminproject', function () {
    return view('project/index',["title" => "project"]);
});
Route::get('addProject',[AdminController::class, 'addProject'])->name('addProject');
Route::post('addProjectPost',[AdminController::class, 'addProjectPost'])->name('addProjectPost');
Route::get('deleteProject/{id_project}',[AdminController::class, 'deleteProject'])->name('deleteProject');
Route::get('editProject/{id_project}',[AdminController::class, 'editProject'])->name('editProject');
Route::post('updateProject',[AdminController::class, 'updateProject'])->name('updateProject');
Route::get('detailProject/{id_project}',[AdminController::class, 'detailProject'])->name('detailProject');



Route::get('admincontact', function () {
    return view('contact/index',["title" => "contact"]);
});
Route::post('addContactPost',[AdminController::class, 'addContactPost'])->name('addContactPost');
Route::get('detailContact/{id_contact}',[AdminController::class, 'detailContact'])->name('detailContact');
Route::get('deleteContact/{id_contact}',[AdminController::class, 'deleteContact'])->name('deleteContact');



Route::get('admincarabayar', function () {
    return view('carabayar/index',["title" => "carabayar"]);
});
Route::get('addCarabayar',[AdminController::class, 'addCarabayar'])->name('addCarabayar');
Route::post('addCarabayarPost',[AdminController::class, 'addCarabayarPost'])->name('addCarabayarPost');
Route::get('deleteCarabayar/{id_bayar}',[AdminController::class, 'deleteCarabayar'])->name('deleteCarabayar');
Route::get('detailCarabayar/{id_bayar}',[AdminController::class, 'detailCarabayar'])->name('detailCarabayar');



Route::get('adminunit', function () {
    return view('unit/index',["title" => "unit"]);
});
Route::get('addUnit',[AdminController::class, 'addUnit'])->name('addUnit');
Route::post('addUnitPost',[AdminController::class, 'addUnitPost'])->name('addUnitPost');
Route::get('deleteUnit/{id_unit}',[AdminController::class, 'deleteUnit'])->name('deleteUnit');
Route::get('editUnit/{id_unit}',[AdminController::class, 'editUnit'])->name('editUnit');
Route::post('updateUnit',[AdminController::class, 'updateUnit'])->name('updateUnit');
Route::get('detailUnit/{id_unit}',[AdminController::class, 'detailUnit'])->name('detailUnit');



Route::get('adminperjalanan', function () {
        $perjalanan = DB::table('perjalanan')
    ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
    ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
    ->join('unit','unit.id_unit','=','perjalanan.id_unit')
    ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','harga',)->get();
    return view('perjalanan/index',["title" => "perjalanan", "perjalanan" => $perjalanan]);
});
Route::get('addPerjalanan',[AdminController::class, 'addPerjalanan'])->name('addPerjalanan');
Route::post('addPerjalananPost',[AdminController::class, 'addPerjalananPost'])->name('addPerjalananPost');
Route::get('deletePerjalanan/{id_perjalanan}',[AdminController::class, 'deletePerjalanan'])->name('deletePerjalanan');
Route::get('editPerjalanan/{id_perjalanan}',[AdminController::class, 'editPerjalanan'])->name('editPerjalanan');
Route::post('updatePerjalanan',[AdminController::class, 'updatePerjalanan'])->name('updatePerjalanan');
Route::get('detailPerjalanan/{id_perjalanan}',[AdminController::class, 'detailPerjalanan'])->name('detailPerjalanan');

Route::get('cekjadwal',[AdminController::class, 'cekjadwalIndex'])->name('cekjadwalIndex');
Route::get('carijadwal',[AdminController::class, 'carijadwal'])->name('carijadwal');

Route::get('cekout',[AdminController::class, 'cekout'])->name('cekout');
Route::post('cekoutPost',[AdminController::class, 'cekoutPost'])->name('cekoutPost');
Route::get('cosukses',[AdminController::class, 'cosukses'])->name('cosukses');

Route::get('admintransaksi', function () {
    $transaksi = DB::table('transaksi')
    ->join('carabayar','transaksi.id_bayar','=','carabayar.id_bayar')
    ->select('transaksi.id_perjalanan','carabayar.carabayar','isPaid','nama_penumpang','notelp','transaksi.created_at','transaksi.isDeleted','transaksi.id_transaksi','img_bukti','nomor_perjalanan')
    ->get();

    return view('transaksi/index',["title" => "transaksional","transaksi" => $transaksi]);
});

Route::get('caritransaksi',[AdminController::class, 'caritransaksi'])->name('caritransaksi');

Route::get('deleteTransaksi/{id_transaksi}',[AdminController::class, 'deleteTransaksi'])->name('deleteTransaksi');
Route::get('confirm/{id_transaksi}',[AdminController::class, 'confirm'])->name('confirm');
Route::get('detailTransaksi/{id_transaksi}',[AdminController::class, 'detailTransaksi'])->name('detailTransaksi');
Route::post('buktibayarPost',[AdminController::class, 'buktibayarPost'])->name('buktibayarPost');
