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
    var parentSelectedLanguage = "el";
</script>
<?php if(isset($options['jquery_check']) && $options['jquery_check'] == 'on') { ?>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" crossorigin="anonymous"></script>
<?php } ?>

<?php IncludeAngularFiles(); ?>

<app-root></app-root>

