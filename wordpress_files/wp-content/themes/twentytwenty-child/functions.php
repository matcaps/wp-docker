<?php

/* enqueue scripts and style from parent theme */
function twentytwenty_styles()
{
    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
}

function willersurthur_init()
{
    //Taxonomy
    register_taxonomy( "associations_taxonomy", "associations" , [
        'label' => "Catégories d'association",
        "capabilities" => [
            "manage_terms", "edit_terms", "assign_terms"
        ],
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'hierarchical' => true // si hierarchical, alors categorie, sinon etiquette
    ]);

    //Taxonomy
    register_taxonomy( "publications_taxonomy", "publications" , [
        'label' => "Catégories de publication",
        "capabilities" => [
            "manage_terms", "edit_terms", "assign_terms"
        ],
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'hierarchical' => true // si hierarchical, alors categorie, sinon etiquette
    ]);

    //Taxonomy
    register_taxonomy( "employes_municipaux_taxonomy", "employes_municipaux" , [
        'label' => "Catégories d'employés",
        "capabilities" => [
            "manage_terms", "edit_terms", "assign_terms"
        ],
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'hierarchical' => true // si hierarchical, alors categorie, sinon etiquette
    ]);

    register_post_type('associations', [
        'label' => "Associations",
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'has_archive' => true,
        'taxonomies' => array('associations_taxonomy'),
//        'menu_position' => 3
    ]);
    register_post_type('entreprises', [
        'label' => "Entreprises",
        'public' => true,
        'menu_icon' => 'dashicons-admin-multisite',
//        'menu_position' => 11
    ]);
    register_post_type('commerces', [
        'label' => "Commerces",
        'public' => true,
        'menu_icon' => 'dashicons-cart',
//        'menu_position' =>12
    ]);
    register_post_type('equipe_municipale', [
        'label' => "Equipe Municipale",
        'public' => true,
        'menu_icon' => 'dashicons-admin-users',
        'has_archive' => true
//        'menu_position' =>13
    ]);
    register_post_type('employes_municipaux', [
        'label' => "Employés Municipaux",
        'public' => true,
        'menu_icon' => 'dashicons-admin-tools',
//        'menu_position' =>14
    ]);
    register_post_type('publications', [
        'label' => "Publications",
        'public' => true,
        'menu_icon' => 'dashicons-format-aside',
        'has_archive' => true
//        'menu_position' =>14
    ]);
}

add_action('init', 'willersurthur_init');
add_action('wp_enqueue_scripts', 'twentytwenty_styles');