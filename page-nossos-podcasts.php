<?php

/**
 * 
 * Template Name: Nossos podcasts
 *
 * @package BasicSASSWordpressTheme
 *
 */

// Header
get_header();
?>

<div id="page-nossos-podcasts" class="content-area">
    <main id="main" class="site-main">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <?php
                    // Set the arguments for the query
                    // Set the arguments for the query
                    $podcasts_args = array(
                        'post_status' => 'publish',
                        'post_type' => 'podcast',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC',
                    );
                    // Verifica o parametro tag na url
                    if (isset($_GET['tag'])) {
                        $podcasts_args['tax_query']  = array(
                            array(
                                'taxonomy'  => 'tag',
                                'field'     => 'slug',
                                'terms'     => $_GET['tag'],
                                'operator'  => 'AND'
                            )
                        );
                    }

                    // WP Query
                    $podcastsQuery = new WP_Query($podcasts_args);
                    $podcasts = $podcastsQuery->posts;
                ?>
                <?php if ($podcasts && sizeof($podcasts) > 0) : ?>
                    <div class="entry-podcasts">
                        <?php foreach ($podcasts as $key => $podcast) : ?>
                            <div class="podcast-item">
                                <div class="podcast-image">
                                    <a href="<?php echo get_permalink($podcast->ID); ?>" class="podcast_item">
                                        <?php echo get_the_post_thumbnail($podcast->ID); ?>
                                    </a>
                                </div>
                                <div class="podcast-content">
                                    <h4 class="podcast-title"><?php echo get_the_title($podcast->ID); ?></h4>
                                    <?php the_content($podcast->ID); ?>
                                    <a href="<?php echo get_permalink($podcast->ID); ?>" class="podcast_item">Ouça</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div><!-- .entry-content -->
                <?php else : ?>
                    <p>Nenhum podcast encontrado.</p>
                <?php endif; ?>

            </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; // End of the loop. 
        ?>
    </main><!-- #main -->
</div>

<?php
// Footer
get_footer();
