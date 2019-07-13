<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/blog-style.css"> <!-- Links to blog stylesheet, not main one. -->
  <script src="https://use.typekit.net/adc2bwu.js"></script> <!-- Typekit -->
  <script>try{Typekit.load({ async: true });}catch(e){}</script> <!-- Typekit -->
	 <!-- Perch Meta -->
	<?php perch_blog_post_meta(perch_get('s')); ?>
	 <!-- Perch Meta End -->
  <meta name="description" content="<?php perch_blog_post_field(perch_get('s'), 'post-meta-description'); ?>" />
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
		</script>
</head>

<body>
<div class="blog-page-wrapper">

<?php perch_layout('blog-header'); ?>

	<main class="blog-main-content">

		<article class="blog-post-article" itemscope itemtype="https://schema.org/BlogPosting" itemprop="blogPost">

			<?php perch_blog_post(perch_get('s')); ?>

			<!-- AddToAny BEGIN -->
			<div class="sharing-buttons a2a_kit a2a_kit_size_32 a2a_default_style">
				<h3>Share This Post</h3>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_google_plus"></a>
				<a class="a2a_button_pinterest"></a>
				<a class="a2a_button_linkedin"></a>
				<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
			</div>
				<script>
				var a2a_config = a2a_config || {};
				a2a_config.templates = {
				twitter: "${title} ${link} by @pixel_smiths"
				};
				a2a_config.linkname = "<?php perch_blog_post_field(perch_get('s'), 'postTitle'); ?>";
				</script>
				<script async src="https://static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->

			<div class="blog-post-meta">
				<?php perch_blog_post_categories(perch_get('s')); ?>

				<?php perch_blog_post_tags(perch_get('s')); ?>
			</div>

		</article>

		<article class="more-posts">
			<h1 class="more-posts-title">Featured posts</h1>
		</article>

		<section class="blog-post-after">
						<?php
				perch_blog_custom(array(
				'filter' => 'postSlug',
				'match' => 'neq',
				'value' => perch_get('s'),
				'sort'=>'postDateTime',
				'sort-order'=>'RAND',
				'template'=>'blog/blog_posts_after.html',
				'count'=>3,
				'tag' => 'featured',
			)); ?>
		</section>

	</main>
</div> <!-- Page wrapper -->

<?php perch_layout('blog-footer'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/scripts/jquery/jquery2.1.4.js"><\/script>')</script>
<script type="text/javascript" src="/scripts/blog-min.js" ></script>

</body>
</html>
