<section id="LatestPost">
  <div class="container-fluid default-spacing">
    <div class="row row-padding">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
       <h2>Recent <span style="font-weight: 700; color: #178be7;">Thoughts</span></h2>
     </div>
    </div>
    <div class="row row-padding">
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/hsrathore/blog/wp-load.php');
$args = array(
// 'cat' => 3, // Only source posts from a specific category
'posts_per_page' => 3 // Specify how many posts you'd like to display
);
$latest_posts = new WP_Query( $args );
if ( $latest_posts->have_posts() ) {
while ( $latest_posts->have_posts() ) {
$latest_posts->the_post(); ?>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 col-4-custom">
<div class="card card-custom">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php if ( has_post_thumbnail() ) { ?>
<span class="post_thumbnail"><?php the_post_thumbnail(); ?></span><br/>
<?php } ?>
<span class="post_title"><?php the_title(); ?></span><br/>
</a>
<span class="post_time">Posted on <?php the_time('l jS F, Y') ?></span>
<p><?php the_excerpt(); ?></p>
</div>
</div>
<?php }
} else {
echo '<p>There are no posts available</p>';
}
wp_reset_postdata();
?>
</section>
