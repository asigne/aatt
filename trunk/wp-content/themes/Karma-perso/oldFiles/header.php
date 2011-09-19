<?php
    session_start();
    
    define("MY_DBTYPE", "MySQL");
	define("MY_HOST", "localhost");
	define("MY_USER","aatt");
	define("MY_PASS", "RSJzMbWywfJSnZfx");
	define("MY_BASE", "wpKevin");	
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
	wp_enqueue_script("pop","/wp-content/themes/Karma-perso/js/script.js");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<!--<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />-->
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<base href="<?php bloginfo('url'); ?>/"/>
<?php wp_head(); ?>
<?php $logo = get_option('ka_sitelogo'); $toolbar = get_option('ka_toolbar'); ?>
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lt8.css" media="screen"/><![endif]-->
<?php 
if (is_page_template('template-homepage-3D.php')) {
echo '<!--[if IE 9]><style stype="text/css">.big-banner #main .flash-main-area .content_full_width {margin-top:105px;clear:both;}</style><![endif]-->';
}
?>
<!--<script src="/wp-content/themes/Karma-perso/js/script.js" type="text/javascript">-->
</head>
<body <?php body_class(); ?>>
<div id="wrapper" <?php if (is_page_template('template-homepage-3D.php') || is_page_template('template-homepage-jquery-2.php')) {echo 'class="big-banner"';} ?>>
<div id="header" <?php if (is_page_template('template-homepage-3D.php')){echo "style='height: 560px;'";} ?>>
<?php if ($toolbar == "true"){ ?>
<div class="top-block">
<div class="top-holder">
<?php if(is_active_sidebar(1)): ?>
    <div class="sub-nav">  
    <ul><?php dynamic_sidebar("Toolbar - Left Side"); ?></ul>
    </div><!-- end sub-nav -->
<?php endif; ?>
<?php if(is_active_sidebar(2)): ?>
    <div class="sub-nav2">
    <?php dynamic_sidebar("Toolbar - Right Side"); ?>
    </div><!-- end sub-nav2 -->
<?php endif; ?>
</div><!-- end top-holder -->
</div><!-- end top-block -->
<?php } ?>

<div class="header-holder">
<div class="rays">
<div class="header-area<?php if (is_search()) {echo ' search-header';} ?><?php if (is_404()) {echo ' error-header';} ?><?php if (is_page_template('template_sitemap.php')) {echo ' search-header';} ?>">
<?php
$logo = get_option('ka_sitelogo');
$custom_logo = get_option('ka_logo_icon');
$custom_logo_text = get_option('ka_logo_text');
if ($custom_logo_text == ''){
?>

<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" /></a>
<?php }else{?>
<a href="<?php echo home_url(); ?>" class="custom-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/_global/<?php echo $custom_logo; ?>" alt="<?php bloginfo('name'); ?>" /><span class="logo-text"><?php echo $custom_logo_text; echo '</span></a>';}?>

<?php
	if ($_SESSION['connecte'] == 0){
?>
		<a class="creerCompte ka_button small_button small_skyblue" href="creerCompte" style="opacity: 1;"><span>Créer un compte</span></a>
		<a class="login ka_button small_button small_skyblue" href="javascript:void(0);" style="opacity: 1;"><span>Etes-vous adhérent ?</span></a>
		<div id="login-popup">
                    <form method="post" id="UserHomeForm" class="form account-form jqtransformdone" action="espace-adherent/"><div style="display:none;"><input type="hidden" value="POST" name="_method"></div>                        <fieldset>
                            <div class="form-holder">
                                <div class="form-section">
                                    <div class="row">
                                        <label for="UserId"><span class="mark">&nbsp;</span>Email:</label>
                                        <div class="input-block">
                                            <span class="text"><input type="text" id="UserId" name="identifiant"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="UserPassword"><span class="mark">&nbsp;</span>Mot de passe:</label>

                                        <div class="input-block">
                                            <span class="text"><input type="password" id="UserPassword" name="pass"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="align-center">
                                        <a href="mot-de-passe-oublie">Mot de passe oublié ?</a>                                    </div>
                                </div>
                                <div class="submit"><input type="submit" value="Se connecter" id="LoginButton" class="account-submit"></div>
                            </div>
                        </fieldset>
                    </form>           
        			<div id="login-bottom"></div>
        </div>
    	
<?php
	}
	else{
?>
		<a class="logout ka_button small_button small_skyblue" href="/logout" style="opacity: 1;"><span>Se déconnecter</span></a>
		<a class="espace-adherent ka_button small_button small_skyblue" href="/espace-adherent" style="opacity: 1;"><span>Espace adhérent</span></a>
<?php	if ($_SESSION['droits'] == 1){	?>
			<a class="espace-administration ka_button small_button small_skyblue" href="/administration" style="opacity: 1;"><span>Administration</span></a>
<?php
		}
		else{?>
			<a class="espace-profil ka_button small_button small_skyblue" href="/espace-adherent/mon-profil" style="opacity: 1;"><span>Mon Profil</span></a>
<?php	}
	}
?>



<?php if(has_nav_menu('Primary Navigation')):
echo '<ul id="menu-main-nav">';
if (function_exists('wp_nav_menu')) {	
wp_nav_menu( array(
 'container' =>false,
 'theme_location' => 'Primary Navigation',
 'sort_column' => 'menu_order',
 'menu_class' => '',
 'echo' => true,
 'before' => '',
 'after' => '',
 'link_before' => '',
 'link_after' => '',
 'depth' => 0,
 'walker' => new description_walker())
 );
}
echo '</ul>';
endif;
?>