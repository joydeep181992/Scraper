<?php /* Template Name: Default */ ?>
<!DOCTYPE html>
<html lang="en" class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="dns-prefetch" href="//ajax.googleapis.com" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ninja.css" type="text/css" media="all" />	
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png"/>
	<?php 
	    /* Always have wp_head() just before the closing </head>
	     * tag of your theme, or you will break many plugins, which
	     * generally use this hook to add elements to <head> such
	     * as styles, scripts, and meta tags.
	     */
	    wp_head();
	 ?>
	<style>
		html {
		    margin-top: 0 !important;
		}	
	</style>
</head>

<body class="<?php echo basename(get_permalink()); ?> design Professionals Professionals Professionals">
<div class="header-page-wrap">
<header class="header-page">
<a class="brand" href=<?php echo home_url(); ?>>
<img alt="Vogel Law Firm" class="brand-image" src="<?php bloginfo('template_url'); ?>/images/brand.png"/>
</a>
<div class="cta">
				call us today
				<div class="cta-phone">
					866-771-9930
				</div>
</div>
<div class="menu-search-wrap">
<div class="mob-btn-wrap">
<a class="btn-nav-main btn-togglebox" data-target="nav-main" href="#">
<span aria-hidden="true" class="fa fa-bars"> </span> Menu
					</a>
<a class="btn-contact" href="<?php echo get_site_url(); ?>/Contact.shtml"><span aria-hidden="true" class="fa fa-map-marker"> </span> Contact</a>
</div>
<nav class="nav-main fl-drop" data-bp="750" id="nav-main" role="navigation">
<ul>
<li> <a href=<?php echo home_url(); ?>>Home</a> </li>
<li><a href="<?php echo get_site_url(); ?>/Professionals/">Professionals</a> </li>
<li class="has-child mega-menu">
<a class="view-prac-home" href="javascript:void(0)">Practice Areas</a>
<div class="expanded-menu-wrap">
<div class="container-expanded-menu">
<div class="expanded-menu">
<div class="list list-1">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Agricultural-Law/"><span class="fa fa-angle-double-right"> </span>Agricultural Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Alternative-Dispute-Resolution-Mediation.shtml"><span class="fa fa-angle-double-right"> </span>Alternative Dispute Resolution <strong>&amp; Mediation</strong></a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Bankruptcy-Collections.shtml"><span class="fa fa-angle-double-right"> </span>Bankruptcy &amp; Collections</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Business-Corporate-Law/"><span class="fa fa-angle-double-right"> </span>Business &amp; Corporate Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Commercial-Litigation.shtml"><span class="fa fa-angle-double-right"> </span>Commercial Litigation</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Commercial-Transactions-Securities.shtml"><span class="fa fa-angle-double-right"> </span>Commercial Transactions &amp; Securities</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Construction-Law.shtml"><span class="fa fa-angle-double-right"> </span>Construction Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Agricultural-Law/Cooperatives-Law.shtml"><span class="fa fa-angle-double-right"> </span>Cooperatives Law</a>
</li>
</ul>
</div>
<div class="list list-2">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Criminal-Defense/"><span class="fa fa-angle-double-right"> </span>Criminal Defense</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Domestic-Family-Law.shtml"><span class="fa fa-angle-double-right"> </span>Domestic &amp; Family Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Education-Law/"><span class="fa fa-angle-double-right"> </span>Education Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Employment-Labor-Law.shtml"><span class="fa fa-angle-double-right"> </span>Employment &amp; Labor Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Environmental-Law-Water-Law-Land-Use/"><span class="fa fa-angle-double-right"> </span>Environmental Law, Water Law <strong>&amp; Land Use</strong></a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Estate-Planning-Probate.shtml"><span class="fa fa-angle-double-right"> </span>Estate Planning &amp; Probate</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Health-Care-Law.shtml"><span class="fa fa-angle-double-right"> </span>Health Care Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Immigration.shtml"><span class="fa fa-angle-double-right"> </span>Immigration</a>
</li>
</ul>
</div>
<div class="list list-3">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Insurance-Law-Litigation/"><span class="fa fa-angle-double-right"> </span>Insurance Law &amp; Litigation</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Intellectual-Property.shtml"><span class="fa fa-angle-double-right"> </span>Intellectual Property</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Legislative-Government-Relations.shtml"><span class="fa fa-angle-double-right"> </span>Legislative &amp; Government Relations</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Oil-Gas-Wind-Energy-Law.shtml"><span class="fa fa-angle-double-right"> </span>Oil, Gas, Wind &amp; Energy Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Personal-Injury-Wrongful-Death/"><span class="fa fa-angle-double-right"> </span>Personal Injury &amp; Wrongful Death</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Insurance-Law-Litigation/Products-Liability-Defense.shtml"><span class="fa fa-angle-double-right"> </span>Products Liability Defense</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Professional-Liability.shtml"><span class="fa fa-angle-double-right"> </span>Professional Liability</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Real-Estate-Law.shtml"><span class="fa fa-angle-double-right"> </span>Real Estate Law</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</li>
<li><a href="<?php echo get_site_url(); ?>/Firm-News/">Firm News</a></li>
<li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
<li><a href="<?php echo get_site_url(); ?>/Careers.shtml">Careers</a> </li>
<li><a href="<?php echo get_site_url(); ?>/Client-Portal.shtml"> Client Portal </a> </li>
<li class="item-last"><a href="<?php echo get_site_url(); ?>/Contact.shtml">Contact</a></li>
<li class="togglebox-close"><a class="close" data-target="nav-main" href="#">X Close</a></li>
</ul>
</nav>
<div class="container-search">
<a class="btn-search" data-target="search-popup" href="javascript:void(0);">
<span aria-hidden="true" class="fa fa-search"> </span>
</a>
<div class="search-container">
<div class="search-popup" id="containerSearchFormDesign">
<form action="/Search-Results.shtml" class="formAutoFill" id="searchFormDesign" method="get" name="searchFormDesign">
<label for="searchFormDesignSearchTerms">Search</label>
<input id="searchFormDesignSearchTerms" name="stext" title="Search our site" type="text"/>
<input alt="Search" class="over" id="searchFormDesignSubmit" name="searchFormDesignSubmit" src="<?php bloginfo('template_url'); ?>/images/searchFormDesignSubmit.png" type="image" value="Search"/>
</form>
</div>
</div>
</div>
</div>
</header>
<div class="banner-wrap">
<div class="container-banner">
<div class="tagline">
<h2>About Us</h2>
</div>
</div>
</div>
</div>
<div class="bread-crumbs-wrap">
<div class="container-bread-crumbs">
<ol id="navigationBreadCrumbs">
<li><a href=<?php echo home_url(); ?>>Home</a></li>
<li class="itemLast">About Us</li>
</ol>
</div>
</div>
<div class="container-columns">
<div class="container-page">
<div class="container-column-main">
<div class="column-main" role="main">
<h1 class="page-title"><?php echo get_the_title(); ?></h1>

    <article class="content" id="content">
    <?php
        wp_reset_query(); // necessary to reset query
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; // End of the loop.
    ?>
    </article>
    
