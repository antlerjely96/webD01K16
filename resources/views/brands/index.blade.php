@extends('layouts.layout')

@section('content-header')
    Brand List
@endsection

@section('main')
    <a href="{{ route('brands.create') }}">Add a brand</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($brands as $brand)
            <tr>
                <td>
                    {{ $brand->id }}
                </td>
                <td>
                    {{ $brand->name }}
                </td>
                <td>
                    <a href="{{ route('brands.edit', $brand->id) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('brands.destroy', $brand->id) }}">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
