
        <!-- footer desktop -->
        <div uk-grid class="uk-visible@m">
            <div>
                <div class="uk-card uk-card-body logo-footer uk-text-left">
                    <img src="{{ asset('img/logo-footer.png') }}" alt="">
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-card uk-card-body newsletter-footer">
                    <p class="uk-text-left">Newsletter</p>
                    <div class="form-newsletter-desktop">
                        <form action="{{ url('/subscribe') }}" id="frmNewsletterDesktop" method="POST">
                            @csrf
                            <input class="uk-input uk-form-width-small emailNewsletterDesktop" type="text" name="email" placeholder="Ketik alamat email anda di sini untuk langganan" data-holder="Ketik alamat email anda di sini untuk langganan">
                            <button class="uk-button uk-text-bold btnSubmitNewsletterDesktop">
                                SUBMIT
                            </button>
                        </form>
                    </div>
                    <div>
                        <label for="errorNewsletterDesktop" class="errorNewsletterDesktop"></label>
                    </div>
                    <div class="uk-grid-collapse uk-child-width-expand@s uk-text-center sitemap-link" uk-grid>
                        <div>
                            <div class="uk-card uk-margin-top">
                                <a href="http://www.habitatindonesia.org/" target="_blank">TENTANG KAMI</a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-margin-top">
                                <a href="{{ url('/') }}">DONASI</a>
                            </div>
                        </div>
                        <!-- <div>
                            <div class="uk-card uk-margin-top">
                                <a href="#">ARTIKEL</a>
                            </div>
                        </div> -->
                        <div>
                            <div class="uk-card uk-margin-top">
                                <a href="mailto:{{ Voyager::setting('site.email') }}" target="_top">HUBUNGI</a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-text-uppercase uk-text-center text-copyright" style="padding-top:45px;">
                        copyright @ 2019 habitat indonesia <br> all rights reserved
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card social-footer">
                    <p class="uk-text-left">Follow us</p>
                    <div class="uk-grid-small uk-text-left" uk-grid>
                        <div>
                            <div class="uk-card">
                                <a href="https://www.facebook.com/habitat.indonesia" target="_blank">
                                    <img src="{{ asset('img/fb-icon.png') }}" alt="" style="margin-left: 5px;margin-right: 5px;">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card">
                                <a href="https://www.youtube.com/user/hfhindonesia" target="_blank">
                                    <img src="{{ asset('img/yt-icon.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card">
                                <a href="https://www.instagram.com/habitat_id/" target="_blank">
                                    <img src="{{ asset('img/ig-icon.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="uk-overlay"></div> -->
                    <div class="uk-text-uppercase uk-text-left text-powered">
                        Powered by
                    </div>
                    <div class="uk-text-left img-powered">
                        <a href="https://www.iprospect.com/en/id/" target="_blank">
                            <img src="{{ asset('img/logo-iprospect-white.png') }}" alt="" style="width:40%;">
                        </a>
                        <a href="https://www.dentsuaegisnetwork.com" target="_blank">
                            <img src="{{ asset('img/logo-dan-desktop.png') }}" alt="" style="margin-left:15px;margin-top:10px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer desktop-->
            
    <br><br><br>
