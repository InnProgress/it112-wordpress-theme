<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="relative h-96 text-white rounded-t-xl bg-cover bg-center p-6 mt-4" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
  <div class="absolute top-0 left-0 w-full h-5/6 bg-gradient-to-b from-black to-transparent rounded-t-xl"></div>
  <h1 class="relative z-10 text-3xl md:text-4xl lg:text-5xl font-bold mb-1 md:mb-4"><?php the_title(); ?></h1>
  <span class="relative z-10"><?php echo get_the_date(); ?></span>
</div>
<div class="mt-5">
  <?php the_content(); ?>
</div>

<?php endwhile; else : ?>
<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
