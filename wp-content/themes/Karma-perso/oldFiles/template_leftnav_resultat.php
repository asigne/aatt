<?php
/*
Template Name: Left Nav Resultats
*/
?>
<?php get_header(); ?>
</div><!-- header-area -->
</div><!-- end rays -->
</div><!-- end header-holder -->
</div><!-- end header -->
    <div id="main">
<?php load_template(TEMPLATEPATH . '/functions/content/tools.php'); ?>

<div class="main-holder">

<?php
	if ($_SESSION['connecte'] == 0){
		if(isset($_POST['identifiant'], $_POST['pass']) && $_POST['identifiant'] != NULL && $_POST['pass'] != NULL) {
		
		define("MY_DBTYPE", "MySQL");
		define("MY_HOST", "localhost");
		define("MY_USER","aatt");
		define("MY_PASS", "RSJzMbWywfJSnZfx");
		define("MY_BASE", "wpKevin");
				
		$link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
		mysql_select_db(MY_BASE, $link);
	
		$login=$_POST['identifiant'];
		$pwd=md5($_POST['pass']);
		
		$query = mysql_query("SELECT * FROM kv_adherents WHERE mail='$login'");
		$data = mysql_fetch_array($query);
		if ($data[2] == $pwd){
			$_SESSION['login'] = $data['mail'] ;
			$_SESSION['connecte'] = 1;
			$_SESSION['idAdherent'] = $data['idAdherent'];
			$_SESSION['droits'] = $data['droits'];
			print("Merci de vous vous être connecte ! Vous allez etre redirige ...</br>");
			echo '<meta http-equiv="refresh" content="0;url=http://localhost:8888/wordpressKevin/espace-adherent/" />';
		}
			else{
				echo "<span id=\"erreur\">Echec de la connexion : Login ou mot de pass érroné<span>";	
			}
		}
		else{
			echo "<span id=\"erreur\">Vous avez oublié un champ<span>";
		}
	}
	else{
		//retrieve value for sub-nav checkbox
		global $post;
		$post_id = $post->ID;
		$meta_value = get_post_meta($post_id,'truethemes_page_checkbox',true);

		if(empty($meta_value)){
			load_template(TEMPLATEPATH . '/functions/global/subnav-left-custom.php');
		}else{ ?>
			<div id="sub_nav">
			<ul class="sub-menu">
			<?php //generated_dynamic_sidebar(); 
		?>
		</ul>
		</div><!-- end sub_nav -->
<?php } ?>		
		<div id="content">

		<?php 
$ka_blogtitle = get_option('ka_blogtitle');
$ka_searchbar = get_option('ka_searchbar');
$ka_crumbs = get_option('ka_crumbs');
$ka_blogbutton = get_option('ka_blogbutton');
$ka_blogauthor = get_option('ka_blogauthor');
$ka_related_posts = get_option('ka_related_posts');
$ka_related_posts_title = get_option('ka_related_posts_title');
$ka_related_posts_count = get_option('ka_related_posts_count');
$ka_posted_by = get_option('ka_posted_by');
$ka_post_date = get_option('ka_post_date');
if ($ka_post_date != "false"){ $ka_post_date_result = 'style="background:none !important;"';}else{$ka_post_date_result = '';}
$ka_dragshare = get_option('ka_dragshare');
$blog_image_frame = get_option('ka_blog_image_frame');

query_posts(array('post_type'=>'Resultat',  'paged'=>$paged));
if (have_posts()) : while (have_posts()) : the_post(); 

//retrieve all post meta of posts in the loop.
 
$linkpost = get_post_meta($post->ID, "_jcycle_url_value", $single = true);
$external_image_url = get_post_meta($post->ID,'truethemes_external_image_url',true);
$video_url = get_post_meta($post->ID,'truethemes_video_url',true);
$permalink = get_permalink($post->ID);
//prepare to get image
$thumb = get_post_thumbnail_id();
$image_width = 538;
$image_height = 218;

//use truethemes image croping script, function moved to functions/global/basic.php
$image_src = truethemes_crop_image($thumb,$external_image_url,$image_width,$image_height);

?>

<div class="blog_wrap">
<div class="post_title">
<?php if ($linkpost == ''){ ?>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php }else{ ?><h2><a href="<?php echo $linkpost; ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2><?php } ?>
</div><!-- end post_title -->

<div class="post_content" <?php echo $ka_post_date_result; ?>>

<?php limit_content(10000,  true, ''); ?>
<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>

<?php if ($ka_post_date != "true") { ?>
<div class="post_date">
	<span class="day"><?php the_time('j'); ?></span>
    <br />
    <span class="month"><?php echo strtoupper(get_the_time('M')); ?></span>
</div><!-- end post_date -->

<?php if ($ka_dragshare == "false"){ echo '<a class="post_share sharelink_small" href="#" rel="prettySociable">Share</a>'; }?>
<?php }else{}?>
</div><!-- end post_content -->
</div><!-- end blog_wrap -->


<?php endwhile; else: ?>
<h2>Aucun résultat pour le moment</h2>
<p>Veuillez revenir ultérieurement</p>
<?php endif; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div><!-- end content -->
<?php
	}
?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>