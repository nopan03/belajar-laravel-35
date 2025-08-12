@extends('layouts.master')

@section('konten') 
    <h1>Daftar Produk Kami</h1>
      <hr> 
    <button type="button" class="btn btn-primary mb-3">Tambah data</button> 
    <div class="card"> 
        <div class="card-header">
            Daftar Produk {{-- Header card --}}
        </div>
  <div class="card-body">
 <table class="table table-striped table-bordered ">
  <thead>
    <tr>
      <th scope="col">nomer</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Stok</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Laptop ROG</td>
      <td>25</td>
      <td>15000000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>

@endsection 