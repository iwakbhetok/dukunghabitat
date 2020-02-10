 <!-- slider -->
 <section>
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
            <span>Loading...</span>
        </div>
        <div class="flex-container uk-visible@m">
            @foreach($sliders as $slider)
            <div class="flex-slide home" style="background: url({{ Voyager::image( $slider->background_image ) }});background-repeat:no-repeat;background-size:cover;">
                <div class="flex-title ">{{ $slider->title }} <br>
                    <span>{{ $slider->sub_title }}</span></div>
                <div class="flex-about flex-about-home">
                    <h2>{{ $slider->title_detail_information }}</h2>
                    <p>{{ $slider->description_detail_information }}</p>
                    <div class="">
                        <div class="uk-flex slide-home-items uk-width-1-1">
                            <div class="uk-card slide-home-item uk-text-center">
                                <img src="{{ Voyager::image( $slider->icon_image_1_detail_information ) }}" alt="">
                                <div class="uk-overlay-small"></div>
                                <br>
                                <span class="uk-text-bold">{{ $slider->nominal_text_1_detail_information }}</span>
                                <p>{{ $slider->excerpt_icon_1_detail_information }}</p> 
                            </div>
                            <div class="uk-card slide-home-item uk-text-center">
                                <img src="{{ Voyager::image( $slider->icon_image_2_detail_information ) }}" alt="">
                                <div class="uk-overlay-small"></div>
                                <br>
                                <span class="uk-text-bold">{{ $slider->nominal_text_2_detail_information }}</span>
                                <p>{{ $slider->excerpt_icon_2_detail_information }}</p> 
                            </div>
                            <div class="uk-card slide-home-item uk-text-center">
                                <img src="{{ Voyager::image( $slider->icon_image_3_detail_information ) }}" alt="">
                                <div class="uk-overlay-small"></div>
                                <br>
                                <span class="uk-text-bold">{{ $slider->nominal_text_3_detail_information }}</span>
                                <p>{{ $slider->excerpt_icon_3_detail_information }}</p> 
                            </div>
                        </div>
                    </div>
                    <div class="klik-detail">
                        Informasi selengkapnya 
                        @if($slider->url_detail_donation_type == "")
                        <a href="{{ url('/detail/'. slugify($slider->title.'-'.$slider->sub_title ) ) }}" style="text-decoration: underline;">{{ $slider->cta_text_detail_donation }}
                            <img src="{{ asset('img/arrow-right.png') }}" alt="">
                        </a>
                        @else
                        <a href="{{ $slider->url_detail_donation_type }}" target="_blank" style="text-decoration: underline;">{{ $slider->cta_text_detail_donation }}
                            <img src="{{ asset('img/arrow-right.png') }}" alt="">
                        </a>
                        @endif
                    </div>
                </div>
                <div class="flex-about-btn">
                    <a href="{{ url('/donasi/'. slugify($slider->title.'-'.$slider->sub_title ) ) }}" class="uk-button btnZoomHover buttonOrange">{{ $slider->cta_text_on_button }}</a>
                </div>
            </div>
            @endforeach
            <!-- <div class="flex-slide about" style="background: url({{ asset('img/bangun_sanitasi.jpg') }});background-repeat:no-repeat;background-size:cover;">
                <div class="flex-title">Membangun <br>
                    <span>Sanitasi</span></div>
                <div class="flex-about">
                        <h2>Bersih Dimulai dari Rumah</h2>
                        <p>Fasilitas mandi, cuci, dan kakus yang layak merupakan awal dari tubuh yang sehat. Setiap orang berhak memiliki ketiga fasilitas tersebut. Bergeraklah bersama kami untuk menyediakan fasilitas sanitasi yang penting ini untuk mereka.</p>
                        <div class="">
                            <div class="uk-flex slide-home-items uk-width-1-1">
                                <div class="uk-card slide-home-item uk-text-center">
                                    <img data-src="{{ asset('img/sanitazion/sanitazion-reason-1.png') }}" alt="" class="lazy">
                                    <div class="uk-overlay-small"></div>
                                    <br>
                                    <span class="uk-text-bold">Rp 25.000,-</span>
                                    <p>Dapat membeli 4 buah bata ringan.</p>
                                </div>
                                <div class="uk-card slide-home-item uk-text-center">
                                    <img src="{{ asset('img/sanitazion/sanitazion-reason-2.png') }}" alt="">
                                    <div class="uk-overlay-small"></div>
                                    <br>
                                    <span class="uk-text-bold">Rp 50.000,-</span>
                                    <p>Dapat membeli 1 dus keramik kamar mandi.</p>
                                </div>
                                <div class="uk-card slide-home-item uk-text-center">
                                    <img src="{{ asset('img/sanitazion/sanitazion-reason-3.png') }}" alt="">
                                    <div class="uk-overlay-small"></div>
                                    <br>
                                    <span class="uk-text-bold">Rp 100.000,-</span>
                                    <p>Dapat membeli 1 batang baja ringan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="klik-detail">
                            Informasi selengkapnya
                            <a href="{{ url('/detail/membangun-sanitasi') }}" style="text-decoration: underline;">klik disini 
                                <img src="{{ asset('img/arrow-right.png') }}" alt="">
                            </a>
                        </div>
                </div>
                <div class="flex-about-btn">
                    <a href="{{ url('/donasi/membangun-sanitasi') }}" class="uk-button btnZoomHover buttonOrange">donasi sekarang</a>
                </div>
            </div> -->
            <!-- <div class="flex-slide contact" style="background: url({{ asset('img/bangun_air.jpg') }});background-repeat:no-repeat;background-size:cover;">
                <div class="flex-title">Membangun <br> <span>Air Bersih</span></div>
                    <div class="flex-about">
                            <h2>Akses Air Bersih</h2>
                            <p>Konsumsi air berkualitas buruk menimbulkan beragam dampak negatif. Ketidaktersediaan akses, saluran distribusi, dan saluran instalasi air bersih adalah masalah kita bersama. Mari dukung upaya pemenuhan air bersih ini untuk mereka.</p>
                            <div class="">
                                <div class="uk-flex slide-home-items uk-width-1-1">
                                    <div class="uk-card slide-home-item uk-text-center">
                                        <img src="{{ asset('img/water/water-reason-1.png') }}" alt="">
                                        <div class="uk-overlay-small"></div>
                                        <br>
                                        <span class="uk-text-bold">Rp 25.000,-</span>
                                        <p>Dapat membeli 2 buah keran air plastik.</p> 
                                    </div>
                                    <div class="uk-card slide-home-item uk-text-center">
                                        <img src="{{ asset('img/water/water-reason-2.png') }}" alt="">
                                        <div class="uk-overlay-small"></div>
                                        <br>
                                        <span class="uk-text-bold">Rp 50.000,-</span>
                                        <p>Dapat membeli 2 batang pipa waving.</p>
                                    </div>
                                    <div class="uk-card slide-home-item uk-text-center">
                                        <img src="{{ asset('img/water/water-reason-3.png') }}" alt="">
                                        <div class="uk-overlay-small"></div>
                                        <br>
                                        <span class="uk-text-bold">Rp 100.000,-</span>
                                        <p>Dapat membeli 4 batang pipa waving.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="klik-detail">
                                Informasi selengkapnya
                                <a href="{{ url('/detail/membangun-air') }}" style="text-decoration: underline;">klik disini 
                                    <img src="{{ asset('img/arrow-right.png') }}" alt="">
                                </a>
                            </div>
                    </div>
                    <div class="flex-about-btn">
                        <a href="{{ url('/donasi/membangun-rumah') }}" class="uk-button btnZoomHover buttonOrange">donasi sekarang</a>
                    </div>
            </div> -->
        </div>

        <div class="uk-hidden@m">
            <div class="uk-grid-collapse uk-child-width-expand@s" uk-grid>
                @foreach($sliders as $slider)
                <div>
                    <div class="">
                        <div class="uk-background-cover uk-height-medium uk-width-large" style="background-image: url({{ Voyager::image( $slider->background_image_mobile ) }});height:190px;width:100%;background-repeat:no-repeat;background-size:cover;">
                            <div class="label-slide-mobile uk-text-right">
                                <h2>{{ $slider->title }}</h2><span>{{ $slider->sub_title }}</span>
                            </div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <p class="uk-h4 uk-margin-remove uk-hidden@m link-donation-help uk-text-center">
                                <a uk-toggle="target: #modal-{{slugify($slider->title.'-'.$slider->sub_title )}}" class="btnZoomHover">{{ $slider->cta_text_on_button_mobile }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div>
                    <div class="">
                        <div class="uk-background-cover uk-height-medium uk-width-large" style="background-image: url({{ asset('img/banner-2-homepage-mobile.jpg') }} );height:190px;width:100%;background-repeat:no-repeat;background-size:cover;">
                            <div class="label-slide-mobile uk-text-right">
                                <h2>Membangun</h2><span>Sanitasi</span>
                            </div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <p class="uk-h4 uk-margin-remove uk-hidden@m link-donation-help uk-text-center">
                                <a uk-toggle="target: #modal-building-sanitize-mobile" class="btnZoomHover">Bantu Donasi</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="">
                        <div class="uk-background-cover uk-height-medium uk-width-large" style="background-image: url({{ asset('img/banner-3-homepage-mobile.jpg') }} );height:190px;width:100%;background-repeat:no-repeat;background-size:cover;">
                            <div class="label-slide-mobile uk-text-right">
                                <h2>Membangun</h2><span>Air Bersih</span>
                            </div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <p class="uk-h4 uk-margin-remove uk-hidden@m link-donation-help uk-text-center">
                                <a uk-toggle="target: #modal-building-water-mobile" class="btnZoomHover">Bantu Donasi</a>
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </section>
    <!-- end slider -->


    @foreach($sliders as $slider)
    <!-- modal building-home-mobile -->
    <div id="modal-{{slugify($slider->title.'-'.$slider->sub_title )}}" class="uk-modal-full" uk-modal>
         <nav class="uk-navbar-container list-modal-homepage uk-visible@ uk-hidden@m" uk-navbar style="height: 50px;">
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav nav-right-mobile">
                    <li>
                    </li>
                    <li>
                        <a href="#" class="" uk-icon="icon: close; ratio:1.5" style="padding-bottom:4vh;"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="uk-modal-dialog uk-modal-body description-donation-modal">
            <h2>{{ $slider->title_detail_information }}</h2>
            <p>{{ $slider->excerpt_detail_information }}</p>
            <div class="uk-child-width-1-1@s uk-text-center" uk-grid>
                <div>
                    <div class="uk-card">
                            <div class="uk-child-width-1-1" uk-grid>
                                <div>
                                    <div uk-grid>
                                        <div>
                                            <div style="width: 20vw;">
                                                <img src="{{ Voyager::image( $slider->icon_image_1_detail_information ) }}" alt="">
                                            </div>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                <span>{{ $slider->nominal_text_1_detail_information }}</span>
                                                <p class="uk-text-left">
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
                                            <div style="width: 20vw;">
                                                <img src="{{ Voyager::image( $slider->icon_image_2_detail_information ) }}" alt="">
                                            </div>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                <span>{{ $slider->nominal_text_2_detail_information }}</span>
                                                <p class="uk-text-left">
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
                                            <div style="width: 20vw;">
                                                <img src="{{ Voyager::image( $slider->icon_image_3_detail_information ) }}" alt="">
                                            </div>
                                        </div>
                                        <div style="padding-left:10px;">
                                            <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                <span>{{ $slider->nominal_text_3_detail_information }}</span>
                                                <p class="uk-text-left">
                                                {{ $slider->excerpt_icon_3_detail_information }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="element-home-modal-mobile"></div>
            </div>
            <p class="uk-h4 uk-margin-remove uk-hidden@m link-donation-help-mobile uk-text-center">
                <a class="uk-button uk-width-1-1 btnZoomHover" href="{{ url('/donasi/'. slugify($slider->title.'-'.$slider->sub_title )) }}">{{ $slider->cta_text_on_button }}</a>
            </p>
            <div class="uk-text-center link-read-detail">
                    <a href="{{ url('/detail/'. slugify($slider->title.'-'.$slider->sub_title )) }}" class="uk-text-uppercase">{{ $slider->cta_text_detail_donation_mobile }}</a>
            </div>
        </div>
        <nav class="uk-navbar-container list-modal-homepage uk-visible@ uk-hidden@m" uk-navbar>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav nav-right-mobile">
                    <li>
                    </li>
                    <li>
                        <div class="uk-overlay"></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @endforeach

    <!-- modal building-sanitize-mobile -->
    <!-- <div id="modal-building-sanitize-mobile" class="uk-modal-full" uk-modal>
            <nav class="uk-navbar-container list-modal-homepage uk-visible@ uk-hidden@m" uk-navbar style="height: 50px;">
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav nav-right-mobile">
                        <li>
                        </li>
                        <li>
                            <a href="#" class="" uk-icon="icon: close; ratio:1.5" style="padding-bottom:4vh;"></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="uk-modal-dialog uk-modal-body description-donation-modal">
                <h2>Bersih Dimulai dari Rumah</h2>
                <p>Fasilitas mandi, cuci, dan kakus yang layak merupakan wal dari tubuh yang sehat. Setiap orang berhak memiliki ketiga fasilitas tersebut. Bergeraklah bersama kami untuk menyediakan fasilitas sanitasi yang penting ini untuk mereka.</p>
    
                <div class="uk-child-width-1-1@s uk-text-center" uk-grid>
                    <div>
                        <div class="uk-card">
                                <div class="uk-child-width-1-1" uk-grid>
                                    <div>
                                        <div uk-grid>
                                            <div>
                                                <div style="width: 20vw;">
                                                    <img src="{{ asset('img/sanitazion/sanitazion-reason-1-mobile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div style="padding-left:10px;">
                                                <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                    <span>Rp 25.000,-</span>
                                                    <p class="uk-text-left">Dapat membeli 40 sabun batang untuk mandi dan cuci tangan.</p>
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
                                                <div style="width: 20vw;">
                                                    <img src="{{ asset('img/sanitazion/sanitazion-reason-2-mobile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div style="padding-left:10px;">
                                                <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                    <span>Rp 50.000,-</span>
                                                    <p class="uk-text-left">Dapat membeli 1 tangki air bersih untuk beragam kebutuhan.</p>
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
                                                <div style="width: 20vw;">
                                                    <img src="{{ asset('img/sanitazion/sanitazion-reason-3-mobile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div style="padding-left:10px;">
                                                <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                    <span>Rp 100.000,-</span>
                                                    <p class="uk-text-left">Dapat membeli 5 kloset jongkok untuk toilet atau kamar mandi.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="element-sanitazion-modal-mobile"></div>
                </div>
                <p class="uk-h4 uk-margin-remove uk-hidden@m link-donation-help-mobile uk-text-center">
                    <a class="uk-button uk-width-1-1" href="{{ url('/donasi/membangun-sanitasi') }}">Donasi Sekarang</a>
                </p>
                <div class="uk-text-center link-read-detail">
                        <a href="{{ url('/detail/membangun-sanitasi') }}" class="uk-text-uppercase">baca lebih detail</a>
                </div>
            </div>
            <nav class="uk-navbar-container list-modal-homepage uk-visible@ uk-hidden@m" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav nav-right-mobile">
                        <li>
                        </li>
                        <li>
                            <div class="uk-overlay"></div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> -->

        <!-- modal building-water-mobile -->
    <!-- <div id="modal-building-water-mobile" class="uk-modal-full" uk-modal>
            <nav class="uk-navbar-container list-modal-homepage uk-visible@ uk-hidden@m" uk-navbar style="height: 50px;">
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav nav-right-mobile">
                        <li>
                        </li>
                        <li>
                            <a href="#" class="" uk-icon="icon: close; ratio:1.5" style="padding-bottom:4vh;"></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="uk-modal-dialog uk-modal-body description-donation-modal">
                <h2>Akses Air Bersih</h2>
                <p>Konsumsi air berkualitas buruk menimbulkan beragam dampak negatif. Ketidaktersediaan akses, saluran distribusi, dan saluran instalasi air bersih adalah masalah kita bersama. Mari dukung upaya pemenuhan air bersih ini untuk mereka.</p>
    
                <div class="uk-child-width-1-1@s uk-text-center" uk-grid>
                    <div>
                        <div class="uk-card">
                                <div class="uk-child-width-1-1" uk-grid>
                                    <div>
                                        <div uk-grid>
                                            <div>
                                                <div style="width: 20vw;">
                                                    <img src="{{ asset('img/water/water-reason-1-mobile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div style="padding-left:10px;">
                                                <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                    <span>Rp 25.000,-</span>
                                                    <p class="uk-text-left">Dapat membeli 5 keran air untuk mengeluarkan air bersih.</p><br>
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
                                                <div style="width: 20vw;">
                                                    <img src="{{ asset('img/water/water-reason-2-mobile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div style="padding-left:10px;">
                                                <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                    <span>Rp 50.000,-</span>
                                                    <p class="uk-text-left">Dapat membeli 1 wastafel untuk beragam kebutuhan.</p><br>
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
                                                <div style="width: 20vw;">
                                                    <img src="{{ asset('img/water/water-reason-3-mobile.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div style="padding-left:10px;">
                                                <div class="uk-text-left detail-donation" style="width: 57vw;">
                                                    <span>Rp 100.000,-</span>
                                                    <p class="uk-text-left">Dapat membeli 1 tangki penampung air berkapasitas 500 liter.</p><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="element-water-modal-mobile"></div>
                </div>
                <p class="uk-h4 uk-margin-remove uk-hidden@m link-donation-help-mobile uk-text-center">
                    <a class="uk-button uk-width-1-1 btnZoomHover" href="{{ url('/donasi/membangun-air') }}">Donasi Sekarang</a>
                </p>
                <div class="uk-text-center link-read-detail">
                        <a href="{{ url('/detail/membangun-air') }}" class="uk-text-uppercase">baca lebih detail</a>
                </div>
            </div>
            <nav class="uk-navbar-container list-modal-homepage uk-visible@ uk-hidden@m" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav nav-right-mobile">
                        <li>
                        </li>
                        <li>
                            <div class="uk-overlay"></div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> -->