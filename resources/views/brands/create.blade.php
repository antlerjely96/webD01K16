@extends('layouts.layout')

@section('content-header')
    Add a brand
@endsection

@section('main')
    <form method="post" action="{{ route('brands.store') }}">
        @csrf
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
@endsection
