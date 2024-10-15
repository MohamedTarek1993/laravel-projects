@extends('layouts/nav')
@section('title')
    posts
@endSection


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>posts</h1>
@endSection
