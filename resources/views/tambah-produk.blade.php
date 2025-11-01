@extends('layouts.app')

@section('content')
<h1 class="mb-4">Form Tambah Produk</h1>

<div class="card">
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode" name="kode">
            </div>
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Produk</label>
                <input type="text" class="form-control" id="jenis" name="jenis">
            </div>
            
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection