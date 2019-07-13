<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css">
	<!-- Typekit -->
  <script src="https://use.typekit.net/adc2bwu.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<!-- Google site varification and analytics code -->
  <meta name="google-site-verification" content="vVyzw56D59neD3jSIACZAm-bjKNTxwcf_m11CdgogU4" />
	<!-- Pinterest verification code -->
	<meta name="p:domain_verify" content="6158ede761b4e02fbfe48399ff630787"/>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-35565108-2', 'pixelsmiths.co.uk');
	  ga('send', 'pageview');

  </script>
  	<!-- Perch Meta -->
	<?php
	$domain        = 'https://'.$_SERVER["HTTP_HOST"];
	$mainurl           = perch_page_url(array(
										    'hide-extensions'    => true,
										    'hide-default-doc'   => true,
										    'add-trailing-slash' => false,
										    'include-domain'     => true,
										), true);
	$mainsitename      = "Pixelsmiths";
	$pagetitlename = " - Pixelsmiths";
	$sharing_image = '/images/default_fb_image.jpg';

	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('mainurl',$mainurl);
	PerchSystem::set_var('mainsitename',$mainsitename);
	PerchSystem::set_var('pagetitlename',$pagetitlename);
	PerchSystem::set_var('sharing_image',$sharing_image);

	perch_page_attributes(array(
		'template' => 'default.html'
	));
	?>

	<!-- Cookie Consent -->
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#cecece",
      "text": "#000000"
    },
    "button": {
      "background": "#f36523",
      "text": "#ffffff"
    }
  },
  "content": {
    "href": "/privacy.php"
  },
	"position": "top"
})});
</script>



	<!-- Crisp Chat -->
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="db933625-800c-4d0f-a8a5-89f8f73c1eac";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</head>

<body>
<div class="page-wrapper">

<header id="home" itemscope itemtype="https://schema.org/LocalBusiness">
	<div class="header-inner">
		<div class="banner">
			<div class="banner-left" >
				<img itemprop="logo" src="images/logo.png" alt="Pixelsmiths logo" class="banner-logo">
			</div>
			<div class="banner-right">
				<h2 class="banner-heading"><?php perch_content('Banner Heading'); ?></h2>
				<p><?php perch_content('Banner Paragraph'); ?></p>
			</div>
		</div> <!-- banner -->


			<div class="header-contact-wrapper">
				<div class="header-email-phone">
					<a itemprop="email" class="header-email" title="Email us" item href="mailto:<?php perch_content('Header Email'); ?>"><?php perch_content('Header Email'); ?></a>
				</div>
				<div class="header-social-media">
					<a href="//twitter.com/pixel_smiths" class="header-twitter" title="Follow us on Twitter"><img src="/images/icons/twitter-icon-1.png" alt="Twitter Icon"></a>
					<a href="//instagram.com/pixel_smiths/" class="header-instagram" title="Follow us on Instagram"><img src="/images/icons/instagram-icon-1.png" alt="Instagram Icon"></a>
					<a href="//www.facebook.com/pages/Pixel-Smiths/1516706648566539" class="header-facebook" title="Follow us on Facebook"><img src="/images/icons/facebook-icon-1.png" alt="Facebook Icon"></a>
					<a href="//soundcloud.com/relativepaths" class="header-soundcloud" title="Relative Paths Podcast"><img src="/images/icons/soundcloud-icon-1.png" alt="Soundcloud Icon"></a>
				</div>
			</div> <!-- header contact inner wrapper -->
	</div> <!-- header inner -->

	<div class="nav-bar">
			<nav class="main-nav">
				<div class="responsive-main-nav">
					<a class="middle-out" id="menu-item-one" href="#our-work">our&nbsp;work</a>
					<a class="middle-out" href="#about-us">about&nbsp;us</a>
					<a class="middle-out" href="#relative-paths-podcast">podcast</a>
					<a class="middle-out" href="#contact-us">contact&nbsp;us</a>
					<a class="middle-out" href="/blog">blog</a>
				</div>
					<a href="" id="pull"><span class="pull-span">Show </span>Menu</a>
			</nav>
			<a id="main-site-heading-link" title="Back to the top!" href="#home"><img class="rotating-logo" src="images/badge-2.png" alt="Pixelsmiths badge logo"></a>
	</div> <!-- nav-bar -->

</header>