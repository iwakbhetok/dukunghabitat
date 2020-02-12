
@extends('client.layouts.layout')


@section('title',  $article->title)
@push('meta')

<meta property="og:title" content="{{ $article->title }}">
<meta property="og:description" content="{{ $article->excerpt }}">
<meta property="og:image" content="{{ Voyager::image( $article->image ) }}">
<meta property="og:url" content="{{ url()->current() }}">

<meta name="twitter:title" content="{{ $article->title }}">
<meta name="twitter:description" content="{{ $article->excerpt }}">
<meta name="twitter:image" content="{{ Voyager::image( $article->image ) }}">
<meta name="twitter:card" content="summary">
@endpush



@section('content')

@php
$url = urlencode($article->title .' - '.url()->current());
@endphp
<section class="slider-building uk-visible@s">
        <div class="uk-container-expand">

            <div uk-slider>

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-1@m">
                            <li>
                                <img data-src="{{ Voyager::image( $article->image ) }}" class="lazy" alt="" style="display: block;margin-left: auto;margin-right: auto;width: 100%; height:auto;">
                            </li>
                        </ul>

                    </div>
                
                </div>

        </div>
    </section>

    <section class="slider-building uk-hidden@s">
        <div class="uk-container-expand">

            <div uk-slider>

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-1@m">
                            <li>
                                <img data-src="{{ Voyager::image( $article->image ) }}" alt="" style="display: block;margin-left: auto;margin-right: auto;width: 100%;" class="lazy">
                            </li>
                        </ul>

                    </div>
                
                </div>

        </div>
    </section>
    <div class="grey-divider"></div>

        <section>
            <div class="uk-container-expand">
                <div class="" uk-grid>
                    <div class="uk-width-expand@m">
                        <div class="" uk-grid>
                            <div class="uk-width-1-6@m uk-visible@s">
                                <div class="uk-card">
                                    <div class="share-article" uk-sticky="top: 300;bottom: #otherArticle">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}&t={{ $article->title }}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Facebook">
                                                    <img src="{{ asset('img/fb-share-desktop.png') }}" alt="">   
                                                </a>
                                            </li>
                                            <li>
                                            <a href="https://twitter.com/share?url={{ url()->current() }}&via=HabitatID&text={{ $article->title }}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Twitter">
                                                    <img src="{{ asset('img/tw-share-desktop.png') }}" alt="">   
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://wa.me/?text={{ $url }}" target="_blank">
                                                    <img src="{{ asset('img/wa-share-desktop.png') }}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:?subject={{ $article->title }}&amp;body=Simak artikel berikut ini: {{ url($article->slug) }}" title="Share {{ $article->title }}">
                                                    <img src="{{ asset('img/mail-share-desktop.png') }}" alt="">   
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-expand@m uk-padding-remove-left">
                                <div class="uk-card">
                                    <div class="contentArticle uk-visible@m">
                                        <h1 class="uk-text-left">{{ $article->title }}</h1>
                                        {!! $article->body !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <div class="uk-container uk-card contentArticle uk-hidden@m">
                            <h1 class="uk-text-left">{{ $article->title }}</h1>
                            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center share-article-mobile uk-hidden@m" uk-grid>
                                {!! $article->body !!}
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-visible@m">
                        <br>
                        <div class="uk-card uk-card-body">
                            
                            <div class="uk-grid-column-small uk-width-1-1@m uk-text-center uk-background-muted uk-margin-remove-top" uk-grid>
                                @foreach($sliders as $slider)
                                <div class="uk-padding-remove-left uk-margin-remove-top uk-margin-remove-bottom">
                                    <div class="uk-card" style="margin:10px 25px 25px 25px;">
                                        <a href="{{ url('/detail/'. slugify($slider->title.'-'.$slider->sub_title ) ) }}" class="link-donation">
                                            <!-- <img data-src="{{ asset('img/articles/home-donation-article.jpg') }}" alt="" class="lazy"> -->
                                            <img data-src="{{ Voyager::image( $slider->background_image_mobile ) }}" alt="" class="lazy" style="border-radius:5px;">
                                            <p class="uk-text-center">{{ $slider->title }}</p>
                                            <span>{{ $slider->sub_title }}</span>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="uk-padding-remove-left uk-margin-remove-top uk-margin-remove-bottom">
                                    <div class="uk-card" style="margin:10px 25px 25px 25px;">
                                        <a href="{{ url('/detail/membangun-sanitasi') }}" class="link-donation">
                                            <img data-src="{{ asset('img/articles/sanitazion-donation-article.jpg') }}" alt="" class="lazy">
                                            <p class="uk-text-center">Membangun</p>
                                            <span>Sanitasi</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-padding-remove-left uk-margin-remove-top uk-margin-remove-bottom">
                                        <div class="uk-card" style="margin:10px 25px 40px 25px;">
                                        <a href="{{ url('/detail/membangun-air') }}" class="link-donation">
                                            <img data-src="{{ asset('img/articles/water-donation-article.jpg') }}" alt="" class="lazy">
                                            <p class="uk-text-center">Membangun</p>
                                            <span>Air</span>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- bantu donasi mobile-->
            <div class="uk-container-expand uk-hidden@s uk-card-body" style="background-color: #e1e1e1;">
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                    @foreach($sliders as $slider)
                        <div>
                            <a href="{{ url('/donasi/'. slugify($slider->title.'-'.$slider->sub_title ) ) }}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-1.jpg') }}" uk-img class="lazy">
                                        <h1 class="uk-text-capitalize">{{ $slider->title }}</h1>
                                        <span class="uk-text-capitalize">{{ $slider->sub_title }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                        <!-- <div style="margin-top:5px;">
                            <a href="{{ url('/donasi/membangun-sanitasi') }}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-2.jpg') }}" uk-img class="lazy">
                                        <h1>Membangun</h1>
                                        <span>Sanitasi</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top:5px;">
                            <a href="{{ url('/donasi/membangun-air') }}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-3.jpg') }}" uk-img class="lazy">
                                        <h1>Membangun</h1>
                                        <span>Air Bersih</span>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- end bantu donasi -->
        </section>

        

    <!-- desktop article -->

    <div class="uk-section uk-section-default section-article uk-padding-remove-bottom uk-visible@m" id="otherArticle">
        <div class="uk-container-expand">
    
            <h3 class="label-article uk-text-uppercase" style="padding-left:110px;">Artikel lainnya
                <hr class="other-article-hr">
            </h3>
            <div class="uk-overlay"></div>
        
            <div uk-slider="center: false;finite: true;">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            
                    <ul class="uk-slider-items uk-child-width-1-4@s uk-grid other-article-list">
                    @foreach($posts as $post)
                        <li>
                            <div class="uk-card uk-card-default other-article-item">
                                <div class="uk-card-media-top">
                                    <img data-src="{{ Voyager::image( voyager_image($post->image, 'cropped') ) }}" alt="" class="lazy" style="height: 100%; width: 100%; object-fit: contain;border-radius:5px 5px 0 0;">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title other-articles uk-text-center uk-margin-remove">{{ \Illuminate\Support\Str::limit($post->title, 40, $end=' ...') }} </h3>
                                    <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                                        <div>
                                            <div class="uk-text-center">
                                                <a class="read-more" href="{{ $post->slug }}">Continue reading <span uk-icon="arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>
            
                    <a class="uk-position-center-left uk-position-small slidenavCustomPrev uk-margin-remove-left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small slidenavCustomNext uk-margin-remove-right" href="#" uk-slidenav-next uk-slider-item="next"></a>
            
                </div>
            
            </div>
    
        </div>
        <div class="uk-visible@m bg-article-bottom-desktop"></div>
        <div class="uk-height-medium uk-hidden@s" style="background-image: url({{ asset('img/bg-article.jpg') }}); background-repeat: repeat;margin-top:-80%;"></div>
    </div>
        <!-- end desktop article -->


        <!-- mobile article -->

    <div class="uk-section uk-section-default section-article uk-hidden@s" style="padding-bottom:50px;">
        <div class="uk-container-expand">
    
            <h3 class="label-article-mobile uk-text-uppercase">artikel lainnya</h3>
        
            <div uk-slider="center: false" class="uk-hidden@s" style="padding-left:7%;">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid article-list-mobile">
                        @foreach($posts as $post)
                            <li>
                                <a href="{{ $post->slug }}">
                                    <div class="uk-card article-item">
                                        <div class="uk-card-media-top">
                                            <img data-src="{{ Voyager::image( voyager_image($post->image, 'cropped') ) }}" alt="" class="lazy">
                                        </div>
                                        <div class="article-content-mobile">
                                            <h3 class="uk-card-title title-article-mobile uk-margin-remove-top">{{ \Illuminate\Support\Str::limit($post->title, 30, $end=' ...') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-visible@m" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-visible@m" href="#" uk-slidenav-next uk-slider-item="next"></a>
                
                    </div>
                
                    <ul class="uk-flex-center uk-margin"></ul>
                
                </div>
    
        </div>
        <div class="uk-height-medium uk-visible@m" style="background-image: url({{ asset('img/bg-article.jpg') }} ); background-repeat: no-repeat;margin-top:-15%;"></div>
        <div class="uk-height-small uk-hidden@s" style="background-image: url({{ asset('img/articles/bg-detail-article-mobile.jpg') }} );margin-top:-39%;"></div>
    </div>

    <div class="uk-hidden@m uk-hidden@s">
        <div class="bottom-share" id="myNavbar">
        
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}&t={{ $article->title }}"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Facebook" class="fb">
            <img src="{{ asset('img/fb-share-desktop.png') }}" alt="">
        </a>
        <a href="https://twitter.com/share?url={{ url()->current() }}&via=HabitatID&text={{ $article->title }}"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Twitter" class="tw">
            <img src="{{ asset('img/tw-share-desktop.png') }}" alt="">
        </a>
        
        <a href="https://wa.me/?text={{ $url }}" class="wa" target="_blank">
            <img src="{{ asset('img/wa-share-desktop.png') }}" alt="">
        </a>
        <a href="#about" class="mail" target="_blank">
            <img src="{{ asset('img/mail-share-desktop.png') }}" alt="">
        </a>
    </div>
    </div>
    <!-- end mobile article -->

    @include('client.components.footer', ['desktop' => 'block', 'mobile' => 'none'])
    
@endsection
