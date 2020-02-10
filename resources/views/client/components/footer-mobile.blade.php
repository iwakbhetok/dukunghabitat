<div class="uk-container uk-hidden@m">
    <!-- footer mobile -->
    <div class="uk-child-width-1-1@m uk-text-center" uk-grid>
        <div>
            <div class="uk-card">
                <p class="uk-text-left uk-text-uppercase" style="font-size: 0.8rem;margin-top:15px;margin-bottom:5px;">Newsletter</p>
                <div class="">
                    <form id="frmNewsletterMobile">
                        @csrf
                        <div class="uk-margin uk-margin-remove-bottom form-newsletter-mobile" uk-margin>
                            <div uk-form-custom="target: true" style="width:100%;">
                                <input class="uk-input emailNewsletterMobile" type="text" name="email" placeholder="Ketik email di sini" data-holder="Ketik email di sini">
                                <button class="uk-button" class="uk-button uk-text-bold btnSubmitNewsletterMobile">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="uk-text-left uk-margin uk-margin-remove-top">
                    <label for="errorNewsletterMobile" class="errorNewsletterMobile"></label>
                </div>
            </div>
        </div>
        <div class="uk-margin-remove-top">
            <div class="uk-card uk-card-body social-footer-mobile uk-padding-remove-bottom uk-padding-remove-top">
                <p class="uk-text-center uk-text-uppercase">Follow us</p>
                <div class="uk-flex uk-flex-center">
                    <div class="uk-card-media-top">
                        <a href="https://www.facebook.com/habitat.indonesia" target="_blank">
                            <img src="{{ asset('img/fb-icon.png') }}" alt="" style="margin-left: 5px;margin-right: 5px;">
                        </a>
                    </div>
                    <div class="uk-card uk-margin-left">
                        <a href="https://www.youtube.com/user/hfhindonesia" target="_blank">
                            <img src="{{ asset('img/yt-icon.png') }}" alt="">
                        </a>
                    </div>
                    <div class="uk-card uk-margin-left">
                        <a href="https://www.instagram.com/habitat_id/" target="_blank">
                            <img src="{{ asset('img/ig-icon.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="uk-card uk-padding-small uk-padding-remove-bottom">
                <div class="uk-flex uk-flex-center link-sitemap-mobile">
                    <div class="uk-card-media-top">
                        <a href="{{ url('/') }}" class="uk-text-uppercase">Donasi</a>
                    </div>
                    <!-- <div class="uk-card uk-margin-left">
                        <a href="#" class="uk-text-uppercase">Artikel</a>
                    </div> -->
                    <div class="uk-card uk-margin-left">
                        <a href="http://www.habitatindonesia.org/" target="_blank" class="uk-text-uppercase">Tentang kami</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-body uk-padding-remove-bottom uk-padding-remove-top">
                <div class="uk-text-uppercase uk-text-center text-powered">
                    Powered by
                </div>
                <div class="uk-text-center">
                    <a href="https://www.iprospect.com/en/id/" target="_blank">
                        <img src="{{ asset('img/logo-iprospect-white.png') }}" alt="" style="width:30%;margin-top:10px;">
                    </a>
                    <a href="https://www.dentsuaegisnetwork.com" target="_blank">
                        <img src="{{ asset('img/logo-dan-mobile.png') }}" alt="" style="margin-left:10px;margin-top:15px;">
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-body uk-padding-remove-top">
                <div class="uk-text-uppercase uk-text-center text-copyright-mobile">
                    copyright @ 2019 <br> HABITAT INDONESIA <br>ALL RIGHTS RESERVED
                </div>
            </div>
        </div>
    </div>
    <!-- end footer mobile-->
</div>