</div>
</div>
<div class="column-side" role="complementary">
<!-- attorney feature -->
<div class="prac-wrap">
<nav class="nav-practice" data-bp="750" id="nav-practice" role="navigation">
<ul>
<li><a class="desktop-nav-practice-btn" href="javascript:void(0)">View All Practice Areas <span aria-hidden="true" class="fa fa-arrow-down"> </span></a>
<ul class="desktop-nav-practice-btn-expanded">
<li><a href="<?php echo get_site_url(); ?>/Agricultural-Law/">Agricultural Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Alternative-Dispute-Resolution-Mediation.shtml">Alternative Dispute Resolution &amp; Mediation</a></li>
<li><a href="<?php echo get_site_url(); ?>/Bankruptcy-Collections.shtml">Bankruptcy &amp; Collections</a></li>
<li><a href="<?php echo get_site_url(); ?>/Business-Corporate-Law/">Business &amp; Corporate Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Commercial-Litigation.shtml">Commercial Litigation</a></li>
<li><a href="<?php echo get_site_url(); ?>/Commercial-Transactions-Securities.shtml">Commercial Transactions &amp; Securities </a></li>
<li><a href="<?php echo get_site_url(); ?>/Construction-Law.shtml">Construction Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Agricultural-Law/Cooperatives-Law.shtml">Cooperatives Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Criminal-Defense/">Criminal Defense</a></li>
<li><a href="<?php echo get_site_url(); ?>/Domestic-Family-Law.shtml">Domestic &amp; Family Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Employment-Labor-Law.shtml">Employment &amp; Labor Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Environmental-Law-Water-Law-Land-Use/">Environmental Law, Water Law &amp; Land Use</a></li>
<li><a href="<?php echo get_site_url(); ?>/Estate-Planning-Probate.shtml">Estate Planning &amp; Probate</a></li>
<li><a href="<?php echo get_site_url(); ?>/Health-Care-Law.shtml">Health Care Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Immigration.shtml">Immigration</a></li>
<li><a href="<?php echo get_site_url(); ?>/Insurance-Law-Litigation/">Insurance Law &amp; Litigation </a></li>
<li><a href="<?php echo get_site_url(); ?>/Intellectual-Property.shtml">Intellectual Property</a></li>
<li><a href="<?php echo get_site_url(); ?>/Legislative-Government-Relations.shtml">Legislative &amp; Government Relations</a></li>
<li><a href="<?php echo get_site_url(); ?>/Oil-Gas-Wind-Energy-Law.shtml">Oil, Gas, Wind &amp; Energy Law</a></li>
<li><a href="<?php echo get_site_url(); ?>/Personal-Injury-Wrongful-Death/">Personal Injury &amp; Wrongful Death</a></li>
<li><a href="<?php echo get_site_url(); ?>/Insurance-Law-Litigation/Products-Liability-Defense.shtml">Products Liability Defense</a></li>
<li><a href="<?php echo get_site_url(); ?>/Professional-Liability.shtml">Professional Liability</a></li>
<li><a href="<?php echo get_site_url(); ?>/Real-Estate-Law.shtml">Real Estate Law</a></li>
<li>
<a href="<?php echo get_site_url(); ?>/Education-Law/">Education Law</a>
</li>
</ul>
</li>
</ul>
</nav>
</div>
<a class="btn-prof1" href="<?php echo get_site_url(); ?>/Professionals/Paralegals-Other-Professionals/">View Other Professionals</a>
</div>
</div>
</div>
<div class="closing-appeal-wrap">
<div class="container-closing-appeal">
<h2>Quality Attorneys. Quality Care.</h2>
<p>Ultimately, we measure our success in terms of how we improve the lives of our clients. <br/>We never forget that the most important part in any legal matter is the people involved.</p>
</div>
</div>
<a class="btn-short-form" href="<?php echo get_site_url(); ?>/Contact.shtml"><span class="fa fa-envelope"> </span> Email Us For A Response </a>
<div class="form-wrap">
<div class="container-form">
<div class="form-content">
<h2>Experience The Vogel Law Firm Difference</h2>
<p>Quality legal service starts with contacting Vogel Law Firm. Call <strong>866-771-9930</strong> or submit the form to request a consultation.</p>
</div>
<div class="short-form">

    <?php 
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Side Bar") ) : 
    ?>
    <?php endif;?>
    
