@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Form Tambah Produk</h1>

    <form>
        <!-- Baris Pertama -->
        <div class="row g-3">
            <div class="col-md-4">
                <label for="kode" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Input Kode Produk">
            </div>
            
            <div class="col-md-4">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Produk">
            </div>
            
            <div class="col-md-4">
                <label for="jenis" class="form-label">Jenis Produk</label>
                <select class="form-select" id="jenis" name="jenis">
                    @foreach($jenisProduk as $jenis)
                        <option value="{{ $jenis }}">{{ $jenis }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Baris Kedua -->
        <div class="row g-3 mt-2">
            <div class="col-md-8">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Input Harga">
            </div>
            
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection