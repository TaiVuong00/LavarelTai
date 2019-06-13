@extends('master.master')
@section('title','Đây là trang index')
@section('content')
    <h1 align='center'> {{ isset($content) ? $content: 'Tai Vuong' }}</h1>
@endsection