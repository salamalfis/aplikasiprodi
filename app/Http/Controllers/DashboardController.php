<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
