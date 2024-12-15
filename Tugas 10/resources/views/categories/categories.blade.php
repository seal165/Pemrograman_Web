@extends('layouts.app')

@section('title')
Categories | Catshop Admin
@endsection

@section('content')
<h3>Categories</h3>
<button type="button" class="btn btn-tambah">
  <a href="/category/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Transportation</th>
        <th scope="col">Region</th>
        <th scope="col">Date</th>
        <th scope="col">Name</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Time</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categories as $category)
    <tr>
      <td>{{ $category->id }}</td>
      <td>{{ $category->transportation }}</td>
      <td>{{ $category->region }}</td>
      <td>{{ $category->date }}</td>
      <td>{{ $category->name }}</td>
      <td>{{ $category->from_location }}</td>
      <td>{{ $category->to_location }}</td>
      <td>{{ $category->time }}</td>
      <td>
        <a class='btn-edit' href="/category/edit/{{ $category->id }}">Edit</a>
        |
        <a class='btn-delete' href="/category/delete/{{ $category->id }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
    <button type="button" class="btn btn-tambah">
        <a href="/category/cetak">Cetak</a>
    </button>
@endsection