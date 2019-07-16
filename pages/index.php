<?php /* Template Name: Home */ ?>
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/animate.css" type="text/css" media="all" />
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
    <body class="<?php echo basename(get_permalink()); ?> design Home Home">
<div class="header-page-wrap">
<header class="header-page">
<a class="brand" href=<?php echo home_url(); ?>>
<img alt="Vogel Law Firm" class="brand-image" src="<?php bloginfo('template_url'); ?>/images/brand.png"/>
</a>
<div class="cta"> call us today
                <div class="cta-phone"><span class="fa fa-mobile-phone"> </span>
                    866-771-9930
                </div>
</div>
<div class="menu-search-wrap">
<div class="mob-btn-wrap">
<a class="btn-nav-main btn-togglebox" data-target="nav-main" href="#">
<span aria-hidden="true" class="fa fa-bars"> </span> Menu
                    </a>
<a class="btn-contact" href="<?php echo get_site_url(); ?>/Contact.shtml">
<span aria-hidden="true" class="fa fa-map-marker"> </span> Contact
                    </a>
</div>
<nav class="nav-main fl-drop" data-bp="750" id="nav-main" role="navigation">
<ul>
<li> <a class="current" href=<?php echo home_url(); ?>>Home</a> </li>
<li><a href="<?php echo get_site_url(); ?>/Professionals/">Professionals</a> </li>
<!-- <li><a href="javascript:void(0)" data-target="nav-practice-home" class="view-prac-home">Practice Areas</a></li> -->
<li class="has-child mega-menu">
<a class="view-prac-home" href="javascript:void(0)">Practice Areas</a>
<div class="expanded-menu-wrap">
<div class="container-expanded-menu">
<div class="expanded-menu">
<div class="list list-1">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Agricultural-Law/"><span class="fa fa-angle-double-right"> </span>Agricultural
                                                        Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Alternative-Dispute-Resolution-Mediation.shtml"><span class="fa fa-angle-double-right"> </span>Alternative Dispute
                                                        Resolution <strong>&amp; Mediation</strong></a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Bankruptcy-Collections.shtml"><span class="fa fa-angle-double-right"> </span>Bankruptcy &amp;
                                                        Collections</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Business-Corporate-Law/"><span class="fa fa-angle-double-right"> </span>Business &amp;
                                                        Corporate Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Commercial-Litigation.shtml"><span class="fa fa-angle-double-right"> </span>Commercial
                                                        Litigation</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Commercial-Transactions-Securities.shtml"><span class="fa fa-angle-double-right"> </span>Commercial
                                                        Transactions &amp; Securities</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Construction-Law.shtml"><span class="fa fa-angle-double-right"> </span>Construction
                                                        Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Agricultural-Law/Cooperatives-Law.shtml"><span class="fa fa-angle-double-right"> </span>Cooperatives
                                                        Law</a>
</li>
</ul>
</div>
<div class="list list-2">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Criminal-Defense/"><span class="fa fa-angle-double-right"> </span>Criminal
                                                        Defense</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Domestic-Family-Law.shtml"><span class="fa fa-angle-double-right"> </span>Domestic &amp;
                                                        Family Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Education-Law/"><span class="fa fa-angle-double-right"> </span>Education Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Employment-Labor-Law.shtml"><span class="fa fa-angle-double-right"> </span>Employment &amp;
                                                        Labor Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Environmental-Law-Water-Law-Land-Use/"><span class="fa fa-angle-double-right"> </span>Environmental Law,
                                                        Water Law <strong>&amp; Land Use</strong></a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Estate-Planning-Probate.shtml"><span class="fa fa-angle-double-right"> </span>Estate Planning
                                                        &amp; Probate</a>
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
<a href="<?php echo get_site_url(); ?>/Insurance-Law-Litigation/"><span class="fa fa-angle-double-right"> </span>Insurance Law &amp;
                                                        Litigation</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Intellectual-Property.shtml"><span class="fa fa-angle-double-right"> </span>Intellectual
                                                        Property</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Legislative-Government-Relations.shtml"><span class="fa fa-angle-double-right"> </span>Legislative &amp;
                                                        Government Relations</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Oil-Gas-Wind-Energy-Law.shtml"><span class="fa fa-angle-double-right"> </span>Oil, Gas, Wind
                                                        &amp; Energy Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Personal-Injury-Wrongful-Death/"><span class="fa fa-angle-double-right"> </span>Personal Injury
                                                        &amp; Wrongful Death</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Insurance-Law-Litigation/Products-Liability-Defense.shtml"><span class="fa fa-angle-double-right"> </span>Products Liability
                                                        Defense</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Professional-Liability.shtml"><span class="fa fa-angle-double-right"> </span>Professional
                                                        Liability</a>
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
<li><a href="<?php echo get_site_url(); ?>/Firm-News/">News</a></li>
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
<h2>Where You Are More
                        <span>Than Just A Client,</span>
