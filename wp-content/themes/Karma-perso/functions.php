<?php
require_once('functionPostResultat.php');
require_once('functionPostPhotosVideos.php');

function formulaireInscription($page, $mode){
	if($_POST['verif'] != "ok"){
		echo '<form id="formAdherent" name="formAdherent" action='.$page.' method="post">
				<table>
					<tr>
						<td><label id="faNom">Civilité :</label></td>
						<td>';
							listeCivilite("");
		echo '			</td>
					</tr>
					<tr>
						<td><label id="faNom">Nom :</label></td>
						<td><input type="text" name="nom"/></td>
					</tr>
					<tr>
						<td><label  id="faPrenom">Prénom :</label></td>
						<td><input type="text" name="prenom" /></td>
					</tr>
					<tr>
						<td><label id="faMail">Mail :</label></td>
						<td><input class="adresse" type="text" name="mail" /></td>
					</tr>
					<tr>
						<td><label id="faEquipe">Equipe :</label></td>
						<td>';
							listeEquipe();
		echo		'</td>
					</tr>
					<tr >
						<td><label id="faAdresse">Adresse :</label></td>
						<td><input class="adresse" type="text" name="adresse" /></td>
					</tr>
					<tr>
						<td><label id="faCodePostal">Code postal :</label></td>
						<td><input type="text" name="codePostal" maxlength="5"/></td>
					</tr>
					<tr>
						<td><label id="faVille">Ville :</label></td>
						<td><input type="text" name="ville" /></td>
					</tr>
					<tr>
						<td><label id="faFixe">Fixe :</label></td>
						<td><input type="text" name="fixe" maxlength="10"/></td>
					</tr>
					<tr>
						<td><label id="faPortable">Portable :</label></td>
						<td><input type="text" name="portable" maxlength="10"/></td>
					</tr>';
			if($mode){		
				echo'<tr>
						<td><label id="faClassement">Classement :</label></td>
						<td><input type="text" name="classement"/></td>
					</tr>
					<tr>
						<td><label id="faAcces">Accès :</label></td>
						<td>';
						selectOuiNon("acces", false);
					echo'</td></tr>';	
				}
				echo'<tr>
					<tr>
						<td><label id="faPass">Mot de passe :</label>
						<td><input type="password" name="pass"/></td>
					</tr>
					<tr>
						<td><input type="hidden" name="verif" value="ok"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="faValider" type="submit" value="Valider" onclick="return validerFormAdherent()" /></td>
					</tr>
				</table>	
			</form>';
	}
	else{
		//inscription dans la base		
		if($mode){
			$req = "INSERT INTO kv_adherents VALUES ('','".$_POST['mail']."','".md5($_POST['pass'])."','".strtoupper($_POST['nom'])."','".ucfirst($_POST['prenom'])."','".$_POST['adresse']."','".$_POST['codePostal']."','".strtoupper($_POST['ville'])."','".$_POST['fixe']."','".$_POST['portable']."','".$_POST['classement']."','0', '".$_POST['acces']."','".$_POST['equipe']."','".$_POST['civilite']."')";
		}
		else{
			$req = "INSERT INTO kv_adherents VALUES ('','".$_POST['mail']."','".md5($_POST['pass'])."','".strtoupper($_POST['nom'])."','".ucfirst($_POST['prenom'])."','".$_POST['adresse']."','".$_POST['codePostal']."','".strtoupper($_POST['ville'])."','".$_POST['fixe']."','".$_POST['portable']."','','0', '0','".$_POST['equipe']."','".$_POST['civilite']."')";
		}
		$query = mysql_query($req);
		mysql_fetch_array($query);
		if($mode){
			echo '<meta http-equiv="refresh" content="0;url=/administration/gestion-des-adherents/" />';
		}
		else{
			echo '<div class="information">Votre compte a été crée avec succès, vous recevrez un email dès que l\'administrateur aura validé votre inscription !</div>';
		}
	}
}

