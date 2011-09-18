<?php
/*
Template Name: Left Nav Secure
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
			if($data[12] == 1){
				$_SESSION['login'] = $data['mail'] ;
				$_SESSION['connecte'] = 1;
				$_SESSION['idAdherent'] = $data['idAdherent'];
				$_SESSION['droits'] = $data['droits'];
				print("Merci de vous vous être connecte ! Vous allez etre redirigé ...</br>");
				echo '<meta http-equiv="refresh" content="0;url=http://localhost:8888/wordpressKevin/espace-adherent/" />';
			}
			else{
				echo '<div class="erreur">
						<h1>Echec de la connexion</h1>
						<h5>Votre demande a bien été prise en compte, mais l\'administrateur n\'a pas encore validé votre inscription, veuillez réessayer ultérieurement.</h5>
					</div>';	
			}
		}
			else{
				echo '<div class="erreur">
						<h1>Echec de la connexion</h1>
						<h5>Login ou mot de passe érroné. Veuillez resaisir vos identifiants</h5>				
					<div>';	
			}
		}
		else{
			echo '<div class="erreur">
					<h1>Echec de la connexion</h1>
					<h5>Vous avez certainement oublié un champ. Veuillez réessayer !</h5>			
				</div>';
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

		<?php if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif; ?>
		</div><!-- end content -->
<?php
	}
?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>