@extends('layouts.layout')

@section('content-header')
    Update a brand
@endsection

@section('main')
    <form method="post" action="{{route('brands.update', $brand->id)}}">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $brand->name }}"><br>
        <button>Update</button>
    </form>
@endsection
