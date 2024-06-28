<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendataanTugasAkhirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('mahasiswa/prodi/index');
    }

    public function pendataan(){
        $side_menu = 4;
        $section = "TA";
        $title = "Pendataan Tugas Akhir";
        return view('mahasiswa/ta-pendataan/pendataan',compact('title','side_menu','section'));
    }

    public function add(){
        $side_menu = 4;
        $section = "TA";
        $title = "Tambah Pendataan";
        return view('mahasiswa/ta-pendataan/add-pendataan',compact('title','side_menu','section'));
    }

    public function edit(){
        $side_menu = 4;
        $section = "TA";
        $title = "Edit Pendataan";
        return view('mahasiswa/ta-pendataan/edit-pendataan',compact('title','side_menu','section'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function sign_up(){

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
