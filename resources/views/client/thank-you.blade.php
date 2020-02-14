
@extends('client.layouts.layout')

@section('title',  'Terimakasih')

@push('meta')

<meta property="og:title" content="Selamat Hari Valentine!">
<meta property="og:description" content="Seseorang telah melakukan donasi atas nama Kamu. Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat berupa kartu valentine">
<meta property="og:image" content="{{ asset('img/fb-share-campaign.jpg') }}">
<meta property="og:url" content="{{ url('campaign/'. $uuid) }}">

<meta name="twitter:title" content="Selamat Hari Valentine!">
<meta name="twitter:description" content="Seseorang telah melakukan donasi atas nama Kamu. Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat berupa kartu valentine">
<meta name="twitter:image" content="{{ asset('img/fb-share-campaign.jpg') }}">
<meta name="twitter:card" content="summary">
@endpush

@section('content')

@php
$url = urlencode('Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang: '. url('campaign/'. $uuid));
@endphp

<section style="background-image: url({{ asset('img/bg-thank-you.jpg') }});background-size:center;height:1000px;">
    <div class="uk-container-expand">
        <br>
        <div class="uk-container uk-container-small uk-padding" style="background:rgba(255,255,255, 0.85);border-radius:10px;">
            <h1 class="uk-text-center uk-padding title-modal uk-padding-remove-bottom">Terima Kasih!</h1>
            <h2 class="uk-text-center uk-visible@s" style="font-size: 1.5rem;"> Donasi Anda telah turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</h2>
            <h4 class="uk-text-center uk-padding-bottom uk-hidden@s" style="font-size: 1rem;">Donasi Anda telah turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</h4>
            <br>
            <p id="loading" class="uk-text-center" style="color:#333;display:block;">
                Generating Your Gif Card..please wait a moment. <br>
                <img src="{{ asset('img/loading-bar.gif') }}" alt="">
            </p>
            <img id="target-img" data-src="{{ Voyager::image( $uuid.'/card.gif' ) }}" style="display:none;margin-left:auto;margin-right:auto;" class="lazy">
            <br>
            <div class="uk-text-center share-gif-social" style="display:none;">
                <a href="https://wa.me/?text={{ $url }}" target="_blank">
                    <img src="{{ asset('img/wa-share-desktop.png') }}" alt="">
                </a>
                <a href="https://twitter.com/share?url={{ url('campaign/'. $uuid) }}&via=HabitatID&text=#KadoCintaHabitat paling spesial untuk kamu yang tersayang:"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Twitter">
                    <img src="{{ asset('img/tw-share-desktop.png') }}" alt="">
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('campaign/'. $uuid) }}&t=#KadoCintaHabitat paling spesial untuk kamu yang tersayang:"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Facebook">
                    <img src="{{ asset('img/fb-share-desktop.png') }}" alt="">
                </a>
                <a href="mailto:?subject=#KadoCintaHabitat Untuk Kamu Sudah Tiba!&amp;body=Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang: {{ url('campaign/'. $uuid) }}" title="Seseorang telah melakukan donasi atas nama Kamu! Untuk itu, kamu berhak mendapatkan #KadoCintaHabitat. Cek kadonya sekarang">
                    <img src="{{ asset('img/mail-share-desktop.png') }}" alt="">
                </a>
            </div>
            <p class="uk-text-center download" style="display:none;">
                <a class="uk-button uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;color:#fff;background:#0099bc;width:250px;" href="{{ Voyager::image( $uuid.'/card.gif' ) }}" download>Download GIF</a>
            </p>
            <p class="uk-text-center about-us" style="display:none;">
                <a class="uk-button uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;color:#0099bc;border: solid 1px #0099bc;width:250px;" href="https://habitatindonesia.org/dukung-habitat/" target="_blank">Tentang Campaign</a>
            </p>
            <div class="uk-overlay uk-visible@m"></div>
            <div class="uk-overlay uk-hidden@s"></div>
        </div>
    </div>
</section>

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])

@endsection

@section('pagespecificscripts')

<script>
    $( window ).on("load",function() {
        var uuid = "<?php echo $uuid; ?>";
        var slider_id = "<?php echo $slider_id; ?>";
        var base_url = window.location.origin;
        var url = base_url + '/generate/' + slider_id + '/' + uuid;
        

        $.get(url, function(data, status){
            if(status == "success"){
                $("#loading").css("display", "none");
                $(".share-gif-social").css("display", "block");
                $(".download").css("display", "block");
                $(".about-us").css("display", "block");
                $("#target-img").css("display", "block");
            }
        });
    });
    
</script>

@stop