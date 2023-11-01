<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view ('back.artikel.index', [
            'artikel'=> $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('back.artikel.create', compact('kategori'));
    }

    /**zctive' => $request->is_active,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('artikel.index')->with(['success' => 'data Artikel terupdate']);
        
        }else{
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'is_active' => $request->is_active,
                'use_id' => Auth::id(),
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
            ]);
            return redirect()->route('artikel.index')->with(['success' => 'data Artikel terupdate']);
        }
    }

        

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        
        Storage::delete($artikel->gambar_artikel);
        $artikel->delete();

        return redirect()->route('artikel.index')->with(['success' => 'data Artikel terhapus']);
    }
}