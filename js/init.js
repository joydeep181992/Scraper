$(function () {
	// Detect Publisher "Edit" view
	if (location.href.indexOf('JSPeditPageContent.do') > 0) {
		// Code here will run when viewing site in Edit View - needed when certain elements break Edit View
		// Example: $('.container-accolades, .container-tagline').remove();
	} else {
		// Code in this section will not run on Publisher edit view

		// Fix link targets (v1.0.2)
		(function(){if($(document.body).hasClass("fl-target-ignore")===!0)return!1;var t=location.protocol+"//"+location.host,a=/\.(?:pdf|docx?|xlsx?|pptx?|xml)(?:\?.*)?$/i,l=/\?.*/i;$("a").each(function(r,o){var i=$(o),e=i.attr("href"),n=o.href;return void 0!==e&&(e=e.replace(l,"")),void 0!==n&&(n=n.replace(l,"")),void 0===e||i.hasClass("fl-target-ignore")===!0||null!==e.match(/^#/)||null!==e.match(/^javascript:/i)||null!==e.match(/^mailto:/i)||0===n.indexOf(t)&&null===n.match(a)?!0:void i.attr("target","_blank")})}());
	}
	$("#containerIntakeFormShortAutofill .formCheck").append($(".intakeFormShortPrivacy").html());
	$("#containerIntakeFormShortAutofill .intakeFormShortPrivacy").remove();
	$('#intakeFormShortEmail').insertAfter('#intakeFormShortPhone');
	$('.nav-practice-home').appendAround();
	$('.nav-practice').appendAround();
	$('.btn-nav-main').click(function(){
	  	$('.nav-practice-home').removeClass('fl-show');		
	  	return false;
	});
	$('.btn-practice').click(function(){
	    $('.nav-main').removeClass('fl-show');
		return false;
	});
	$('.back-to-top').click(function () {
		$('html, body').animate({
			scrollTop: '0px'
		}, 1000);
		return false;
	});
	$('.btn-silo').click(function(){
		$('body, html').animate({
			scrollTop: $('.nav-silo').offset().top+"px"
		},1000);
	});
	$('.view-prac').click(function(){
		$('body, html').animate({
			scrollTop: $('.nav-practice').offset().top+"px"
		},1000);
	});
	$('.view-prac-home').click(function(){
		$('body, html').animate({
			scrollTop: $('.nav-practice-home').offset().top+"px"
		},1000);
	});
	if ($(window).width() > 733){
		$('.attorneyProfilePhoto').prependTo('.column-side');
	}
	if ($(window).width() < 733){
		$('.custom-profile').insertAfter('.page-title');
	}
	if ($(window).width() > 733){
		$(".btn-search").click(function() {
			$( ".search-container").fadeToggle();
		})
	};
	$('.btn-learn').click(function(){
		$('body, html').animate({
			scrollTop: $('.nav-practice-home').offset().top+"px"
		},1000);
	});
    $(".mega-menu").hover(function () {$(".expanded-menu-wrap").slideDown(0)}, function () {$(".expanded-menu-wrap").slideUp(0)});
    $(".desktop-nav-practice-btn").click(function(){
	  $(".desktop-nav-practice-btn-expanded").slideToggle("slow");
	  $(".desktop-nav-practice-btn").toggleClass("change-icon");
	});

	$(window).load(function(){
		$('.attorneyProfileNarrative p, .attorneyProfileNarrative p span').removeAttr('style');
		$('.attorneyProfileNarrative p').removeAttr('align');
		$('.H-P-Weir-1261724 .attorneyProfilePhoto').prop('src', '/design/images/attorneys/Weir-PatSr.jpg');
		$('.H-Patrick-Weir-Sr-Custom .attorneyProfilePhoto').prop('src', '/design/images/attorneys/Weir-PatSr.jpg');
	});

	$('.office-1.office-odd.office-first.office-fargo .office-phone-local.office-phone-tracking .office-phone-number').html('<span class="office-phone-number" data-raw-number="8667719930"><a href="tel:+18667719930" target="_blank">866-771-9930</a></span>');
	$('.office-2.office-even.office-bismarck .office-phone-local.office-phone-tracking .office-phone-number').html('<span class="office-phone-number" data-raw-number="7012144393"><a href="tel:+17012144393" target="_blank">701-214-4393</a></span>');
	$('.office-3.office-odd.office-moorhead .office-phone-local.office-phone-tracking .office-phone-number').html('<span class="office-phone-number" data-raw-number="2189794994"><a href="tel:+12189794994" target="_blank">218-979-4994</a></span>');
	$('.office-4.office-even.office-apple-valley .office-phone-local.office-phone-tracking .office-phone-number').html('<span class="office-phone-number" data-raw-number="9522364947"><a href="tel:+19522364947" target="_blank">952-236-4947</a></span>');
	$('.office-5.office-odd.office-last.office-grand-forks .office-phone-local.office-phone-tracking .office-phone-number').html('<span class="office-phone-number" data-raw-number="7012034156"><a href="tel:+17012034156" target="_blank">701-203-4156</a></span>');
});

