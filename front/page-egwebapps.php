<?php get_header(); ?>
<link href="<?php echo site_url('/wp-content/themes/xalkida/css/'); ?>egwebapps.css?v=<?php echo $GLOBALS["egritos_version"]; ?>" rel='stylesheet' type='text/css'>

<script>
    var baseHeaderTag = document.createElement('base');
    baseHeaderTag.href ="/egwebapps/";
    document.getElementsByTagName('head')[0].prepend(baseHeaderTag);
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
<script src="<?php echo site_url('/egwebapps/auth-settings'); ?>?v=<?php echo $GLOBALS["egritos_version"]; ?>"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>common-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>runtime-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>polyfills-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>main-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>5-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>6-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>7-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>8-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>9-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>10-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>11-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>common-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>runtime-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>polyfills-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>main-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>5-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>6-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>7-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>8-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>9-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>10-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>11-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>

<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>runtime-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>runtime-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule defer></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>polyfills-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule defer></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>polyfills-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>scripts.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" defer></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>main-es2015.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" type="module"></script>
<script src="<?php echo site_url('wp-content/plugins/egwebapps/src/'); ?>main-es5.js?v=<?php echo $GLOBALS["egritos_version"]; ?>" nomodule defer></script>

<app-root></app-root>

<?php get_footer(); ?>