</div>
</div>
</div>
<div class="badges-wrap">
<div class="container-badges">
<ul>
<li><img alt="ECN | Employers Counsel Network" src="<?php bloginfo('template_url'); ?>/images/badge1.jpg"/></li>
<li><img alt="Fellow Litigation Counsel of America" src="<?php bloginfo('template_url'); ?>/images/badge2.jpg"/></li>
<li><img alt="Super Lawyers" src="<?php bloginfo('template_url'); ?>/images/badge3.jpg"/></li>
<li><img alt="Multi-Million Dollar Advocates Forum" src="<?php bloginfo('template_url'); ?>/images/badge4.jpg"/></li>
<li><img alt="Listed In Best Lawyers | The World's Premier Guide" src="<?php bloginfo('template_url'); ?>/images/badge5.jpg"/></li>
<li class="item-last"><img alt="ALFA International | The Global Legal Network" src="<?php bloginfo('template_url'); ?>/images/badge6.jpg"/></li>
</ul>
</div>
</div>
<div class="contact-wrap">
<div class="container-contact">
<div class="contact-info">
<div class="offices" id="offices" itemref="attorneyProfile attorney-list">
<div class="office office-1 office-odd office-first office-fargo">
<p>
<strong class="office-title">Fargo Office</strong>
<br/>
<span class="office-address">
<span class="office-street-address"> 218 NP Avenue 
                    <br/>
</span>
<span class="office-locality">Fargo</span>, 
                <span class="office-region">ND</span>
<span class="office-postal-code">58102</span>
</span>
<br/>
<span class="office-phone office-phone-local office-phone-tracking">
<span class="office-phone-label">Phone</span>: 
                <span class="office-phone-number" data-raw-number="7012144393">701-214-4393</span>
<br/>
</span>
<span class="office-phone office-phone-local">
<span class="office-phone-label">Fax</span>: 
                <span class="office-phone-number" itemprop="faxNumber">701-356-6395</span>
