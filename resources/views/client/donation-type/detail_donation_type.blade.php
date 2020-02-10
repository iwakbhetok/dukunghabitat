
@extends('client.layouts.layout')

@section('title',  ucwords($label))
@push('meta')

<meta property="og:title" content="{{ $label }}">
<meta property="og:description" content="{{ $label }}">

@endpush
@section('css_add')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />

@endsection

@section('content')

<!-- slide -->
<section class="slider-building">
        <div class="uk-container-expand">

            <div uk-slider class="uk-visible@m">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-1@m">
                            @if($slider->image_slide_1_on_detail_donation_page)
                            <li>
                                <img data-src="{{ Voyager::image( $slider->image_slide_1_on_detail_donation_page ) }}" alt="" class="lazy" style="width:100%;height:auto;">
                                <div class="uk-position-center uk-panel"><h1></h1></div>
                            </li>
                            @endif
                            @if($slider->image_slide_2_on_detail_donation_page)
                            <li>
                                <img data-src="{{ Voyager::image( $slider->image_slide_2_on_detail_donation_page ) }}" alt="" class="lazy" style="width:100%;height:auto;">
                                <div class="uk-position-center uk-panel"><h1></h1></div>
                            </li>
                            @endif
                            @if($slider->image_slide_3_on_detail_donation_page)
                            <li>
                                <img data-src="{{ Voyager::image( $slider->image_slide_3_on_detail_donation_page ) }}" alt="" class="lazy" style="width:100%;height:auto;">
                                <div class="uk-position-center uk-panel"><h1></h1></div>
                            </li>
                            @endif
                        </ul>

                    </div>
                
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center dotnavCustom"></ul>
                
                </div>


                <!-- NEW --> 

                <!-- <div class="uk-position-relative uk-visible-toggle uk-card-default uk-hidden@m"  uk-slider="center: true; sets: true;finite:false;">

                    <ul class="uk-slider-items uk-grid-match slider-mobile-detail-article" uk-height-viewport="offset-top: true; offset-bottom: 60" uk-grid>
                        <li class="uk-width-3-4">
                            <div class="uk-cover-container">
                                <img src="{{ Voyager::image( voyager_image($slider->image_slide_1_on_detail_donation_page, 'cropped') ) }}" alt="" >
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-cover-container">
                                <img src="{{ Voyager::image( voyager_image($slider->image_slide_2_on_detail_donation_page, 'cropped') ) }}" alt="" >
                            </div>
                        </li>
                        <li class="uk-width-3-4 slide-3">
                            <div class="uk-cover-container">
                                <img src="{{ Voyager::image( voyager_image($slider->image_slide_3_on_detail_donation_page, 'cropped') ) }}" alt="" >
                            </div>
                        </li>
                    </ul>

                </div> -->



                <div class='uk-container-expand uk-card-default uk-hidden@m'>
                    <div class='single-item'>
                        <div>
                            <img src="{{ Voyager::image( voyager_image($slider->image_slide_1_on_detail_donation_page, 'cropped') ) }}" style="width:100%; height:auto;">
                        </div>
                        <div>
                            <img src="{{ Voyager::image( voyager_image($slider->image_slide_2_on_detail_donation_page, 'cropped') ) }}" style="width:100%; height:auto;">
                        </div>
                        <div>
                            <img src="{{ Voyager::image( voyager_image($slider->image_slide_3_on_detail_donation_page, 'cropped') ) }}" style="width:100%; height:auto;">
                        </div>
                    </div>
                </div>
                <!-- END NEW -->

                <!-- <div class="uk-position-relative uk-visible-toggle uk-hidden@m uk-padding-small uk-card-default" tabindex="-1" uk-slider="center: true;finite: true">

                    <ul class="uk-slider-items uk-grid banner-detail-mobile">
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img data-src="{{ asset('img/water/banner-air-1-mobile.png') }}" alt="" class="lazy">
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img data-src="{{ asset('img/water/banner-air-2-mobile.png') }}" alt="" class="lazy">
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img data-src="{{ asset('img/water/banner-air-3-mobile.png') }}" alt="" class="lazy">
                            </div>
                        </li>
                    </ul>
                    
                </div> -->

        </div>
            

    </section>
    <section class="description-building ">
        <div class="uk-container uk-flex uk-flex-center">
            <div class="uk-container-small uk-padding">
                    <div class="uk-visible@m">
                        <h3 class="uk-text-capitalize">{{ $slider->title }} {{ $slider->sub_title }} </h3>
                    </div>
                    <div class="uk-hidden@s description-building-mobile">
                        <h3>{{ $slider->title }}</h3>
                        <span>{{ $slider->sub_title }}</span>
                    </div>
                    {!! $slider->description_detail_information !!}
            </div>
        </div>
        
    </section>
    <div class="uk-container-expand uk-hidden@m" style="height: 12px;background-color:#e1e1e1;"></div>

    <section class="how-building-water">
        <div class="uk-container uk-padding">
            <div class="uk-container uk-text-center uk-visible@m">
                <h3>Bagaimana donasi Anda dapat membantu?</h3>
                <div class="uk-overlay"></div>
                <div class="uk-flex uk-flex-center">
                    <div class="uk-flex how-items">
                        <div class="uk-card how-item">
                            <img data-src="{{ Voyager::image( $slider->icon_image_1_detail_information ) }}" alt="" class="lazy">
                            <br><br>
                            <span>{{ $slider->nominal_text_1_detail_information }}</span>
                            <p>{{ $slider->excerpt_icon_1_detail_information }}</p> 
                        </div>
                        <div class="uk-card how-item">
                            <img data-src="{{ Voyager::image( $slider->icon_image_2_detail_information ) }}" alt="" class="lazy">
                            <br><br>
                            <span>{{ $slider->nominal_text_2_detail_information }}</span>
                            <p>{{ $slider->excerpt_icon_2_detail_information }}</p>
                        </div>
                        <div class="uk-card how-item">
                            <img data-src="{{ Voyager::image( $slider->icon_image_3_detail_information ) }}" alt="" class="lazy">
                            <br><br>
                            <span>{{ $slider->nominal_text_3_detail_information }}</span>
                            <p>{{ $slider->excerpt_icon_3_detail_information }}</p>
                        </div>
                    </div>
                </div>
                <div class="uk-padding">
                    <a href="{{ url('/donasi/'.$type) }}" class="uk-button uk-text-uppercase donationBtn btnZoomHover buttonOrange">{{ $slider->cta_text_on_button }}</a>
                </div>
                <div class="uk-overlay"></div>
            </div>

            <!-- mobile version -->
            <div class="uk-container uk-text-left uk-hidden@m">
                    <h2 style="font-size: 1.2rem;color:#00afd7;">Bagaimana donasi <br> <strong>anda dapat membantu?</strong></h2>
                <div class="uk-child-width-expand@s uk-text-left" uk-grid>
                    <div>
                        <div class="uk-card">
                                <div class="uk-child-width-1-1" uk-grid>
                                    <div>
                                        <div uk-grid>
                                            <div>
                                                <div style="width: 20vw;filter: grayscale(100%);">
                                                    <img data-src="{{ Voyager::image( $slider->icon_image_1_detail_information ) }}" alt="" class="lazy">
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove-top" style="padding-left: 10px;">
                                                <div class="uk-text-left detail-donation" style="width: 45vw;">
                                                    <span>{{ $slider->nominal_text_1_detail_information }}</span>
                                                    <p class="uk-margin-remove-left uk-margin-remove-right uk-text-left uk-margin-remove-top">
                                                    {{ $slider->excerpt_icon_1_detail_information }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="uk-margin-remove-top">
                        <div class="uk-card">
                                <div class="uk-child-width-1-1" uk-grid>
                                    <div>
                                        <div uk-grid>
                                            <div>
                                                <div style="width: 20vw;filter: grayscale(100%);">
                                                    <img data-src="{{ Voyager::image( $slider->icon_image_2_detail_information ) }}" alt="" class="lazy">
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove-top" style="padding-left: 10px;">
                                                <div class="uk-text-left detail-donation" style="width: 45vw;">
                                                    <span>{{ $slider->nominal_text_2_detail_information }}</span>
                                                    <p class="uk-margin-remove-left uk-margin-remove-right uk-text-left uk-margin-remove-top">
                                                        {{ $slider->excerpt_icon_2_detail_information }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="uk-margin-remove-top">
                        <div class="uk-card">
                                <div class="uk-child-width-1-1" uk-grid>
                                    <div>
                                        <div uk-grid>
                                            <div>
                                                <div style="width: 20vw;filter: grayscale(100%);">
                                                    <img data-src="{{ Voyager::image( $slider->icon_image_3_detail_information ) }}" alt="" class="lazy">
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove-top" style="padding-left: 10px;">
                                                <div class="uk-text-left detail-donation" style="width: 45vw;">
                                                    <span>{{ $slider->nominal_text_3_detail_information }}</span>
                                                    <p class="uk-margin-remove-left uk-margin-remove-right uk-text-left uk-margin-remove-top">
                                                        {{ $slider->excerpt_icon_3_detail_information }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="uk-h4 uk-hidden@m link-donation-help-fixed uk-text-center uk-card">
                <a class="uk-button btnZoomHover buttonOrange" href="{{ url('/donasi/'.$type) }}">{{ $slider->cta_text_on_button }}</a>
            </div>

        </div>
    </section>

    @include('client.components.footer', ['desktop' => 'block', 'mobile' => 'none'])

@endsection
@section('js_add')
    
    

@endsection