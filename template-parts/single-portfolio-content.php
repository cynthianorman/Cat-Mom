<?php
/**
 * The template part for displaying single post content
 *
 * @package Cat Mom
 */
?>

<div class="entry-content">
    <div class="row"> <!-- post featured image with taxonomy -->
        <div class="col-12 my-5"> <!-- graphic image representative of project -->
            <div class="post-title mb-5">
            <h1><?php the_title(); ?></h1>
            </div> 
            <div class="project-graphic-image">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>
            </div>
        </div>    
    </div>
</div>

<div class="portfolio-content">
    <div class="row justify-content-center">
		<div class="col-lg-4 col-sm-12 mx-5 mt-5"> <!-- meta boxes -->
            <h2>Project Brief:</h2>
                <?php $project_info = get_post_meta( get_the_ID(), 'catmom_textarea', true );
                if ( $project_info ): ?>
                <p class="project-meta"><?php echo $project_info; ?></p>
                <?php endif;

                $project_repo = get_post_meta( get_the_ID(), 'catmom_url', true );

                if ( $project_repo ): ?>
                    <h2>Project Repo:</h2>
			<p class="project-meta"><a href="<?php echo $project_repo; ?>" target="_blank">View on Github</a></p>
                <?php endif; ?>    
        </div> 		
        <div class="col-lg-4 col-sm-12 mt-5"> <!-- technical skills taxonomy -->
            <?php
            $skills_list = get_the_term_list( $post->ID, 'skills' );
            if ( $skills_list ): ?>
            <h2>Skills:</h2>
            <p class="skills-tools"><?php echo $skills_list; ?></p> 
            <?php endif; ?>
            <?php
            $tools_list = get_the_term_list( $post->ID, 'tools' );
            if ( $tools_list ): ?>
            <h2>Tools:</h2>
            <p class="skills-tools"><?php echo $tools_list; ?></p> 
            <?php endif; ?>
        </div>   
        <div class="col-lg-8 col-sm-12 mt-5">
            <h2>Challenges + Solutions:</h2>
            <div class="project-details">
            <?php the_content(); ?>
            </div> <!-- end of main content -->
        </div>
    </div>
	
	<?php if( is_singular('portfolio') ) { ?>
		<div class="row my-5">
			<div class="col-lg-6 col-sm-12 skills-tools"><?php previous_post_link( '%link' ) ?></div>
			<div class="col-lg-6 col-sm-12 skills-tools text-end"><?php next_post_link( '%link' ) ?></div>
		</div>
	<?php } ?>
	
</div> 
