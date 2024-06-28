<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgressBimbinganTAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Tugas Akhir";
        $menu = 1;
        $side_menu = 5;
        $section = "TA";
        return view('mahasiswa/ta-progress-bimbingan/index',compact('title','menu','section','side_menu'));
    }

    public function dospem1(){
        $title = "Pembimbing 1";
        $menu = 2;
        $side_menu = 5;
        $section = "TA";
        return view('mahasiswa/ta-progress-bimbingan/dospem',compact('title','menu','section','side_menu'));
    }

    public function dospem2(){
        $title = "Pembimbing 2";
        $menu = 3;
        $side_menu = 5;
        $section = "TA";
        return view('mahasiswa/ta-progress-bimbingan/dospem',compact('title','menu','section','side_menu'));
    }

    public function add(){
        $title = "Edit Progress Bimbingan";
        return view('mahasiswa/ta-progress-bimbingan/add-progress',compact('title'));
    }

    public function edit(){
        $title = "Edit Progress Bimbingan";
        return view('mahasiswa/ta-progress-bimbingan/edit-progress',compact('title'));
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
