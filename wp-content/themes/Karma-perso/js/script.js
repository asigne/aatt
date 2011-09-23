jQuery(document).ready(function() {
    /**
     * *************************************************************************************
     * Script generals
     * *************************************************************************************
     */
    jQuery(".login").click(function() {
       jQuery("#login-popup").slideToggle('slow');
    	    return false;
    });
});


function validerFormAdherent(){
	var erreur = false;
	if(document.formAdherent.nom.value != ""){
		jQuery('#faNomE').attr('id','faNom');
	}
	else{
		jQuery('#faNom').attr('id','faNomE');
		erreur = true;		
	}
	
	if(document.formAdherent.prenom.value != ""){
		jQuery('#faPrenomE').attr('id','faPrenom');
	}
	else{
		jQuery('#faPrenom').attr('id','faPrenomE');
		erreur = true;		
	}
	
	if(validateEmail(document.formAdherent.mail.value)){
		jQuery('#faMailE').attr('id','faMail');
	}
	else{
		jQuery('#faMail').attr('id','faMailE');
		erreur = true;
	}
	
	if(document.formAdherent.equipe.value != "null"){
		jQuery('#faEquipeE').attr('id','faEquipe');
	}
	else{
		jQuery('#faEquipe').attr('id','faEquipeE');
		erreur = true;
	}
	
	if(document.formAdherent.adresse.value != ""){
		jQuery('#faAdresseE').attr('id','faAdresse');
	}
	else{
		jQuery('#faAdresse').attr('id','faAdresseE');
		erreur = true;		
	}
	
	if(validerCodePostal(document.formAdherent.codePostal.value)){
		jQuery('#faCodePostalE').attr('id','faCodePostal');
	}
	else{
		jQuery('#faCodePostal').attr('id','faCodePostalE');	
		erreur = true;		
	}
	
	if(document.formAdherent.ville.value != ""){
		jQuery('#faVilleE').attr('id','faVille');
	}
	else{
		jQuery('#faVille').attr('id','faVilleE');		
		erreur = true;		
	}
	
	if(!validatePhone(document.formAdherent.fixe.value) && !validatePhone(document.formAdherent.portable.value)){
		jQuery('#faFixe').attr('id','faFixeE');
		erreur = true;
	}
	else{
		jQuery('#faFixeE').attr('id','faFixe');		
	}
	
	if(document.formAdherent.pass.value != ""){
		jQuery('#faPassE').attr('id','fapass');
	}
	else{
		jQuery('#faPass').attr('id','faPassE');
		erreur = true;
	}
		
	if(!erreur){
		jQuery.ajax({
			type: 'GET',
		    url: '/ajax.php',
		    data: "action=verifIDAdherent&mail="+document.formAdherent.mail.value,
		    dataType:'text',
		    success: function(text){
		    	if(text=="possible"){
					document.formAdherent.submit();
					return true;
				}
				else{
		    		alert("Cette adresse email est déjà utilisée !");
		    		return false;
		    	}
		   },
		   error: function() {alert('Erreur, impossible de contacter le serveur.'); return false;}
		}); 
	}
	else{
		alert("Vous avez commis une erreur en remplissant le formulaire !");
		return false;
	} 
	return false;
}

function validerFormAdherentModif(mode){
	var erreur = false;
	
	if(document.formAdherent.nom.value != ""){
		jQuery('#faNomE').attr('id','faNom');
	}
	else{
		jQuery('#faNom').attr('id','faNomE');
		erreur = true;		
	}
	
	if(document.formAdherent.prenom.value != ""){
		jQuery('#faPrenomE').attr('id','faPrenom');
	}
	else{
		jQuery('#faPrenom').attr('id','faPrenomE');
		erreur = true;		
	}
	
	if(document.formAdherent.equipe.value != "null"){
		jQuery('#faEquipeE').attr('id','faEquipe');
	}
	else{
		jQuery('#faEquipe').attr('id','faEquipeE');
		erreur = true;
	}
	
	if(document.formAdherent.adresse.value != ""){
		jQuery('#faAdresseE').attr('id','faAdresse');
	}
	else{
		jQuery('#faAdresse').attr('id','faAdresseE');
		erreur = true;		
	}
	
	if(validerCodePostal(document.formAdherent.codePostal.value)){
		jQuery('#faCodePostalE').attr('id','faCodePostal');
	}
	else{
		jQuery('#faCodePostal').attr('id','faCodePostalE');	
		erreur = true;		
	}
	
	if(document.formAdherent.ville.value != ""){
		jQuery('#faVilleE').attr('id','faVille');
	}
	else{
		jQuery('#faVille').attr('id','faVilleE');		
		erreur = true;		
	}
	
	if(!validatePhone(document.formAdherent.fixe.value) && !validatePhone(document.formAdherent.portable.value)){
		jQuery('#faFixe').attr('id','faFixeE');
		erreur = true;
	}
	else{
		jQuery('#faFixeE').attr('id','faFixe');		
	}
	
	if(!mode){
		if(document.formAdherent.pass.value != ""){
			jQuery('#faPassE').attr('id','fapass');
		}
		else{
			jQuery('#faPass').attr('id','faPassE');
			erreur = true;
		}	
	}
	if(!erreur){
		document.formAdherent.submit();
		return true;
	}
	else{
		alert("Vous avez commis une erreur en remplissant le formulaire !");
		return false;
	}
}

