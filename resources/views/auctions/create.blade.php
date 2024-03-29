@extends('layouts.layout')
@section('content')
<h2>Create Auction</h2>
<form action="/farmer/create-auction" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="item_id" value="{{ $item->id }}">

    <label for="starting_price">Starting Price</label> <br>
    <input type="text" name="starting_price"><br>
    <span>@error('starting_price') 
        
        {{ $message }}
    
        @enderror</span> <br>
    <label for="duration">Duration</label> <br>
    <select name="duration" id="">
    <option value="duration" selected disabled >Duration</option>
    <option value="6">6 hrs</option>
    <option value="12">12 hrs</option>
    <option value="18">18 hrs</option>
    <option value="24">24 hrs</option>
    <option value="30">30 hrs</option>    
    <option value="48">48 hrs</option>
    </select> <br>
    <span>@error('duration') 
        
        {{ $message }}
    
        @enderror</span> <br>
    <input type="submit" value="submit" name="submit">
    
</form>
@endsection