@extends('layouts.default')
@section('content')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Hapus Artikel
                            <i>{{$artikel->judul}}</i>
                        </div>
                        <a href="{{route ('artikel.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('artikel.remove', $artikel->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="artikel">Nama Artikel</label>
                            <input type="text" name="nama_kategori" value="{{$artikel->judul}}" 
                            class="form-control" id="text" placeholder="Masukkan artikel">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection