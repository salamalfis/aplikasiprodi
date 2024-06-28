<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetlitController extends Controller
{
   
    public function index()
    {
        // return view('mahasiswa/prodi/index');
    }

    public function pendataan(){
        $title = "Pendataan Metlit";
        $section = "metlit";
        $side_menu = 1;
        return view('mahasiswa/metlit/pendataan',compact('title','section','side_menu'));
    }

    public function addPendataan(){
        $section = "metlit";
        $side_menu = 1;
        $title = "Tambah Pendataan";
        return view('mahasiswa/metlit/add-pendataan',compact('title','section','side_menu'));
    }

    public function editPendataan(){
        $title = "Edit Pendataan";
        $section = "metlit";
        $side_menu = 1;
        return view('mahasiswa/metlit/edit-pendataan',compact('title','section','side_menu'));
    }
}
