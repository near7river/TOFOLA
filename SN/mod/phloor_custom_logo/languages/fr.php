<?php

$french = array(
	"admin:plugins:category:PHLOOR" => "Plugins PHLOOR",
	'admin:appearance:phloor_custom_logo' => "Logo",
	
	'phloor_custom_logo:title' => "Charger le logo",
	
	'phloor_custom_logo:description' => "Charger un logo personnalisé pour votre site. Les types MIME autorisés sont 'image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg' et 'image/png'.",
	
	'phloor_custom_logo:save:success' => "Paramètres sauvagardés avec succès.",
	'phloor_custom_logo:save:failure' => "Paramètres ne pas pu être sauvegardés.",

	'phloor_custom_logo:form:section:logo' => "Logo",

	'phloor_custom_logo:logo:label' => "Charger votre logo",
	'phloor_custom_logo:logo:description' => "Sélectionner le fichier que vous voudriez définir comme logo sur le site. Afin qu'il soit intégrer dans l'entête du site faites attention à la hauteur et à la largeur de l'image. ",

	'phloor_custom_logo:delete:label' => "Effacer logo",
	'phloor_custom_logo:delete:description' => "Si vous cochez cette case, le logo sera enlevé. ",

	'phloor_custom_logo:logodircreated' => "Le répertoire 'logo' a été créé dans le répertoire de données. ",
	'phloor_custom_logo:couldnotcreatelogodir' => "Impossible de créer le répertoire 'logo' dans le répertoire de données.",
	'phloor_custom_logo:coultnotmoveuploadedfile' => "Impossible de déplacer le fichier téléchargé dans le repertoire 'logo'du répertoire de données. ",


	'phloor_custom_logo:upload_error' => "Erreur chargement : %s ",
	'phloor_custom_logo:logo_mime_type_not_supported' => "Le type MIME du fichier ('% s') n'est pas supporté. S'il vous plaît utiliser un des types suivant 'image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg' ou 'image/png'.",
);

add_translation("fr", $french);
