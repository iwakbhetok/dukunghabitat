
@extends('client.layouts.layout')

@section('title',  'Habitat for Humanity Indonesia')

@push('meta')
    <meta property="og:url"                content="{{ url()->current() }}" />
    <meta property="og:type"               content="HOME" />
@endpush

@section('content')

@include('client.components.slider')

@include('client.components.article-home')

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])

@endsection

