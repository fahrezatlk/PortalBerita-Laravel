<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('back.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $kategori = Kategori::create($request->all());
        return view('back.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:4',
        ]);
        
        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        return redirect()->route('kategori.index')->with(['success' => 'data Kategori ditambahkan']);
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
        $kategori = Kategori::find($id);
        return view('back.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($data);

        return redirect()->route('kategori.index')->with(['success' => 'data Kategori terupdate']);
    }

    /**
     * Remove the specSified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with(['success' => 'data Kategori terhapus']);
    }
}