</h2>
<p>You Are A Trusted Partner In Your Case.</p>
<a class="btn-banner" href="<?php echo get_site_url(); ?>/Contact.shtml"><span class="fa fa-envelope-o"> </span> GET VOGEL ON YOUR
                        SIDE </a>
</div>
</div>
</div>
</div>
<a class="btn-practice btn-togglebox" data-target="nav-practice-home" href="#">
<span aria-hidden="true" class="fa fa-bars"> </span> View Our Practice Areas
    </a>
<div class="prac-mobile" data-set="nav-practice-home"> </div>
<div class="section1-wrap">
<div class="container-section2">
<div class="content-center">
<h1 class="page-title"><?php echo get_the_title(); ?>&amp; Minnesota Law Firm
                </h1>
</div>
</div>
</div>
<a name="to-prac"> </a>
<div class="prac-wrap">
<div class="prac-desktop" data-set="nav-practice-home">
<nav class="nav-practice-home collapse" data-bp="750" id="nav-practice-home" role="navigation">
<div class="list list-1">
<ul>
<li>
<a class="title-practice-home">Practice Areas</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Agricultural-Law/"><span class="fa fa-angle-double-right"> </span>Agricultural
                                Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Alternative-Dispute-Resolution-Mediation.shtml"><span class="fa fa-angle-double-right"> </span>Alternative Dispute Resolution
                                <strong>&amp; Mediation</strong></a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Bankruptcy-Collections.shtml"><span class="fa fa-angle-double-right"> </span>Bankruptcy &amp; Collections</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Business-Corporate-Law/"><span class="fa fa-angle-double-right"> </span>Business
                                &amp; Corporate Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Commercial-Litigation.shtml"><span class="fa fa-angle-double-right"> </span>Commercial Litigation</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Commercial-Transactions-Securities.shtml"><span class="fa fa-angle-double-right"> </span>Commercial Transactions &amp;
                                Securities</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Construction-Law.shtml"><span class="fa fa-angle-double-right"> </span>Construction Law</a>
</li>
</ul>
</div>
<div class="list list-2">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Agricultural-Law/Cooperatives-Law.shtml"><span class="fa fa-angle-double-right"> </span>Cooperatives Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Criminal-Defense/"><span class="fa fa-angle-double-right"> </span>Criminal
                                Defense</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Domestic-Family-Law.shtml"><span class="fa fa-angle-double-right"> </span>Domestic
                                &amp; Family Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Education-Law/"><span class="fa fa-angle-double-right"> </span>Education Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Employment-Labor-Law.shtml"><span class="fa fa-angle-double-right"> </span>Employment &amp; Labor Law</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Environmental-Law-Water-Law-Land-Use/"><span class="fa fa-angle-double-right"> </span>Environmental Law, Water Law <strong>&amp;
                                    Land Use</strong></a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Estate-Planning-Probate.shtml"><span class="fa fa-angle-double-right"> </span>Estate Planning &amp; Probate</a>
