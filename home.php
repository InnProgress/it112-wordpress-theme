<?php get_header(); ?>

<h2 class="text-2xl md:text-4xl font-extrabold my-8 ml-2 uppercase">Naujienos</h2>
  
<div class="flex flex-wrap flex-col lg:flex-row space-y-4 lg:space-y-0 mb-7">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <a href="<?php echo get_permalink(); ?>" class="block rounded-2xl border-8 border-transparent hover:border-black lg:w-2/6 transition-all">
    <div class="<?php echo $key % 2 != 0 ? "bg-gray-100" : ""; ?> border-2 border-gray-300 hover:border-transparent rounded-xl h-full transition-all">
      <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" class="w-full h-60 bg-cover bg-center rounded-t-xl"></div>
      <div class="py-4 px-7">
        <h3 class="text-2xl md:text-3xl font-bold"><?php the_title(); ?></h3>
        <span class="block text-lg mt-2"><?php echo get_the_date(); ?></span>
      </div>
    </div>
  </a>

  <?php endwhile; else:
  // no posts found
  endif; ?>

</div>

<div class="text-center">
  <?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