<br/>
</span>
<a class="office-page-link" href="<?php echo get_site_url(); ?>/Fargo-Personal-Injury-Office.shtml" target="_self"> Fargo Law Office Map </a>
</p>
<!-- 
The automatically generated embedded map requires a street address, locality, and postal code in the Client Info Doc -->
</div>
<div class="office office-2 office-even office-bismarck">
<p>
<strong class="office-title">Bismarck Office</strong>
<br/>
<span class="office-address">
<span class="office-street-address"> 200 North 3rd Street, 
                    <br/> Suite 201 
                    <br/>
</span>
<span class="office-locality">Bismarck</span>, 
                <span class="office-region">ND</span>
<span class="office-postal-code">58501</span>
</span>
<br/>
<span class="office-phone office-phone-local office-phone-tracking">
<span class="office-phone-label">Phone</span>: 
                <span class="office-phone-number" data-raw-number="7012034156">701-203-4156</span>
<br/>
</span>
<span class="office-phone office-phone-local">
<span class="office-phone-label">Fax</span>: 
                <span class="office-phone-number" itemprop="faxNumber">701-258-9705</span>
<br/>
</span>
<a class="office-page-link" href="<?php echo get_site_url(); ?>/Bismarck-Personal-Injury-Office.shtml" target="_self"> Bismarck Law Office Map </a>
</p>
<!-- 
The automatically generated embedded map requires a street address, locality, and postal code in the Client Info Doc -->
</div>
<div class="office office-3 office-odd office-moorhead">
<p>
<strong class="office-title">Moorhead Office</strong>
<br/>
<span class="office-address">
<span class="office-street-address"> 215 30th Street North 
                    <br/>
</span>
<span class="office-locality">Moorhead</span>, 
                <span class="office-region">MN</span>
<span class="office-postal-code">56560</span>
</span>
<br/>
<span class="office-phone office-phone-local office-phone-tracking">
<span class="office-phone-label">Phone</span>: 
                <span class="office-phone-number" data-raw-number="7012034156">701-203-4156</span>
<br/>
</span>
<span class="office-phone office-phone-local">
<span class="office-phone-label">Fax</span>: 
                <span class="office-phone-number" itemprop="faxNumber">218-236-9873</span>
<br/>
</span>
<a class="office-page-link" href="<?php echo get_site_url(); ?>/Moorhead-Personal-Injury-Office.shtml" target="_self"> Moorhead Law Office Map </a>
</p>
<!-- 
The automatically generated embedded map requires a street address, locality, and postal code in the Client Info Doc -->
</div>
<div class="office office-4 office-even office-apple-valley">
<p>
<strong class="office-title">Minneapolis Office</strong>
<br/>
<span class="office-address">
<span class="office-street-address"> 7300 West 147th Street, 
                    <br/> Suite 304 
                    <br/>
</span>
<span class="office-locality">Apple Valley</span>, 
                <span class="office-region">MN</span>
<span class="office-postal-code">55124</span>
</span>
<br/>
<span class="office-phone office-phone-local office-phone-tracking">
<span class="office-phone-label">Phone</span>: 
                <span class="office-phone-number" data-raw-number="2189794994">218-979-4994</span>
<br/>
</span>
<span class="office-phone office-phone-local">
<span class="office-phone-label">Fax</span>: 
                <span class="office-phone-number" itemprop="faxNumber">952-898-4070</span>
<br/>
</span>
<a class="office-page-link" href="<?php echo get_site_url(); ?>/Apple-Valley-Personal-Injury-Office.shtml" target="_self"> Apple Valley Law Office Map </a>
</p>
<!-- 
The automatically generated embedded map requires a street address, locality, and postal code in the Client Info Doc -->
</div>
<div class="office office-5 office-odd office-last office-grand-forks">
<p>
<strong class="office-title">Grand Forks Office</strong>
<br/>
<span class="office-address">
<span class="office-street-address"> 2825 36th Avenue South, 
                    <br/> Suite A 
                    <br/>
</span>
<span class="office-locality">Grand Forks</span>, 
                <span class="office-region">ND</span>
<span class="office-postal-code">58201</span>
</span>
<br/>
<span class="office-phone office-phone-local office-phone-tracking">
<span class="office-phone-label">Phone</span>: 
                <span class="office-phone-number" data-raw-number="7012144393">701-214-4393</span>
<br/>
</span>
<span class="office-phone office-phone-local">
<span class="office-phone-label">Fax</span>: 
                <span class="office-phone-number" itemprop="faxNumber">701-864-2748</span>
