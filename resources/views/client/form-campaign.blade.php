@extends('client.layouts.layout')

@section('title',  'Form Donasi Dukung Habitat')

@section('content')

<section>
        <div class="uk-container-expand">
            <div class="uk-cover-container uk-visible@s" style="background-image:url('{{ asset('img/new-bg-form.jpg') }}');background-size: cover;background-position: top;">
                <br>
                <form method="POST" onsubmit="return submitFormDesktop();">
                <div class="uk-container uk-container-small form-donation uk-padding uk-text-center">
                    <input id="typeDonationDesktop" name="typeDonationDesktop" type="hidden" value="{{ $type }}">
                    <input id="sliderId" name="sliderId" type="hidden" value="{{ $slider->id }}">
                    <div class="title-form">
                        <h2 class="uk-text-center label-donation uk-text-uppercase">DONASI {{ $label }} </h2>
                        <p>Pilih nominal donasi atau masukkan nominal lain sesuai keinginan.</p>
                        <div class="radio-toolbar">
                            <input type="radio" id="radio25" name="radioDonationDesktop" class="radioDonationDesktop" value="25000">
                            <label for="radio25">IDR 25,000</label>
                        
                            <input type="radio" id="radio50" name="radioDonationDesktop" class="radioDonationDesktop" value="50000">
                            <label for="radio50">IDR 50,000</label>
                        
                            <input type="radio" id="radio100" name="radioDonationDesktop" class="radioDonationDesktop" value="100000">
                            <label for="radio100">IDR 100,000</label> 
                            
                            <input class="uk-width-1-3 uk-input uk-text-uppercase customNominalDesktop " id="customNominal_1" name="customDonation" type="text" placeholder="Masukkan Nominal Lain">
                        </div>
                        <div class="uk-grid-small uk-child-width-expand@s" uk-grid>
                            <div>
                                <div class="uk-card uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-right uk-text-left">
                                    <label class="uk-margin-medium-left uk-form-label" for="form-stacked-text">Nama Lengkap Anda</label>
                                    <div class="uk-form-controls uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-right ">
                                            <input class="uk-width-1-1 uk-input uk-text-uppercase inputName" id="inputName" type="text" placeholder="CONTOH: JHON SMITH" name="fullname">
                                        <label for="errorEmail" class="errorNameMessageDesktop"></label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-padding uk-padding-remove-top uk-padding-remove-bottom  uk-padding-remove-left uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Alamat Email Anda</label>
                                    <div class="uk-form-controls uk-padding uk-padding-remove-top uk-padding-remove-bottom  uk-padding-remove-left ">
                                        <input class="uk-width-1-1 uk-input uk-text-uppercase inputEmail" id="inputEmail" type="email" placeholder="CONTOH: JHON.SMITH@COMPANY.COM">
                                        <label for="errorEmail" class="errorEmailMessageDesktop"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid-small uk-child-width-expand@s uk-text-left uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-right" uk-grid>
                            <label class="uk-text-uppercase uk-margin-medium-left hideNameDesktop"><input class="uk-checkbox" type="checkbox" name="hideNameDesktop"> Sembunyikan nama saya (anonim)</label>
                        </div>
                    </div>
                </div>
                <div class="uk-container uk-container-small uk-padding uk-padding-remove-bottom uk-text-left" style="background-image:url('{{ asset('img/bg-message-gif.jpg') }}');background-repeat:no-repeat;background-size: 100% 100%;background-position: top;width:auto;height: -moz-calc(100% - (20px + 30px));height: -webkit-calc(100% - (20px + 30px));height: calc(100% - (20px + 30px));">
                    <div class="uk-overlay"></div>
                    <div class="uk-overlay"></div>
                    <div class="uk-overlay"></div>
                    <div class="uk-overlay"></div>
                    <div class="uk-overlay uk-visible@m"></div>
                    <div class="uk-overlay uk-visible@m"></div>
                    <div class="uk-overlay uk-visible@m"></div>
                    <div class="uk-overlay uk-visible@m"></div>
                    <div class="gif-campaign">
                        <div class="uk-card uk-padding uk-padding-remove-top uk-padding-remove-right uk-text-left">
                            <label class="uk-form-label" for="form-stacked-text">Nama Pengirim</label>
                            <div class="uk-form-controls">
                                <input class="uk-width-1-2 uk-input uk-text-uppercase" id="sender" type="text" placeholder="CONTOH: JHON SMITH" name="fullname">
                            </div>
                        </div>
                        <div class="uk-card uk-padding uk-padding-remove-top uk-padding-remove-right uk-text-left">
                            <label class="uk-form-label" for="form-stacked-text">Nama Penerima</label>
                            <div class="uk-form-controls">
                                <input class="uk-width-1-2 uk-input uk-text-uppercase" id="receiver" type="text" placeholder="CONTOH: JHON SMITH" name="fullname">
                            </div>
                        </div>
                        <div class="uk-grid-small uk-child-width-expand@s uk-text-left" uk-grid>
                            <label class="uk-text-capitalize uk-margin-medium-left">
                                    <input class="uk-checkbox" type="checkbox" name="checkMessage" id="checkMessage">
                                    Masukkan Pesan Khusus
                            </label>
                        </div>
                        <div class="uk-card uk-padding uk-text-left">
                            <div class="uk-form-controls">
                                <textarea name="messageText" id="messageText" cols="15" rows="10" placeholder="{{ $slider->default_text_for_gif }}"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-container uk-container-small uk-padding form-donation uk-text-center">
                    <div class="uk-padding uk-padding-remove-top uk-padding-remove-bottom">
                        <button class="uk-button uk-text-uppercase confirmBtnDesktop btnZoomHover">konfirmasi bayar</button>
                        <img class="loading-icon" src="{{ asset('img/loading.gif') }}" alt="" hidden>
                    </div>
                    <div class="uk-padding-small">
                        <img data-src="{{ asset('img/locked-padlock.png') }}" alt="" class="lazy uk-margin-right">
                        <img data-src="{{ asset('img/shield.png') }}" alt="" class="lazy">
                    </div>
                </div>
                </form>
                <br>
                
                <!-- <div class="uk-flex uk-flex-center">
                    <div class="uk-card uk-card-body">
                        
                    <form method="POST" onsubmit="return submitFormDesktop();">
                        <div class="uk-container-small form-donation uk-padding-large uk-text-center">
                            
                            <div id="donateBtnDesktop">
                                <br>
                                <a class="uk-button uk-text-uppercase donateBtnDesktop btnZoomHover" readonly="readonly">KONFIRMASI NOMINAL</a>
                            </div>
                            <div id="form-identity" class="uk-height-small">
                                    
                                    
                                    
                            </div>
                        </div>
                        <div class="uk-container uk-container-small uk-text-center" style="background-image:url('{{ asset('img/bg-message-gif.jpg') }}');background-size: cover;background-position: top;width:auto;height:700px;">
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay uk-visible@m"></div>
                            <div class="uk-overlay uk-visible@m"></div>
                            test
                        </div>
                        <div class="uk-container uk-container-small form-donation uk-text-center">
                            <br>
                                <button class="uk-button uk-text-uppercase uk-margin confirmBtnDesktop btnZoomHover">konfirmasi bayar</button>
                                <img class="loading-icon" src="{{ asset('img/loading.gif') }}" alt="" hidden>
                                
                                <br>
                        </div>
                    </form>
                        
                    </div>
                </div> -->
                
            </div>

            <!-- form mobile -->
            <div class="uk-hidden@s">
                <div class="uk-flex uk-flex-center">
                    <div class="uk-card">
                    <form method="POST" onsubmit="return submitFormMobile();">
                            <input id="typeDonationMobile" name="typeDonationMobile" type="hidden" value="{{ $type }}">
                            <div class="uk-container-small form-donation-mobile">
                            <h2 class="uk-text-center label-donation uk-text-bold uk-text-uppercase">DONASI <br> {{ $label }}</h2>
                            <div class="uk-card-body bg-nominal-mobile uk-text-center">
                                <p>Pilih nominal donasi atau masukkan nominal lain sesuai keinginan.</p>
                                <div class="uk-child-width-1-1 uk-text-left" uk-grid>
                                    <div>
                                        <div class="uk-child-width-1-3 radio-toolbar-mobile" uk-grid>
                                            <div class="uk-padding-remove-left">
                                                <div class="uk-card">
                                                    <input type="radio" id="radio25mobile" name="radioDonationMobile" class="radioDonationMobile" value="25000">
                                                    <label for="radio25mobile">IDR 25,000</label>
                                                </div>
                                            </div>
                                            <div class="uk-padding-remove-left">
                                                <div class="uk-card">
                                                    <input type="radio" id="radio50mobile" name="radioDonationMobile" class="radioDonationMobile" value="50000">
                                                    <label for="radio50mobile">IDR 50,000</label>
                                                </div>
                                            </div>
                                            <div class="uk-padding-remove-left">
                                                <div class="uk-card">
                                                    <input type="radio" id="radio100mobile" name="radioDonationMobile" class="radioDonationMobile" value="100000">
                                                    <label for="radio100mobile">IDR 100,000</label> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <span class="uk-text-center">Atau</span>
                                <p class="uk-text-left">Masukkan jumlah nominal berbeda</p>
                                <div class="radio-toolbar-mobile">
                                    <input class="uk-width-1-1 uk-input uk-text-uppercase customNominalMobile" id="customNominal_2" name="customDonation" type="text" placeholder="CONTOH: 500.000">  
                                </div>
                            </div>
                            <!-- <br>
                            <div class="uk-padding uk-padding-remove-top donateContainer">
                                <a class="uk-button uk-width-1-1 uk-text-uppercase donateBtnMobile btnZoomHover">KONFIRMASI NOMINAL</a>
                            </div> -->
                            
                            <div class="uk-card-body form-identity-mobile bg-nominal-mobile">
                                <div class="uk-child-width-1-1 uk-text-left" uk-grid>
                                    <div>
                                        <div class="uk-child-width-1-1" uk-grid>
                                            <div class="uk-padding-remove-left">
                                                <div class="uk-card">
                                                    <label class="uk-margin-medium-left uk-form-label" for="form-stacked-text">Nama Lengkap Anda</label>
                                                    <div class="uk-form-controls uk-padding uk-padding-remove-top uk-padding-remove-right " style="padding-bottom: 15px;">
                                                            <input class="uk-width-1-1 uk-input uk-text-uppercase inputNameMobile" id="inputNameMobile" type="text" placeholder="CONTOH: JHON SMITH">
                                                        <label for="errorName" class="errorNameMessageMobile"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-padding-remove-left uk-margin-remove-top">
                                                <div class="uk-card">
                                                    <label class="uk-margin-medium-left uk-form-label" for="form-stacked-text">Alamat email Anda</label>
                                                    <div class="uk-form-controls uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-right ">
                                                        <input class="uk-width-1-1 uk-input uk-text-uppercase inputEmailMobile" id="inputEmailMobile" type="text" placeholder="CONTOH: JHONSMITH@COMPANY.COM">
                                                        <label for="errorEmail" class="errorEmailMessageMobile"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid-small uk-child-width-expand@s uk-text-left uk-padding uk-padding-remove-top uk-padding-remove-right uk-padding-remove-left" uk-grid>
                                    <label class="uk-text-uppercase hideNameMobile"><input class="uk-checkbox" type="checkbox" name="hideNameMobile"> Sembunyikan nama saya (anonim)</label>
                                </div>
                                
                            </div>
                            <div class="uk-card-body" style="background-image:url('{{ asset('img/bg-message-gif-mobile.jpg') }}');background-repeat:no-repeat;background-size: 100% 100%;background-position: top;width:auto;height: 550px;">
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>
                            <div class="uk-overlay"></div>    
                                <div class="uk-child-width-1-1" uk-grid>
                                    <div class="uk-padding-remove-left">
                                        <div class="uk-card">
                                            <label class="uk-margin-medium-left uk-form-label label-campaign-gif" for="form-stacked-text">Nama Pengirim</label>
                                            <div class="uk-form-controls uk-padding uk-padding-remove-top uk-padding-remove-right " style="padding-bottom: 15px;">
                                                    <input class="uk-width-1-1 uk-input uk-text-uppercase" id="senderMobile" type="text" placeholder="CONTOH: JHON SMITH">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-padding-remove-left uk-margin-remove-top">
                                        <div class="uk-card">
                                            <label class="uk-margin-medium-left uk-form-label label-campaign-gif" for="form-stacked-text">Nama Penerima</label>
                                            <div class="uk-form-controls uk-padding uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-right ">
                                                <input class="uk-width-1-1 uk-input uk-text-uppercase" id="receiverMobile" type="text" placeholder="CONTOH: JHON SMITH">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-padding-remove-left" style="margin-top:10px;">
                                        <div class="uk-card">
                                            <label class="uk-text-capitalize uk-margin-medium-left label-campaign-gif">
                                                    <input class="uk-checkbox" type="checkbox" name="checkMessageMobile" id="checkMessageMobile">
                                                    Masukkan Pesan Khusus
                                            </label>
                                        </div>
                                    </div>
                                    <div class="uk-padding uk-padding-remove-top" style="margin-top:10px;">
                                        <div class="uk-card">
                                            <textarea name="messageTextMobile" id="messageTextMobile" cols="15" rows="4" placeholder="Karena hadiah coklat dan bunga sudah terlalu biasa untuk kamu yang selalu ada"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-card-body">
                                <div class="uk-padding confirmContainer uk-padding-remove-left uk-padding-remove-right uk-padding-remove-top">
                                    <button class="uk-button uk-width-1-1 uk-text-uppercase confirmBtnMobile btnZoomHover">konfirmasi bayar</button>
                                    <img class="loading-icon" src="{{ asset('img/loading.gif') }}" alt="" hidden>
                                </div>
                            </div>
                            
                        </div>
                        </form>
                        
                        <div class="uk-container-small form-donation-footer uk-padding">
                            <p class="uk-padding-large uk-padding-remove-top uk-padding-remove-bottom uk-text-center">Donasi Anda akan turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</p>
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-card">
                                    <img data-src="{{ asset('img/locked-padlock.png') }}" alt="" class="lazy">
                                </div>
                                <div class="uk-card uk-margin-left">
                                    <img data-src="{{ asset('img/shield.png') }}" alt="" class="lazy">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <p class="secure-donation">DONASI ANDA 100% AMAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end form mobile -->
        </div>
    </section>

