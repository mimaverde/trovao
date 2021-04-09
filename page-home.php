<?php
/**
 * 
 * Template Name: Homepage
 *
 * @package BasicSASSWordpressTheme
 *
 */

// Header
get_header();
?>

<div id="page-homepage" class="content-area">
    <main id="main" class="site-main">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
                <!-- <div id="waveform"></div> -->
                <!-- <div class="entry-player" id="player">
                    <div id="title">
                        <span id="track"></span>
                        <div id="timer">0:00</div>
                        <div id="duration">0:00</div>
                    </div>
                    <div id="bar"></div>
                    <div class="box-progress">
                        <div id="progress"></div>
                    </div>
                    <div class="controlsOuter">
                        <div class="controlsInner">
                        <div id="loading"></div>
                        <div class="btn" id="prevBtn">
                            <svg width="10" viewBox="0 0 25.5 33.19">
                                <path d="M9.84,22.05,32.76,37.86a.8.8,0,0,0,.82,0,.8.8,0,0,0,.42-.7V5.6a.77.77,0,0,0-.42-.7.81.81,0,0,0-.37-.09.75.75,0,0,0-.45.14L9.84,20.75a.8.8,0,0,0-.34.65A.79.79,0,0,0,9.84,22.05Z" transform="translate(-8.5 -4.81)"/>
                                <rect x="8.5" y="4.81" width="6" height="33.19" transform="translate(14.5 38) rotate(180)"/>
                            </svg>
                        </div>
                        <div class="btn" id="playBtn">
                            <svg width="21" viewBox="0 0 41.999 41.999">
                                <path d="M36.068,20.176l-29-20C6.761-0.035,6.363-0.057,6.035,0.114C5.706,0.287,5.5,0.627,5.5,0.999v40
                                    c0,0.372,0.206,0.713,0.535,0.886c0.146,0.076,0.306,0.114,0.465,0.114c0.199,0,0.397-0.06,0.568-0.177l29-20
                                    c0.271-0.187,0.432-0.494,0.432-0.823S36.338,20.363,36.068,20.176z"/>
                            </svg>
                        </div>
                        <div class="btn" id="pauseBtn">
                            <svg width="13" viewBox="0 0 22.06 33.19">
                                <rect x="26.43" y="5.47" width="6.6" height="33.19" transform="translate(48.49 38.66) rotate(180)"/>
                                <rect x="10.97" y="5.47" width="6.6" height="33.19" transform="translate(17.57 38.66) rotate(180)"/>
                            </svg>
                        </div>
                        <div class="btn" id="nextBtn">
                            <svg width="10" viewBox="0 0 25.5 33.19">
                                <path d="M32.66,20.75,9.74,5a.78.78,0,0,0-.82,0,.77.77,0,0,0-.42.7V37.21a.8.8,0,0,0,.42.7.81.81,0,0,0,.37.09.82.82,0,0,0,.45-.14L32.66,22.05a.79.79,0,0,0,0-1.3Z" transform="translate(-8.5 -4.81)"/>
                                <rect x="19.5" width="6" height="33.19"/>
                            </svg>
                        </div>
                        </div>
                        <div class="btn" id="playlistBtn"></div>
                        <div class="btn" id="volumeBtn"></div>
                    </div>
                    <div id="playlist">
                        <div id="list"></div>
                    </div>
                    <div id="volume" class="fadeout">
                        <div id="barFull" class="bar"></div>
                        <div id="barEmpty" class="bar"></div>
                        <div id="sliderBtn"></div>
                    </div>
                </div>
                
            </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; // End of the loop. ?>
    </main><!-- #main -->
</div>

<?php
// Footer
get_footer();