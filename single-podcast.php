<?php

/**
 * The template for displaying all posts type edificio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BasicSASSWordpressTheme
 */

$pageEdificio = true;

get_header();
?>

<div id="page-single-podcast" class="content-area">
    <main id="main" class="site-main">
        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="description">
                    <div class="entry-thumbnail podcast-image">
                        <?php bswt_post_thumbnail(); ?>
                    </div>
                    <div class="description-content">
                        <h2 class="podcast-title"><?php the_title(); ?></h2>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="share">
                            <h4 class="share-title">Compartilhe</h4>
                            <div class="share-content">
                                <a id="copyToShare" href="" target="_blank" class="share-item tooltip" title="Copy"><svg height="25" viewBox="0 0 511.771 511.771" width="25">
                                        <path d="m189.547 128.897c-60.302 62.391-47.143 165.931 21.932 211.798 2.276 1.512 5.304 1.212 7.259-.698 14.542-14.209 26.844-27.972 37.616-45.476 1.648-2.678.623-6.153-2.142-7.651-10.536-5.708-21.02-16.411-26.922-27.717l-.007.004c-7.07-14.078-9.477-29.859-5.734-46.157.004.001.008.002.012.002 4.307-20.866 26.708-40.276 43.817-58.227-.036-.012-.071-.025-.107-.037l64.103-65.426c25.546-26.073 67.566-26.288 93.377-.477 26.072 25.545 26.503 67.777.958 93.849l-38.828 39.928c-1.797 1.848-2.38 4.544-1.539 6.981 8.94 25.925 11.139 62.48 5.148 90.098-.168.773.786 1.279 1.339.714l82.638-84.344c52.791-53.88 52.343-141.604-.995-194.942-54.433-54.433-143.048-53.98-196.922 1.005l-84.672 86.419c-.112.118-.218.238-.331.354z" />
                                        <path d="m344.038 352.576c-.001.003-.003.006-.004.009.053-.022.102-.043.155-.066 16.865-30.839 20.185-66.208 12.281-100.687l-.036.037-.039-.017c-7.505-30.709-28.098-61.203-56.066-79.978-2.406-1.615-6.249-1.428-8.502.394-14.167 11.455-28.034 26.144-37.184 44.889-1.437 2.943-.361 6.478 2.471 8.122 10.619 6.165 20.209 15.191 26.63 27.174l.01-.007c5.004 8.465 9.935 24.527 6.741 41.785-.002 0-.005 0-.007 0-2.98 22.881-26.086 43.869-44.454 62.781l.009.009c-13.982 14.298-49.525 50.532-63.757 65.072-25.545 26.072-67.777 26.503-93.849.958-26.072-25.545-26.503-67.777-.958-93.849l38.943-40.048c1.765-1.815 2.365-4.453 1.58-6.86-8.647-26.531-11.016-62.262-5.558-89.849.152-.769-.794-1.26-1.343-.7l-81.395 83.075c-53.332 54.433-52.88 143.057 1.006 196.942 54.43 53.33 142.597 52.429 195.927-2.001 18.527-20.724 97.835-94.153 107.399-117.185z" /></svg></a>
                                <a id="shareTwitter" href="" class="share-item" title="Twitter"><svg height="25" viewBox="0 -47 512.00203 512" width="25">
                                        <path d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0" /></svg></a>
                                <a id="shareFacebook" href="" target="_blank" class="share-item" title="Facebook"><svg height="25" viewBox="0 0 24 24" width="25">
                                        <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" /></svg></a>
                            </div>
                        </div>
                        <div class="midias">
                            <div class="midia-content">
                                <?php if (get_field('episodio_spotify')) : ?>
                                    <a href="<?php the_field('episodio_spotify'); ?>" title="Spotify" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/trovao-midia/images/spotify.png')); ?>" alt="Link para ouvir o podcast no Spotify" /></a>
                                <?php endif; ?>
                                <?php if (get_field('episodio_google_podcasts')) : ?>
                                    <a href="<?php the_field('episodio_google_podcasts'); ?>" title="Google Podcasts" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/trovao-midia/images/google.png')); ?>" alt="Link para ouvir o podcast no Google Podcasts" /></a>
                                <?php endif; ?>
                                <?php if (get_field('episodio_apple_podcasts')) : ?>
                                    <a href="<?php the_field('episodio_apple_podcasts'); ?>" title="Apple Podcasts" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/trovao-midia/images/apple.png')); ?>" alt="Link para ouvir o podcast no Apple Podcasts" /></a>
                                <?php endif; ?>
                                <?php if (get_field('episodio_amazon_podcasts')) : ?>
                                    <a href="<?php the_field('episodio_amazon_podcasts'); ?>" title="Amazon Podcasts" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/trovao-midia/images/amazon.png')); ?>" alt="Link para ouvir o podcast no Amazon Podcasts" /></a>
                                <?php endif; ?>
                                <?php if (get_field('episodio_orelo_podcasts')) : ?>
                                    <a href="<?php the_field('episodio_orelo_podcasts'); ?>" title="Orelo Podcasts" target="_blank"><img src="<?php echo esc_url(home_url('/wp-content/themes/trovao-midia/images/orelo.png')); ?>" alt="Link para ouvir o podcast no Orelo Podcasts" /></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="entry-episodios">
                    <?php $episodios = get_field('episodios');
                    if ($episodios && sizeof($episodios) > 0) : ?>
                        <section class="episodios">
                            <?php foreach ($episodios as $key => $episodio) : ?>
                                <div class="episodio_item">
                                    <h4 class="episode-episode"><?php echo $episodio['pod_number']; ?></h4>
                                    <h3 class="episode-title"><?php echo $episodio['pod_titulo']; ?></h4>
                                        <p class="episode-description"><?php echo $episodio['pod_description']; ?></p>
                                        <div class="episode-embed"><?php echo $episodio['pod_embed']; ?></div>
                                </div>
                            <?php endforeach; ?>
                        </section>
                    <?php else : ?>
                        <p>Nenhum episódio encontrado.</p>
                    <?php endif; ?>
                </div><!-- .entry-episodios -->
            </article>

        <?php endwhile; // End of the loop. 
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
