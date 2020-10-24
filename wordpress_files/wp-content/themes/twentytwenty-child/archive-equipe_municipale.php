<?php

$args = array(
    'post_type' => 'equipe_municipale',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_key'			=> 'ordre_protocolaire',
    'orderby'			=> 'meta_value_num',
    'order' => "ASC"
);

$loop = new WP_Query( $args );


while ( $loop->have_posts() ) : $loop->the_post();
    print "ordre_protocolaire : ".get_field('ordre_protocolaire' , get_the_ID())."\n";
    print the_title()."\n";
    echo get_field('role', get_the_ID())."\n\n\n";;
    the_excerpt();
endwhile;

wp_reset_postdata();