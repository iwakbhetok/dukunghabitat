
@extends('client.layouts.layout')

@section('title',  'Halaman Tidak Ditemukan')

@section('content')

<section>
    <div class="uk-container-expand">
        <div class="uk-overlay uk-visible@m"></div>
        <div class="uk-overlay uk-hidden@s"></div>
        <h2 class="uk-text-center uk-visible@m" style="font-size: 1.5rem;">Oops! Halaman yang Anda cari tidak ditemukan.</h2>
        <h4 class="uk-text-center uk-padding-bottom uk-hidden@s" style="font-size: 1rem;">Oops! Halaman yang Anda cari tidak ditemukan.</h4>
        <br>
        <p class="uk-text-center">
            <a class="uk-button uk-button-default uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;" href="{{ url('/') }}">Kembali Halaman Awal</a>
        </p>
        <div class="uk-overlay uk-visible@m"></div>
        <div class="uk-overlay uk-hidden@s"></div>
        <div class="uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{ asset('img/bg-article.jpg') }});">
        </div>
    </div>
</section>

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])
@endsection