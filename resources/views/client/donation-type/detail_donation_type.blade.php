
@extends('client.layouts.layout')

@section('content')

<!-- slide -->
<section class="slider-building">
        <div class="uk-container-expand">

            <div uk-slider class="uk-visible@m">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-1@m">
                            <li>
                                <img data-src="{{ asset('img/water/banner-1-water.jpg') }}" alt="" class="lazy">
                                <div class="uk-position-center uk-panel"><h1></h1></div>
                            </li>
                            <li>
                                <img data-src="{{ asset('img/water/banner-2-water.jpg') }}" alt="" class="lazy">
                                <div class="uk-position-center uk-panel"><h1></h1></div>
                            </li>
                            <li>
                                <img data-src="{{ asset('img/water/banner-3-water.jpg') }}" alt="" class="lazy">
                                <div class="uk-position-center uk-panel"><h1></h1></div>
                            </li>
                        </ul>

                    </div>
                
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center dotnavCustom"></ul>
                
                </div>


                <!-- NEW --> 

                <div class="uk-position-relative uk-visible-toggle uk-card-default uk-hidden@m"  uk-slider="center: true; sets: true;finite:false;">

                    <ul class="uk-slider-items uk-grid-match slider-mobile-detail-article" uk-height-viewport="offset-top: true; offset-bottom: 60" uk-grid>
                        <li class="uk-width-3-4">
                            <div class="uk-cover-container">
                                <img src="{{ asset('img/water/banner-air-1-mobile.png') }}" alt="" uk-cover>
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-cover-container">
                                <img src="{{ asset('img/water/banner-air-2-mobile.png') }}" alt="" uk-cover>
                            </div>
                        </li>
                        <li class="uk-width-3-4 slide-3">
                            <div class="uk-cover-container">
                                <img src="{{ asset('img/water/banner-air-3-mobile.png') }}" alt="" uk-cover>
                            </div>
                        </li>
                    </ul>

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
    <section>
        <div class="uk-container-large description-building uk-flex uk-flex-center">
            <div class="uk-container-small uk-padding">
                    <div class="uk-visible@m">
                        <h3>Membangun {{ $label }}</h3>
                    </div>
                    <div class="uk-hidden@s description-building-mobile">
                        <h3>Membangun</h3>
                        <span>{{ $label }}</span>
                    </div>
                <p>Kebutuhan akan air bersih yang terus meningkat, namun tidak diimbangi oleh ketersediaannya membuat banyak orang mudah terjangkit berbagai jenis penyakit. Menurut Kepala Bidang Kedaruratan dan Logistik Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Bogor, hingga saat ini terdapat kurang lebih 600 KK dengan jumlah jiwa sebanyak 23.284 di wilayah Kabupaten Bogor yang tidak memiliki akses air bersih berjarak dekat sehingga harus menempuh jarak jauh setiap hari untuk mendapatkan air bersih. Salah satunya di Kabupaten Madang, Bogor, Jawa Barat.</p>
                <p>Bersama Habitat for Humanity Indonesia, mari lakukan tindakan nyata untuk merubah Indonesia menjadi lebih sehat dengan membangun saluran distribusi air bersih yang layak serta terjangkau bagi mereka yang membutuhkan.</p>
            </div>
        </div>
        
    </section>
    <div class="uk-container-expand uk-hidden@m" style="height: 12px;background-color:#e1e1e1;"></div>

    <section>
        <div class="uk-container-large uk-padding how-building-water">
            <div class="uk-container uk-text-center uk-visible@m">
                <h3>Bagaimana donasi Anda dapat membantu?</h3>
                <div class="uk-overlay"></div>
                <div class="uk-flex uk-flex-center">
                    <div class="uk-flex how-items">
                        <div class="uk-card how-item">
                            <img data-src="{{ asset('img/water/water-reason-1.png') }}" alt="" class="lazy">
                            <br><br>
                            <span>Rp 25.000,-</span>
                            <p>Dapat membeli 2 buah keran air plastik.</p> 
                        </div>
                        <div class="uk-card how-item">
                            <img data-src="{{ asset('img/water/water-reason-2.png') }}" alt="" class="lazy">
                            <br><br>
                            <span>Rp 50.000,-</span>
                            <p>Dapat membeli 2 batang pipa waving.</p>
                        </div>
                        <div class="uk-card how-item">
                            <img data-src="{{ asset('img/water/water-reason-3.png') }}" alt="" class="lazy">
                            <br><br>
                            <span>Rp 100.000,-</span>
                            <p>Dapat membeli 4 batang pipa waving.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-padding">
                    <a href="{{ url('/donasi/'.$type) }}" class="uk-button uk-text-uppercase donationBtn btnZoomHover buttonOrange">donasi sekarang</a>
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
                                                <div style="width: 20vw;">
                                                    <img data-src="{{ asset('img/water/water-reason-1-mobile.png') }}" alt="" class="lazy">
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove-top" style="padding-left: 10px;">
                                                <div class="uk-text-left detail-donation" style="width: 45vw;">
                                                    <span>Rp 25.000,-</span>
                                                    <p class="uk-margin-remove-left uk-margin-remove-right uk-text-left uk-margin-remove-top">
                                                        Dapat membeli 2 buah keran air plastik
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
                                                    <img data-src="{{ asset('img/water/water-reason-2-mobile.png') }}" alt="" class="lazy">
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove-top" style="padding-left: 10px;">
                                                <div class="uk-text-left detail-donation" style="width: 45vw;">
                                                    <span>Rp 50.000,-</span>
                                                    <p class="uk-margin-remove-left uk-margin-remove-right uk-text-left uk-margin-remove-top">
                                                        Dapat membeli 2 batang pipa waving
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
                                                    <img data-src="{{ asset('img/water/water-reason-3-mobile.png') }}" alt="" class="lazy">
                                                </div>
                                            </div>
                                            <div class="uk-margin-remove-top" style="padding-left: 10px;">
                                                <div class="uk-text-left detail-donation" style="width: 45vw;">
                                                    <span>Rp 100.000,-</span>
                                                    <p class="uk-margin-remove-left uk-margin-remove-right uk-text-left uk-margin-remove-top">
                                                        Dapat membeli 4 batang pipa waving.
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
            <div class="uk-h4 uk-hidden@m link-donation-help-fixed uk-text-center uk-card">
                <a class="uk-button btnZoomHover buttonOrange" href="{{ url('/donasi/'.$type) }}">Donasi Sekarang</a>
            </div>

        </div>
    </section>

@endsection