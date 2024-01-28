@extends('layout.headfoot')

@section('title', 'Alexandria')

@section('content')
    @include('layout.hero')
    @include('layout.newarrivals')
    @include('layout.bygenre')

@endsection
<script src="{{ asset('js/bookFilter.js') }}"></script>