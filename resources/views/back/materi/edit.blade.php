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
                        <div class="card-title">Edit Materi
                            <i>{{$materi->judul}}</i>
                        </div>
                        <a href="{{ route('materi.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('materi.update', $materi->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="materi">Judul</label>
                            <input type="text" name="judul" value="{{$materi->judul}}"
                            class="form-control" id="text" placeholder="Masukkan materi">
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