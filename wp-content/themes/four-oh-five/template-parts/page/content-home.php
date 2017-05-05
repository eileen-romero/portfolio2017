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


<!-- WHAT IS THIS FOR???????? -->
<div class="container py-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		
		
	
	</header>
</div>


<!-- BIO SECTION -->
		<!-- new div for content -->


<!-- ????????HOW DO I MAKE THIS BACKGROUND IMAGE WORk? -->
	<?php
		$bg_bio = get_field('background_image');
	?>
		<div class="category_bio" style = "background-image: $bg_bio;">

		
				<?php 
					the_content();
				?>
		</div>

		<div class="category_item">
				<?php 
				// check if the repeater field has rows of data
					if( have_rows('portfolio_category') ):

					 	// loop through the rows of data
					    while ( have_rows('portfolio_category') ) : the_row();
							
							
					        // display a sub field value

					        $image = get_sub_field('category_image');
					        $title = get_sub_field('category_title');
							echo $title;
							$link = get_sub_field('category_link');
					        // <img src="images/player.png" alt="the player" id="player" class="player">
// 					        <a href="https://www.w3schools.com">
// <img src="smiley.gif" alt="Go to W3Schools!" width="42" height="42" border="0">
// </a>
      						echo '<a href="' .$link. '"><img src="' .$image. '"></a>'; 
      						echo '<br>';
							




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
				fourohfive_edit_link( get_the_ID() );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	</article>
</div>
