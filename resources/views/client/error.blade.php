
@extends('client.layouts.layout')

@section('content')

<section>
    <div class="uk-container-expand">
        <h1 class="uk-text-center uk-padding title-modal uk-padding-remove-bottom uk-text-danger">Mohon Maaf!</h1>
        <h2 class="uk-text-center uk-visible@m" style="font-size: 1.5rem;">Donasi anda gagal dilakukan.</h2>
        <h4 class="uk-text-center uk-padding-bottom uk-hidden@s" style="font-size: 1rem;">Donasi anda gagal dilakukan.</h4>
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

@endsection