
@extends('client.layouts.layout')

@section('title',  'Selamat Hari Valentine!')


@section('content')

<section style="background-image: url({{ asset('img/bg-thank-you.jpg') }});background-size:center;height:1000px;">
    <div class="uk-container-expand">
        <br>
        <div class="uk-container uk-container-small uk-padding" style="background:rgba(255,255,255, 0.85);border-radius:10px;">
            <h1 class="uk-text-center uk-padding title-modal uk-padding-remove-bottom">Selamat Hari Valentine!</h1>
            <h2 class="uk-text-center uk-visible@s" style="font-size: 1.5rem;">Seseorang telah melakukan donasi atas nama Kamu. Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat berupa kartu valentine berikut ini:</h2>
            <h4 class="uk-text-center uk-padding-bottom uk-hidden@s" style="font-size: 1rem;">Seseorang telah melakukan donasi atas nama Kamu. Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat berupa kartu valentine berikut ini:</h4>
            <img data-src="{{ Voyager::image( $uuid.'/card.gif' ) }}" style="display:block;margin-left:auto;margin-right:auto;" class="lazy">
            <br>
            <p class="uk-text-center">
                <a class="uk-button uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;color:#fff;background:#0099bc;width:250px;" href="{{ Voyager::image( $uuid.'/card.gif' ) }}" download>Download GIF</a>
            </p>
            <p class="uk-text-center">
                <a class="uk-button uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;color:#0099bc;border: solid 1px #0099bc;width:250px;" href="https://habitatindonesia.org/dukung-habitat/" target="_blank">Tentang Campaign</a>
            </p>
            <div class="uk-overlay uk-visible@m"></div>
            <div class="uk-overlay uk-hidden@s"></div>
        </div>
    </div>
</section>

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])

@endsection