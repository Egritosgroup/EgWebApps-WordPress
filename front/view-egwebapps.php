<?php $egwebapps_version = $GLOBALS["egwebapps_version"];
$options = get_option('egr_webapps_plugin_options');
?>

<link href="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>styles.css?v=<?php echo $egwebapps_version; ?>" rel='stylesheet' type='text/css'>
<?php if(!empty($options['extra_css_path'])) { ?>
    <link href="<?php echo site_url() . $options['extra_css_path']; ?>?v=<?php echo $GLOBALS["egritos_version"]; ?>" rel='stylesheet' type='text/css'>
<?php } ?>
<?php if(!empty($options['extra_css'])) { ?>
    <style>
        <?php echo $options['extra_css']; ?>
    </style>
<?php } ?>

<script>
    var baseHeaderTag = document.createElement('base');
    baseHeaderTag.href ="/egwebapps/";
    document.getElementsByTagName('head')[0].prepend(baseHeaderTag);

    var egwebappsVersion = '<?php echo $egwebapps_version; ?>';
</script>
<?php if(isset($options['jquery_check']) && $options['jquery_check'] == 'on') { ?>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" crossorigin="anonymous"></script>
<?php } ?>
<script src="<?php echo site_url('/' . trailingslashit(dirname(plugin_basename( __FILE__ ))) . 'auth-settings'); ?>?v=<?php echo $egwebapps_version; ?>"></script>

<?php if ($handle = opendir('./wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            if(strpos($entry, '.js') !== false) {
                if(strpos($entry, 'es5') !== false) { ?>
                    <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/') . $entry; ?>?v=<?php echo $egwebapps_version; ?>" nomodule></script>
                <?php } else if(strpos($entry, 'es2015') !== false) { ?>
                    <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/') . $entry; ?>?v=<?php echo $egwebapps_version; ?>" type="module"></script>
                <?php } else if(strpos($entry, 'script') !== false) { ?>
                    <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/') . $entry ?>?v=<?php echo $egwebapps_version; ?>" defer></script>
                <?php }
            }
        }
    }
    closedir($handle);
} ?>

<app-root></app-root>