function formulaireModification($page, $data, $mode){
	if($_POST['verif'] != "ok"){
		echo '<form id="formAdherent" name="formAdherent" action='.$page.' method="post">
				<table>
					<tr>
						<td><label id="faNom">Civilité :</label></td>
						<td>';
							listeCivilite($data[14]);
		echo '			</td>
					</tr>
					<tr>
						<td><label id="faNom">Nom :</label></td>
						<td><input type="text" name="nom" value="'.$data[3].'"/></td>
					</tr>
					<tr>
						<td><label  id="faPrenom">Prénom :</label></td>
						<td><input type="text" name="prenom"  value="'.$data[4].'"/></td>
					</tr>
					<tr>
						<td><label id="faMail">Mail :</label></td>
						<td><input class="adresse" disabled="disabled" type="text" name="mail"  value="'.$data[1].'"/></td>
					</tr>
					<tr>
						<td><label id="faEquipe">Equipe :</label></td>
						<td>';
					listeEquipe($data[13]);
		echo		'</td>
					</tr>
					<tr >
						<td><label id="faAdresse">Adresse :</label></td>
						<td><input class="adresse" type="text" name="adresse"  value="'.$data[5].'"/></td>
					</tr>
					<tr>
						<td><label id="faCodePostal">Code postal :</label></td>
						<td><input type="text" name="codePostal" maxlength="5" value="'.$data[6].'" /></td>
					</tr>
					<tr>
						<td><label id="faVille">Ville :</label></td>
						<td><input type="text" name="ville"  value="'.$data[7].'"/></td>
					</tr>
					<tr>
						<td><label id="faFixe">Fixe :</label></td>
						<td><input type="text" name="fixe" maxlength="10" value="'.$data[8].'"/></td>
					</tr>
					<tr>
						<td><label id="faPortable">Portable :</label></td>
						<td><input type="text" name="portable" maxlength="10" value="'.$data[9].'"/></td>
					</tr>';
				if($mode){		
				echo'<tr>
						<td><label id="faClassement">Classement :</label></td>
						<td><input type="text" name="classement"  value="'.$data[10].'"/></td>
					</tr>
					<tr>
						<td><label id="faAcces">Accès :</label></td>
						<td>';
						selectOuiNon("acces", $data[12]);
					echo'</td></tr>';	
				}
				echo'<tr>
						<td><label id="faPass">Mot de passe :</label>
						<td><input type="password" name="pass"/></td>
					</tr>
					<tr>
						<td><input type="hidden" name="verif" value="ok"/></td>
						<td><input type="hidden" name="idAdherent" value="'.$data[0].'"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="faValider" type="submit" value="Valider" onclick="return validerFormAdherentModif('.$mode.')" /></td>
					</tr>
				</table>	
			</form>';
	}
	else{
		//modification dans la base	
		if($mode){
			if($_POST['pass']==""){
				$req = "UPDATE kv_adherents SET civilite='".$_POST['civilite']."', nom='".strtoupper($_POST['nom'])."', prenom='".ucfirst($_POST['prenom'])."', adresse='".$_POST['adresse']."', codepostal='".$_POST['codePostal']."', ville='".strtoupper($_POST['ville'])."', teldomicile='".$_POST['fixe']."', telportable='".$_POST['portable']."', classement='".$_POST['classement']."', acces='".$_POST['acces']."', idEquipe='".$_POST['equipe']."' WHERE idAdherent='".$_POST['idAdherent']."'";
			}
			else{
				$req = "UPDATE kv_adherents SET civilite='".$_POST['civilite']."', pass='".md5($_POST['pass'])."', nom='".strtoupper($_POST['nom'])."', prenom='".ucfirst($_POST['prenom'])."', adresse='".$_POST['adresse']."', codepostal='".$_POST['codePostal']."', ville='".strtoupper($_POST['ville'])."', teldomicile='".$_POST['fixe']."', telportable='".$_POST['portable']."', classement='".$_POST['classement']."', acces='".$_POST['acces']."', idEquipe='".$_POST['equipe']."' WHERE idAdherent='".$_POST['idAdherent']."'";
			}
		}
		else{
			if($_POST['pass']==""){
				$req = "UPDATE kv_adherents SET civilite='".$_POST['civilite']."', nom='".strtoupper($_POST['nom'])."', prenom='".ucfirst($_POST['prenom'])."', adresse='".$_POST['adresse']."', codepostal='".$_POST['codePostal']."', ville='".strtoupper($_POST['ville'])."', teldomicile='".$_POST['fixe']."', telportable='".$_POST['portable']."', idEquipe='".$_POST['equipe']."' WHERE idAdherent='".$_POST['idAdherent']."'";
			}
			else{
				$req = "UPDATE kv_adherents SET civilite='".$_POST['civilite']."', pass='".md5($_POST['pass'])."', nom='".strtoupper($_POST['nom'])."', prenom='".ucfirst($_POST['prenom'])."', adresse='".$_POST['adresse']."', codepostal='".$_POST['codePostal']."', ville='".strtoupper($_POST['ville'])."', teldomicile='".$_POST['fixe']."', telportable='".$_POST['portable']."', idEquipe='".$_POST['equipe']."' WHERE idAdherent='".$_POST['idAdherent']."'";			
			}
		}
		$query = mysql_query($req);
		echo '<div class="information">Modification effectuée</div>';
		if($mode){
			echo '<meta http-equiv="refresh" content="0;url=/administration/gestion-des-adherents/" />';
		}
	}
}

