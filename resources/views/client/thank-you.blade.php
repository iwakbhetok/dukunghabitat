
@extends('client.layouts.layout')

@section('title',  'Terimakasih')

@section('content')

@php
$url = urlencode('Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang: '. url('campaign/'. $uuid));
@endphp

<section style="background-image: url({{ asset('img/bg-thank-you.jpg') }});background-size:center;height:1000px;">
    <div class="uk-container-expand">
        <br>
        <div class="uk-container uk-container-small uk-padding" style="background:rgba(255,255,255, 0.85);border-radius:10px;">
            <h1 class="uk-text-center uk-padding title-modal uk-padding-remove-bottom">Terima Kasih!</h1>
            <h2 class="uk-text-center uk-visible@s" style="font-size: 1.5rem;">Donasi Anda telah turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</h2>
            <h4 class="uk-text-center uk-padding-bottom uk-hidden@s" style="font-size: 1rem;">Donasi Anda telah turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</h4>
            <img data-src="{{ Voyager::image( $uuid.'/card.gif' ) }}" style="display:block;margin-left:auto;margin-right:auto;" class="lazy">
            <br>
            <div class="uk-text-center share-gif-social">
                <a href="https://wa.me/?text={{ $url }}" target="_blank">
                    <img src="{{ asset('img/wa-share-desktop.png') }}" alt="">
                </a>
                <a href="https://twitter.com/share?url={{ url('campaign/'. $uuid) }}&via=HabitatID&text=Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang:"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Twitter">
                    <img src="{{ asset('img/tw-share-desktop.png') }}" alt="">
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('campaign/'. $uuid) }}&t=Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang:"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Facebook">
                    <img src="{{ asset('img/fb-share-desktop.png') }}" alt="">
                </a>
                <a href="mailto:?subject=Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang&amp;body=Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang: {{ url('campaign/'. $uuid) }}" title="Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang">
                    <img src="{{ asset('img/mail-share-desktop.png') }}" alt="">
                </a>
            </div>
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