<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function doswal()
    {
        $title = "Dashboard";
        $section = "dashboard";
        $side_menu = null;
        return view('doswal/dashboard/index',compact('title','section'));
    }
    public function prodi()
    {
        $title = "Dashboard";
        $section = "dashboard";
        $side_menu = null;
        return view('prodi/dashboard/index',compact('title','section'));
    }
    public function mahasiswa()
    {
        $title = "Dashboard";
        $section = "dashboard";
        $side_menu = null;
        return view('mahasiswa/dashboard/index',compact('title','section'));
    }

}
