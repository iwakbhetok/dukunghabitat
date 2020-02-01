
@extends('client.layouts.layout')

@section('content')

@include('client.components.slider')

@include('client.components.article-home')

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])

@endsection

