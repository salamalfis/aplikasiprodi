<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetlitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function edit(string $id)
    {
        //
    }

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