function formulaireAjoutEquipe($page){
	if($_POST['verif'] != "ok"){
		echo '<form id="formEquipe" name="formEquipe" action='.$page.' method="post">
				<table>
					<tr>
						<td><label id="faNomEquipe">Nom :</label></td>
						<td><input type="text" name="nom"/></td>
					</tr>
					<tr>
						<td><input type="hidden" name="verif" value="ok"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="faValider" type="submit" value="Valider" onclick="return validerFormEquipe()" /></td>
					</tr>
				</table>	
			</form>';
	}
	else{
		//inscription dans la base		
		$req = "INSERT INTO kv_equipes VALUES ('','".strtoupper($_POST['nom'])."')";
		echo $req;
		$query = mysql_query($req);
		mysql_fetch_array($query);
		echo "Equipe ajoutée avec succès";
		echo '<meta http-equiv="refresh" content="0;url=/administration/gestion-des-equipes/" />';
	}
}

function formulaireModificationEquipe($page, $data){
	if($_POST['verif'] != "ok"){
		echo '<form id="formEquipe" name="formEquipe" action='.$page.' method="post">
				<table>
					<tr>
						<td><label id="faNomEquipe">Nom :</label></td>
						<td><input type="text" name="nom" value="'.$data[1].'"/></td>
					</tr>
					<tr>
						<td><input type="hidden" name="verif" value="ok"/></td>
						<td><input type="hidden" name="idEquipe" value="'.$data[0].'"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="faValider" type="submit" value="Valider" onclick="return validerFormEquipe()" /></td>
					</tr>
				</table>	
			</form>';
	}
	else{
		//modification dans la base		
		$req = "UPDATE kv_equipes SET nomEquipe='".strtoupper($_POST['nom'])."' WHERE idEquipe='".$_POST['idEquipe']."'";
		$query = mysql_query($req);
		echo "Modification effectuée";
		echo '<meta http-equiv="refresh" content="0;url=/administration/gestion-des-equipes/" />';
	}
}

function affichageAdherent($query){
	echo'<table id="tabAdherent">
		<tr>
			<th>Civilité</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Mail</th>
			<th>Equipe</th>
		<!--	<th>Adresse</th>
			<th>CP</th>
			<th>Ville</th>
			<th>Domicile</th>-->
			<th>Portable</th>
			<th>Accès</th>
			<th>D</th>
			<th>M</th>
			<th>S</th>
		</tr>';
		while ($data = mysql_fetch_array($query)){
			echo '<tr>';
			echo '<td>'.$data['7'].'</td>';			
			echo '<td>'.$data['1'].'</td>';
			echo '<td>'.$data['2'].'</td>';
			echo '<td><a href="mailto:'.$data['3'].'">'.$data['3'].'</a></td>';
		//	echo '<td>'.$data['6'].'</td>';
		//	echo '<td>'.$data['7'].'</td>';
		//	echo '<td>'.$data['8'].'</td>';
		//	echo '<td>'.$data['9'].'</td>';
			echo '<td>'.$data['6'].'</td>';
			echo '<td>'.$data['4'].'</td>';
	//		echo '<td>'.$data['5'].'</td>';
			echo '<td><a href="javascript:modifAccesAdherent('.$data['0'].', \''.$data['1'].'\',\''.$data['2'].'\','.$data['5'].')">';
			if($data['5']){
							echo '<div id="accesOuvert"></div>';
						}
						else{
							echo '<div id="accesFerme"></div>';
						}
			echo '</a></td>';
			
	//					$param="id=".$data['0']."&mail=".$data['1']."&nom".$data['3']."&prenom=".$data['4']."&adresse=".$data['5']."&codepostal=".$data['6']."&ville=".$data['7']."&fixe=".$data['8']."&portable=".$data['9']."&classement=".$data['10']."&acces=".$data['12']."&equipe=".$data['13'];
			echo '<td><a href="/administration/details-adherent/?id='.$data['0'].'"><div class="details"></div></a></td>';
			echo '<td><a href="/administration/modifier-un-adherent/?id='.$data['0'].'"><div class="modif"></div></a></td>';
			echo '<td><a href="javascript:supprimerAdherent('.$data['0'].', \''.$data['1'].'\',\''.$data['2'].'\')"><div class="delete"></div></a></td>';
			echo '</tr>';
		}
	echo '</table>';
}

