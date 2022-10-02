<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('CekAdminLogin');
    //     ini_set('max_execution_time', 300);
    // }
    public function index(){
        $data=DB::table('barangs')->paginate();
        return view('admin.beranda',compact('data'));
        }
}