</li>
<li>
<a href="<?php echo get_site_url(); ?>/Health-Care-Law.shtml"><span class="fa fa-angle-double-right"> </span>Health Care
                                Law</a>
</li>
</ul>
</div>
<div class="list list-3">
<ul>
<li>
<a href="<?php echo get_site_url(); ?>/Immigration.shtml"><span class="fa fa-angle-double-right"> </span>Immigration</a>
</li>
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
<a href="<?php echo get_site_url(); ?>/Oil-Gas-Wind-Energy-Law.shtml"><span class="fa fa-angle-double-right"> </span>Oil,
                                Gas, Wind &amp; Energy Law</a>
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
<li class="last-child-desktop">
<a href="<?php echo get_site_url(); ?>/Real-Estate-Law.shtml"><span class="fa fa-angle-double-right"> </span>Real Estate
                                Law</a>
</li>
<li class="togglebox-close"><a class="close" data-target="nav-practice-home" href="#">X
                                Close</a></li>
</ul>
</div>
</nav>
</div>
</div>
<div class="container-columns">
<div class="container-page">
<div class="container-column-main">
<div class="column-main" role="main">
<article class="content content-left">
<h2>Results Start With Vogel Law Firm</h2><p>Vogel Law Firm is a prestigious law firm serving a wide range of clientele in the Dakotas, Minnesota and beyond. Our lawyers deliver quality representation and proven results.</p>
</article>
<div class="content-right content">
<h2>How We Can Help</h2><p>Vogel Law Firm is one of the oldest continuing law firms in North Dakota with more than 55 attorneys in diverse practices. Very few problems arise that have not been encountered previously. For businesses and individuals alike, we offer an unrivaled breadth of knowledge and services to our clients. We provide proven representation and peace of mind for the most important issues to you or your business.</p>
</div>
</div>
</div>
</div>
</div>
<div class="wrap-section2">
<div class="section2-wrap">
<div class="container-section2">
<div class="content-right">
<div class="top-right">
<h2>Excellence And Integrity In An Atmosphere Of
                            <span>Respect And Cooperation</span>
</h2>
</div>
<div class="top-bottom">
<h2>Our Values
                            <br/>Are Our Foundation
                        </h2>
<p>Vogel Law Firm exemplifies its core values:</p><ul><li> <strong>Courageous:</strong> We represent clients in difficult cases. Our team creatively seeks the best solution for your legal issue. </li><li> <strong>Knowledgeable:</strong> Our attorneys' depth and breadth of knowledge covers more than 20 practice areas and spans generations. Trust Vogel Law Firm to handle the legal complexities of individuals, families and businesses. </li><li> <strong>Experienced:</strong> Our long-standing history in the local communities we serve dates back to the 1800s. </li><li> <strong>Effective:</strong> Our reputation for strategic and calculated approaches to problem-solving sets us apart. </li></ul>
</div>
</div>
</div>
</div>
</div>
<div class="section3-wrap">
<div class="container-section3">
<div class="content-left">
<!-- <h2>Innovative Solutions 
                        <br/>To Your Legal Disputes
                    </h2>
                    <div id="content-3" fsp="editor" scope="page"/> -->
<!-- <a href="javascript:void(0)" class="btn-learn">Learn more</a> -->
<!-- <a href="#" class="btn-learn" data-target="nav-practice-home">
                       Learn More
                    </a>   -->
<h2>Recent Blog Posts</h2>
<div class="blog-rss">
<div class="container-module container-module-RSSFeedReader container-module-FSPRSSFeedReader">
<h4 class="title-module title-module-RSSFeedReader title-module-FSPRSSFeedReader">Recent Blog posts</h4>
<div class="module RSSFeedReader FSPRSSFeedReader rssFeed">
<ul>
<li>
<h4>Vogel Law Firm Hosts The Breakfast Buzz: FMLA and Leave Law Compliance</h4><span class="feedDate">Jun 06, 2019</span><p>Complying with leave laws can give even the most experienced business owners and management personnel a headache. At this session, we will discuss FML...</p>
<a class="btn-read" href="https://vlfnd.firmsitepreview.com/blog/2019/06/vogel-law-firm-hosts-the-breakfast-buzz-fmla-and-leave-law-compliance.shtml" target="_blank">
						Read More <span aria-hidden="true" class="fa fa-arrow-right"></span></a>
