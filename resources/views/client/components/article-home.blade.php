<!-- article -->
<div class="uk-section section-article uk-padding-remove-bottom">
            <div class="uk-container-expand">
                    <h3 class="label-article uk-text-uppercase uk-visible@s" style="padding-left:110px;">Artikel
                        <hr class="right uk-visible@s">
                    </h3>
                    <h3 class="label-article uk-text-uppercase uk-hidden@s" style="padding-left:25px;font-size: 1.2rem;">Artikel</h3>
                    <div class="uk-overlay uk-visible@s"></div>
                

                <div uk-slider="center: false;finite: true;" class="uk-visible@s slider-article">

                        <div class="uk-position-relative uk-visible-toggle uk-light slider-container" tabindex="-1">
                    
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-grid article-list">
                            @foreach($posts as $post)
                            @php
                            $url = urlencode($post->title .' - '.url($post->slug));
                            @endphp
                                <li>
                                    <div class="uk-card uk-card-default article-item">
                                        <div class="uk-card-media-top">
                                            <a href="{{ $post->slug }}">
                                                <img data-src="{{ Voyager::image( voyager_image($post->image, 'cropped') ) }}" alt="" class="lazy" style="height: 100%; width: 100%; object-fit: contain;">
                                            </a>
                                        </div>
                                        <div class="uk-card-body article-content">
                                        <div class="uk-grid-collapse " uk-grid>
                                            <div class="uk-width-expand@m">
                                                <div class="uk-card">
                                                    <a href="{{ $post->slug }}">
                                                            <h3 class="uk-card-title title-article uk-margin-remove-top"> {{ \Illuminate\Support\Str::limit($post->title, 42, $end='...') }}</h3>
                                                        </a>
                                                </div>
                                            </div>
                                            <div class="uk-width-1-3@m">
                                                <div class="uk-card">
                                                    <p class="uk-text-left uk-margin-remove-bottom share-text">share :</p>
                                                            <div class="uk-flex icon-share uk-margin-small-bottom">
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="https://wa.me/?text={{ $url }}" class="wa" target="_blank">
                                                                        <img data-src="{{ asset('img/wa-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="https://twitter.com/share?url={{ url($post->slug) }}&via=HabitatID&text={{ $post->title }}"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
        target="_blank" title="Share on Twitter" class="lazy">
                                                                        <img data-src="{{ asset('img/twt-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="mailto:?subject={{ $post->title }}&amp;body=Simak artikel berikut ini: {{ url($post->slug) }}" title="Share {{ $post->title }}">
                                                                        <img data-src="{{ asset('img/mail-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url($post->slug) }}&t={{ $post->title }}"
    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
    target="_blank" title="Share on Facebook" class="lazy">
                                                                        <img data-src="{{ asset('img/fb-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                                <!-- <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                                                    <div>
                                                        <div class="uk-width-expand@m">
                                                        <a href="{{ $post->slug }}">
                                                            <h3 class="uk-card-title title-article uk-margin-remove-top">{{ $post->title }} here isi title additional</h3>
                                                        </a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class=""></div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-width-1-3@m">
                                                            <p class="uk-text-left uk-margin-remove-bottom share-text">share :</p>
                                                            <div class="uk-flex icon-share uk-margin-small-bottom">
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="#">
                                                                        <img data-src="{{ asset('img/wa-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="#">
                                                                        <img data-src="{{ asset('img/twt-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="#">
                                                                        <img data-src="{{ asset('img/mail-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="#">
                                                                        <img data-src="{{ asset('img/fb-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            
                                            <p class="description-article uk-text-justify">{{ \Illuminate\Support\Str::limit($post->excerpt, 90, $end=' ...') }}</p>
                                            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                                                <div>
                                                    <div class=""></div>
                                                </div>
                                                <div>
                                                    <div class="uk-text-right">
                                                        <a class="read-more" href="{{ $post->slug }}">Continue reading <span uk-icon="arrow-right"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                    
                            <a class="uk-position-center-left uk-position-small  uk-visible@m arrowCustomDesktopPrev" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-visible@m arrowCustomDesktopNext" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                        </div>
                    
                        <ul class="uk-flex-center uk-margin"></ul>
                    
                    </div>


                    <!-- article mobile -->
                    <div uk-slider="center: false" class="uk-hidden@s" style="padding-left:7%;">

                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                        
                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid article-list-mobile">
                                @foreach($posts as $post)
                                    <li>
                                        <a href="{{ $post->slug }}">
                                            <div class="uk-card article-item">
                                                <div class="uk-card-media-top">
                                                    <img data-src="{{ Voyager::image( voyager_image($post->image, 'small') ) }}" alt="" class="lazy">
                                                </div>
                                                <div class="article-content-mobile">
                                                    <h3 class="uk-card-title title-article-mobile uk-margin-remove-top">{{ \Illuminate\Support\Str::limit($post->title, 42, $end='...') }}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                    
                                </ul>
                        
                                <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-visible@m" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-visible@m" href="#" uk-slidenav-next uk-slider-item="next"></a> -->
                        
                            </div>
                        
                            <ul class="uk-flex-center uk-margin"></ul>
                        
                        </div>

        
            </div>
            <div class="uk-visible@s bg-article-home">
            </div>
            <div class="uk-hidden@s">
                <img data-src="{{ asset('img/bg-article.jpg') }}" alt="" class="uk-height-small lazy" style="margin-top:-27%;">
            </div>
            </div>
        </div>
        
        <!-- end article -->