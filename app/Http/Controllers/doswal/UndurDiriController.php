<?php

namespace App\Http\Controllers\Doswal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UndurDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Undur Diri";
        $section = "undur diri";
        return view('doswal/undur-diri/index',compact('title','section'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        $title = "Tambah Undur Diri";
        $section = "undur diri";
        return view('doswal/undur-diri/add-undurdiri',compact('title','section'));
    }
    public function edit()
    {
        $title = "Edit Undur Diri";
        $section = "undur diri";
        return view('doswal/undur-diri/edit-undurdiri',compact('title','section'));
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
