<?php
/*
Template Name: Left Nav gestionEquipes
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
	if ($_SESSION['connecte'] == 1){
		if ($_SESSION['droits'] == 1){
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
<?php //if(have_posts()) : while(have_posts()) : the_post(); the_content(); endwhile; endif;
			//$query = mysql_query("SELECT e.idEquipe, nomEquipe, Count(*) FROM kv_adherents a, kv_equipes e where e.idEquipe=a.idEquipe GROUP BY e.idEquipe ");
			$query = mysql_query("SELECT  FROM kv_equipes");
?>			
			<table id="tabAdherent">
				<tr>
					<th>Nom</th>
					<!--<th>Nombres de joueurs</th>-->
					<th>D</th>
					<th>M</th>
					<th>S</th>
				</tr>
			<?php	
				while ($data = mysql_fetch_array($query)){
					echo '<tr>';
					echo '<td>'.$data['1'].'</td>';
					//echo '<td>'.$data['2'].'</td>';
					echo '<td><a href="administration/details-equipe/?id='.$data['0'].'"><div class="details"></div></a></td>';
					echo '<td><a href="administration/modifier-une-equipe/?id='.$data['0'].'"><div class="modif"></div></a></td>';
					echo '<td><a href="javascript:supprimerEquipe('.$data['0'].', \''.$data['1'].'\')"><div class="delete"></div></a></td>';
					echo '</tr>';
				}
			?>
			</table>
			</div><!-- end content -->
<?php
		}
	}
?>

</div><!-- end main-holder -->
</div><!-- main-area -->

<?php get_footer(); ?>