function affichageDetailsAdherent($data){
	echo'		<table>
					<tr>
						<td><label>Nom :</label></td>
						<td><label>'.$data[3].'</label></td>
					</tr>
					<tr>
						<td><label>Prénom :</label></td>
						<td><label>'.$data[4].'</label></td>
					</tr>
					<tr>
						<td><label>Mail :</label></td>
						<td><label>'.$data[1].'</label></td>
					</tr>
					<tr>
						<td><label>Equipe :</label></td>
						<td><label>'.$data['nomEquipe'].'</label></td>
					</tr>
					<tr >
						<td><label>Adresse :</label></td>
						<td><label>'.$data[5].'</label></td>
					</tr>
					<tr>
						<td><label>Code postal :</label></td>
						<td><label>'.$data[6].'</label></td>
					</tr>
					<tr>
						<td><label>Ville :</label></td>
						<td><label>'.$data[7].'</label></td>						
					</tr>
					<tr>
						<td><label>Fixe :</label></td>
						<td><label>'.$data[8].'</label></td>
					</tr>
					<tr>
						<td><label>Portable :</label></td>
						<td><label>'.$data[9].'</label></td>
					</tr>
					<tr>
						<td><label>Classement :</label></td>
						<td><label>'.$data[10].'</label></td>
					</tr>
					<tr>
						<td><label>Accès :</label></td>';
						if($data[12]){
							echo '<td><label>Oui</label></td>';
						}
						else{
							echo '<td><label>Non</label></td>';						
						}
				echo'</tr>
					<tr>
						<td><input type="hidden" name="idAdherent" value="'.$data[0].'"/></td>
					</tr>
				</table>';
}

function affichageDetailsEquipe($data){
	echo'		<table>
					<tr>
						<td><label>Nom :</label></td>
						<td><label>'.$data[1].'</label></td>
					</tr>
					<tr>
						<td><label>Nombre d\'adhérents :</label></td>
						<td><label>'.$data[2].'</label></td>
					</tr>
					<tr>
						<td><input type="hidden" name="idAdherent" value="'.$data[0].'"/></td>
					</tr>
				</table>';
	
	
	/*echo'<table id="tabAdherent">
		<tr>
			<th>Civilité</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Mail</th>
			<th>Equipe</th>
			<th>Portable</th>
			<th>Accès</th>
			<th>D</th>
			<th>M</th>
			<th>S</th>
		</tr>';
		$query1 = mysql_query("SELECT * FROM kv_adherents a, kv_equipes e where e.idEquipe=a.idEquipe and e.idEquipe=".$data[0]);
		while ($data1 = mysql_fetch_array($query1)){
			echo '<tr>';
			echo '<td>'.$data1['14'].'</td>';			
			echo '<td>'.$data1['3'].'</td>';
			echo '<td>'.$data1['4'].'</td>';
			echo '<td><a href="mailto:'.$data1['1'].'">'.$data1['1'].'</a></td>';
			echo '<td>'.$data1['13'].'</td>';
			echo '<td>'.$data1['12'].'</td>';
			echo '<td><a href="javascript:modifAccesAdherent('.$data1['0'].', \''.$data1['1'].'\',\''.$data1['2'].'\','.$data1['11'].')">';
			if($data1['11']){
							echo '<div id="accesOuvert"></div>';
						}
						else{
							echo '<div id="accesFerme"></div>';
						}
			echo '</a></td>';
			echo '<td><a href="/administration/details-adherent/?id='.$data1['0'].'"><div class="details"></div></a></td>';
			echo '<td><a href="/administration/modifier-un-adherent/?id='.$data1['0'].'"><div class="modif"></div></a></td>';
			echo '<td><a href="javascript:supprimerAdherent('.$data1['0'].', \''.$data1['1'].'\',\''.$data1['2'].'\')"><div class="delete"></div></a></td>';
			echo '</tr>';
		}
	echo '</table>';*/
	$query = mysql_query("SELECT a.idAdherent, a.nom, a.prenom, a.mail, a.telportable, a.acces, e.nomEquipe, a.civilite FROM kv_adherents a, kv_equipes e where e.idEquipe=a.idEquipe and e.idEquipe=".$data[0]);
	affichageAdherent($query);
				
}

