<?php
// Dossier ou les fichiers seront upload
$DESTINATION_FOLDER = $_POST["folder"];
// Taille maximale de fichier, valeur en bytes (oui j'ai abusé)	
$MAX_SIZE = 50000000000000;	
// Récupération de l'url de retour	
$RETURN_LINK = $_SERVER['HTTP_REFERER'];
// Définition des extensions de fichier autorisé
$AUTH_EXT = array(".doc", ".pdf", ".jpg", ".ppt", ".mp3",		
	".bmp", ".gif");										
// ############################################################ //

// Lien de retour automatique

function createReturnLink(){
	global $RETURN_LINK;
	echo "<a href='".$RETURN_LINK."'>Retour</a><br>";
}

// Vérification si l'extensions est bien autorisé (héhé)

function isExtAuthorized($ext){
	global $AUTH_EXT;
	if(in_array($ext, $AUTH_EXT)){
		return true;
	}else{
		return false;
	}
}

// On vérifie que le champs contenant le chemin du fichier soit
// bien rempli.

if(!empty($_FILES["file"]["name"])){
	
	// Nom du fichier choisi:
	$nomFichier = $_FILES["file"]["name"] ;
	// Nom temporaire sur le serveur:
	$nomTemporaire = $_FILES["file"]["tmp_name"] ;
	// Type du fichier choisi:
	$typeFichier = $_FILES["file"]["type"] ;
	// Poids en octets du fichier choisit:
	$poidsFichier = $_FILES["file"]["size"] ;
	// Code de l'erreur si jamais il y en a une:
	$codeErreur = $_FILES["file"]["error"] ;
	// Extension du fichier
	$extension = strrchr($nomFichier, ".");
	
	// Si le poids du fichier est de 0 bytes, le fichier est
	// invalide (ou le chemin incorrect) => message d'erreur
	// sinon, le script continue.
	if($poidsFichier <> 0){
		// Si la taille du fichier est supérieure & la taille
		// maximum spécifiée => message d'erreur
		if($poidsFichier < $MAX_SIZE){
			// On teste ensuite si le fichier a une extension autoris�e
			if(isExtAuthorized($extension)){
				// Ensuite, on copie le fichier upload� ou bon nous semble.
				$uploadOk = move_uploaded_file($nomTemporaire, $DESTINATION_FOLDER.$nomFichier);
				if($uploadOk){
					echo("L'upload a réussi !<br><br>");
					echo(createReturnLink());
				}else{
					echo("L'upload a échoué !<br><br>");
					echo(createReturnLink());
				}
			}else{
				echo ("Les fichiers avec l'extension $extension ne peuvent pas être uploads !<br>");
				echo (createReturnLink()."<br>");
			}
		}else{
			$tailleKo = $MAX_SIZE / 999999999999999999999999999999999;
			echo("Vous ne pouvez pas uploader de fichiers dont la taille est supérieure : $tailleKo Ko.<br>");
			echo (createReturnLink()."<br>");
		}		
	}else{
		echo("Le fichier choisi est invalide !<br>");
		echo (createReturnLink()."<br>");
	}
}else{
	echo("Vous n'avez pas choisi de fichier !<br>");
	echo (createReturnLink()."<br>");
}
?>