@extends('client.layouts.layout')

@section('title',  'Form Donasi Dukung Habitat')

@section('content')

<section>
        <div class="uk-container-expand">
            <div class="uk-cover-container uk-visible@s" style="background-image:url('{{ asset('img/bg-donation.jpg') }}');background-size: cover;background-position: center;">
                <div class="uk-flex uk-flex-center">
                    <div class="uk-card uk-card-body">
                    <form method="POST" onsubmit="return submitFormDesktop();">
                        <input id="typeDonationDesktop" name="typeDonationDesktop" type="hidden" value="{{ $type }}">
                        <div class="uk-container-small form-donation uk-padding-large uk-text-center">
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
                            <!-- <div class="errorNotificationDesktop" hidden>
                                <span>Pilih nominal donasi atau masukkan nominal lain sesuai keinginan</span> 
                            </div> -->
                            <div id="donateBtnDesktop">
                                <br>
                                <a class="uk-button uk-text-uppercase donateBtnDesktop btnZoomHover" readonly="readonly">KONFIRMASI NOMINAL</a>
                            </div>
                            <div id="form-identity" class="uk-height-small" hidden>
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
                                    <div class="uk-grid-small uk-child-width-expand@s uk-text-left uk-padding uk-padding-remove-top uk-padding-remove-right" uk-grid>
                                        <label class="uk-text-uppercase uk-margin-medium-left hideNameDesktop"><input class="uk-checkbox" type="checkbox" name="hideNameDesktop"> Sembunyikan nama saya (anonim)</label>
                                    </div>
                                    <div>
                                        <button class="uk-button uk-text-uppercase confirmBtnDesktop btnZoomHover">konfirmasi bayar</button>
                                        <img class="loading-icon" src="{{ asset('img/loading.gif') }}" alt="" hidden>
                                    </div>
                            </div>
                            <br><br>
                        </div>
                    </form>
                        
                        <div class="uk-container-small form-donation-footer uk-padding">
                            <p class="uk-padding-large uk-padding-remove-top uk-padding-remove-bottom uk-text-center">Donasi Anda akan turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</p>
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-card">
                                    <img data-src="{{ asset('img/lock-icon.png') }}" alt="" class="lazy">
                                </div>
                                <div class="uk-card uk-margin-left">
                                    <img data-src="{{ asset('img/shield-icon.png') }}" alt="" class="lazy">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-center">
                                <p class="secure-donation">DONASI ANDA 100% AMAN</p>
                            </div>
                        </div>
                    </div>
                </div>
                
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
                            <br>
                            <div class="uk-padding uk-padding-remove-top donateContainer">
                                <a class="uk-button uk-width-1-1 uk-text-uppercase donateBtnMobile btnZoomHover">KONFIRMASI NOMINAL</a>
                            </div>
                            
                            <br>
                            <div class="uk-card-body form-identity-mobile bg-nominal-mobile" hidden>
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
                                    <div class="uk-padding confirmContainer uk-padding-remove-left uk-padding-remove-right uk-padding-remove-top">
                                        <button class="uk-button uk-width-1-1 uk-text-uppercase confirmBtnMobile btnZoomHover">konfirmasi bayar</button>
                                        <img class="loading-icon" src="{{ asset('img/loading.gif') }}" alt="" hidden>
                                    </div>
                                </div>
                            
                        </div>
                        </form>
                        
                        <div class="uk-container-small form-donation-footer uk-padding">
                            <!-- <h2 class="uk-text-center">Terima Kasih</h2> -->
                            <p class="uk-padding-large uk-padding-remove-top uk-padding-remove-bottom uk-text-center">Donasi Anda akan turut berpartisipasi dalam kegiatan membantu orang lain memiliki kualitas hidup yang lebih layak.</p>
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-card">
                                    <img data-src="{{ asset('img/lock-icon.png') }}" alt="" class="lazy">
                                </div>
                                <div class="uk-card uk-margin-left">
                                    <img data-src="{{ asset('img/shield-icon.png') }}" alt="" class="lazy">
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
        if(optionNominal){
            var amt = optionNominal;
        }
        else if(customNominal != "" || customNominal != "IDR 0"){
            var amt = customNominal.replace(/[&\/\\#, +()$~%.'":*?<>{}]/g, '');
        }
        else{
            var amt = 0.00;
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
        },
        function (data, status) {
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    window.location.href = "{{ route('donation.finish')}}";
                    // $.ajax({
                    //         type:'POST',
                    //         url:'/notification/handler',
                    //         data:{
                    //             transaction_status : result.transaction_status,
                    //             transaction_time : result.transaction_time,
                    //             transaction_id : result.transaction_id,
                    //             gross_amount : result.gross_amount,
                    //             payment_type : result.payment_type,
                    //             donationId : result.order_id,
                    //             fraud_status : result.fraud_status
                    //         },
                    //         success:function(data){
                    //             window.location.href = "{{ route('donation.finish')}}";
                    //         }
                    //     });
                },
                // Optional
                onPending: function (result) {
                    window.location.href = "{{ route('donation.unfinish')}}";
                    // $.ajax({
                    //         type:'POST',
                    //         url:'/notification/handler',
                    //         data:{
                    //             transaction_status : result.transaction_status,
                    //             transaction_time : result.transaction_time,
                    //             transaction_id : result.transaction_id,
                    //             gross_amount : result.gross_amount,
                    //             payment_type : result.payment_type,
                    //             donationId : result.order_id,
                    //             fraud_status : result.fraud_status
                    //         },
                    //         success:function(data){
                    //             window.location.href = "{{ route('donation.finish')}}";
                    //         }
                    //     });
                },
                // Optional
                onError: function (result) {
                        window.location.href = "{{ route('donation.error')}}";
                        
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
        if(optionNominal){
            var amt = optionNominal;
        }
        else if(customNominal != "" || customNominal != "IDR 0"){
            var amt = customNominal.replace(/[&\/\\#, +()$~%.'":*?<>{}IDR]/g, '');
        }
        else{
            var amt = 0.00;
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
                        // $.ajax({
                        //     type:'POST',
                        //     url:'/notification/handler',
                        //     data:{
                        //         transaction_status : result.transaction_status,
                        //         transaction_time : result.transaction_time,
                        //         transaction_id : result.transaction_id,
                        //         gross_amount : result.gross_amount,
                        //         payment_type : result.payment_type,
                        //         donationId : result.order_id,
                        //         fraud_status : result.fraud_status
                        //     },
                        //     success:function(data){
                        //         window.location.href = "{{ route('donation.finish')}}";
                        //     }
                        // });
                    },
                    // Optional
                    onPending: function (result) {
                        window.location.href = "{{ route('donation.unfinish')}}";
                        // $.ajax({
                        //     type:'POST',
                        //     url:'/notification/handler',
                        //     data:{
                        //         transaction_status : result.transaction_status,
                        //         transaction_time : result.transaction_time,
                        //         transaction_id : result.transaction_id,
                        //         gross_amount : result.gross_amount,
                        //         payment_type : result.payment_type,
                        //         donationId : result.order_id,
                        //         fraud_status : result.fraud_status
                        //     },
                        //     success:function(data){
                        //         window.location.href = "{{ route('donation.finish')}}";
                        //     }
                        // });
                    },
                    // Optional
                    onError: function (result) {
                        window.location.href = "{{ route('donation.error')}}";
                        
                    }
                });
            });
            return false;
        
    }
    
    </script>
    
@stop