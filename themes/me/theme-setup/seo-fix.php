<?php

add_filter( 'wpseo_breadcrumb_links', 'fix_yoast_page_hierarchy' );

function fix_yoast_page_hierarchy( $links ) {
    if ( is_page() ) {
        global $post;

        // Remove current page link Yoast adds automatically
        array_pop( $links );

        $parents = get_post_ancestors( $post );
        $parents = array_reverse( $parents );

        foreach ( $parents as $parent_id ) {
            $links[] = array(
                'url' => get_permalink( $parent_id ),
                'text' => get_the_title( $parent_id ),
            );
        }

        // Re-add the current page at the end
        $links[] = array(
            'url' => get_permalink( $post ),
            'text' => get_the_title( $post ),
        );
    }

    return $links;
}