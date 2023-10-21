<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class DashboardController extends Controller
{
    public function dashboard(){
        $barangs = Barang::paginate(20);
        return view('pages.dashboard',compact('barangs'));
    }
}
