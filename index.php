<?php include('perch/runtime.php'); ?> <!-- Perch initialisation code -->
<?php perch_layout("main-header"); ?>
	<main class="main-content">

		<article class="homepage-article-one">
			<span class="anchor" id="our-work"></span>
			<h1 class="article-heading" id="our-work-heading">our work</h1>

				<div class="block-assist">
					<section class="work-video">
						<iframe class="iframe" width="853" height="480" src="https://www.youtube.com/embed/wxyVrTfueQc?rel=0" frameborder="0" allowfullscreen></iframe>
					</section>
				</div>
		</article>

		<article class="homepage-article-two">
			<span class="anchor" id="about-us"></span>
			<h1 id="about-us-heading" class="article-heading"><?php perch_content('Article Heading') ?></h1>

					<div class="about-us-div about-us-div-one">
						<section class="left-section company-section">
							<h1 id="company-subheading" class="article-subheading"><?php perch_content('About Us Left Subheading') ?></h1>
								<!-- <div class="company-wrapper"> -->
									<div class="company-text" id="top-paragraph">
										<h3 class="company-subtitle"><?php perch_content('Company Subtitle 1') ?></h3>
										<p class="company-paragraph"><?php perch_content('Company Paragraph 1') ?></p>
									</div>

									<div class="company-text">
										<h3 class="company-subtitle"><?php perch_content('Company Subtitle 2') ?></h3>
										<p class="company-paragraph"><?php perch_content('Company Paragraph 2') ?></p>
									</div>

									<div class="company-text">
										<h3 class="company-subtitle"><?php perch_content('Company Subtitle 3') ?></h3>
										<p class="company-paragraph bottom-paragraph" id="no-bottom-spacing"><?php perch_content('Company Paragraph 3') ?></p>
									</div>
								<!-- </div> -->
						</section>

						<section class="right-section bio-section">
						<h1 id="bio-subheading" class="article-subheading"><?php perch_content('About us Right Subheading') ?></h1>
							<div class="bio bio-1" id="no-top-spacing">
								<!-- <img src="images/mark.jpg" alt="Mark Phoenix" class="about-us-image"> -->
								<?php perch_content('Bio Image 1') ?>
								<div class="about-us-text">
									<h3 class="bio-subtitle"><?php perch_content('Bio Subtitle 1') ?></h3>
									<p class="bio-paragraph"><?php perch_content('Bio Paragraph 1') ?></p>
								</div>
							</div>
							<div class="bio bio-2">
								<?php perch_content('Bio Image 2') ?>
								<!-- <img src="images/chris.jpg" alt="Chris Smith" class="about-us-image"> -->
								<div class="about-us-text">
									<h3 class="bio-subtitle"><?php perch_content('Bio Subtitle 2') ?></h3>
									<p class="bio-paragraph"><?php perch_content('Bio Paragraph 2') ?></p>
								</div>
							</div>
							<div class="bio bio-3" id="no-bottom-spacing">
								<!-- <img src="images/ben.jpg" alt="Ben Hutchings" class="about-us-image"> -->
								<?php perch_content('Bio Image 3') ?>
								<div class="about-us-text">
									<h3 class="bio-subtitle"><?php perch_content('Bio Subtitle 3') ?></h3>
									<p class="bio-paragraph"><?php perch_content('Bio Paragraph 3') ?></p>
								</div>
							</div>

						</section>
					</div>
		</article>


		<article class="homepage-article-three podcast-article">
			<span class="anchor" id="relative-paths-podcast"></span>
			<h1 id="podcast-heading"class="article-heading">podcast</h1>
			<div class="podcast-div">
				<section class="podcast-section podcast-section-one">
					<h3 id="podcast-sub-heading" class="article-subheading">Relative Paths Podcast</h3>
          <p class="podcast-paragraph"><?php perch_content('Podcast Paragraph 1') ?></p>
          <p class="podcast-paragraph"><?php perch_content('Podcast Paragraph 2') ?></p>
					<?php perch_content('Podcast Link 1') ?>
					<?php perch_content('Podcast Link 2') ?>
					<?php perch_content('Podcast link 3') ?>
				</section>
				<section class="podcast-section podcast-section-two">
					<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/120714885&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</section>
			</div>
		</article>

		<article class="homepage-article-four">
			<span class="anchor" id="contact-us"></span>

			<?php perch_content('Contact Section') ?>

		</article>

		</main>

<?php perch_layout("main-footer"); ?>
