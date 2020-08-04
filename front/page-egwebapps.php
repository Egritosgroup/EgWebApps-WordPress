<?php $egwebapps_version = $GLOBALS["egwebapps_version"];
get_header();

$pluginFolderName = explode('/', trailingslashit(dirname(plugin_basename( __FILE__ )))); ?>

<link href="<?php echo site_url('/wp-content/themes/xalkida/css/'); ?>egwebapps.css?v=<?php echo $GLOBALS["egritos_version"]; ?>" rel='stylesheet' type='text/css'>

<script>
    var baseHeaderTag = document.createElement('base');
    baseHeaderTag.href ="/egwebapps/";
    document.getElementsByTagName('head')[0].prepend(baseHeaderTag);
</script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<script src="<?php echo site_url('/' . trailingslashit(dirname(plugin_basename( __FILE__ ))) . '/auth-settings'); ?>?v=<?php echo $egwebapps_version; ?>"></script>

<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>common-es5.js?v=<?php echo $egwebapps_version; ?>" nomodule></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>runtime-es5.js?v=<?php echo $egwebapps_version; ?>" nomodule></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>polyfills-es5.js?v=<?php echo $egwebapps_version; ?>" nomodule></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>main-es5.js?v=<?php echo $egwebapps_version; ?>" nomodule></script>

<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>common-es2015.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>runtime-es2015.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>polyfills-es2015.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>main-es2015.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>


<?php

for ($i=6; $i <= 12; $i++) { 
?>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/') . $i; ?>-es5.js?v=<?php echo $egwebapps_version; ?>" nomodule></script>
<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/') . $i; ?>-es2015.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
<?php
}

?>

<script src="<?php echo site_url('/wp-content/plugins/' . $pluginFolderName[0] . '/static/'); ?>scripts.js?v=<?php echo $egwebapps_version; ?>" defer></script>


<app-root></app-root>

<div class="plugin-footer">
v <?php echo $egwebapps_version; ?>
</div>

<?php get_footer(); ?>