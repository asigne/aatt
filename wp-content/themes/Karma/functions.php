<?php
/* DEFINE FILE DIRECTORIES */
define('KARMA_FUNCTIONS', TEMPLATEPATH . '/functions');
define('KARMA_GLOBAL', TEMPLATEPATH . '/functions/global');
define('KARMA_ADMIN', TEMPLATEPATH . '/functions/admin');
define('KARMA_EXTENDED', TEMPLATEPATH . '/functions/extended');
define('KARMA_CONTENT', TEMPLATEPATH . '/functions/content');
define('KARMA_JS', get_template_directory_uri() . '/js');
define('KARMA_FRAMEWORK', get_template_directory_uri() . '/functions');
define('KARMA_CSS', get_template_directory_uri() . '/css/');
define('KARMA_HOME', get_template_directory_uri());
define('TRUETHEMES', TEMPLATEPATH . '/functions/truethemes');

/* LOAD GLOBAL ELEMENTS */
require_once(KARMA_GLOBAL . '/shortcodes.php');
require_once(KARMA_GLOBAL . '/shortcodes-old.php');
require_once(KARMA_GLOBAL . '/widgets.php');
require_once(KARMA_GLOBAL . '/sidebars.php');
require_once(KARMA_GLOBAL . '/javascript.php');
require_once(KARMA_GLOBAL . '/theme_functions.php');
require_once(KARMA_GLOBAL . '/basic.php');
require_once(KARMA_GLOBAL . '/nav-output.php');

/* LOAD CONTENT */
require_once(KARMA_CONTENT . '/custom-login.php');

/* LOAD TRUETHEMES FUNCTIONS */
require_once(TRUETHEMES . '/upgrade/init.php');
require_once(TRUETHEMES . '/wysiwyg/wysiwyg.php');
require_once(TRUETHEMES . '/update-notifier.php');
require_once(TRUETHEMES . '/image-thumbs.php');
$ka_formbuilder = get_option('ka_formbuilder');
if ($ka_formbuilder == "true"){require_once(TRUETHEMES . '/contact-form/truethemes-contact-form.php');}

/* LOAD ADMIN */
require_once(KARMA_ADMIN . '/admin-functions.php');
require_once(KARMA_ADMIN . '/admin-interface.php');
require_once(KARMA_ADMIN . '/theme-options.php');
require_once(KARMA_ADMIN . '/theme-functions.php');
require_once(KARMA_ADMIN . '/write_panels.php');

/* LOAD EXTENDED FUNCTIONALITY */
require_once(KARMA_EXTENDED . '/pricing-tables/pricing.php');
require_once(KARMA_EXTENDED . '/multiple_sidebars.php');
require_once(KARMA_EXTENDED . '/breadcrumbs.php');
require_once(KARMA_EXTENDED . '/3d-tag-cloud/wp-cumulus.php');
require_once(KARMA_EXTENDED . '/twitter/latest-tweets.php');
require_once(KARMA_EXTENDED . '/page_linking.php');
if(!function_exists('wp_pagenavi')){require_once(KARMA_EXTENDED . '/wp-pagenavi.php');}

require_once(KARMA_GLOBAL . '/navMenuCustom.php');
?>