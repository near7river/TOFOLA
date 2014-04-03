<?php

	$french = array(
	
		/**
		 * Menu items and titles
		 */
	
			'poll' => "Sondage",
                        'polls:add' => "Nouveau sondage",
                        'river:commented:object:poll' => "sondage",
			'polls' => "Sondages",
			'polls:votes' => "votes",
			'polls:user' => "sondage de %s",
			'polls:group_polls' => "Sondages du groupe",
			'polls:user:friends' => "Sondage de l'ami %s",
			'polls:your' => "Vos sondages",
			'polls:not_me' => "Sondages de %s ",
			'polls:posttitle' => "sondages de %s : %s",
			'polls:friends' => "Sondages des amis",
			'polls:not_me_friends' => "sondages des amis de %s",
			'polls:yourfriends' => "Dernier sondages de vos amis",
			'polls:everyone' => "Tous les sondages du site",
			'polls:read' => "Lire sondage",
			'polls:addpost' => "Créer un sondage",
			'polls:editpost' => "Editer a sondage",
			'polls:text' => "Texte du sondage",
			'polls:strapline' => "%s",
			'item:object:poll' => "Sondages",
			'polls:question' => "Question du sondage",
			'polls:responses' => "Choix des réponses",
			'polls:results' => "[+] Montrer les résultats",
			'polls:show_results' => "Montrer les résultats",
			'polls:show_poll' => "Montrer les sondage",
			'polls:add_choice' => "Ajouter un choix de réponse",
			'polls:delete_choice' => "Effacer ce choix",
			'polls:settings:group:title' => "Sondages du groupe",
			'polls:settings:group_polls_default' => "Oui, actif par défaut",
			'polls:settings:group_polls_not_default' => "Oui, désactivé par défaut",
			'polls:settings:no' => "non",
			'polls:settings:group_profile_display:title' => "Si les sondages des groupe sont activées, où affiche t'on le contenu des sondages dans le profil du groupe ?",
			'polls:settings:group_profile_display_option:left' => "gauche",
			'polls:settings:group_profile_display_option:right' => "droite",
			'polls:settings:group_profile_display_option:none' => "aucun",
			'polls:settings:group_access:title' => "Si les sondages de groupe sont activés, qui aura à créer des sondages ?",
			'polls:settings:group_access:admins' => "Le propriétaires du groupe et les administrateurs seulement",
			'polls:settings:group_access:members' => "Tous les membres du groupe",
		/**
	     * poll widget
	     **/
			'polls:latest_widget_title' => "Les sondages les plus récents de la communauté",
			'polls:latest_widget_description' => "Afficher les sondages les plus récents.",
			'polls:my_widget_title' => "Mes sondages",
			'polls:my_widget_description' => "Ce widget affichera vos sondages.",
			'polls:widget:label:displaynum' => "Combien de sondages voulez-vous afficher ?",
			'polls:individual' => "Sondage le plus récent",
			'poll_individual_group:widget:description' => "Afficher le sondage le plus récent pour ce groupe.",
			'poll_individual:widget:description' => "Afficher votre sondage le plus récent",
			'polls:widget:no_polls' => "Il n'y a pas encore de sondages pour %s.",
			'polls:widget:nonefound' => "Aucun sondage trouvé.",
			'polls:widget:think' => "Laisser %s connaitre votre opinion !",
			'polls:enable_polls' => "Activer les sondages",
			'polls:group_identifier' => "(dans %s)",
			
         /**
	     * poll river
	     **/
	        
	        //generic terms to use
	        'polls:river:created' => "%s a créé",
	        'polls:river:updated' => "%s a mis à jour",
	        'polls:river:posted' => "%s a posté",
	        'polls:river:voted' => "%s a voté",
	        //these get inserted into the river links to take the user to the entity
	        'polls:river:create' => "un nouveau sondage: ",
	        'polls:river:update' => "Le sondage : ",
	        'poll:river:annotate' => "un commentaire à propos de ce sondage",
	        'polls:river:vote' => "à propos du sondage : ",
		/**
		 * Status messages
		 */
	
			'polls:posted' => "Votre sondage a été posté avec succès.",
			'polls:responded' => "Merci d'avoir répondu, votre vote a été enregistré.",
			'polls:deleted' => "Votre sondage a été effacé avec succès.",
			'polls:totalvotes' => "Nombre de votes total : ",
			'polls:voted' => "Votre vote a été comptabilisé pour ce sondage. Merci d'avoir donné votre avis pour ce Sondage.",
			
	
		/**
		 * Error messages
		 */
	
			'polls:save:failure' => "Votre sondage ne peut pas être sauvegardé. Essayer à nouveau, s'il vous plait.",
			'polls:blank' => "Désolé : vous devez remplir à la fois les questions et les réponses avant de faire un sondage.",
			'polls:novote' => "Désolé : vous devez choisir une option pour voter à ce sondage.",
			'polls:notfound' => "Désolé : nous ne pouvons pas trouver le sondage spécifié.",
			'polls:nonefound' => "Aucun sondage de %s n'a été trouvé.",
			'polls:notdeleted' => "Désolé : nous ne pouvons pas effacer ce sondage."
	);
					
	add_translation("fr",$french);

?>