function supprimerAdherent(idAdherent, nomAdherent, prenomAdherent){
	var r=confirm("Voulez-vous vraiment supprimer l'adhérent "+nomAdherent+" "+prenomAdherent+" ?");
	if (r==true){
		jQuery.ajax({

			type: 'GET',

		    url: '/ajax.php',

		    data: "action=supprAdherent&id="+idAdherent,

		    dataType:'text',

		    success: function(){window.location.reload()},

		    error: function() {alert('Erreur, impossible de contacter le serveur.');}

		});  
	}
}

function validerFormEquipe(){
	var erreur = false;
	if(document.formEquipe.nom.value != ""){
		jQuery('#faNomEquipeE').attr('id','faNomEquipe');
	}
	else{
		jQuery('#faNomEquipe').attr('id','faNomEquipeE');
		erreur = true;		
	}
	if(!erreur){
		document.formAdherent.submit();
		return true;
	}
	else{
		alert("Vous avez commis une erreur en remplissant le formulaire !");
		return false;
	}
}

function supprimerEquipe(idEquipe, nomEquipe){
	var r=confirm("Voulez-vous vraiment supprimer l'équipe "+nomEquipe+" ?");
	if (r==true){
		jQuery.ajax({

			type: 'GET',

		    url: '/ajax.php',

		    data: "action=supprEquipe&id="+idEquipe,

		    dataType:'text',

		    success: function(text){if(text=='erreur'){alert("Impossible de supprimer cette équipe !")}else{window.location.reload()}},

		    error: function() {alert('Erreur, impossible de contacter le serveur.');}

		});  
	}
}

function modifAccesAdherent(idAdherent, nomAdherent, prenomAdherent, acces){
	var r;
	if(acces == 0){
		r=confirm("Voulez-vous vraiment autoriser "+nomAdherent+" "+prenomAdherent+" à pouvoir se connecter ?");
	}
	else{
		r=confirm("Voulez-vous vraiment supprimer l'accès à "+nomAdherent+" "+prenomAdherent+" ?");
	}
	if (r==true){
		jQuery.ajax({
			type: 'GET',
			url: '/ajax.php',
			data: "action=changerAccesAdherent&idAdherent="+idAdherent+"&acces="+acces,
			dataType:'text',
			success: function(text){if(text=='erreur'){alert("Impossible de modifier les droits de cet adhérent !")}else{window.location.reload()}},
			error: function() {alert('Erreur, impossible de contacter le serveur.');}

		});  
	}
}

function validerFormOubliPassword(){
	var erreur = false;
	if(document.formOubliPassword.mail.value != ""){
		jQuery('#faMailE').attr('id','faMail');
	}
	else{
		jQuery('#faMail').attr('id','faMailE');
		erreur = true;		
	}
	if(!erreur){
		document.formOubliPassword.submit();
		return true;
	}
	else{
		alert("Vous avez commis une erreur en remplissant le formulaire !");
		return false;
	}
}

function validerCodePostal(entree){
	longueur=entree.length;
	if(longueur!==5) {
	return false;
	}
	// la variable 'chiffres' est égale à tous les chiffres acceptés
	// dans le code postal
	chiffres='0123456789';
	 
	// compare le input "id" à la chaîne de caractères permise
	if(chiffres.indexOf(entree.charAt(0))<0){
	return false;
	}
	if(chiffres.indexOf(entree.charAt(1))<0){
	return false;
	}
	if(chiffres.indexOf(entree.charAt(2))<0){
	return false;
	}
	if(chiffres.indexOf(entree.charAt(3))<0){
	return false;
	}
	if(chiffres.indexOf(entree.charAt(4))<0){
	return false;
	}
	 
	// tout est OK !
	return true;
}

function trim(s){
  return s.replace(/^\s+|\s+$/, '');
}

function validateEmail(email) {
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email)) {
		return false;
	}
	return true;
}

function validatePhone(num) {
	var filter = /^[0-9]{10}$/;
	if (!filter.test(num)) {
		return false;
	}
	return true;
}

function equipeChange(listeJ){
	if(listeJ == 1){
		jQuery.ajax({
			type: 'GET',
			url: '	/wordpressKevin/ajax.php',
			data: "action=listeJoueurs1&idEquipe="+jQuery("#equipe1").val(),
			dataType:'text',
			success: function(text){
				if(text!=""){
					var newtable = document.createElement('table');
					newtable.innerHTML = text;
					jQuery("#listeJ1").html(newtable);
					jQuery("#matchNum").show();
				}
				else{
					alert('erreur');
				}
			},
			error: function() {alert('Erreur, impossible de contacter le serveur.');}
		});  
	}
	else if(listeJ == 2){
		jQuery.ajax({
			type: 'GET',
			url: '/wordpressKevin/ajax.php',
			data: "action=listeJoueurs2&idEquipe="+jQuery("#equipe2").val(),
			dataType:'text',
			success: function(text){
			if(text!=""){
					var newtable = document.createElement('table');
					newtable.innerHTML = text;
					jQuery("#listeJ2").html(newtable);
					jQuery("#matchNum").show();
				}
				else{
					alert('erreur');
				}
			},
			error: function() {alert('Erreur, impossible de contacter le serveur.');}
		});  
	   
	}
}