<br/>
</span>
<a class="office-page-link" href="<?php echo get_site_url(); ?>/Grand-Forks-Personal-Injury-Office.shtml" target="_self"> Grand Forks Law Office Map </a>
</p>
<!-- 
The automatically generated embedded map requires a street address, locality, and postal code in the Client Info Doc -->
</div>
</div>
<div class="social-icons">
<ul>
<li>
<a href="https://www.facebook.com/VogelLawFirm" target="_blank">
<span aria-hidden="true" class="fa fa-facebook"> </span>
</a>
</li>
<li>
<a href="https://twitter.com/vogel_law" target="_blank">
<span aria-hidden="true" class="fa fa-twitter"> </span>
</a>
</li>
<li class="last-child">
<a href="https://www.linkedin.com/company/vogel-law-firm" target="_blank">
<span aria-hidden="true" class="fa fa-linkedin"> </span>
</a>
</li>
</ul>
<div class="btn-review">
<a href="https://reviewplatform.findlaw.com/vogellaw/" target="_blank">Review Us </a>
</div>
<div class="btn-email">
<a href="https://outlook.office365.com" target="_blank">Employee Email</a>
</div>
</div>
</div>
</div>
</div>
<div class="footer-page-wrap">
<footer class="footer-page">
<a class="back-to-top" href="#">
<span aria-hidden="true" class="fa fa-arrow-up"> </span>
</a>
<section class="fine-print clearfix">
<p class="copyright">Â© 2019 by <a href="https://pview.findlaw.com/cmd/view?wld_id=3187273&amp;pid=1" target="_blank">Vogel Law Firm</a>. All rights reserved. <a href="<?php echo get_site_url(); ?>/Disclaimer.shtml">Disclaimer</a> | <a href="<?php echo get_site_url(); ?>/Site-Map.shtml">Site Map</a></p>
<p class="branding"><a href="<?php echo get_site_url(); ?>/Privacy-Policy.shtml" id="PrivacyPolicy">Privacy Policy</a> | <a href="https://www.lawyermarketing.com/?utm_source=FirmSite&amp;utm_medium=footer%2Bcopyright&amp;utm_term=law%2Bfirm%2Bmarketing&amp;utm_campaign=FirmSite%2BInbound" rel="nofollow" target="_blank">Business Development Solutions</a> by <a href="https://www.findlaw.com/" target="_blank">FindLaw</a>, part of Thomson Reuters. 
</p>
</section>

    </footer>
    <?php wp_footer(); ?>
    
</div>
<!--[if lt IE 9]>	
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond-1.1.0.js"></script>
	<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"> </script>

<script src="<?php echo get_template_directory_uri(); ?>/js/combined-intake-form.js" type="text/javascript"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flDefault-1.0.0.js">//</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flScripts-1.0.1.js"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/searchFormDesignCheck.js" type="text/javascript"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/autofillFSP.js" type="text/javascript"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/randomize.js" type="text/javascript">//</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/autolink-phone.js"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/cascadingExpandCollapse.min.js" type="text/javascript">//</script>
<script type="text/javascript"> <!--
		$(window).load(function() {
			if($(window).width()>=733){
				$(function(){ $('#expandingMenu').expandCollapse(); })
				$(function(){ $('#expandingMenuattorney').expandCollapse(); })
				// $(window).load(function(){
				// 	 $('#expandingMenu > li:eq(0) > ul').removeClass('menuOpened').addClass('menuClosed').css({'overflow':'hidden','display':'none'});
				// });
			}
		}); 
	--> </script>
<script type="text/javascript">
		$('#intakeFormShortAutofillSubmit').attr('src','/design/images/formSubmitShort.png');
		$('.attorney-list-1').appendTo('.list-attorneys');
	</script>
<script type="text/javascript">
		/*$('.H-P-Weir-2290839 .page-title').text("H. Patrick Weir, Jr.");
		$('.H-P-Weir-1261724 .page-title').text("H. Patrick Weir, Sr. ");
		$('.William-A-Schlossman-Jr .page-title').text("William A. Schlossman, Jr.");
		$('.Robert-G-Manly .attorneyProfileRepresentativeCases ul').append("<li>Strand v. Cass County, 721 N.W.2d 374 (N.D. 2006)</li>");
		$('.Diane-M-Wehrman .attorneyProfileBarAdmissions ul').append("<li>Mandan, Hidatsa and Arikara Nation Tribal Court</li>");*/
	</script>
<!-- START flTag Footer -->
<script type="text/javascript">_satellite.pageBottom();</script>
<!-- END flTag Footer -->
</body>

</html>