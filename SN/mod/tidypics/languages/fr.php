<?php

	$french = array(
		// hack for core bug
			'untitled' => "Non titré",

		// Menu items and titles

			'image' => "Image",
			'images' => "Images",
			'caption' => "Légende",
			'photos' => "Photos",
			'images:upload' => "Envoyer photos",
			'images:multiupload' => "Outils d'envoie multiple rapide",
			'images:multiupload:todo' => "Choisir un ou plusieurs fichier à envoyer.",
			'album' => "Album Photos",
			'albums' => "Albums Photos",

			'photos:add' => "Créer album",
			'menu:tidypics-a' => "Utilisateur",
			'menu:tidypics-z' => "Site-wide",
			'album:slideshow' => "Voir diaporama",
			'album:yours' => "Vos albums photos",
			'album:yours:friends' => "Albums photos de vos amis",
			'album:user' => "Mes albums photos",
			'album:friends' => "Albums photos des amis",
			'album:all' => "Tous les albums photos",
			'album:group' => "Albums photos",
			'item:object:image' => "Photos",
			'item:object:album' => "Albums",
			'tidypics:uploading:images' => "Attendez, s'il vous plait. Téléchargement d'images.",
			'tidypics:enablephotos' => "Activer les albums photos de groupe",
			'tidypics:editprops' => "Editer les propriétées des images ",
			'tidypics:mostcommented' => "Images les plus commentées",
			'tidypics:mostcommentedthismonth' => "La plus commentée ce mois",
			'tidypics:mostcommentedtoday' => "La plus commentée ce jour",
			'tidypics:mostviewed' => "Images les plus vues",
			'tidypics:mostvieweddashboard' => "La plus vue des tableaux de bord",
			'tidypics:mostviewedthisyear' => "La plus vue cette année",
			'tidypics:mostviewedthismonth' => "La plus vue ce mois",
			'tidypics:mostviewedlastmonth' => "La plus vue le mois dernier",
			'tidypics:mostviewedtoday' => "La plus vue ce jour",
			'tidypics:recentlyviewed' => "Images récemment vues",
			'tidypics:recentlycommented' => "Images récemment commentées",
			'tidypics:mostrecent' => "Images les plus récentes",
			'tidypics:yourmostviewed' => "Votre image la plus vue",
			'tidypics:yourmostrecent' => "Votre image la plus récente",
			'tidypics:friendmostviewed' => "Images les plus vues de %s",
			'tidypics:friendmostrecent' => "Images les plus récentes de %s",
			'tidypics:highestrated' => "Les images les mieux notées",
			'tidypics:views' => "Visionnage : %s",
			'tidypics:viewsbyowner' => "par %s utilisateurs (en vous excluant)",
			'tidypics:viewsbyothers' => "(%s par vous)",
			'tidypics:administration' => "Tidypics",
			'tidypics:stats' => "Statistiques",
			'flickr:setup' => "Paramétrage Flickr",
			'flickr:usernamesetup' => "S'il vous plaît entre votre nom d'utilisateur Flickr ici :",
			'flickr:selectalbum' => "Sélectionner un album pour importer les photos",
			'flickr:albumdesc' => "Album pour importer des photos à :",
			'flickr:importmanager' => "Gestionnaire d'import de jeu de photo",
			'flickr:desc' => "Cliquez sur le lot que vous souhaitez importer dans le site. <br /> Des copies des photos seront stockées sur le site où elles pourront être vues et commentées.",
			'flickr:intro' => "L'intégration Flickr vous permet d'importer des photos depuis votre compte Flickr dans le site Elgg. En entrant votre nom d'utilisateur et en choisissant un album à importer, vous pouvez commencer le processus. <br /> Lorsque votre nom d'utilisateur et nom d'album sélectionné sont enregistrés, cliquez sur le lien Flickr 'importer photos'(situé sur la gauche), pour sélectionner le lot des photos Flickr vous souhaitez importer.",
			'flickr:menusetup' => "Paramètrage Flickr",
			'flickr:menuimport' => "Importer les photos de Flickr",
			
		//settings
			'tidypics:settings' => "Paramètres",
			'tidypics:admin:instructions' => "Voici les principaux paramètres de Tidypics. Changez-les en fonction de votre configuration, puis cliquez sur enregistrer.",
			'tidypics:settings:image_lib' => "Répertoire image",
			'tidypics:settings:thumbnail' => "Création vignette",
			'tidypics:settings:help' => "Aide",
			'tidypics:settings:download_link' => "Montrer lien téléchargement",
			'tidypics:settings:tagging' => "Activer les tags sur photos",
			'tidypics:settings:photo_ratings' => "Activer les notes sur les photos (requière le plugin de notation ('rate plugin') de Miguel Montes ou compatible)",
			'tidypics:settings:exif' => "Montrer les données EXIF",
			'tidypics:settings:view_count' => "Compteur de visionnage",
			'tidypics:settings:grp_perm_override' => "Autoriser les membres du groupe au plein accès aux albums du groupe",
			'tidypics:settings:maxfilesize' => "Taille maximale des images en mégaoctets (Mo):",
			'tidypics:settings:quota' => "Utilisateur/Quota de groupe (Mo) - 0 signifie aucun quota",
			'tidypics:settings:multilimit' => "Limite chargement multiple des photos",
			'tidypics:settings:watermark' => "Entrez le texte à mettre en filigrane - pas encore disponible pour les sites en production",
			'tidypics:settings:im_path' => "Entrez le chemin de vos commandes ImageMagick (avec un slash à la fin)",
			'tidypics:settings:img_river_view' => "Combien d'entrée dans le flux de chaque lot d'images chargées (Reste à vérifier cette traduction='How many entries in river for each batch of uploaded images')",
			'tidypics:settings:album_river_view' => "Voir la couverture ou une jeu de photos pour le nouvel album",
			'tidypics:settings:embed_river_enabled' => "Ajouter une entrée de flux lors du téléchargement des photos via le plugin Embed (Add river entry...)", 
			'tidypics:settings:largesize' => "Taille image primaire",
			'tidypics:settings:smallsize' => "Voir dans l'album la taille de l'image (Album view image size)",
			'tidypics:settings:thumbsize' => "Taille de la vignette de l'image",
			'tidypics:settings:im_id' => "ID Image",
	
		//actions

			'album:create' => "Créer un nouvel album",
			'album:add' => "Ajouter un album photo",
			'album:addpix' => "Envoyer photos",
			'album:edit' => "Editer album",
			'album:delete' => "Effacer album",

			'image:edit' => "Editer une image",
			'image:delete' => "Effacer une image",
			'image:download' => "Télécharger",

		//forms

			'album:title' => "Titre",
			'album:desc' => "Description",
			'album:tags' => "Tags",
			'album:cover' => "Faire de l'image la couverture de l'album ?",
			'tidypics:quota' => "Utilisation du quota :",
			'tidypics:uploader:choose' => "Choisir photos",
			'tidypics:uploader:upload' => "Télécharger photos",
			'tidypics:uploader:describe' => "Descrire photos",
			'tidypics:uploader:filedesc' => "Fichiers images (jpeg, png, gif)",
			'tidypics:uploader:instructs' => "Il y a trois étapes pour ajouter des photos à votre album en utilisant le chargeur : le choix, le téléchargement, puis la description. Si vous n'avez pas Flash, il y a aussi un <a href=\"%s\">chargeur basic</a> disponible.",
			'tidypics:uploader:basic' => "Vous pouvez télécharger jusqu'à 10 photos à la fois (maximum %s Mo par photo)",
			'tidypics:sort:instruct' => "Trier les photos des albums en glissant-déposant des images. Puis cliquez sur le bouton Enregistrer.",
			'tidypics:uploader:limit' => "Vous pouvez télécharger jusqu'à %s photos à la fois (%s Mo maximum par photo)", 

		//views

			'image:total' => "Images dans l'album:",
			'image:by' => "Image ajoutée par",
			'album:by' => "Album créé par",
			'album:created:on' => "a été créé",
			'image:none' => "Aucune image n'a déjà été ajoutée.",
			'image:back' => "Précédent",
			'image:next' => "Suivant",

		// tagging
			'tidypics:taginstruct' => "Sélectionnez la zone que vous souhaitez mettre un tag",
			'tidypics:deltag_title' => "Sélectionner les tags à effacer",
			'tidypics:finish_tagging' => "Arrêter de mettre des tags",
			'tidypics:tagthisphoto' => "Mettre un Tag sur cette photo",
			'tidypics:deletetag' => "Effacer un Tag sur photo",
			'tidypics:actiontag' => "Tag",
			'tidypics:actiondelete' => "Effacer",
			'tidypics:actioncancel' => "Annuler",
			'tidypics:inthisphoto' => "Sur cette photo",
			'tidypics:usertag' => "Photos taguées avec l'utilisateur %s",
			'tidypics:phototagging:success' => "Le tag sur la photo a été ajouté avec succès",
			'tidypics:phototagging:error' => "Erreur inattendue pendant la mise du tag",
			'tidypics:deletetag:success' => "Les tags sélectionnés ont été effacés avec succès",
			
			'tidypics:tag:subject' => "Vous avez été tagués sur une photo",
			'tidypics:tag:body' => "Vous avez été tagués sur une photo %s par %s.			
			
La photo peut être vue ici : %s",


		//rss
			'tidypics:posted' => "une photo a été postée :",

		//widgets

			'tidypics:widget:albums' => "Albums photo",
			'tidypics:widget:album_descr' => "Exposer vos albums photos",
			'tidypics:widget:num_albums' => "Nombre d'albums à afficher",
			'tidypics:widget:latest' => "Dernières Photos",
			'tidypics:widget:latest_descr' => "Afficher vos dernières photos",
			'tidypics:widget:num_latest' => "Nombre d'images à afficher",
			'album:more' => "Voir tous les albums",

		//  river

			//images
			'image:river:created' => "%s a ajouté la photo %s à l'album %s",
			'image:river:created:multiple' => "%s a ajouté les photos %s à l'album %s",
			'image:river:item' => "une photo",
			'image:river:annotate' => "un commentaire sur la photo",
			'image:river:tagged' => "a mis un tag sur la photo",

			//albums
			'album:river:created' => "%s a créé un nouvel album photo",
			'album:river:group' => "dans le groupe",
			'album:river:item' => "un album",
			'album:river:annotate' => "un commentaire sur l'album photo",

		// notifications
			'tidypics:newalbum' => "Nouvel album photo",


		//  Status messages

			'tidypics:upl_success' => "Vos images ont été chargées avec succès.",
			'image:saved' => "Votre image a été sauvegardée avec succès.",
			'images:saved' => "Tous les images ont été sauvegardées avec succès.",
			'image:deleted' => "Your image was successfully deleted avec succès.",
			'image:delete:confirm' => "Etes-vous sûr de vouloir effacer cette image ?",

			'images:edited' => "Vos images ont été mise à jour avec succès.",
			'album:edited' => "Votre album a été mise à jour avec succès.",
			'album:saved' => "Votre album a été sauvegardé avec succès.",
			'album:deleted' => "Votre album a été effacé avec succès.",
			'album:delete:confirm' => "Etes-vous sûr de vouloir effacer cet album?",
			'album:created' => "Votre nouvel album a été créé.",
			'tidypics:settings:save:ok' => "Les paramètres du plugin Tidypics ont été sauvegardés avec succès",

			'tidypics:upgrade:success' => "Upgrade of Tidypics a success",
			
			'flickr:enterusername' => "Vous devez entrer un nom d'utilisateur",
			'flickr:savedusername' => "Nom d'utilisateur de %s sauvegardé avec succès",
			'flickr:saveduserid' => "ID utilisateur de %s sauvegardé avec succès",
			'flickr:savedalbum' => "Album sauvegardé - %s",

		//Error messages
			'tidypics:baduploadform' => "Il y a eu une erreur avec le formulaire de chargement",
			'tidypics:partialuploadfailure' => "Il y a au des erreurs lors du chargement de certaines images (%s de %s images).",
			'tidypics:completeuploadfailure' => "Echec du chargement des images.",
			'tidypics:exceedpostlimit' => "Trop d'images de grande taille - essayez de charger moins d'images ou plus petites.",
			'tidypics:noimages' => "Aucune image n'a été sélectionnée.",
			'tidypics:image_mem' => "Image trop grande - trop d'octets",
			'tidypics:image_pixels' => "Image ayant trop de pixels",
			'tidypics:unk_error' => "Erreur inconnue lors du chargement",
			'tidypics:save_error' => "Erreur inconnue lors de la sauvegarde de l'image sur le serveur",
			'tidypics:not_image' => "Ce type d'image n'est pas reconnu",
			'tidypics:deletefailed' => "Désolé. Echec de l'effacement.",
			'tidypics:deleted' => "Effacement réussi.",
			'image:downloadfailed' => "Désolé; cette image n'est disponible en ce moment.",
			'tidypics:nosettings' => "L'administrateur de ce site n'a pas défini les paramètres de l'album photos.",
			'tidypics:exceed_quota' => "Vous avez dépassé le quota fixé par l'administrateur",
			'images:notedited' => "Toutes les images n'ont pas été mises à jour avec succès",

			'album:none' => "Aucun album n'a déjà été crée.",
			'album:uploadfailed' => "Désolé; Nous ne pouvent pas sauvegarder votre album.",
			'album:deletefailed' => "Votre album ne peut pas être effacé en ce moment.",
			'album:blank' => "Donner à cet album un titre et une description, s'il vous plaît.",

			'tidypics:upgrade:failed' => "Echec de la mise à jour de Tidypics",
			
			'flickr:errorusername' => "Nom d'utilisateur %s introuvable sur Flickr",
			'flickr:errorusername2' => "Vous devez entrer un nom d'utilisateur",
			'flickr:errorimageimport' => "Cette image a déjà été importée",
			'flickr:errornoalbum' => "Aucun album sélectionné. S'il vous plait, choississez et sauvegardez un album : %s",
	);

	add_translation("fr",$french);
?>