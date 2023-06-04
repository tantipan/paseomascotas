<?php
function astra_child_add_slider() {
    if ( is_front_page() && function_exists( 'metaslider' ) ) {
        echo do_shortcode('[metaslider id="101"]');
    }
}
add_action( 'astra_content_before', 'astra_child_add_slider' );


function astra_child_add_metaslider_to_cover() {
    if ( is_front_page() && function_exists( 'metaslider' ) ) {
        echo '<div class="meta-slider-container">';
        echo do_shortcode( '[metaslider id="101"]' );
        echo '</div>';
    }
}
add_action( 'astra_header_after', 'astra_child_add_metaslider_to_cover' );

?>