@include('client.components.footer', ['desktop' => 'block', 'mobile' => 'none'])

@endsection

@section('pagespecificscripts')

    <!-- mask money scripts-->
    <script src="{{ asset('js/jquery.maskMoney.js') }} "></script>

    <script>
        // $('.maskedTextField').maskAsNumber();
        $("#customNominal_1").maskMoney({
            // The symbol to be displayed before the value entered by the user
            prefix:'IDR ', 

            // The suffix to be displayed after the value entered by the user(example: "1234.23 €"). 
            suffix: "",

            // Delay formatting of text field until focus leaves the field
            formatOnBlur: false,

            // Prevent users from inputing zero
            allowZero:false, 

            // Prevent users from inputing negative values
            allowNegative:true, 

            // Allow empty input values, so that when you delete the number it doesn't reset to 0.00. 
            allowEmpty: false,

            // Select text in the input on double click
            doubleClickSelection: true, 

            // Select all text in the input when the element fires the focus event. 
            selectAllOnFocus: false,

            // The thousands separator
            thousands: ',', 

            // The decimal separator
            decimal: '.' , 

            // How many decimal places are allowed
            precision: 0, 

            // Set if the symbol will stay in the field after the user exits the field. 
            affixesStay : true, 

            // Place caret at the end of the input on focus 
            bringCaretAtEndOnFocus: true 

            }); 
            $("#customNominal_2").maskMoney({
                // The symbol to be displayed before the value entered by the user
                prefix:'IDR ',
                // The suffix to be displayed after the value entered by the user(example: "1234.23 €"). 
                suffix: "",
                // Delay formatting of text field until focus leaves the field
                formatOnBlur: false,
                // Prevent users from inputing zero
                allowZero:false,
                // Prevent users from inputing negative values
                allowNegative:true,
                // Allow empty input values, so that when you delete the number it doesn't reset to 0.00. 
                allowEmpty: false,
                // Select text in the input on double click
                doubleClickSelection: true,
                // Select all text in the input when the element fires the focus event. 
                selectAllOnFocus: false,
                // The thousands separator
                thousands: ',',
                // The decimal separator
                decimal: '.' , 
                // How many decimal places are allowed
                precision: 0,
                // Set if the symbol will stay in the field after the user exits the field. 
                affixesStay : true, 
                // Place caret at the end of the input on focus 
                bringCaretAtEndOnFocus: true 
            });
    </script>
    <script src="{{ !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

