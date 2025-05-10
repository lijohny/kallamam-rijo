<?php
/*
*
* Template Name: story page
*
*/
get_header();
?>



<!-- Blog Story Page Start -->
<div class="bg-white text-gray-800 font-sans">
  <!-- Hero Image -->
  <div class="w-full">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/mexican-people-attending-church.jpg'); ?>" alt="Blog Post" class="w-full h-[85dvh] aspect-video object-cover" />
    <?php 
    $banner_url = get_field('storry_banner');

    if ($banner_url): ?>
        <img src="<?php echo esc_url($banner_url); ?>" alt="Story Banner" class="w-full h-[80vh] object-cover" />
    <?php endif; ?>

  </div>

  <!-- Content Container -->
  <div class="max-w-3xl mx-auto px-4 py-8 lg:mt-0 z-10 relative bg-white/70">
    <!-- Title -->
    <h1 class="text-4xl font-bold mb-2"><?php the_title(); ?></h1>

    <!-- Meta Info -->
    <div class="text-sm text-gray-500 mb-4">
      <span><?php echo get_the_date(); ?></span> 
      <!-- <span class="underline">Uncategorized</span> | -->
      <!-- <span>Comments (<?php echo get_comments_number(); ?>)</span> -->
    </div>

    <!-- Post Content -->
    <?php while (have_posts()) : the_post(); ?>
      <div class="prose prose-sm max-w-none story-area">
        <?php echo wp_kses_post(get_field('story_area')); ?>
      </div>
    <?php endwhile; ?>


    <!-- Sample Extra Content (Remove or Customize as Needed)
    <h2 class="text-2xl font-semibold mt-6 mb-2">Why Regular Meals Matter</h2>
    <p class="mb-4">Consistent eating patterns help regulate hormones, digestion, and metabolism. Irregular meals can lead to:</p>

    <ol class="list-decimal ml-6 mb-6 space-y-1">
      <li>Insulin resistance</li>
      <li>Disrupted circadian rhythm</li>
      <li>Increased inflammation</li>
    </ol>

    <ul class="list-disc ml-6 mb-6 space-y-1">
      <li>Try to keep your meal times consistent, even on off days.</li>
      <li>Avoid high-sugar snacks during night shifts.</li>
      <li>Stay hydrated and take short breaks if possible.</li>
    </ul> -->

    
    <h6 class="text-sm font-semibold mb-1 text-gray-600">Written by: <span class="font-normal"><?php the_author(); ?></span></h6>
  </div>

</div>
<!-- Blog Story Page End -->

<?php get_footer(); ?>
