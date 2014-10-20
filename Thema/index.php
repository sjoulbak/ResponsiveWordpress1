<?php get_header(); ?>
  <DIV id="content">
    <?php while ( have_posts() ) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
	<h2><?php the_title(); ?></h2>
	<?php the_content( 'Lees meer...'); ?>
	</div>
	<?php endwhile; ?>
  </DIV>
<?php get_sidebar(); ?>
<?php get_footer(); ?>