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

