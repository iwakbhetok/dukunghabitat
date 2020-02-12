
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

<div id="modal-media-image" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <img src="{{ asset('img/pop-up-banner.jpg') }}" alt="">
    </div>
</div>

@push('scripts')
<script>
UIkit.modal("#modal-media-image").show();
</script>
@endpush

@endsection

