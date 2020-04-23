@extends('pages.layout.header')
@section('css')
<link rel="stylesheet" href="css/home.css" async="true">
@endsection
@section('main-content')
@include('pages.home.slider')
@include('pages.home.welcome')
@include('pages.home.blog')
@include('pages.home.subscribe')
@endsection
@section('js')
@include('js/sticky')
@include('js/slider')
@endsection