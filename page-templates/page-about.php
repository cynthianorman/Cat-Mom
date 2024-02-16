<?php
/**
 * Template Name: About Page
 *
 * @package Cat Mom
 */

get_header();
?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area">
		<div id="main" class="site-main">
			<section class="row py-5"> <!-- Intro Banner -->
				<div class="col-lg-4 headshot">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
				</div>
				<div class="col-lg-6 bio">
					<h1>Meet Cynthia</h1>
					<?php the_content(); ?>
				</div>
			</section>
			<section class="about-full-width bg-silver"> <!-- Skills using ACF -->
				<div class="skills">
					<h2>Skills + Tools</h2>
						<?php $skills_entries = get_post_meta( get_the_ID(), 'about_skills_repeat_group', true );?>
						<div class="skills-left py-5">
								<p><?php foreach ( (array) $skills_entries as $key => $skills_entry ) {
									if( ! empty($skills_entry)) {									
									echo $skills_entry['skill'] .'&nbsp;&nbsp;&nbsp;';
									}
								}?></p>
						</div>
						<?php $tools_entries = get_post_meta( get_the_ID(), 'about_tools_repeat_group', true );?>
						<div class="tools-right py-5">
								<p><?php foreach ( (array) $tools_entries as $key => $tools_entry ) {
									if( ! empty($tools_entry)) {									
									echo $tools_entry['tool'] .'&nbsp;&nbsp;&nbsp;';
									}
								}?></p>
						</div>
				</div>
			</section>			
			<section class="row about-full-width bg-silver"> <!-- Education and Contracts using ACF -->
					<div class="education col-lg-6 col-sm-12">
						<h2 class="mb-3">Education</h2>
							<?php $education_entries = get_post_meta( get_the_ID(), 'about_education_repeat_group', true );
							foreach ( (array) $education_entries as $key => $education_entry ) {
								if( ! empty($education_entry)) {?>								
						<ul>
							<li><?php echo $education_entry['institution'] .', '. $education_entry['program'] .', '. $education_entry['year'] . '</li><br/>';?>
						</ul>
						<?php }
						}?>
					</div>
					<div class="contracts col-lg-6 col-sm-12">
						<h2 class="mb-3">Web Design + Development Contracts</h2>
							<?php $contracts_entries = get_post_meta( get_the_ID(), 'about_contracts_repeat_group', true );
							foreach ( (array) $contracts_entries as $key => $contracts_entry ) {
								if( ! empty($contracts_entry)) {?>								
						<ul>
							<li><?php echo $contracts_entry['company'] .', '. $contracts_entry['years'] . '</li><br/>';?>
						</ul>
						<?php }
						}?>
					</div>
			</section>
			<section class="about-full-width bg-silver mb-5"> <!-- Site I've Worked On -->
				<div class="experience">
					<h2 class="mb-3">Experience</h2>
					<p class="mb-5">
						Here are some sites I've either developed on my own or as part of a team.
					</p>				
					<div class="row">
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/anishinaabe-wordpress-site.jpg" alt="Anishinaabe">
							<div>
								Anishinaabe
							</div>
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/cloverdale-forge-wordpress-site.jpg" alt="Cloverdale Forge">
							<div>
								Cloverdale Forge
							</div>
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/nbisiing-consulting-wordpress-site.jpg" alt="Nbisiing Consulting">
							<div>
								Nbisiing Consulting
							</div>
						</div>
					</div>
					<div class="row">
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/gary-kellner-imaging-wordpress-site.jpg" alt="Gary Kellner Imaging">
							<div>
								Gary Kellner Imaging
							</div>
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/organized-inspiration-wordpress-site.jpg" alt="Organized Inspiration">
							<div>
								Organized Inspiration
							</div>
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/epic-financial-wordpress-site.jpg" alt="Epic Financial">
							<div>
								Epic Financial
							</div>
						</div>
					</div>
					<div class="row">
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/vibes-energy-solar-wordpress-site.jpg" alt="Vibes Energy Solar">
							<div>
								Vibes Energy Solar
							</div>							
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/sacred-stewardship-wordpress-site.jpg" alt="Sacred Stewardship">
							<div>
								Sacred Stewardship
							</div>
						</div>	
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/weight-inclusive-wordpress-site.jpg" alt="Weight Inclusive">
							<div>
								Weight Inclusive
							</div>
						</div>							
					</div>
					<div class="row">
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/strong-roots-construction-wordpress-site.jpg" alt="Strong Roots Construction">
							<div>
								Strong Roots Construction
							</div>					
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/cbparkave-wordpress-site.jpg" alt="Coldwell Banker Park Avenue Real Estate">
							<div>
								CBParkAve Real Estate
							</div>
						</div>
						<div class="site-screenshot col-lg-4 col-sm-12 my-5">
							<img class="sites" src="../wp-content/uploads/2022/10/smart-book-shop-wordpress-site.jpg" alt="Smart Book Shop">
							<div>
								Smart Book Shop
							</div>
						</div>
					</div>	
				</div>	
			</section>				
		</div><!-- #main -->
	</div><!-- #primary -->
<div><!-- #content -->
<?php
get_footer();
