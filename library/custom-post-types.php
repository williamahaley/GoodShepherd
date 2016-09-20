<?php
/**
 * Created by PhpStorm.
 * User: Will
 * Date: 9/19/2016
 * Time: 8:57 PM
 */

if ( ! function_exists('goodshepherd_post_type') ){

    function goodshepherd_post_type(){

        register_post_type( 'acme_product',
            array(
                'labels' => array(
                    'name' => __( 'Staff' ),
                    'singular_name' => __( 'Staff' )
                ),
                'public' => true,
                'has_archive' => true,
                'capability_tye' => 'page',
            )
        );

    }

}



add_action( 'init', 'goodshepherd_post_type');