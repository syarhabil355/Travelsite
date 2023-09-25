<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Mail\travelmail;
use App\Mail\emailtagihan;
use App\Mail\emailbukti;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{   
    public function adminHome()
    {
        $home = DB::table('home')->get();
        return view('home/edit',['home' => $home,"title" => "home"]);
    }
    public function updateHome(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('home')->where('id_home', $request->id_home)->update([
            'subheading' => $request->subheading,
            'heading' => $request->heading,
            'weekday_opening' => $request->weekday_opening,
            'weekday_closing' => $request->weekday_closing,
            'weekend_opening' => $request->weekend_opening,
            'weekend_closing' => $request->weekend_closing,
            'content_title' => $request->content_title,
            'content' => $request->content,
            'experience' => $request->experience,
            'customers' => $request->customers,
            'travel_held' => $request->travel_held,
            'team_title' => $request->team_title,
            'team_content' => $request->team_content,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ]);
        return redirect('adminHome')->with('success','Registered successfully');
    }




    public function AddLokasi()
    {
        return view('lokasi/add',["title" => "lokasi"]);
    }
    public function editLokasi($id)
    {
        $lokasi = DB::table('lokasi')->where('id_lokasi',$id)->get();
        return view('lokasi/edit',['lokasi' => $lokasi,"title" => "lokasi"]);
    }
    public function detailLokasi($id)
    {
        $lokasi = DB::table('lokasi')->where('id_lokasi',$id)->get();
        return view('lokasi/detail',['lokasi' => $lokasi,"title" => "lokasi"]);
    }
    public function AddLokasiPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('lokasi')->insert([
            'namalokasi' => $request->namalokasi,
            'ket' => $request->ket,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ]);
        return redirect('adminlokasi')->with('success','Registered successfully');
    }
    public function updateLokasi(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('lokasi')->where('id_lokasi', $request->id_lokasi)->update([
            'namalokasi' => $request->namalokasi,
            'ket' => $request->ket,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ]);
        return redirect('adminlokasi')->with('success','Registered successfully');
    }
    public function deleteLokasi($id_lokasi){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('lokasi')->where('id_lokasi',$id_lokasi)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('adminlokasi')->with('success','Successfully Delete Data');
        }else{
        return redirect('adminLokasi')->with('error','Failed Delete Data');
        }
    }



    public function addWorks()
    {
        return view('works/add',["title" => "works"]);
    }
    public function AddWorksPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('works')->insert([
            'icon' => $request->icon,
            'work_title' => $request->work_title,
            'work_content' => $request->work_content,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ]);
        return redirect('adminworks')->with('success','Registered successfully');
    }
    public function deleteWorks($id_works){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('works')->where('id_works',$id_works)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('adminworks')->with('success','Successfully Delete Data');
        }else{
        return redirect('adminworks')->with('error','Failed Delete Data');
        }
    }
    public function editWorks($id)
    {
        $works = DB::table('works')->where('id_works',$id)->get();
        return view('works/edit',['works' => $works,"title" => "works"]);
    }
    public function updateWorks(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('works')->where('id_works', $request->id_works)->update([
            'icon' => $request->icon,
            'work_title' => $request->work_title,
            'work_content' => $request->work_content,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ]);
        return redirect('adminworks')->with('success','Registered successfully');
    }
    public function detailWorks($id)
    {
        $works = DB::table('works')->where('id_works',$id)->get();
        return view('works/detail',['works' => $works,"title" => "works"]);
    }



    public function addTeam()
    {
        return view('team/add',["title" => "team"]);
    }
    public function addTeamPost(Request $request)
    {   
        $request->validate([
            'staff_img' => 'required|mimes:jpg,jpeg,png'
        ],[
            'staff_img.required' => 'Masukkan Foto',
            'staff_img.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $staff_img_file = $request->file('staff_img');
        $img_ext = $staff_img_file->extension();
        $staff_img_name = date('ymdhis').".".$img_ext;
        $staff_img_file->move(public_path('images/staff'),$staff_img_name);
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $data_team = [
            'staff_img' => $staff_img_name,
            'staff_name' => $request->staff_name,
            'position' => $request->position,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ];
        $save = DB::table('team')->insert($data_team);
        if ($save) {
            return redirect('adminteam');
        }
    }
    public function deleteTeam($id_team){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('team')->where('id_team',$id_team)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('adminteam')->with('success','Successfully Delete Data');
        }else{
        return redirect('adminteam')->with('error','Failed Delete Data');
        }
    }
    public function editTeam($id)
    {
        $team = DB::table('team')->where('id_team',$id)->get();
        return view('team/edit',['team' => $team,"title" => "team"]);
    }
    public function updateTeam(Request $request)
    {   
        $request->validate([
            'staff_img' => 'required|mimes:jpg,jpeg,png'
        ],[
            'staff_img.required' => 'Masukkan Foto',
            'staff_img.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $staff_img_file = $request->file('staff_img');
        $img_ext = $staff_img_file->extension();
        $staff_img_name = date('ymdhis').".".$img_ext;
        $staff_img_file->move(public_path('images/staff'),$staff_img_name);
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $data_team = [
            'staff_img' => $staff_img_name,
            'staff_name' => $request->staff_name,
            'position' => $request->position,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ];
        
        $save = DB::table('team')->where('id_team', $request->id_team)->update($data_team);
        if ($save) {
            return redirect('adminteam')->with('success','Registered successfully');
        }
    }
    public function detailTeam($id)
    {
        $team = DB::table('team')->where('id_team',$id)->get();
        return view('team/detail',['team' => $team,"title" => "team"]);
    }



    public function deleteCustomers($id_customers){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('customers')->where('id_customers',$id_customers)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('admincustomers')->with('success','Successfully Delete Data');
        }else{
        return redirect('admincustomers')->with('error','Failed Delete Data');
        }
    }
    public function detailCustomers($id)
    {
        $customers = DB::table('customers')->where('id_customers',$id)->get();
        return view('customers/detail',['customers' => $customers,"title" => "customers"]);
    }
    public function addCustomers()
    {
        return view('customers/add',["title" => "customers"]);
    }
    public function addCustomersPost(Request $request)
    {   
        $request->validate([
            'pp' => 'required|mimes:jpg,jpeg,png'
        ],[
            'pp.required' => 'Masukkan Foto',
            'pp.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $pp_file = $request->file('pp');
        $img_ext = $pp_file->extension();
        $pp_name = date('ymdhis').".".$img_ext;
        $pp_file->move(public_path('images/customers'),$pp_name);
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $data_customers = [
            'pp' => $pp_name,
            'customers_name' => $request->customers_name,
            'position' => $request->position,
            'comment' => $request->comment,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ];
        $save = DB::table('customers')->insert($data_customers);
        if ($save) {
            return redirect('admincustomers');
        }
    }
    public function editCustomers($id)
    {
        $customers = DB::table('customers')->where('id_customers',$id)->get();
        return view('customers/edit',['customers' => $customers,"title" => "customers"]);
    }
    public function updateCustomers(Request $request)
    {   
        $request->validate([
            'pp' => 'required|mimes:jpg,jpeg,png'
        ],[
            'pp.required' => 'Masukkan Foto',
            'pp.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $pp_file = $request->file('pp');
        $img_ext = $pp_file->extension();
        $pp_name = date('ymdhis').".".$img_ext;
        $pp_file->move(public_path('images/customers'),$pp_name);
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $data_customers = [
            'pp' => $pp_name,
            'customers_name' => $request->customers_name,
            'position' => $request->position,
            'comment' => $request->comment,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ];
        
        $save = DB::table('customers')->where('id_customers', $request->id_customers)->update($data_customers);
        if ($save) {
            return redirect('admincustomers')->with('success','Registered successfully');
        }else{
            return redirect('admincustomers')->with('error','fail');
        }
    }


    public function addProject()
    {
        return view('project/add',["title" => "project"]);
    }
    public function addProjectPost(Request $request)
    {   
        $request->validate([
            'project_img' => 'required|mimes:jpg,jpeg,png'
        ],[
            'project_img.required' => 'Masukkan Foto',
            'project_img.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $project_img_file = $request->file('project_img');
        $img_ext = $project_img_file->extension();
        $project_img_name = date('ymdhis').".".$img_ext;
        $project_img_file->move(public_path('images/project'),$project_img_name);
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $data_project = [
            'project_img' => $project_img_name,
            'project_logo' => $request->project_logo,
            'project_title' => $request->project_title,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ];
        $save = DB::table('project')->insert($data_project);
        if ($save) {
            return redirect('adminproject');
        }
    }
    public function deleteProject($id_project){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('project')->where('id_project',$id_project)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('adminproject')->with('success','Successfully Delete Data');
        }else{
        return redirect('adminproject')->with('error','Failed Delete Data');
        }
    }
    public function editProject($id)
    {
        $project = DB::table('project')->where('id_project',$id)->get();
        return view('project/edit',['project' => $project,"title" => "project"]);
    }
    public function updateProject(Request $request)
    {   
        $request->validate([
            'project_img' => 'required|mimes:jpg,jpeg,png'
        ],[
            'project_img.required' => 'Masukkan Foto',
            'project_img.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $project_img_file = $request->file('project_img');
        $img_ext = $project_img_file->extension();
        $project_img_name = date('ymdhis').".".$img_ext;
        $project_img_file->move(public_path('images/project'),$project_img_name);
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $data_project = [
            'project_img' => $project_img_name,
            'project_logo' => $request->project_logo,
            'project_title' => $request->project_title,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ];
        
        $save = DB::table('project')->where('id_project', $request->id_project)->update($data_project);
        if ($save) {
            return redirect('adminproject')->with('success','Registered successfully');
        }
    }
    public function detailProject($id)
    {
        $project = DB::table('project')->where('id_project',$id)->get();
        return view('project/detail',['project' => $project,"title" => "project"]);
    }



    public function AddContactPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('contact')->insert([
            'contact_name' => $request->contact_name,
            'email' => $request->email,
            'comment' => $request->comment,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ]);
        return redirect('contact')->with('success','Registered successfully');
    }
    public function deleteContact($id_contact){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('contact')->where('id_contact',$id_contact)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('admincontact')->with('success','Successfully Delete Data');
        }else{
        return redirect('admincontact')->with('error','Failed Delete Data');
        }
    }
    public function detailContact($id)
    {
        $contact = DB::table('contact')->where('id_contact',$id)->get();
        return view('contact/detail',['contact' => $contact,"title" => "contact"]);
    }


    public function addCarabayar()
    {
        return view('carabayar/add',["title" => "carabayar"]);
    }
    public function AddCarabayarPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('carabayar')->insert([
            'carabayar' => $request->carabayar,
            'keterangan' => $request->keterangan,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ]);
        return redirect('admincarabayar')->with('success','Registered successfully');
    }
    public function deleteCarabayar($id_bayar){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('carabayar')->where('id_bayar',$id_bayar)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('admincarabayar')->with('success','Successfully Delete Data');
        }else{
        return redirect('admincarabayar')->with('error','Failed Delete Data');
        }
    }
    public function detailCarabayar($id)
    {
        $carabayar = DB::table('carabayar')->where('id_bayar',$id)->get();
        return view('carabayar/detail',['carabayar' => $carabayar,"title" => "carabayar"]);
    }



    public function AddUnit()
    {
        return view('unit/add',["title" => "unit"]);
    }
    public function editUnit($id)
    {
        $unit = DB::table('unit')->where('id_unit',$id)->get();
        return view('unit/edit',['unit' => $unit,"title" => "unit"]);
    }
    public function detailUnit($id)
    {
        $unit = DB::table('unit')->where('id_unit',$id)->get();
        return view('unit/detail',['unit' => $unit,"title" => "unit"]);
    }
    public function AddUnitPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('unit')->insert([
            'codename' => $request->codename,
            'plat' => $request->plat,
            'merk' => $request->merk,
            'seat' => $request->seat,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ]);
        return redirect('adminunit')->with('success','Registered successfully');
    }
    public function updateUnit(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('unit')->where('id_unit', $request->id_unit)->update([
            'codename' => $request->codename,
            'plat' => $request->plat,
            'merk' => $request->merk,
            'seat' => $request->seat,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ]);
        return redirect('adminunit')->with('success','Registered successfully');
    }
    public function deleteUnit($id_unit){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('unit')->where('id_unit',$id_unit)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('adminunit')->with('success','Successfully Delete Data');
        }else{
        return redirect('adminunit')->with('error','Failed Delete Data');
        }
    }



    public function AddPerjalanan()
    {
        return view('perjalanan/add',["title" => "perjalanan"]);
    }
    public function editPerjalanan($id)
    {
        $perjalanan = DB::table('perjalanan')
    ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
    ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
    ->join('unit','unit.id_unit','=','perjalanan.id_unit')
    ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','harga')->where('id_perjalanan',$id)->get();
        return view('perjalanan/edit',['perjalanan' => $perjalanan,"title" => "perjalanan"]);
    }
    public function detailPerjalanan($id)
    {
        $perjalanan = DB::table('perjalanan')
    ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
    ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
    ->join('unit','unit.id_unit','=','perjalanan.id_unit')
    ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','perjalanan.created_at','perjalanan.created_by','perjalanan.updated_at','perjalanan.updated_by','harga')->where('id_perjalanan',$id)->get();
        return view('perjalanan/detail',['perjalanan' => $perjalanan,"title" => "perjalanan"]);
    }
    public function AddPerjalananPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('perjalanan')->insert([
            'hari' => $request->hari,
            'jam' => $request->jam,
            'id_lok_berangkat' => $request->id_lok_berangkat,
            'id_lok_tujuan' => $request->id_lok_tujuan,
            'id_unit' => $request->id_unit,
            'harga' => $request->harga,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N"
        ]);
        return redirect('adminperjalanan')->with('success','Registered successfully');
    }
    public function updatePerjalanan(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('perjalanan')->where('id_perjalanan', $request->id_perjalanan)->update([
            'hari' => $request->hari,
            'jam' => $request->jam,
            'id_lok_berangkat' => $request->id_lok_berangkat,
            'id_lok_tujuan' => $request->id_lok_tujuan,
            'id_unit' => $request->id_unit,
            'harga' => $request->harga,
            'updated_at' => $timestamp,
            'updated_by' => Auth::user()->name,
        ]);
        return redirect('adminperjalanan')->with('success','Registered successfully');
    }
    public function deletePerjalanan($id_perjalanan){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('perjalanan')->where('id_perjalanan',$id_perjalanan)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('adminperjalanan')->with('success','Successfully Delete Data');
        }else{
        return redirect('adminperjalanan')->with('error','Failed Delete Data');
        }
    }

    public function cekjadwalIndex()
	{
    		// mengambil data dari table pegawai
            $perjalanan = DB::table('perjalanan')
            ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
            ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
            ->join('unit','unit.id_unit','=','perjalanan.id_unit')
            ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','perjalanan.isDeleted','harga')->get();
 
    		// mengirim data pegawai ke view index
		return view('cekjadwal',['title' => 'cekjadwal','perjalanan' => $perjalanan]);
 
	}
 
	public function carijadwal(Request $request)
	{
		// menangkap data pencarian
		$hari = $request->hari;
        $id_berangkat = $request->id_lok_berangkat;
        $id_tujuan = $request->id_lok_tujuan;
 
    		// mengambil data dari table pegawai sesuai pencarian data
            $perjalanan = DB::table('perjalanan')
            ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
            ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
            ->join('unit','unit.id_unit','=','perjalanan.id_unit')
            ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','harga')
            ->where('hari','like',"%".$hari."%")
            ->where('id_lok_berangkat','like',"%".$id_berangkat."%")
            ->where('id_lok_tujuan','like',"%".$id_tujuan."%")
            ->get();
        
		// $pegawai = DB::table('pegawai')
		// ->where('pegawai_nama','like',"%".$cari."%")
		// ->paginate();
 
    		// mengirim data pegawai ke view index
		return view('cekjadwal',['title' => 'cekjadwal','perjalanan' => $perjalanan]);
 
	}
    public function cekout(Request $request)
    {
        if (Auth::check()) {
            $id_perjalanan = $request->id_perjalanan;
            $perjalanan = DB::table('perjalanan')
                ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
                ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
                ->join('unit','unit.id_unit','=','perjalanan.id_unit')
                ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','perjalanan.isDeleted','harga')
                ->where('id_perjalanan',$id_perjalanan)
                ->get();
     
            return view('checkout',['perjalanan' => $perjalanan,"title" => "cekjadwal"]);
        } else {
            return redirect('login');
        }
        
    }
    public function cekoutPost(Request $request)
    {
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        DB::table('transaksi')->insert([
            'id_perjalanan' => $request->id_perjalanan,
            'id_user' => Auth::user()->id,
            'id_bayar' => $request->id_bayar,
            'nama_penumpang' => $request->nama_penumpang,
            'notelp' => $request->notelp,
            'nama_pemesan' => $request->nama_pemesan,
            'email_pemesan' => $request->email_pemesan,
            'harga' => $request->harga,
            'alamat' => $request->alamat,
            'created_at' => $timestamp,
            'created_by' => Auth::user()->name,
            'isDeleted' => "N",
            'isPaid' => "N"
        ]);
        
        $count = DB::table('transaksi')->count();
        $count = $count + 1;
        $details = [
            'title' => 'Tiket Dibuat!',
            'body' => 'Harap Segera Melakukan Pembayaran ke rekening berikut!'
        ];

        Mail::to($request->email_pemesan)->send(new emailtagihan($details));
        return redirect('cosukses')->with('success','Selamat');
    }

    function generate($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function cosukses()
    {
        // $transaksi = DB::table('transaksi')->where('id_user',Auth::user()->id);
        if (Auth::check()) {
            return view('cosukses',["title" => "cekjadwal"]);
        } else {
            return redirect('login');
        }
        
    }
    public function caritransaksi(Request $request)
	{
		// menangkap data pencarian
        $id_transaksi = $request->id_transaksi;
 
    		// mengambil data dari table pegawai sesuai pencarian data
            

            $transaksi = DB::table('transaksi')
        ->join('carabayar','transaksi.id_bayar','=','carabayar.id_bayar')
        ->select('transaksi.id_perjalanan','carabayar.carabayar','isPaid','nama_penumpang','notelp','transaksi.created_at','transaksi.isDeleted','transaksi.id_transaksi','harga','img_bukti')
        ->where('id_transaksi','like',"%".$id_transaksi."%")
        ->get();
        
		// $pegawai = DB::table('pegawai')
		// ->where('pegawai_nama','like',"%".$cari."%")
		// ->paginate();
 
    		// mengirim data pegawai ke view index
		return view('transaksi/index',['title' => 'transaksional','transaksi' => $transaksi]);
 
	}

    public function buktibayarPost(Request $request)
	{

        $request->validate([
            'img_bukti' => 'required|mimes:jpg,jpeg,png'
        ],[
            'img_bukti.required' => 'Masukkan Foto',
            'img_bukti.mimes' => 'Please insert .JPG, .JPEG, .PNG Photos.'
        ]);
        $img_bukti_file = $request->file('img_bukti');
        $img_ext = $img_bukti_file->extension();
        $img_bukti_name = date('ymdhis').".".$img_ext;
        $img_bukti_file->move(public_path('images/buktibayar'),$img_bukti_name);
        $data_buktibayar = [
            'img_bukti' => $img_bukti_name,
            'isPaid' => 'W',
        ];

        $details = [
            'title' => 'Bukti Terkirim!',
            'body' => 'Harap Menunggu Konfirmasi Dari Admin Kami!',
            'id_transaksi' => $request->id_transaksi,
        ];
        $email = DB::table('transaksi')->where('id_transaksi',$request->id_transaksi)->value('email_pemesan');

        Mail::to($email)->send(new emailbukti($details));
        
        $save = DB::table('transaksi')->where('id_transaksi', $request->id_transaksi)->update($data_buktibayar);
        if ($save) {
            return redirect('cosukses')->with('success','Registered successfully');
        }
    }

    

    public function confirm($id_transaksi){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $count = DB::table('transaksi')->count('id_transaksi');
        $email = DB::table('transaksi')->where('id_transaksi',$id_transaksi)->value('email_pemesan');
        $save = DB::table('transaksi')->where('id_transaksi',$id_transaksi)->update([
            'isPaid' => 'Y',
            'nomor_perjalanan'=> 'TRVL'. '-' . self::generate(4) .'-'. $count,
            'paid_at' => $timestamp,
        ]);
        $details = [
            'title' => 'Transaksi Berhasil! Selamat Menikmati Perjalanan Anda',
            'body' => 'Admin Telah Mengkonfirmasi Pembayaran Anda',
            'id_transaksi' => $id_transaksi
        ];

        Mail::to($email)->send(new travelmail($details));
        if($save){                           
            return redirect('admintransaksi');
        }else{
        return redirect('admintransaksi')->with('error','Failed Delete Data');
        }
    }

    public function deleteTransaksi($id_transaksi){
        $timestamp = DB::raw('CURRENT_TIMESTAMP');
        $save = DB::table('transaksi')->where('id_transaksi',$id_transaksi)->update([
            'isDeleted' => 'Y',
            'deleted_by' => Auth::user()->name,
            'deleted_at' => $timestamp,
        ]);
        if($save){
        return redirect('admintransaksi')->with('success','Successfully Delete Data');
        }else{
            return redirect('admintransaksi')->with('error','Failed Delete Data');
        }
    }
    public function detailTransaksi($id_transaksi)
    {
        $transaksi = DB::table('transaksi')
        ->join('carabayar','transaksi.id_bayar','=','carabayar.id_bayar')
        ->select('transaksi.id_perjalanan','carabayar.carabayar','isPaid','nama_penumpang','notelp','transaksi.created_at','transaksi.isDeleted','transaksi.id_transaksi','img_bukti','transaksi.id_user','nama_pemesan','email_pemesan','transaksi.created_by')
        ->where('id_transaksi',$id_transaksi)
        ->get();

        return view('transaksi/detail',["title" => "transaksional","transaksi" => $transaksi]);
        
    }
}
