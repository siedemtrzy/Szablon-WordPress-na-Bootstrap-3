<?php
/**
 * Search Results Template File
 */ 
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <header>
                <h1>Search Results: &quot;<?php echo get_search_query(); ?>&quot;</h1>
                <br>
            </header>
        <?php if ( have_posts() ) :  // results found?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h2><?php the_title();  ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p> <a href="<?php the_permalink(); ?>">View</a> </p>
                </article>
            <?php endwhile; ?>
        <?php else :  // no results?>
            <article>
                <h3>No Results Found.</h3>
                <br/>
            </article>
        <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
