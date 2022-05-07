<?php get_header(); ?>

<section id="content">

  <div class="content-wrap">


    <div class="container clearfix">


      <div class="postcontent nobottommargin clearfix">

        <?php
        if( have_posts() ):
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

  <!-- Entry Title
                  ============================================= -->
  <div class="entry-title">
    <h2><?php the_title(); ?></h2>
  </div><!-- .entry-title end -->

  <!-- Entry Meta
                  ============================================= -->
  <ul class="entry-meta clearfix">
    <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
    <li>
      <a href="<?php $author_URL; ?>">
        <i class="icon-user"></i> <?php the_author(); ?>
      </a>
    </li>
    <li><i class="icon-folder-open"></i> <?php the_category(', '); ?></li>
    <li><i class="icon-comments"></i> <?php comments_number('0'); ?></li>
  </ul><!-- .entry-meta end -->

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

    
    <!-- Tag Cloud
                      ============================================= -->
    <div class="tagcloud clearfix bottommargin">
      <?php the_tags( '', ' ' ); ?>
    </div><!-- .tagcloud end -->

    <div class="clear"></div>

  </div>
</div><!-- .entry end -->

<!-- Post Navigation
              ============================================= -->
<div class="post-navigation clearfix">

  <div class="col_half nobottommargin">
    <?php previous_post_link(); ?>
  </div>

  <div class="col_half col_last tright nobottommargin">
    <?php next_post_link(); ?>
  </div>

</div><!-- .post-navigation end -->

<div class="line"></div>

<!-- Post Author Info
              ============================================= -->
<div class="card">
  <div class="card-header">
    <strong>
      Posted by
      <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
    </strong>
  </div>
  <div class="card-body">
    <div class="author-image">
      <?php echo get_avatar( $author_ID, 90, '', $author_NAME, array(
        'class' => 'img-circle'
      ) ); ?>
    </div>
    <?php echo nl2br(get_the_author_meta( 'description' )); ?>
  </div>
</div><!-- Post Single - Author End -->

<div class="line"></div>

<h4>Related Posts:</h4>

<div class="related-posts clearfix">

  <div class="mpost clearfix">
    <div class="entry-image">
      <a href="#">
        <img src="images/blog/small/10.jpg">
      </a>
    </div>
    <div class="entry-c">
      <div class="entry-title">
        <h4>
          <a href="#">
            This is an Image Post
          </a>
        </h4>
      </div>
      <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> 10th July 2014</li>
        <li><i class="icon-comments"></i> 12</li>
      </ul>
      <div class="entry-content">
        Lorem ipsum dolor sit amet, consectetur adipisicing
        elit. Mollitia nisi perferendis.
      </div>
    </div>
  </div>

  <div class="mpost clearfix">
    <div class="entry-image">
      <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
    </div>
    <div class="entry-c">
      <div class="entry-title">
        <h4><a href="#">This is a Video Post</a></h4>
      </div>
      <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> 24th July 2014</li>
        <li><i class="icon-comments"></i> 16</li>
      </ul>
      <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing
        elit. Mollitia nisi perferendis.</div>
    </div>
  </div>

</div>

<?php 
if(comments_open() || get_comments_number()):
  comments_template(); 
endif;
?>



</div>
        <?php
            endwhile;
        endif;   
        ?>

    

      <?php get_sidebar(); ?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>