<?php 
if($_GET['action'] == "supprAdherent"){
    session_start();
    
    define("MY_DBTYPE", "MySQL");
	define("MY_HOST", "localhost");
	define("MY_USER","aatt");
	define("MY_PASS", "RSJzMbWywfJSnZfx");
	define("MY_BASE", "wpKevin");	
    
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
    
    define("MY_DBTYPE", "MySQL");
	define("MY_HOST", "localhost");
	define("MY_USER","aatt");
	define("MY_PASS", "RSJzMbWywfJSnZfx");
	define("MY_BASE", "wpKevin");	
    
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
    
    define("MY_DBTYPE", "MySQL");
	define("MY_HOST", "localhost");
	define("MY_USER","aatt");
	define("MY_PASS", "RSJzMbWywfJSnZfx");
	define("MY_BASE", "wpKevin");	
    
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
    
    define("MY_DBTYPE", "MySQL");
	define("MY_HOST", "localhost");
	define("MY_USER","aatt");
	define("MY_PASS", "RSJzMbWywfJSnZfx");
	define("MY_BASE", "wpKevin");	
    
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


if($_GET['action'] == "aaa"){
	echo "aaa";
}
?>
