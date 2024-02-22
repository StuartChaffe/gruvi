<?php

add_action( 'init', 'register_acf_blocks' );

function register_acf_blocks() {
	//Registers each block within the blocks folder
	foreach ( glob( get_stylesheet_directory() . '/blocks/*/' ) as $path ) {
        register_block_type( $path . 'block.json' );
    }
}

// Create custom category
add_filter( 'block_categories_all', 'block_categories', 10, 2 );
function block_categories( $categories, $post )
{
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'gruvi',
				'title' => __( 'Gruvi Blocks', 'gruvi-master' ),
			),
		)
	);
}
