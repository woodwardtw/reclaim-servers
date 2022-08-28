<?php
/**
 * Server functions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function reclaim_server_url(){
	if(get_field('environment_url')){
		$url = get_field('environment_url');
		return "<div class='server-item'>
					<a href='{$url}'>{$url}</a>
				</div>";
	} else {
		return 'This has not been set.';
	}
}

function reclaim_server_tax($field){
	if(get_field($field)){
		$tax = get_field($field);
		foreach ($tax as $key => $value) {
			$name = $value->name;
			$url = get_term_link($value->term_id);
			echo "<div class='server-item'>
					<a href='{$url}'>{$name}</a>
				</div>";
		}
	} else {
		echo 'This has not been set.';
	}
}

function reclaim_server_details(){
	if(get_field('additional_server_details')){
		$details = get_field('additional_server_details');
		echo  "
				<div class='col-md-12'>
					<div class='info-block'>
						<h2>Additional details</h2>
						<div class='server-item'>
							{$details}
						</div>
					</div>
				</div>
		";
	}
}

function reclaim_server_updates(){	
	$html = '';
	 $args = array(
	      'posts_per_page' => 10,
	      'post_type'   => 'update', 
	      'post_status' => 'publish', 
	      'nopaging' => false,
	                    );
	  $the_query = new WP_Query( $args );
	                    if( $the_query->have_posts() ): 
	                      while ( $the_query->have_posts() ) : $the_query->the_post();
	                       //DO YOUR THING
	                      	$title = get_the_title();
	                        $html .= "
	                        	<div class='update server-item'>
	                        		<h3>$title</h3>
	                        		<div class='update-detail'>
	                        			content
	                        		</div>
	                        	</div>	
	                        ";

	                         endwhile;
	                    else:
	                    	echo "<div class='server-item'>No updates.</div>";
	                  endif;
	                 
	            wp_reset_query();  // Restore global post data stomped by the_post().
	   echo $html;
}                    


function reclaim_server_update_form(){
	$args = array(
        'post_id'       => 'new_post',
		'post_title'	=> true,
		'post_content'	=> true,
        'new_post'      => array(        	
            'post_type'     => 'update',
            'post_status'   => 'publish'
        ),
        'submit_value'  => 'Create new update'
    );
	 acf_form($args);
}