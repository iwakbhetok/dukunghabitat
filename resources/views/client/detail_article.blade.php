
@extends('client.layouts.layout')

@section('content')

<section class="slider-building uk-visible@s">
        <div class="uk-container-expand">

            <div uk-slider>

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-1@s uk-child-width-1-1@m">
                            <li>
                                <img data-src="{{ Voyager::image( $article->image ) }}" class="lazy" alt="" style="display: block;margin-left: auto;margin-right: auto;width: 100%; height:500px;">
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
            <div class="uk-container">
                <div class="" uk-grid>
                    <div class="uk-width-expand@m">
                        <div class="uk-card uk-card-body contentArticle uk-padding-remove-left uk-padding-remove-right uk-visible@m">
                            <h1 class="uk-text-left">{{ $article->title }}</h1>
                            {!! $article->body !!}
                        </div>
                        <div class="uk-card contentArticle uk-hidden@m">
                            <h1 class="uk-text-left">{{ $article->title }}</h1>
                            {!! $article->excerpt !!}
                            <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center share-article-mobile uk-hidden@m" uk-grid>
                                <div>
                                    <div class="uk-card uk-card-body share-article-mobile-label">Bagi Artikel ini</div>
                                </div>
                                <div>
                                    <div class="uk-card social-share-link-mobile">
                                        <div class="uk-child-width-1-1 uk-text-center" uk-grid>
                                            <div>
                                                <div class="uk-grid-collapse uk-child-width-1-4 uk-text-center share-article-mobile-list" uk-grid>
                                                    <div>
                                                        <a href="#">
                                                            <div class="uk-card share-icon-item">
                                                                <span uk-icon="icon: whatsapp"></span>    
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <div class="uk-card share-icon-item">
                                                                <img src="{{ asset('img/twt-icon.png') }}" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <div class="uk-card share-icon-item">
                                                                <span uk-icon="icon: mail"></span>    
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="#">
                                                            <div class="uk-card share-icon-item">
                                                                <img src="{{ asset('img/fb-icon-black-border.png') }}" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! $article->body !!}
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-visible@m">
                        <br>
                        <div class="uk-card uk-card-body">
                            
                            <div class="uk-grid-column-small uk-width-1-1@m uk-text-center uk-background-muted uk-margin-remove-top" uk-grid>
                                <a href="{{ url('/donasi/membangun-rumah') }}" class="uk-button uk-width-1-1 label-donation-help btnZoomHover buttonOrange">BANTU DONASI</a>
                                <div class="uk-padding-remove-left uk-margin-remove-top uk-margin-remove-bottom">
                                    <div class="uk-card" style="margin:10px 25px 25px 25px;">
                                        <a href="{{ url('/detail/membangun-rumah') }}" class="link-donation">
                                            <img data-src="{{ asset('img/articles/home-donation-article.jpg') }}" alt="" class="lazy">
                                            <p class="uk-text-center">Membangun</p>
                                            <span>Rumah</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-padding-remove-left uk-margin-remove-top uk-margin-remove-bottom">
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
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- bantu donasi mobile-->
            <div class="uk-container-expand uk-hidden@s uk-card-body" style="background-color: #e1e1e1;">
                <a href="{{ url('/donasi/membangun-rumah') }}" class="uk-button uk-width-1-1 uk-text-center uk-text-capitalize helpBtnMobile btnZoomHover buttonOrange">Bantu donasi</a>
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                        <div>
                            <a href="{{ url('/donasi/membangun-rumah') }}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-1.jpg') }}" uk-img class="lazy">
                                        <h1>Membangun</h1>
                                        <span>Rumah</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top:5px;">
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
                        </div>
                    </div>
                </div>
                <!-- end bantu donasi -->
        </section>

        

    <!-- desktop article -->

    <div class="uk-section uk-section-default section-article uk-padding-remove-bottom uk-visible@m">
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
                                    <img data-src="{{ Voyager::image( $post->image ) }}" alt="" class="lazy" style="border-radius:5px 5px 0 0;">
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title other-articles uk-text-center uk-margin-remove">{{ $post->title }}</h3>
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

    <div class="uk-section uk-section-default section-article uk-padding-remove-bottom uk-hidden@s">
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
                                            <img data-src="{{ Voyager::image( $post->image ) }}" alt="" class="lazy">
                                        </div>
                                        <div class="article-content-mobile">
                                            <h3 class="uk-card-title title-article-mobile uk-margin-remove-top">{{ $post->title }}</h3>
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
    <!-- end mobile article -->

    @include('client.components.footer', ['desktop' => 'block', 'mobile' => 'block'])
@endsection