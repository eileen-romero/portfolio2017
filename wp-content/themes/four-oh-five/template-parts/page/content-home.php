<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>
<!--  If post has image attached  and (is a single post or (is a single page and is not the frontpage))-->
<?php if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! fourohfive_is_frontpage() ) ) ) : ?>
	<!-- background image is the thumbnail at full size. covers background. centered. no repeat. -->
	<div style="background: url(<?php the_post_thumbnail_url( 'full' ); ?>) center center no-repeat; background-size: cover; -webkit-transform: translate3d(0,0,0); translate3d(0,0,0); background-attachment: fixed; height: 50vh;">
	</div>
<?php endif; ?>



<!-- BIO SECTION -->
		
	<?php
		$bg_bio = get_field('background_image');
	

	// ** NEED TO GET IMAGE TO NOT REPEAT 

	// THIS IS MY BIO SECTION DIV
		echo '<div class="category_bio text-white" style = "background-image: url(' .$bg_bio. ') ; background-repeat:no-repeat; background:cover;" center center fixed no-repeat  >';

		?>
				<?php

					$content = get_field('content');
					echo '<h4 style="padding-top:20px; font-size: 20px; line-height: 25px;">' .$content. '</h4>';
				?>
		
		<?php  
			echo '</div>';
		?>
	<!-- END OF BIO DIV -->



	<!-- MY REPEATER FEILD that shows the image title and such	 -->
		<div class="">
				<?php 
				// check if the repeater field has rows of data
					if( have_rows('portfolio_category') ):

					 	// loop through the rows of data
					    while ( have_rows('portfolio_category') ) : the_row();


							// Outer Div - Ech project will have their own
							 $image = get_sub_field('category_image');
							 echo "<div class='project text-center' style = 'background-image:url(".$image.");'>";
									 // content within div
									 $title = get_sub_field('category_title');
									 echo '<h2 style="padding-top:45vh; font-size: 100px;">' .$title. '</h2>';
					       

					       
					       
						
							// $link = get_sub_field('category_archive_link');

							// if( $link ): 

      						// echo '<a href="' .$link. '"><img src="' .$image. '" class="flexbox" ></a>'; 
      						// echo '<br>';
							
							echo '</div>';

							// endif;

					    endwhile;

					else :

					    // no rows found

					endif;
				?>
		</div>

		

		<div class="entry-content">
			<?php
				 // echo content div
				// -----the_content();
					// echo closing div

					// echho out fields here
				// fourohfive_edit_link( get_the_ID() );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	</article>
</div>
