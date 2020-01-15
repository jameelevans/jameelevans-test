<?php
/**
 * * The template for displaying the front page
 *
 * @package your-wp-project
 */

get_header();

?>
	<main class="main front-page__content">
        <section class="services">
			<div class="services__heading">
				<h2 id="services" class="heading__2 heading__2--blue"><span>Helping your business</span> grow a recognizable brand</h2>
				<p class="subheading subheading--orange">Providing your business with essential services it needs to thrive</p>
			</div>

			<div class="services__container">
				<div class="service">
						<a class="service__circle" href="<?php echo esc_url( site_url( '/services#professional-branding' ) ); ?>">
							<?php
							// Display branding svg icon
							echo svg_icon('service__icon', 'branding'); ?>

							<div class="service__line">&nbsp;</div>
							<div class="service__dot">&nbsp;</div>
						</a>
				
						<h4 class="heading__4 heading__4--blue">Professional Branding</h4>
						<p>Fresh style guides with amazing logos and colors schemes that your customers will remember and trust with their money.</p>
						<a class="btn btn--orange" href="<?php echo esc_url( site_url( '/services#professional-branding' ) ); ?>">Learn more</a>
					</div>

					<div class="service">
						<a class="service__circle" href="<?php echo esc_url( site_url( '/services#web-solutions' ) ); ?>">
							<?php
							// Display branding svg icon
							echo svg_icon('service__icon', 'solutions'); ?>
							<div class="service__line">&nbsp;</div>
							<div class="service__dot">&nbsp;</div>
						</a>
						
						<h4 class="heading__4 heading__4--blue">Web Solutions</h4>
						<p>Get a blazing fast website that ranks great in Google search and makes money for you while you’re sleeping.</p>
						<a class="btn btn--orange" href="<?php echo esc_url( site_url( '/services#web-solutions' ) ); ?>">Learn more</a>
					</div>

					<div class="service">
						<a class="service__circle" href="<?php echo esc_url( site_url( '/services#search-results' ) ); ?>">
							<?php
							// Display branding svg icon
							echo svg_icon('service__icon', 'rankings'); ?>
							<div class="service__line">&nbsp;</div>
							<div class="service__dot">&nbsp;</div>
						</a>

						<h4 class="heading__4 heading__4--blue">Better Search Rankings</h4>
						<p>With an SEO audit, tips and resources, your site will be in position to see a massive organic traffic increase</p>
						<a class="btn btn--orange" href="<?php echo esc_url( site_url( '/services#search-results' ) ); ?>">Learn more</a>
					</div>
				</div>
			</div>
		</section>

		<section class="about">
			<div class="about__heading">
				<h2 class="heading__2 heading__2--white">Learn a bit <span>about me</span></h2>
				<p class="subheading subheading--orange">Get to know a bit about me before making a decision</p>
			</div>

			<div class="about__container">
				<div class="about__clip">
					<?php
					// Display military svg icon
					echo svg_icon('about__icon', 'military'); ?>
					
					<div class="heading__4--small">Military Veteran</div>
					<p>I’m a hard-working self motivated veteran who’s always trying to get better and learn new things so I can accomplish my next mission; Your project.</p>
				</div>
				<div class="about__clip">
					<?php
					// Display results svg icon
					echo svg_icon('about__icon', 'results'); ?>
					
					<div class="heading__4--small">Results</div>
					<p>No matter to setting, I’ve always delivered above average results for my clients and co-workers.</p>
				</div>
				<div class="about__clip">
					<?php
					// Display communication svg icon
					echo svg_icon('about__icon', 'communication'); ?>
					
					<div class="heading__4--small">Communication</div>
					<p>Whether it’s online video conferencing, email or a simple call; I always take great pride in keeping you informed and in the loop.</p>
				</div>
				<div class="about__clip">
					<?php
					// Display education svg icon
					echo svg_icon('about__icon', 'education'); ?>
					
					<div class="heading__4--small">Education</div>
					<p>I have a Bachelors degree in my field and enjoy taking new courses every couple months to keep up to date with emerging techniques.</p>
				</div>
			</div>

			<a href="<?php echo esc_url( site_url( '/combat-to-coding' ) ); ?>" class="btn btn__cta">
				Read my story&nbsp;
				<?php
				// Display circle right svg icon
				echo svg_icon('btn__icon--white', 'circle-right'); ?>
			</a>

		</section>

		<section class="current-project">
			<!--
			<?php// if(!wp_is_mobile()) { ?>
			<div class="bg-video">
				<video class="bg-video__content" autoplay muted loop>
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/video.mp4" type="video/mp4"> 
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/video.webm" type="video/webm"> 
					Your browser is not supported! Please upgrade to a modern browser.
				</video>
			</div>
			<?php //} ?>-->
			<div class="current-project__heading">
				<h2 class="heading__2 heading__2--blue">Project I'm <span>Currently Working On</span></h2>
				<p class="subheading subheading--orange">Here’s a project I’m currently working on</p>
			</div>
			<div class="current-project__container">
				<div class="current-project__details">
					<div class="current-project__heading">
						<h3 class="heading__3--blue-bg"><?php echo get_field('project_title');?></h3>
					</div>
					<div class="current-project__problem">
						<h4 class="heading__4 heading__4--blue">Problem</h4>
						<p><?php echo get_field('the_problem');?></p>
					</div>
					<div class="current-project__solution">
						<h4 class="heading__4 heading__4--blue">Solution</h4>
						<p><?php echo get_field('the_solution');?></p>
					</div>
				</div>
				<div class="current-project__timeline">
					<div class="current-project__heading">
						<h4 class="heading__4 heading__4--blue">Project Checklist</h4>
					</div>
					<?php	
					// check for rows (parent repeater)
					if( have_rows('project_checklist') ): ?>
					<ul  class="current-project__list">
						<?php 
						// loop through rows (parent repeater)
						while( have_rows('project_checklist') ): the_row(); ?>
							<?php 
							// display each item as a list item with appropiate classes for status
							?>
							<li class="<?php if( get_sub_field('status') == 'completed' ){
									echo 'current-project__item--done';
								} else if( get_sub_field('status') == 'in-progress' ){
									echo 'current-project__item--in-progress';
								} else {
									echo 'current-project__item';
								}?>"><?php the_sub_field('checklist_item'); ?> </li>
						<?php endwhile; // while( has_sub_field('project_checklist') ): ?>
					</ul>
					<?php endif; // if( get_field('project_checklist') ): ?>
				</div>
			</div>

			<a href="<?php echo esc_url( site_url( '/works' ) ); ?>" class="btn btn__cta--blue">
				See all of my work&nbsp;
				<?php
				// Display circle right svg icon
				echo svg_icon('btn__icon', 'circle-right'); ?>
			</a>
		</section>

		<section class="featured-resources">
			<?php
				// Show featured posts based on acf fields
				echo featured_posts();
				// Section divider
				echo '<hr class="hr hr--white">';
				// Recommendations section
				echo recommendations_slider();
			?>
		</section>
	</main>
<?php get_footer(); ?>
