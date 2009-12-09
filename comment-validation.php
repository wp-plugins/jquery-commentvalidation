<?php
/*
Plugin Name: jQuery CommentValidation
Plugin URI: http://foo.iskandar.web.id
Description: jQuery Validation for WP comment system
Author: FoO Iskandar
Version: 0.1
Author URI: http://iskandar.web.id
*/

function jQuerycommentValidation() {

echo '<link rel="stylesheet" href="';
bloginfo('wpurl');
echo '/wp-content/plugins/jQuery-comment-validation/comment-validation.css"></script>';

echo '<script type="text/javascript" src="';
bloginfo('wpurl');
echo '/wp-content/plugins/jQuery-comment-validation/jquery.validate.js"></script>';
echo '<script type="text/javascript" src="';
bloginfo('wpurl');
echo '/wp-content/plugins/jQuery-comment-validation/comment-validation.js"></script>';

}

add_action('wp_head', 'jQuerycommentValidation');

?>