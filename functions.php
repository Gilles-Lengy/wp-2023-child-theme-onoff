<?

/*
 * Importing style.css
 ************************************************/

function my_theme_enqueue_styles() {

    $parent_style = 'twentytwentythree';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('1.0.0')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
 * Reusable blocks
 ************************************************/

function wp00000001_my_block_patterns()
{
    register_block_pattern(
        'wp-2023-child-theme-00000001/project-pattern',
        array(
            'title' => __('Project pattern', 'wp-2023-child-theme-00000001'),
            'description' => _x('The presentation of a project', 'wp-2023-child-theme-00000001'),
            'categories' => array('columns'),
            'content' => '
<!-- wp:group {"className":"container-project","layout":{"type":"constrained"}} -->
<div class="wp-block-group container-project"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><a href="https://01010101.one" target="_blank" rel="noreferrer noopener">One Human Factor</a></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>ONE HUMAN FACTOR is mainly a live project with a lot of improvisions. The tracks are based on noise on beats.</p>
<!-- /wp:paragraph -->

<!-- wp:embed {"url":"https://vimeo.com/one00000001/ohfgam2k19","type":"video","providerNameSlug":"vimeo","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://vimeo.com/one00000001/ohfgam2k19
</div></figure>
<!-- /wp:embed -->

<!-- wp:buttons {"className":"project-various-buttons-container","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons project-various-buttons-container"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.youtube.com/channel/UCignBaZGcxy_Jh7gYE6ZowA" target="_blank" rel="noreferrer noopener">Watch</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://onehumanfactor.bandcamp.com/" target="_blank" rel="noreferrer noopener">Listen</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="https://01010101.one" target="_blank" rel="noreferrer noopener">Website</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
'
        )
    );


}

add_action('init', 'wp00000001_my_block_patterns');