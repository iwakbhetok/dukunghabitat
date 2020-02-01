<!-- desktop article -->

<div class="uk-section uk-section-default section-article uk-padding-remove-bottom uk-visible@m">
        <div class="uk-container-expand">
    
            <h3 class="label-article uk-text-uppercase">Artikel lainnya
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