</li>
<li>
<h4>Plea bargain pitfalls</h4><span class="feedDate">Jun 04, 2019</span><p>By Mark A. Friese Fifty years ago, twenty percent of criminal cases went to trial. Estimates today show ninety to ninety-five percent of state court c...</p>
<a class="btn-read" href="https://vlfnd.firmsitepreview.com/blog/2019/06/plea-bargain-pitfalls.shtml" target="_blank">
						Read More <span aria-hidden="true" class="fa fa-arrow-right"></span></a>
</li>
<li>
<h4>What is a seizure?</h4><span class="feedDate">Jun 03, 2019</span><p>By Luke Heck Under both our state and federal constitutions, we have a right to be free from unreasonable searches and seizures. To be free from an un...</p>
<a class="btn-read" href="https://vlfnd.firmsitepreview.com/blog/2019/06/what-is-a-seizure.shtml" target="_blank">
						Read More <span aria-hidden="true" class="fa fa-arrow-right"></span></a>
</li>
</ul>
</div>
</div>
<!-- <h2>Recent Blog posts</h2> -->
<!--  <div class="container-module container-module-RSSFeedReader container-module-FSPRSSFeedReader">
                        <div class="module RSSFeedReader FSPRSSFeedReader rssFeed">
                            <ul>
                                <li>
                                    <h4>Vogel Law Firm Attorney Peter D. Welte nominated to serve as District Judge on the U.S. District Court of North Dakota</h4>
                                    <span class="feedDate">Jan 17, 2019</span>
                                    <p>Peter D. Welte has been nominated by Donald J. Trump to serve as District Judge on the U.S. District Court for the District of North Dakota. Mr. Welte ...</p>
                                    <a class="btn-read"
                                        href="https://vlfnd.firmsitepreview.com/blog/2019/01/vogel-law-firm-attorney-peter-d-welte-nominated-to-serve-as-district-judge-on-the-us-district-court.shtml"
                                        target="_blank">Read More <span class="fa fa-arrow-right"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li>
                                    <h4>Up In Smoke: An Update on North Dakota's Marijuana Laws</h4>
                                    <span class="feedDate">Jan 10, 2019</span>
                                    <p>By: Matthew Dearth In November, North Dakota voters rejected Measure 3, which would have legalized the recreational use of marijuana for people 21 ...</p>
                                    <a class="btn-read"
                                        href="https://vlfnd.firmsitepreview.com/blog/2019/01/up-in-smoke-an-update-on-north-dakotas-marijuana-laws.shtml"
                                        target="_blank">Read More <span class="fa fa-arrow-right"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li class="last-child">
                                    <h4>Collateral Consequences of a Criminal Conviction</h4>
                                    <span class="feedDate">Dec 7, 2018</span>
                                    <p>By: Mark A. Friese In criminal cases, there are âdirectâ consequences of a guilty plea or conviction. Common direct consequences include fines, court ...</p>
                                    <a class="btn-read"
                                        href="https://vlfnd.firmsitepreview.com/blog/2018/12/collateral-consequences-of-a-criminal-conviction.shtml"
                                        target="_blank">Read More <span class="fa fa-arrow-right"
                                            aria-hidden="true"></span></a>
                                </li>
                            </ul>

                        </div>
                    </div> -->
</div>
</div>
</div>
</div>
<div class="closing-appeal-wrap">
<div class="container-closing-appeal">
<h2>Quality Attorneys. Quality Care.</h2>
<p>Ultimately, we measure our success in terms of how we improve the lives of our clients.
                <br/>We never forget that the most important part in any legal matter is the people involved.
            </p>
