@extends('layouts.app')

@section('title')
Edit Category | Admin
@endsection

@section('content')
<h3>Edit Categories</h3>
<div class="form-login">
  <form action="{{ url('/category/update/' . $category->id_categories) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="id">ID</label>
    <input class="input" type="id" name="id" id="id" placeholder="ID"
      value="{{ old('id', $category->id) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="transportation">Transportation</label>
    <textarea class="input" name="transportation" id="transportation"
      placeholder="Transportation">{{ old('transportation', $category->transportation) }}</textarea>
    @error('transportation')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="region">Region</label>
    <textarea class="input" name="region" id="region"
      placeholder="Region">{{ old('region', $category->region) }}</textarea>
    @error('region')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="date">Date</label>
    <textarea class="date" name="date" id="date"
      placeholder="Date">{{ old('date', $category->date) }}</textarea>
    @error('date')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="name">Name</label>
    <textarea class="input" name="name" id="name"
      placeholder="Name">{{ old('name', $category->name) }}</textarea>
    @error('name')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="from_location">From</label>
    <textarea class="input" name="from_location" id="from_location"
      placeholder="From">{{ old('from_location', $category->from_location) }}</textarea>
    @error('from_location')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="to_location">To_location</label>
    <textarea class="input" name="to_location" id="to_location"
      placeholder="To_location">{{ old('to_location', $category->to_location) }}</textarea>
    @error('to_location')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="time">Time</label>
    <textarea class="time" name="time" id="time"
      placeholder="Time">{{ old('time', $category->time) }}</textarea>
    @error('time')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <button type="submit" class="btn btn-simpan" name="update" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection