<?php get_header();
$options = get_option('egr_webapps_plugin_options'); 
echo $options['html_header'] ? $options['html_header'] : ''; ?>
<?php require_once('view-egwebapps.php'); ?>
<?php
echo $options['html_footer'] ? $options['html_footer'] : ''; 
get_footer(); ?>