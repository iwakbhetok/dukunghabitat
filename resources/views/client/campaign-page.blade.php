
@extends('client.layouts.layout')

@section('title',  'Campaign Gif')

@section('content')

<section style="background-image: url({{ asset('img/bg-thank-you.jpg') }});background-size:center;height:1000px;">
    <div class="uk-container-expand">
        <br>
        <div class="uk-container uk-container-small uk-padding" style="background:rgba(255,255,255, 0.85);border-radius:10px;">
            <h1 class="uk-text-center uk-padding title-modal uk-padding-remove-bottom">Terima Kasih!</h1>
            <h2 class="uk-text-center uk-visible@s" style="font-size: 1.5rem;">Donasi Anda telah turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</h2>
            <h4 class="uk-text-center uk-padding-bottom uk-hidden@s" style="font-size: 1rem;">Donasi Anda telah turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</h4>
            <img data-src="{{ Voyager::image( $uuid.'/card.gif' ) }}" style="display:block;margin-left:auto;margin-right:auto;" class="lazy">
            <br>
            <p class="uk-text-center">
                <a class="uk-button uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;color:#fff;background:#0099bc;" href="{{ Voyager::image( $uuid.'/card.gif' ) }}" download>Download GIF</a>
            </p>
            <div class="uk-overlay uk-visible@m"></div>
            <div class="uk-overlay uk-hidden@s"></div>
        </div>
    </div>
</section>

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])

@endsection