</div>
</div>
<a class="btn-short-form" href="<?php echo get_site_url(); ?>/Contact.shtml">
<span class="fa fa-envelope"> </span> Email Us For A Response
    </a>
<div class="form-wrap">
<div class="container-form">
<div class="form-content">
<h2>Experience The Vogel Law Firm Difference</h2>
<p>Quality legal service starts with contacting Vogel Law Firm. Call <strong>866-771-9930</strong> or
                    submit the form to request a consultation.</p>
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
<li>
<img alt="ECN | Employers Counsel Network" src="<?php bloginfo('template_url'); ?>/images/badge1.jpg"/>
</li>
<li>
<img alt="Fellow Litigation Counsel of America" src="<?php bloginfo('template_url'); ?>/images/badge2.jpg"/>
</li>
<li>
<img alt="Super Lawyers" src="<?php bloginfo('template_url'); ?>/images/badge3.jpg"/>
</li>
<li>
<img alt="Multi-Million Dollar Advocates Forum" src="<?php bloginfo('template_url'); ?>/images/badge4.jpg"/>
</li>
<li>
<img alt="Listed In Best Lawyers | The World's Premier Guide" src="<?php bloginfo('template_url'); ?>/images/badge5.jpg"/>
</li>
<li class="item-last">
<img alt="ALFA International | The Global Legal Network" src="<?php bloginfo('template_url'); ?>/images/badge6.jpg"/>
</li>
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
<p class="copyright">Â©
                    
                    2019 by
                    <a href="https://pview.findlaw.com/cmd/view?wld_id=3187273&amp;pid=1" target="_blank">Vogel Law Firm</a>
                    . All rights reserved.
                    <a href="<?php echo get_site_url(); ?>/Disclaimer.shtml">Disclaimer</a> |
                    <a href="<?php echo get_site_url(); ?>/Site-Map.shtml">Site Map</a>
</p>
<p class="branding">
<a href="<?php echo get_site_url(); ?>/Privacy-Policy.shtml" id="PrivacyPolicy">Privacy Policy</a> | <a href="https://www.lawyermarketing.com/?utm_source=FirmSite&amp;utm_medium=footer%2Bcopyright&amp;utm_term=law%2Bfirm%2Bmarketing&amp;utm_campaign=FirmSite%2BInbound" rel="nofollow" target="_blank">Business Development Solutions</a> by <a href="https://www.findlaw.com/" target="_blank">FindLaw</a>, part of Thomson Reuters. 

                </p>
</section>

    </footer>
    <?php wp_footer(); ?>
    
</div>
<!--[if lt IE 9]> <script src="<?php echo get_template_directory_uri(); ?>/js/respond-1.1.0.js"></script> <![endif]-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
        //
    </script>
<script>
        var highlightOptions = {
            pageID: 'Home',
            pageSection: '',
            pageSectionTop: ''
        }
    </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/combined-intake-form.js" type="text/javascript"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/searchFormDesignCheck.js" type="text/javascript"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/autofillFSP.js" type="text/javascript"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flDefault-1.0.0.js">
        //
    </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/flScripts-1.0.1.js">
        //
    </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/autolink-phone.js"> </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/cascadingExpandCollapse.min.js" type="text/javascript">
        //
    </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js">
        //
    </script>
<script type="text/javascript">
        <!--
        $(window).load(function () {
            // if($(window).width()>=733){
            $(function () {
                $('#expandingMenu').expandCollapse();
            })
            // }
        });
        -->
    </script>
<script type="text/javascript">
        $('#intakeFormShortAutofillSubmit').attr('src', '/design/images/formSubmitShort.png');
    </script>
<!-- START flTag Footer -->
<script type="text/javascript">_satellite.pageBottom();</script>
<!-- END flTag Footer -->
</body>
</html>