<script>
    function submitFormDesktop() {
        $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
        var amt = 0;
        var optionNominal = $("input[name='radioDonationDesktop']:checked"). val();
        var customNominal = $("#customNominal_1").val();
        var as_anonymous = ($("input[name='hideNameDesktop']:checked").val() === 'on') ? 'true' :'false';
        var checkMessage = ($("input[name='checkMessage']:checked").val() === 'on') ? 'true' :'false';
        if(optionNominal){
            var amt = optionNominal;
        }
        else if(customNominal != "" || customNominal != "IDR 0"){
            var amt = customNominal.replace(/[&\/\\#, +()$~%.'":*?<>{}]/g, '');
        }
        else{
            var amt = 0.00;
        }
        if($('#messageText').val() != ""){
            var messageText = $('#messageText').val()
        }
        else{
            var messageText =$('#messageText').attr('placeholder');
        }
        // Kirim request ajax
        $.post("{{ route('donation.store') }}",
        {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            amount: amt,
            donation_type: $('#typeDonationDesktop').val(),
            donor_name: $('.inputName').val(),
            donor_email: $('.inputEmail').val(),
            as_anonymous: as_anonymous,
            sender: $('#sender').val(),
            receiver: $('#receiver').val(),
            checkMessage: checkMessage,
            messageText: messageText,
            slideId: $("#sliderId").val(),
        },
        function (data, status) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    window.location.href = "{{ route('donation.finish')}}";
                },
                // Optional
                onPending: function (result) {
                    window.location.href = "{{ route('donation.unfinish')}}";
                },
                // Optional
                onError: function (result) {
                        window.location.href = "{{ route('donation.error')}}";
                        
                },
                onClose: function(){
                    location.reload();
                }
            });
        });
        return false;
    }

    function submitFormMobile() {
        $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
        var amt = 0;
        var optionNominal = $("input[name='radioDonationMobile']:checked"). val();
        var customNominal = $("#customNominal_2").val();
        var as_anonymous = ($("input[name='hideNameMobile']:checked").val() === 'on') ? 'true' :'false';
        var checkMessageMobile = ($("input[name='checkMessageMobile']:checked").val() === 'on') ? 'true' :'false';
        if(optionNominal){
            var amt = optionNominal;
        }
        else if(customNominal != "" || customNominal != "IDR 0"){
            var amt = customNominal.replace(/[&\/\\#, +()$~%.'":*?<>{}IDR]/g, '');
        }
        else{
            var amt = 0.00;
        }
        if($('#messageTextMobile').val() != ""){
            var messageTextMobile = $('#messageTextMobile').val()
        }
        else{
            var messageText =$('#messageText').attr('placeholder');
        }
            // Kirim request ajax
            $.post("{{ route('donation.store') }}",
            {
                _method: 'POST',
                _token: '{{ csrf_token() }}',
                amount: amt,
                donation_type: $('#typeDonationMobile').val(),
                donor_name: $('.inputNameMobile').val(),
                donor_email: $('.inputEmailMobile').val(),
                as_anonymous: as_anonymous,
            },
            function (data, status) {
                snap.pay(data.snap_token, {
                    // Optional
                    onSuccess: function (result) {
                        window.location.href = "{{ route('donation.finish')}}";
                    },
                    // Optional
                    onPending: function (result) {
                        window.location.href = "{{ route('donation.unfinish')}}";
                        
                    },
                    // Optional
                    onError: function (result) {
                        window.location.href = "{{ route('donation.error')}}";
                        
                    },
                    onClose: function(){
                        location.reload();
                    }
                });
            });
            return false;
        
    }
    
    </script>
    
@stop