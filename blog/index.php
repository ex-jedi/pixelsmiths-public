<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/blog-style.css"> <!-- Links to blog stylesheet, not main one. -->
  <script src="https://use.typekit.net/adc2bwu.js"></script> <!-- Typekit -->
  <script>try{Typekit.load({ async: true });}catch(e){}</script> <!-- Typekit -->
	<title><?php perch_content('Blog Page Index Browser Title'); ?></title>
  <meta name="description" content="<?php perch_content('Blog Index Browser Meta Description'); ?>"
    <meta name="google-site-verification" content="vVyzw56D59neD3jSIACZAm-bjKNTxwcf_m11CdgogU4" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-35565108-2', 'pixelsmiths.co.uk');
	  ga('send', 'pageview');
	</script>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
		<script type="text/javascript" src="/scripts/blog-min.js">

		</script>
</head>

<body>
<div class="blog-page-wrapper">

<?php perch_layout('blog-header'); ?>

	<main class="blog-main-content">

		<article class="blog-index-intro">
			<?php perch_content('Blog Index Intro Title'); ?>
			<?php perch_content('Blog Index Intro Paragraph'); ?>
		</article>

		<?php
		perch_blog_recent_posts(5);
		?>



	</main>

<?php perch_layout('blog-footer'); ?>

 </div><!-- Page Wrapper -->
	<!-- <?php perch_get_javascript(); ?> -->
</body>
</html>
