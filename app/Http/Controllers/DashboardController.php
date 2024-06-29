<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class DashboardController extends Controller
{


    public function doswal()
    {
        $title = "Dashboard";
        $section = "dashboard";
        $side_menu = 0;
        return view('doswal.dashboard.index',compact('title','section','side_menu'));
    }
    public function prodi()
    {
        $title = "Dashboard";
        $section = "dashboard";
        $side_menu = 0;
        return view('kaprodi.dashboard.index',compact('title','section','side_menu'));
    }
    public function mahasiswa()
    {
        $title = "Dashboard";
        $section = "dashboard";
        $side_menu = 0;
        return view('mahasiswa.dashboard.index',compact('title','section','side_menu'));
    }

    public function dashboard()
    {
        dump(Auth::user());
        // return redirect('/dashboard');
    }

}
