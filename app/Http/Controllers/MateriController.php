<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class materiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::all();
        return view('back.materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.materi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
        ]);
        
        $materi = Materi::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul)
        ]);

        return redirect()->route('materi.index')->with(['success' => 'data Materi tersimpan']);
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
    public function edit ($id)
    {
        $materi = Materi::find($id);
        return view('back.materi.edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        $materi = materi::findOrFail($id);
        $materi->update($data);

        return redirect()->route('materi.index')->with(['success' => 'data Materi terupdate']);
    }

    /**
     * Remove the specSified resource from storage.
     */
    public function destroy($id)
    {
        $materi = materi::find($id);
        $materi->delete();

        return redirect()->route('materi.index')->with(['success' => 'data Materi terhapus']);
    }
}