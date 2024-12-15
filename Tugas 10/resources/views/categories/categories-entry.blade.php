@extends('layouts.app')

@section('title')
Tambah Category | Admin
@endsection

@section('content')
<h3>Input Categories</h3>
<div class="form-login">
  <form action="{{ url('/category/store') }}" method="post" enctype="multipart/form-data">
    @csrfruu
    <label for="id">ID</label>
    <input class="input" type="id" name="id" id="id" placeholder="ID" value="{{ old('id') }}" />
    @error('id')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="transportation">Tranportation</label>
    <textarea class="input" name="transportation" id="transportation" placeholder="Tranportation">{{ old('transportation') }}</textarea>
    @error('transportation')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror
    
    <label for="region">Region</label>
    <textarea class="input" name="region" id="region" placeholder="Region">{{ old('region') }}</textarea>
    @error('region')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="date">Date</label>
    <input type="date" class="date" name="date" id="date" placeholder="Date">{{ old('date') }}</textarea>
    @error('date')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="name">Name</label>
    <textarea class="input" name="name" id="name" placeholder="Name">{{ old('name') }}</textarea>
    @error('name')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="from_location">From</label>
    <textarea class="input" name="from_location" id="from_location" placeholder="From">{{ old('from_location') }}</textarea>
    @error('from_location')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="to_location">To</label>
    <textarea class="input" name="to_location" id="to_location" placeholder="To">{{ old('to_location') }}</textarea>
    @error('to_location')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="time">Time</label>
    <textarea class="time" name="time" id="time" placeholder="Timr">{{ old('time') }}</textarea>
    @error('time')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection