@extends('layout.master')
@section('title')
    Detail Data
@endsection
@section('content')
    <h1 class="text-info">{{$category->name}}</h1>
    <p>{{$category->description}}</p>

    <a href="/category" class="btn btn-secondary btn-sm my-2">Kembali</a>
@endsection