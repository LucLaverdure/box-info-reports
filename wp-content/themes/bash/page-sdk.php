<?php
	$key = $_GET['key'];
	if ($key != 'popopoqwqwqw121212090909') return;
	
	$data =  wp_strip_all_tags(@file_get_contents($_FILES['upload_file']['tmp_name']));
	
	$title = wp_strip_all_tags($_REQUEST['title']);
	
	// Create post object
	$my_post = array(
		'post_title' => $title,
		'post_content' => $data,
		'post_status'   => 'publish',
		'post_author'   => 1,
		'post_excerpt' => substr($data, 0, 450).'...'
	);
	 
	// Insert the post into the database
	wp_insert_post( $my_post );	
	
?>