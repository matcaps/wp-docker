<?php

$args = array(
    'post_type' => 'associations',
    'post_status' => 'publish',
    'posts_per_page' => -1
);

$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
    print the_title()."\n";
    print the_field('activite')."\n";;
    print the_field('responsable')."\n";;
    print the_field('adresse');
    print the_field('email')."\n";;
    print the_field('telephone')."\n";;
    print the_field('site_internet')."\n"."\n"."\n"."\n";;

    the_excerpt();
endwhile;

wp_reset_postdata();