function formulaireOubliPassword($page){
	if($_POST['verif'] != "ok"){
		echo '<form id="formOubliPassword" name="formOubliPassword" action='.$page.' method="post">
				<table>
					<tr>
						<td><label id="faMail">Email :</label></td>
						<td><input type="text" name="mail"/></td>
					</tr>
					<tr>
						<td><input type="hidden" name="verif" value="ok"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="faValider" type="submit" value="Valider" onclick="return validerFormOubliPassword()" /></td>
					</tr>
				</table>	
			</form>';
	}
	else{
		//inscription dans la base		
		$pwd = wd_generatePassword();
		echo $pwd;
		$req = "UPDATE kv_adherents SET pass='".md5($pwd)."' WHERE mail='".$_POST['mail']."'";
		$query = mysql_query($req);
		mysql_fetch_array($query);
		echo '<div class="information">Mot de passe réinitialisé : vous allez recevoir un email avec ce nouveau mot de passe.</div>';
		$subject = "Réinitialisation mot de passe AATT";
		$mess = "Vous trouverez dans cette email le nouveau mot de passe du compte associé à l'adresse : ".$_POST['mail']."</br>Mot de passe : ".$pwd."</br>Vous pouvez modifier ce mot de passe depuis le site, après vous être identifié.";
		mail($_POST['mail'], $subject, $mess);
	}
}

function listeEquipe($param){	
	echo "<select name='equipe' value='".$param."'> ";
	$query = mysql_query('select * from kv_equipes ORDER BY nomEquipe');
	echo "<option value='null' selected='selected'></option>\n";
	while($dataEquipe = mysql_fetch_array($query)){
		if($dataEquipe["idEquipe"]==$param){
			echo "<option selected='selected' value=".$dataEquipe[0].">".$dataEquipe[1]."</option>\n";
		}
		else{
			echo "<option value=".$dataEquipe[0].">".$dataEquipe[1]."</option>\n";
		}	
	}
echo "</select>";
}

function wd_generatePassword($length=8, $possible='$=@#23456789bcdfghjkmnpqrstvwxyz'){
    $password = '';

    $possible_length = strlen($possible) - 1;

    #
    # add random characters to $password for $length
    #

    while ($length--)
    {
        #
        # pick a random character from the possible ones
        #

        $except = substr($password, -$possible_length / 2);

        for ($n = 0 ; $n < 5 ; $n++)
        {
            $char = $possible{mt_rand(0, $possible_length)};

            #
            # we don't want this character if it's already in the password
            # unless it's far enough (half of our possible length).
            # note: we have 4 tries to find a suitable one.
            #

            if (strpos($except, $char) === false)
            {
                break;
            }
        }

        $password .= $char;
    }

    return $password;
}

function selectOuiNon($attribut, $param){
    if($param)
	    {
		    echo "
			    <input type=\"radio\" name=\"".$attribut."\" value=\"1\" checked='checked' /><label>Oui</label>
			    <input type=\"radio\" name=\"".$attribut."\" value=\"0\" /><label>Non</label>";
	    }
    else
	    {
		    echo "
			    <input type=\"radio\" name=\"".$attribut."\" value=\"1\"  /><label>Oui</label>
			    <input type=\"radio\" name=\"".$attribut."\" value=\"0\" checked='checked' /><label>Non</label>";
	    }
}

function listeCivilite($param) {
	echo '<select name="civilite" value="'.$param.'">';
		if($param == ""){
			echo'<option value="null" selected="selected"></option>
				<option value="Mme">Madame</option>
				<option value="Mlle">Mademoiselle</option>		
				<option value="Mr">Monsieur</option>';
		}
		else if($param == "Mme"){
			echo'<option value="null"></option>
				<option value="Mme" selected="selected">Madame</option>
				<option value="Mlle">Mademoiselle</option>		
				<option value="Mr">Monsieur</option>';
		}
		else if($param == "Mlle"){
			echo'<option value="null" ></option>
				<option value="Mme">Madame</option>
				<option value="Mlle" selected="selected">Mademoiselle</option>		
				<option value="Mr">Monsieur</option>';
		}
		else if($param == "Mr"){
			echo'<option value="null" ></option>
				<option value="Mme">Madame</option>
				<option value="Mlle">Mademoiselle</option>		
				<option value="Mr" selected="selected">Monsieur</option>';
		}
	echo'</select>';
}
?>