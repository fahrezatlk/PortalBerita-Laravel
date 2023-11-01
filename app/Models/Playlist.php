<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $table = 'playlist';
    protected $fillable = [
        'judul_palylist', 'slug', 'link', 'playlist_id', 'deskripsi', 'is_active', 'gambar_playlist'
    ];
    protected $hidden = [];
}