<?php 
require_once('wp-content/themes/Karma-perso/dataBaseConfig.php');

if($_GET['action'] == "supprAdherent"){
    session_start();
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
if ($_SESSION['connecte'] == 1){
		if ($_SESSION['droits'] == 1){
			$req = "DELETE FROM kv_adherents where idAdherent='".$_GET['id']."'";
			$query = mysql_query($req);
		}	
	}
}

if($_GET['action'] == "supprEquipe"){
    session_start();
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
	if ($_SESSION['connecte'] == 1){
		if ($_SESSION['droits'] == 1){
			$req = "DELETE FROM kv_equipes where idEquipe='".$_GET['id']."'";
			if($query = mysql_query($req)){
				echo "reussi";
			}
			else{
				echo "erreur";
			}
		}	
	}
	
}

if($_GET['action'] == "changerAccesAdherent"){
    session_start();
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
	if ($_SESSION['connecte'] == 1){
		if ($_SESSION['droits'] == 1){
			if($_GET['acces'] == 1){
				$req = "UPDATE kv_adherents SET acces=0 WHERE idAdherent='".$_GET['idAdherent']."'";
			}
			else{
				$req = "UPDATE kv_adherents SET acces=1 WHERE idAdherent='".$_GET['idAdherent']."'";
			}
			if($query = mysql_query($req)){
				echo "reussi";
			}
			else{
				echo "erreur";
			}
		}	
	}
	
}

if($_GET['action'] == "verifIDAdherent"){
    session_start();	
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
	$req = "select * FROM kv_adherents WHERE mail='".$_GET['mail']."'";
	if(mysql_fetch_array(mysql_query($req))){
		echo "impossible";
	}
	else{
		echo "possible";
	}
}

if($_GET['action'] == "listeJoueurs1"){
	session_start();	
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
	
	for($i=1;$i<21;$i++){
		$query = mysql_query('SELECT * from kv_adherents a, kv_equipes e WHERE a.idEquipe = e.idEquipe AND e.idEquipe=\''.$_GET['idEquipe'].'\' ORDER BY a.nom');
		echo "<tr>";
		if($i==8 || $i==13){
			echo	"<td> double </td>";
		}
		else{
			echo 	"<td>Match ".$i."</td>";
		}
		
		echo"<td><select id='".$_GET['idEquipe']."Select' name='".$_GET['idEquipe']."Select'> ";	
		echo "<option value='null' selected='selected'></option>\n";
		while($dataJoueur = mysql_fetch_array($query)){
			echo "<option value=".$dataJoueur[0].">".$dataJoueur[3]." ".$dataJoueur[4]."</option>\n";
		}
		echo "</select></td></tr>";
	}
}

if($_GET['action'] == "listeJoueurs2"){
	session_start();	
    
    $link = mysql_connect(MY_HOST,MY_USER,MY_PASS);
	mysql_select_db(MY_BASE, $link);
	
	
	for($i=0;$i<20;$i++){
		$query = mysql_query('SELECT * from kv_adherents a, kv_equipes e WHERE a.idEquipe = e.idEquipe AND e.idEquipe=\''.$_GET['idEquipe'].'\' ORDER BY a.nom');
		echo	"<td> contre </td>";
		echo "<td><select id='".$_GET['idEquipe']."Select' name='".$_GET['idEquipe']."Select'> ";	
		echo "<option value='null' selected='selected'></option>\n";
		while($dataJoueur = mysql_fetch_array($query)){
			echo "<option value=".$dataJoueur[0].">".$dataJoueur[3]." ".$dataJoueur[4]."</option>\n";
		}
		echo "</select></td></tr>";
	}
}
?>
