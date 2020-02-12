$( window ).on("load",function() {
    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
	});

	// slide on article detail
	$(".single-item").slick({
		dots: false,
		slidesToShow: 1,
		centerMode: true,
		centerPadding: '40px',
		infinite: true,
	});
	$('.slick-prev, .slick-next').hide();

});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

(function(){
	

	$('.flex-container').waitForImages(function() {
		$('.spinner').fadeOut();
	}, $.noop, true);
	
	/** Slide module */
	$(".flex-slide").each(function(index, el){
		$(this).hover(function(e){
			if(index == "0"){
				$('.flex-slide').eq(1).css({
					filter: 'grayscale(100%)',
					"background-size":"cover",
					"background-repeat":"no-repeat"
				});
				$('.flex-slide').eq(2).css({
					filter: 'grayscale(100%)',
					"background-size":"cover",
					"background-repeat":"no-repeat"
		  		});
			}
			else if(index == "1"){
				$('.flex-slide').eq(0).css({
					filter: 'grayscale(100%)',
					"background-size":"cover",
					"background-repeat":"no-repeat"
				});
				$('.flex-slide').eq(2).css({
					filter: 'grayscale(100%)',
					"background-size":"cover",
					"background-repeat":"no-repeat"
		  		});
			}
			else if(index == "2"){
				$('.flex-slide').eq(0).css({
					filter: 'grayscale(100%)',
					"background-size":"cover",
					"background-repeat":"no-repeat"
				});
				$('.flex-slide').eq(1).css({
					filter: 'grayscale(100%)',
					"background-size":"cover",
					"background-repeat":"no-repeat"
		  		});
			}
			else{
				console.log("Hover effect is error. Max slide is 3.");
			}
			
			$(this).find('.flex-title').css({
				transform: 'rotate(0deg)',
				top: '4%'
			});
			$(this).find('.flex-about').css({
				opacity: '1',
				display:'block'
			});
			$(this).find('.flex-about-btn').css({
				top: '0'
			});
		}, function(e){
			if(index == "0"){
				$('.flex-slide').eq(1).css({
					filter: 'grayscale(0%)'
				});
				$('.flex-slide').eq(2).css({
					filter: 'grayscale(0%)'
			  });
			}
			else if(e.currentTarget.className == "flex-slide about"){
				$(".home").css({
					filter: 'grayscale(0%)'
				});
				$(".contact").css({
					filter: 'grayscale(0%)'
				});
			}
			else{
				$(".about").css({
					filter: 'grayscale(0%)'
				});
				$(".home").css({
					filter: 'grayscale(0%)'
				});
			}
			$(this).find('.flex-about-btn').css({
				top: '60%'
			});
			$(this).find('.flex-about').css({
				opacity: '0',
				display:'none'
			});
		})
	});

	/** Form donation module */

	// read radio button nominal is check
	$('.radioDonationDesktop').click(function(){
		$(".radioDonation").prop('checked', true);
		$('.bg-nominal-mobile').removeAttr('hidden');
		$(".form-donation p").css({"color":"#636363"});
		$(".radio-toolbar label").css({"border":"2px solid #00afd7"});
		$("#customNominal_1").val("");
		$("#customNominal_1").css({"background-color": "#fff","border-color": "#00afd7","font-size": "0.8rem"});
		$("#customNominal_1").attr('placeholder', 'MASUKKAN NOMINAL LAIN');
	});

	$(".donateBtnDesktop").click(function(){
		if(!$('.radioDonationDesktop').is(':checked') && $(".customNominalDesktop").val().length === 0 ) {
			$(".form-donation p").css({"color":"red"});
			$(".radio-toolbar label").css({"border":"2px solid red"});
			$("#customNominal_1").css({"border":"2px solid red"});
			return false;
		 }else{
			$(this).attr('hidden', true);
			$(".radio-toolbar label").css({"border":"2px solid #00afd7"});
			$("#customNominal_1").css({"border":"2px solid #00afd7"});
			$(".radioDonationDesktop").attr("disabled", true);
			$("#customNominal_1").attr("disabled", true);
			$(".form-donation p").css({"color":"#636363"});
			$('#form-identity').removeAttr('hidden');
			return false;
		 }
	});
	
	$(".customNominalDesktop").focus(function(){
		$("input[type='radio']").prop("checked", false);
		$(".form-donation p").css({"color":"#636363"});
		// $(".errorNotificationDesktop").attr('hidden', true);
		$(".radio-toolbar label").css({"border":"2px solid #00afd7"});
		$(this).css({"border":"2px solid #00afd7", "transition":"visibility 0s 2s, opacity 2s linear"});
		$(this).css({"background-color": "#00afd7","font-size": "0.8rem"});
	});

	$("#customNominal_1").focusout(function(){
		if($(this).val() != "IDR 0"){
			$(this).css({"background-color": "#00afd7","border-color": "#00afd7","color": "#f9f9f9","font-size": "0.8rem"});
		}
	 });


	$(".confirmBtnDesktop").click(function(){
		var radioValue = $("input[name='radioDonationDesktop']:checked"). val();
		if(!$('.radioDonationDesktop').is(':checked') && $(".customNominalDesktop").val().length === 0 ) {
			$(".form-donation p").css({"color":"red"});
			$(".radio-toolbar label").css({"border":"2px solid red"});
			$("#customNominal_1").css({"border":"2px solid red"});
			return false;
		 }
		 else if($('.radioDonationDesktop').is(':checked') && $(".customNominalDesktop").val().length != 0 ) {
			$(this).attr('hidden', true);
			$(".radio-toolbar label").css({"border":"2px solid #00afd7"});
			$("#customNominal_1").css({"border":"2px solid #00afd7"});
			$(".radioDonationDesktop").attr("disabled", true);
			$("#customNominal_1").attr("disabled", true);
			$(".form-donation p").css({"color":"#636363"});
			$('#form-identity').removeAttr('hidden');
			return false;
		 }
		else if( $(".inputName").val().length === 0 || $(".inputName").val() === "" ){
			$(".inputName").css({"border":"2px solid red"});
			$(".errorNameMessageDesktop").text("Harap isi nama lengkap anda di kolom");
			$(".errorNameMessageDesktop").removeAttr('hidden');
			return false;
		}
		else if($(".inputEmail").val().length === 0 ){
			$(".inputEmail").css({"border":"2px solid red"});
			$(".errorEmailMessageDesktop").text("Harap isi alamat email anda di kolom");
			$(".errorEmailMessageDesktop").removeAttr('hidden');
			return false;
		}
		else if( !validateEmail($(".inputEmail").val()) ){
			$(".inputEmail").css({"border":"2px solid red"});
			$(".errorEmailMessageDesktop").text("Email anda tidak valid!");
			$(".errorEmailMessageDesktop").removeAttr('hidden');
			return false;
		}
		else if( !radioValue &&  $("#customNominal_1").val() == "" ){
			$("#customNominal_1").attr('placeholder', 'MASUKKAN NOMINAL LAIN');
			$(".radio-toolbar label").css({"border":"2px solid red"});
			$("#customNominal_1").css({"border":"2px solid red", "background-color":"#fff"});
			$(".form-donation p").css({"color":"red"});
			return false;
		}
		else{
			$(".inputName").css({"border":"2px solid #00afd7"});
			$(".inputEmail").css({"border":"2px solid #00afd7"});
			$(this).attr('hidden', true);
			$(".loading-icon").removeAttr("hidden");
			return true;
		}
	});

	$(".inputName").focus(function(){
		$(".errorNameMessageDesktop").attr('hidden', true);
		$(this).css({"border":"2px solid #00afd7"});
	});

	$(".inputEmail").focus(function(){
		$(this).css({"border":"2px solid #00afd7"});
		$(".errorEmailMessageDesktop").attr('hidden', true);
	});

	// mobile choice
	$('.radioDonationMobile').click(function(){
		$(".radioDonation").prop('checked', true);
		$("#customNominal_2").val("");
		$(".bg-nominal-mobile p").css({"color": "#636363"});
		$(".radio-toolbar-mobile label").css({"border":"2px solid #00afd7"});
		$("#customNominal_2").css({"background-color": "#fff","border-color": "#00afd7","font-size": ".8rem"});
		$("#customNominal_2").attr('placeholder', 'CONTOH: 500.000');
	});

	$(".donateBtnMobile").click(function(){
		if(!$('.radioDonationMobile').is(':checked') && $(".customNominalMobile").val().length === 0 ) {
			
			$(".bg-nominal-mobile p").css({"color": "red"});
			$(".radio-toolbar-mobile label").css({"border":"2px solid red"});
			$("#customNominal_2").css({"border":"2px solid red"});
			return false;
		 }
		 else{
			$(".radioDonationMobile").attr("disabled", true);
			$("#customNominal_2").attr("disabled", true);
			$(".bg-nominal-mobile p").css({"color": "#636363"});
			$(".donateContainer").attr('hidden', true);
			$('.form-identity-mobile').removeAttr('hidden');
		 }
		
	});

	$(".customNominalMobile").focus(function(){
		$("input[type='radio']").prop("checked", false);
		$(".radio-toolbar-mobile label").css({"border":"2px solid #00afd7"});
		// $(".errorNotificationMobile").attr('hidden', true);
		$(".bg-nominal-mobile p").css({"color": "#636363"});
		$(this).css({"border":"2px solid #00afd7", "transition":"visibility 0s 2s, opacity 2s linear"});
		$(this).css({"background-color": "#00afd7","font-size": ".8rem"});
	});

	$("#customNominal_2").focusout(function(){
		if($(this).val() != "IDR 0"){
			$(this).css({"background-color": "#00afd7","border-color": "#00afd7","color": "#f9f9f9","font-size": ".8rem"});
		}
	 });

	$(".confirmBtnMobile").click(function(){
		var radioValue = $("input[name='radioDonationMobile']:checked"). val();
		if( $(".inputNameMobile").val().length === 0 || $(".inputNameMobile").val() === "" ){
			$(".inputNameMobile").css({"border":"2px solid red"});
			$(".errorNameMessageMobile").text("Harap isi nama lengkap anda di kolom");
			$(".errorNameMessageMobile").removeAttr('hidden');
			return false;
		}
		else if($(".inputEmailMobile").val().length === 0 ){
			$(".inputEmailMobile").css({"border":"2px solid red"});
			$(".errorEmailMessageMobile").text("Harap isi alamat email anda di kolom");
			$(".errorEmailMessageMobile").removeAttr('hidden');
			return false;
		}
		else if( !validateEmail($(".inputEmailMobile").val()) ){
			$(".inputEmailMobile").css({"border":"2px solid red"});
			$(".errorEmailMessageMobile").text("Email anda tidak valid!");
			$(".errorEmailMessageMobile").removeAttr('hidden');
			return false;
		}
		else if( !radioValue &&  $("#customNominal_2").val() == "" ){
			$("#customNominal_2").attr('placeholder', 'MASUKKAN NOMINAL LAIN');
			$(".radio-toolbar-mobile label").css({"border":"2px solid red"});
			$("#customNominal_2").css({"border":"2px solid red", "background-color":"#fff"});
			// $(".errorNotificationMobile").removeAttr('hidden');
			$(".bg-nominal-mobile p").css({"color": "red"});
			return false;
		}
		else{
			$(".inputNameMobile").css({"border":"2px solid #00afd7"});
			$(".inputEmailMobile").css({"border":"2px solid #00afd7"});
			$(this).attr('hidden', true);
			$(".loading-icon").removeAttr("hidden");
			return true;
		}

	});

	$(".inputNameMobile").focus(function(){
		$(this).css({"border":"2px solid #00afd7"});
		$(".errorNameMessageMobile").attr('hidden', true);
	});

	$(".inputEmailMobile").focus(function(){
		$(this).css({"border":"2px solid #00afd7"});
		$(".errorEmailMessageMobile").attr('hidden', true);
	});

	$( "#checkMessage" ).click(function() {
		$( "#messageText" ).slideToggle( "slow", function() {
		});
	  });
	$( "#checkMessageMobile" ).click(function() {
		$( "#messageTextMobile" ).slideToggle( "slow", function() {
		});
	  });


	/* Search module */
	
	$(".search-terms-input").keyup(function() {
        $(".closeSearchMobile").removeAttr('hidden');
	  });
	$(".closeSearchMobile").click(function(){
		$("#myInputMobile").val('');
		$("#myInputMobile").focus();
	});
	
	$(".search-terms").focus(function() {
		$(".closeSearchDesktop").removeAttr('hidden');
	  });
	$(".closeSearchDesktop").click(function(){
		$("#myInputDesktop").val('');
		$("#myInputDesktop").focus();
	});
	
	window['countries'] = [
		'Artikel 1',
		'Artikel 2',
		'Artikel 3',
		'Artikel 4'
	  ]

	  $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

	  /* newsletter module */
	  $("#frmNewsletterDesktop").submit(function(){
		if($(".emailNewsletterDesktop").val() != ""){
			var validEmail = validateEmail($(".emailNewsletterDesktop").val());
			if(validEmail){
				$(".errorNewsletterDesktop").text("");
				$.ajax({
					type:'POST',
					url:'/subscribe',
					data:{email: $(".emailNewsletterDesktop").val()},
					success:function(data){
					   if(data.success){
							UIkit.modal("#modal-newsletter").show();
							$(".emailNewsletterDesktop").val("");
					   }
					}
				 });
				return false;
			}else{
				$(".form-newsletter-desktop").css("border", "solid 1px red");
				$(".errorNewsletterDesktop").text("Email tidak valid!");
				return false;
			}
		}
		else{
			$(".form-newsletter-desktop").css("border", "solid 1px red");
			$(".errorNewsletterDesktop").text("Mohon masukkan alamat email anda");
			return false;
		}
	  });

	  // form newsletter
	  $("#frmNewsletterMobile").submit(function(){
		if($(".emailNewsletterMobile").val() != ""){
			var validEmail = validateEmail($(".emailNewsletterMobile").val());
			if(validEmail){
				$(".errorNewsletterMobile").text("");
				$.ajax({
					type:'POST',
					url:'/subscribe',
					data:{email: $(".emailNewsletterMobile").val()},
					success:function(data){
					   if(data.success){
							UIkit.modal("#modal-newsletter").show();
							$(".emailNewsletterMobile").val("");
					   }
					}
				 });
				
				return false;
			}else{
				$(".form-newsletter-mobile").css("border", "solid 1px red");
				$(".errorNewsletterMobile").text("Email tidak valid!");
				return false;
			}
		}
		else{
			$(".form-newsletter-mobile").css("border", "solid 1px red");
			$(".errorNewsletterMobile").text("Mohon masukkan alamat email anda");
			return false;
		}
	  });

	  /* auto hide placeholder */
	  	$('.emailNewsletterDesktop').focusin(function () {
        	$(this).attr('placeholder', '');
		});
		$('.emailNewsletterDesktop').focusout(function () {
			$(this).attr('placeholder', $(this).data('holder'));
		});

		/** mobile */
		$('.emailNewsletterMobile').focusin(function () {
        	$(this).attr('placeholder', '');
		});
		$('.emailNewsletterMobile').focusout(function () {
			$(this).attr('placeholder', $(this).data('holder'));
		});

		if(document.getElementById('inputName')){
			document.getElementById('inputName').onkeypress=function(e){
				if(!(/[a-z ]/i.test(String.fromCharCode(e.keyCode)))){
					e.preventDefault();
					return false;
				}
			}
		}
		
		if(document.getElementById('inputNameMobile')){
			document.getElementById('inputNameMobile').onkeypress=function(e){
				if(!(/[a-z ]/i.test(String.fromCharCode(e.keyCode)))){
					e.preventDefault();
					return false;
				}
			}
		}
		
})();