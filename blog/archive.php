<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/blog-style.css"> <!-- Links to blog stylesheet, not main one. -->
  <script src="https://use.typekit.net/adc2bwu.js"></script> <!-- Typekit -->
  <script>try{Typekit.load({ async: true });}catch(e){}</script> <!-- Typekit -->
	<title><?php perch_content('Blog Archive Browser Title'); ?></title>
  <meta name="description" content=<?php perch_content('Blog Index Browser Meta Description'); ?>
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

	<main class="archive-page">

		    <?php
		        // defaults for all modes
		        $posts_per_page = 10;
		        $template 		= 'articles.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /*
		        	perch_get() is used to get options from the URL.

					e.g. for the URL
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */


		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		            echo '<h1>'.perch_blog_category(perch_get('cat'), true).'</h1>';

		            perch_blog_custom(array(
							'category'   => perch_get('cat'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }


		        /* --------------------------- POSTS BY TAG --------------------------- */
		        if (perch_get('tag')) {
		            echo '<h1>'.perch_blog_tag(perch_get('tag'), true).'</h1>';

		            perch_blog_custom(array(
							'tag'   	 => perch_get('tag'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }


		        /* --------------------------- POSTS BY AUTHOR --------------------------- */
		        // if (perch_get('author')) {
						//
		        // 	echo '<h1>Posts by '.perch_blog_author(perch_get('author'), array(
		        // 											'template' => 'author_name.html',
		        // 											), true).'</h1>';
						//
						//
		        // 	perch_blog_custom(array(
						// 	'author'   	 => perch_get('author'),
						// 	'template'   => $template,
						// 	'count'      => $posts_per_page,
						// 	'sort'       => $sort_by,
						// 	'sort-order' => $sort_order,
		        //             ));
						//
		        //     $posts_displayed = true;
		        // }


		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.

		      		echo '<h1>Archive</h1>';

		      		perch_blog_custom(array(
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		      	}

		    ?>



					<nav class="archive-sidebar-nav">
					    <!--  By category listing -->
					    <?php perch_blog_categories(); ?>
					    <!--  By tag -->
					    <?php perch_blog_tags(); ?>
					    <!--  By year -->
					    <!-- <?php perch_blog_date_archive_years(); ?> -->
					    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
					    <!-- <?php perch_blog_date_archive_months(); ?> -->
						</nav>

			</main>


<?php perch_layout('blog-footer'); ?>

</div> <!-- Page wrapper -->

</body>
</html>
