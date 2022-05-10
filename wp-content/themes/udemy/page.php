<?php 
get_header(); 
?>
<!-- Page Title
    ============================================= -->
<section id="page-title">
    <div class="container clearfix">
    <h1><?php single_post_title(); ?><h1>
    <?php
    if( function_exists('the_subtitle') ):
    ?>
        <span><?php the_subtitle(); ?></span>
    <?php 
    endif;
    ?>
    </div>
</section><!-- #page-title end -->

<section id="content">

  <div class="content-wrap">


    <div class="container clearfix">


      <div class="postcontent nobottommargin clearfix">

        <?php
            while( have_posts() ): the_post();
                global $post;
                $author_ID = $post->post_author;
                $author_NAME = get_the_author_meta( 'nickname', $author_ID );
                $author_URL = get_author_posts_url( $author_ID );
        ?>
  <div class="single-post nobottommargin">

<!-- Single Post
              ============================================= -->
<div class="entry clearfix">


  <!-- Entry Image
                  ============================================= -->
            <?php if(has_post_thumbnail()): ?>
                <div class="entry-image">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'full' ); ?>
                    </a>
                </div>
            <?php endif; ?>

  <!-- Entry Content
                  ============================================= -->
  <div class="entry-content notopmargin">

    <?php 
    the_content(); 

    $defaults = array(
        'before'    => '<p class="text-center">' . __('Pages: ', 'udemy'),
        'after'     => '</p>',
    );
    wp_link_pages( $defaults );
    ?>

    


    <div class="clear"></div>

  </div>
</div><!-- .entry end -->


<div class="line"></div>

<?php 
if(comments_open() || get_comments_number()):
  comments_template(); 
endif;
?>



</div>
        <?php
            endwhile;  
        ?>

    

      <?php get_sidebar(); ?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>