<?php //show plugin template if theme template not found
$options = get_option('egr_webapps_plugin_options');

if (isset($options['shortcode']) && $options['shortcode'] == 'on') {
   add_filter('request', function ($query_vars) {

      if (strpos($_SERVER['REQUEST_URI'], '/egwebapps') > -1) {
         $query_vars['pagename'] = 'egwebapps';
      }

      return $query_vars;
   });

   function wpb_shortcode_egwebapps()
   {
      ob_start();
      include dirname(__FILE__) . '/view-egwebapps.php';
      return ob_get_clean();
   }
   add_shortcode('shortcode-egwebapps', 'wpb_shortcode_egwebapps');
} else {
   add_action('parse_request', 'egwebapps_url_handler');
   function egwebapps_url_handler()
   {
      if (strpos($_SERVER['REQUEST_URI'], '/egwebapps') > -1) {
         if (file_exists(get_template_directory() . '/page-egwebapps.php')) {
            require_once(get_template_directory() . '/page-egwebapps.php');
         } else {
            require_once('page-egwebapps.php');
         }
         exit();
      }
   }
}

function sortFilesfromFolder($a, $b)
{
   $a = explode('-', $a);
   $b = explode('-', $b);

   if ($a[0] == $b[0]) {
      return 0;
   }
   return ($a[0] < $b[0]) ? -1 : 1;
}

function IncludeAngularFiles()
{
   $egwebapps_version = $GLOBALS["egwebapps_version"];

   if ($handle = opendir('./wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/')) {
      /* <script src="<?php //echo site_url('/' . trailingslashit(dirname(plugin_basename(__FILE__))) . 'auth-settings'); ?>?v=<?php echo $egwebapps_version; ?>"></script>
      <script src="<?php //echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>runtime.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php //echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>polyfills.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php //echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>main.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php //echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>common.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php //echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>scripts.js?v=<?php echo $egwebapps_version; ?>" type="module"></script> */

      $chunkFiles = [];
      $mainFiles = [];

      while (false !== ($entry = readdir($handle))) {
         if ($entry != "." && $entry != "..") {
            if (strlen($entry) > 0 && ctype_digit(substr($entry, 0, 1))) {
               array_push($chunkFiles, $entry);
            }

            /* if (strpos($entry, '.js') !== false) {
               if (strpos($entry, 'es5') !== false) {
                  if (strpos($entry, 'runtime') !== false || strpos($entry, 'polyfills') !== false || strpos($entry, 'main') !== false || strpos($entry, 'common') !== false) {
                     array_push($es5mainFiles, $entry);
                  } else {
                     array_push($es5Files, $entry);
                  } ?>
               <?php } else if (strpos($entry, 'es2015') !== false) {
                  if (strpos($entry, 'runtime') !== false || strpos($entry, 'polyfills') !== false || strpos($entry, 'main') !== false || strpos($entry, 'common') !== false) {
                     array_push($es2015mainFiles, $entry);
                  } else {
                     array_push($es2015Files, $entry);
                  } ?>
               <?php } else if (strpos($entry, 'script') !== false) { ?>
                  <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>scripts.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
               <?php }
            } */
         }
      }

      arsort($chunkFiles);
      usort($chunkFiles, "sortFilesfromFolder"); ?>

      <script src="<?php echo site_url('/' . trailingslashit(dirname(plugin_basename(__FILE__))) . 'auth-settings'); ?>?v=<?php echo $egwebapps_version; ?>"></script>
      <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>runtime.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>polyfills.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>main.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>
      <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>common.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>

      <?php foreach ($chunkFiles as $i) { ?>
         <script src="<?= site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/') . $i; ?>?v=<?= $egwebapps_version; ?>" nomodule></script>
      <?php } ?>

      <script src="<?php echo site_url('/wp-content/plugins/' . $GLOBALS['pluginFolderName'][0] . '/static/'); ?>scripts.js?v=<?php echo $egwebapps_version; ?>" type="module"></script>

<?php closedir($handle);
   }
} ?>