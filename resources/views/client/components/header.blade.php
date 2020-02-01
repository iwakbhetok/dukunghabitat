<section style="background-color: #000;">
        <div class="uk-container-expand">
            <nav class="uk-container uk-navbar-container uk-navbar-transparent uk-visible@m" uk-navbar>

                <div class="nav-overlay uk-navbar-left">
            
                    <ul class="uk-navbar-nav">
                        <li><a href="{{ url('/') }}">
                            <img data-src="{{ asset('img/logo-putih.png') }}" alt="" style="height: 50px;" class="lazy">
                        </a></li>
                    </ul>
            
                </div>
            
                <div class="nav-overlay uk-navbar-right">
            
                    <ul class="uk-navbar-nav menu-list">
                        <li>
                            <hr class="uk-divider-vertical" style="height: 30px;margin:auto;margin-top:25px;">
                        </li>
                        <li>
                            <a href="#">
                                <img data-src="{{ asset('img/fb-icon.png') }}" alt="" class="lazy">
                            </a>
                        </li>
                        <li>
                            <hr class="uk-divider-vertical" style="height: 30px;margin:auto;margin-top:25px;">
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/yt-icon.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <hr class="uk-divider-vertical" style="height: 30px;margin:auto;margin-top:25px;">
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/ig-icon.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <hr class="uk-divider-vertical" style="height: 30px;margin:auto;margin-top:25px;">
                        </li>
                        <li>
                            <a href="">Hubungi Kami</a>
                        </li>
                        <li>
                            <hr class="uk-divider-vertical" style="height: 30px;margin:auto;margin-top:25px;">
                        </li>
                        <li>
                            <div class="nav-overlay uk-navbar-right">
                                <a class="uk-navbar-toggle uk-text-white" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                                    <span uk-search-icon ></span> Cari
                                </a>
                            </div>
                        </li>
                    </ul>
            
                </div>
                
            </nav>
            <div class="nav-overlay search-container" hidden uk-sticky>
                <div class="uk-container uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" style="color:#fff;font-size: 16px;" class="uk-text-capitalize"><span uk-icon="icon: arrow-left;ratio:1.3;"></span>&nbsp;Kembali</a>
                        </li>
                        <li>
                            <div class="" style="padding:22px;padding-left:200px;">
                                <form action="{{ url('/search') }}" method="get">
                                    <div class="uk-width-1-1 form-search">
                                        <div class="group-search">
                                            <div class="search-wrapper">
                                                <div id="autocomplete" class="autocomplete group-search-input">
                                                    <span uk-search-icon class="searchIcon"></span>
                                                    <input id="myInputDesktop" name="keyword" class="uk-input uk-form-width-large search-terms" type="text" placeholder="Cari disini">
                                                    <span uk-close class="closeSearchDesktop" hidden></span>
                                                </div>
                                                <div class="group-search-button">
                                                    <button class="uk-button uk-text-capitalize" type="submit">Lacak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
            
                </div>
                <div class="overlay-freeze"></div>
            </div>

            <nav class="uk-navbar-container uk-navbar-transparent uk-visible@ uk-hidden@m" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="{{ url('/') }}">
                                <img data-src="{{ asset('img/logo-putih.png') }}" alt="" style="height: 50px;" class="lazy">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav nav-right-mobile">
                        <li>
                            <a href="#" class="uk-padding-remove-right" uk-icon="icon: search; ratio:1.5" uk-toggle="target: #search-terms-mobile"></a>
                        </li>
                        <li>
                            <a href="#" class="" uk-icon="icon: menu; ratio:1.5" uk-toggle="target: #menu-mobile"></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- menu mobile detail -->
            <div id="menu-mobile" class="uk-modal-full uk-modal" uk-modal>
                <nav class="uk-navbar-container navbar-dark uk-visible@ uk-hidden@m" uk-navbar>
                    <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="{{ url('/') }}">
                                    <img data-src="{{ asset('img/logo-putih.png') }}" alt="" style="height: 50px;" class="lazy">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav nav-right-mobile">
                            <li>
                            </li>
                            <li>
                                <a href="#" class="" uk-icon="icon: close; ratio:1.5" ></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                        

                    <div class="uk-modal-dialog uk-modal-body uk-height-viewport modal-menu">
                        
                        <div class="uk-child-width-1-1@s uk-text-center" uk-grid>
                            <div>
                                <div class="uk-card bg-dark">
                                    <ul class="uk-nav uk-text-left">
                                        <li>
                                            <a href="#">Bantu Donasi</a>
                                        </li>
                                        <li>
                                            <a href="#">Baca Artikel</a>
                                        </li>
                                        <li>
                                            <a href="http://www.habitatindonesia.org/" target="_blank">Tentang Kami</a>
                                        </li>
                                        <li>
                                            <br>
                                            <hr>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-margin-remove-top">
                                <div class="uk-card bg-dark social-menu-mobile">
                                    <p class="uk-text-left uk-text-uppercase">Follow us</p>
                                    <div class="uk-flex uk-flex-left">
                                        <div class="uk-card-media-top">
                                            <a href="#">
                                                <img src="{{ asset('img/fb-icon.png') }}" alt="" style="margin-left: 5px;margin-right: 5px;">
                                            </a>
                                        </div>
                                        <div class="uk-card uk-margin-left">
                                            <a href="#">
                                                <img src="{{ asset('img/yt-icon.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="uk-card uk-margin-left">
                                            <a href="#">
                                                <img src="{{ asset('img/ig-icon.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
                <!-- end menu mobile detail -->
                <!-- search terms mobile -->
                <div id="search-terms-mobile" class="uk-modal-full uk-modal" uk-modal>
                    <div class="uk-modal-dialog uk-height-viewport modal-menu search-modal-mobile">
                        <nav class="uk-navbar-container navbar-dark uk-visible@ uk-hidden@m" uk-navbar>
                                <div class="uk-navbar-left">
                                    <ul class="uk-navbar-nav">
                                        <li>
                                            <a href="#" uk-toggle="target: #search-terms-mobile; animation: uk-animation-fade" style="color:#fff;width:100%;"><span uk-icon="icon: arrow-left; ratio: 1.8;" style="margin-top:auto;margin-bottom:auto;"></span></a>
                                        </li>
                                        <li>
                                            <form action="{{ url('/search') }}" method="get">
                                            <div id="autocomplete-mobile" class="uk-padding-small uk-padding-remove-bottom uk-padding-remove-left uk-padding-remove-right">
                                                <input id="myInputMobile" class="uk-input search-terms-input" name="keyword" type="text" placeholder="Cari di sini">
                                                <span uk-close class="closeSearchMobile" hidden></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="uk-navbar-right">
                                    <ul class="uk-navbar-nav nav-right-mobile">
                                        <li>
                                        </li>
                                        <li>
                                            <button class="" type="submit" uk-icon="icon: search; ratio:1.5" style="padding:0 15px;"></button>
                                        </li>
                                        </form>
                                    </ul>
                                </div>
                            </nav>
                    </div>
                </div>
                <!-- end search terms mobile-->

        </div>
    </section>