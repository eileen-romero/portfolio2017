<?php
/**
 * Template part for displaying portfolio content in portfolio.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! fourohfive_is_frontpage() ) ) ) : ?>
  <div style="background: url(<?php the_post_thumbnail_url( 'full' ); ?>) center center no-repeat; background-size: cover; -webkit-transform: translate3d(0,0,0); translate3d(0,0,0); background-attachment: fixed; height: 50vh;">
  </div>
<?php endif; ?>

<div class="container py-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
      <?php the_title( '<h1 class="display-4">', '</h1>' ); ?>
    </header>
    <div class="entry-content">
      <?php
        the_content();

        fourohfive_edit_link( get_the_ID() );

        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>
    </div>
  </article>
</div>


<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>

  <header>
    <?php if ( '' !== get_the_post_thumbnail() ) : ?>
      <div class="card-img-top img-fluid">
        <?php the_post_thumbnail( 'fourohfive-featured-image', array( 'class' => 'img-fluid' ) ); ?>
      </div>
    <?php endif; ?>
  </header>

  <div class="card-block">
    <?php the_title( '<h1 class="card-title display-4">', '</h1>' ); ?>
    <h2 class="card-subtitle h6 mb-4 text-muted"><?php the_author(); ?> on <?php the_time('F jS, Y') ?></h2>

    <?php
    // What is this springf?????
      the_content( sprintf(
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'four-oh-five' ),
        get_the_title()
      ) );


      $projectName = get_field('project_name');
      echo '<h2>Projects</h2>'
      echo '<p>'. the_field('project_name').'</p>';

      $image = get_field('image');
      echo $image; 

      wp_link_pages( array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'four-oh-five' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      ) );
    ?>
  </div>

  <?php if ( is_single() ) : ?>
    <?php fourohfive_entry_footer(); ?>
  <?php endif; ?>

</article>

