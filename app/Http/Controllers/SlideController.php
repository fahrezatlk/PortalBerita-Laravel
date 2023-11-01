<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        retunr view('back.slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.slide.create');
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
        $slide = Slide::find($id);
        if(!$slide) {
            return redirect()->back()->with('success', 'Data tidak terbaca');
        }
        Storage::delete($slide->gambar_slide);
        $slide->delete();
        return redirect()->route('slide.index')->with('success', 'Data berhasil Terhapus');
    }
}