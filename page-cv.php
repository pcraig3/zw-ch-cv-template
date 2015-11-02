<?php
/*
Template Name: CV
Description: A Page Template for my resume.
*/
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

</head>

<body <?php body_class();?> >

	<div class="cv__wrapper">
		<header class="cv__header">
			<h1 class="cv__name cv__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Paul Craig</a></h1>
			<h2 class="cv__description color__red">would be <span class="baskerville--em">thrilled</span> to help you help me help others</h2>
			<div class="clearer"></div>

		</header><!-- end of .cv__header -->

		<div class="cv">
			<div class="layout">

			<div class="layout__item two-thirds palm-one-whole"><!--

				--><div class="layout col_1"><!--

		--><div class="cell cell--col_1"><!--

			--><div class="layout__item one-whole">


			<h3 class="section__title">work</h3>
					</div><!--

			--><article class="job_description"><!--

				--><div class="layout__item one-fifth">


				<span class="job_description__year">2014</span>
					</div><!--
				--><div class="layout__item four-fifths">

					<h5 class="job_description__title">Web Developer</h5>
					<h6 class="job_description__employer"><a class="pseudo_href" href="http://westernusc.ca">Western University Students’ Council</a></h6>
					<p>Revitalized the web presence of the student government</p>
					<p>Prioritized needs based on findings of user research</p>
					<p>Coded in the open and extensively documented plugins</p>
					<p>Incorporated third-party APIs supplemented with clever data caching</p>
				
					</div><!--

			--></article><article class="job_description"><!--

				--><div class="layout__item one-fifth">

				<span class="job_description__year">2013-14</span>
					</div><!--
				--><div class="layout__item four-fifths">

					<h5 class="job_description__title">Technical Infrastructure Intern</h5>
					<h6 class="job_description__employer"><a class="pseudo_href" href="http://westernusc.ca">Western University Students’ Council</a></h6>
					<p>Designed and implemented various web-based software projects</p>
					<p>Split time between front-end and back-end problems</p>
					<p>Frequent Basecamp contributor, <code>git commit</code>-er</p>
					<p>Worked always for the benefit of students at Western University</p>
			</div>
					<!--

			--></article><article class="job_description"><!--

				--><div class="layout__item one-fifth">
				<span class="job_description__year">2012-13</span>
					</div><!--
				--><div class="layout__item four-fifths">

					<h5 class="job_description__title">Section Editor</h5>
					<h6 class="job_description__employer"><a class="pseudo_href" href="http://openwidezine.com">mitZine / OPENWIDE</a></h6>
					<p>Authored numerous peer-reviewed feature-length articles</p>
					<p>Participated in collaborative editing of mine and others' writing</p>
					<p>Managed volunteer writers; kept Editor-in-Chief informed</p>
					</div><!--

			--></article><!--

		--></div><div class="cell cell--col_1"><!--

										--><div class="layout__item one-whole">
										<h3 class="section__title">school</h3>
					</div><!--


			--><article class="job_description"><!--

					--><div class="layout__item one-fifth"></div><!--
				--><div class="layout__item four-fifths">

					<h5 class="job_description__title"><a href="http://www.csd.uwo.ca">Computer Science</a></h5>
					<p>Studied foundational data structures and algorithms</p>
					<p>Worked frequently on team-based semester-long projects</p>
					</div><!--

			--></article><article class="job_description"><!--

					--><div class="layout__item one-fifth"></div><!--
				--><div class="layout__item four-fifths">

					<h5 class="job_description__title"><a href="http://www.fims.uwo.ca">Media, Information and Technoculture (MIT)</a></h5>
					<p>Learned to communicate professionally without expunging myself</p>
					<p>Critically analyzed bloody everything</p>
					</div><!--

				--></article><!--

		--></div><!--

				--></div><!-- end of .col_1 

			--></div><!-- end of .two-thirds 
			--><div class="layout__item one-third palm-one-whole"><!--

			--><div class="layout col_2"><!--

		--><div class="cell cell--col_2"><!--

		--><div class="layout__item one-whole">
		<h3 class="section__title color__red">contact</h3>
			</div><!--
			--><div class="layout__item two-fifths"></div><!--
			--><div class="layout__item three-fifths">

					<a class="contact--body contact--email color__red" href="mailto:paul@pcraig3.ca?subject=Hello%20Paul!">paul@pcraig3.ca</a>
					<a class="contact--body" href="tel:+14163160999">(+1) 416.316.0999</a>
					<a class="contact--body" href="https://twitter.com/pcraig3">@pcraig3</a>
			</div><!--

		--></div><div class="cell cell--col_2"><!--

		--><div class="layout__item one-whole">
		<h3 class="section__title">degree</h3>
			</div><!--

		--><article class="job_description"><!--

		--><div class="layout__item two-fifths">
		<span class="job_description__year">2014</span>
			</div><!--
		--><div class="layout__item three-fifths">


					<h5 class="job_description__title">Computer Science & MIT Double Major</h5>
					<a class="job_description__body" href="http://www.uwo.ca/">Western University</a>
					<p>London, Canada</p>
		</div><!--

		--></article><!--

		--></div><div class="cell cell--col_2"><!--

		--><div class="layout__item one-whole">
		<h3 class="section__title">familiar with</h3>
			</div><!--

			--><article class="job_description"><!--

			--><div class="layout__item two-fifths">
			<p>PHP</p>
			<p>HTML / Twig</p>
			<p>Java</p>
			<p>C / C++</p>
			<p>git / GitHub</p>
			<p>CLIs</p>
			<p>etc.</p>

			</div><!--
			--><div class="layout__item three-fifths">
			<p>WordPress</p>
			<p>CSS / SCSS</p>
			<p>JavaScript / jQuery</p>
			<p>SQL / Doctrine</p>
			<p>Package Managing</p>
			<p>MVC Frameworks</p>
			</div><!--
			--></article><!--

		--></div><div class="cell cell--col_2"><!--

		--><div class="layout__item one-whole">
		<h3 class="section__title">able to</h3>
			</div><!--
					--><article class="job_description"><!--

			--><div class="layout__item one-whole">

			<p>construct / defend arguments</p>
			<p>construct / maintain software</p>
			<p>deliver presentations on either</p>
			<p>work as part of a team</p>
			<p>identify tech / political problems</p>

			</div><!--

		--></article><!--

		--></div><!--

			--></div><!-- end of .col_2

			--></div><!-- end of .one-third 
		--></div><!-- end of .layout -->
	</div><!-- end of .cv -->

	<footer class="cv__footer">
		<span class="cv__references">References available on request</span>
		<div class="clearer"></div>

	</footer><!-- end of .cv__footer -->
</div><!-- end of .cv__wrapper -->


<?php wp_footer(); ?>
</body>
</html>
