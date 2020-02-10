@extends('client.layouts.layout')

@section('title',  'Hasil Pencarian')

@section('content')

<!-- search result -->
<section>
        <div class="uk-container uk-padding">
            <h2 class="uk-text-center uk-padding uk-visible@m">Oops! Halaman yang Anda cari tidak ditemukan.</h2>
            <h4 class="uk-text-center uk-hidden@s">Oops! Halaman yang Anda cari tidak ditemukan.</h4>
            <p class="uk-text-center">
                <a class="uk-button uk-button-default uk-modal-close closeBtn uk-text-capitalize" style="font-size: 1rem;" href="index.html">Balik Halaman Awal</a>
            </p>
        </div>
    </section>
    <!-- search result -->

    <div class="grey-divider uk-hidden@s"></div>

    <!-- article -->

    <div class="uk-section uk-section-muted section-article uk-padding-remove-bottom uk-visible@m">
        
            <div class="uk-container">
        
                <h3 class="label-other-article">Lihat artikel lainnya</h3>
                <hr class="right-search">
                <div class="uk-overlay"></div>
                <div uk-slider="center: false">

                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-grid article-list">
                                @foreach($posts as $post)
                                @php
                                $url = urlencode($post->title .' - '.url($post->slug));
                                @endphp
                                <li>
                                    <div class="uk-card uk-card-default article-item">
                                        <div class="uk-card-media-top">
                                            <a href="{{ url('/'.$post->slug ) }}">
                                            <img data-src="{{ Voyager::image( $post->image ) }}" alt="" class="lazy">
                                            </a>
                                        </div>
                                        <div class="uk-card-body article-content">
                                                <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                                                    <div>
                                                        <div class=""></div>
                                                    </div>
                                                    <div>
                                                        <div class=""></div>
                                                    </div>
                                                    <div>
                                                        <div class="">
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
            target="_blank" title="Share on Twitter">
                                                                        <img data-src="{{ asset('img/twt-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="mailto:?subject={{ $post->title }}&amp;body=Check out this site {{ url($post->slug) }}" title="Share {{ $post->title }}">
                                                                        <img data-src="{{ asset('img/mail-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                                <div class="uk-card uk-margin-small-right">
                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url($post->slug) }}&t={{ $post->title }}"
        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
        target="_blank" title="Share on Facebook">
                                                                        <img data-src="{{ asset('img/fb-article-icon.png') }}" alt="" class="lazy">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ url('/'.$post->slug) }}">
                                            <h3 class="uk-card-title title-article uk-margin-remove-top">{{ $post->title }}</h3>
                                            </a>
                                            <p class="description-article uk-text-justify">{{ $post->excerpt }}</p>
                                            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                                                <div>
                                                    <div class=""></div>
                                                </div>
                                                <div>
                                                    <div class="uk-text-right">
                                                        <a class="read-more" href="{{ url('/'.$post->slug ) }}">Continue reading <span uk-icon="arrow-right"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                    
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    
                        </div>
                    
                        <ul class="uk-flex-center uk-margin"></ul>
                    
                    </div>
        
            </div>
            </div>

            <div class="uk-section uk-section-default section-article uk-padding-remove-bottom uk-hidden@s">
                    <div class="uk-container">
                
                        <h3 class="label-article-mobile">Lihat artikel lainnya</h3>
                        <div class="uk-grid-small uk-child-width-expand@s" uk-grid>
                            @foreach($posts as $post)
                            <div>
                                <div class="uk-card article-item-mobile">
                                    <div class="uk-child-width-1-2 uk-grid-collapse" uk-grid>
                                        <div style="width: 30vw;">
                                            <div class="uk-card">
                                                <a href="{{ url('/'.$post->slug ) }}">
                                                    <img data-src="{{ Voyager::image( $post->image ) }}" class="lazy">
                                                </a>
                                            </div>
                                        </div>
                                        <div style="width: 60vw;padding-left:5px;">
                                            <div class="uk-card uk-text-left">
                                                <a href="{{ url('/'.$post->slug ) }}">
                                                <span class="uk-text-top title-article-mobile-search">{{ $post->title }}</span>
                                                </a>
                                                <p class="content-article-mobile">
                                                {{ \Illuminate\Support\Str::limit($post->excerpt, 100, $end='...') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
            </div>
        </div>

        
        
        <!-- end article -->
        <div class="uk-container uk-height-large uk-padding uk-visible@m">
            <h3 class="label-other-donation">Bantu kami donasi</h3>
            <hr class="right-donation">
            <br>
            <div class="uk-grid-medium uk-child-width-expand@s uk-text-center shortcut-donation-container" uk-grid>
                @foreach($sliders as $slider)
                <div>
                    <a href="{{ url('donasi/'. slugify($slider->title.'-'.$slider->sub_title ))}}">
                    <div class="uk-card shortcut-donation">
                        <img src="{{ Voyager::image( $slider->background_image_mobile ) }}" alt="" style="border-radius:5px;">
                        <p class="uk-text-center">{{ $slider->title }}</p>
                        <span>{{ $slider->sub_title }}</span>
                    </div>
                    </a>
                </div>
                @endforeach
                <!-- <div>
                    <a href="{{ url('donasi/membangun-sanitasi')}}">
                    <div class="uk-card shortcut-donation">
                        <img src="{{ asset('img/donasi-membangun-sanitasi.png') }}" alt="">
                        <p class="uk-text-center">Membangun</p>
                        <span>Sanitasi</span>
                    </div>
                    </a>
                </div>
                <div>
                    <a href="{{ url('donasi/membangun-air')}}">
                    <div class="uk-card shortcut-donation">
                        <img src="{{ asset('img/donasi-membangun-air.png') }}" alt="">
                        <p class="uk-text-center">Membangun</p>
                        <span>Air Bersih</span>
                    </div>
                    </a>
                </div> -->
            </div>
        </div>
        <!-- end article -->

        <!-- bantu donasi mobile-->
        <div class="uk-container-expand uk-hidden@s uk-card-body" style="background-color: #e1e1e1;">
                <a href="{{ url('donasi/membangun-rumah')}}" class="uk-button uk-width-1-1 uk-text-center uk-text-capitalize helpBtnMobile buttonOrange">Bantu donasi</a>
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                        <div>
                            <a href="{{ url('donasi/membangun-rumah')}}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-1.jpg') }}" uk-img>
                                        <h1>Membangun</h1>
                                        <span>Rumah</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top:5px;">
                            <a href="{{ url('donasi/membangun-sanitasi')}}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-2.jpg') }} " uk-img>
                                        <h1>Membangun</h1>
                                        <span>Sanitasi</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="margin-top:5px;">
                            <a href="{{ url('donasi/membangun-air')}}" style="text-decoration: none;">
                                <div class="uk-card">
                                    <div class="uk-background-cover link-donation-mobile" data-src="{{ asset('img/articles/bg-donation-mobile-3.jpg') }}" uk-img>
                                        <h1>Membangun</h1>
                                        <span>Air Bersih</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end bantu donasi -->
           
@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'none'])

@endsection