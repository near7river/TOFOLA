<?php
	/**
	* ElggChat - Pure Elgg-based chat/IM
	* 
	* English language file
	* 
	* @package elggchat
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	* @version 0.4
	*/

	$french = array(
		'elggchat' => "Chat d'Elgg",
		'elggchat:title' => "Chat pour Elgg",
		'elggchat:chat:profile:invite' => "Inviter pour un chat",
		'elggchat:chat:send' => "Envoyer",
		
		'elggchat:friendspicker:info' => "Amis en ligne",	
		'elggchat:friendspicker:online' => "En ligne",
		'elggchat:friendspicker:offline' => "Hors ligne",
	
		'elggchat:chat:invite' => "Inviter",
		'elggchat:chat:leave' => "Laisser",
		'elggchat:chat:leave:confirm' => "Etes-vous sûr de vouloir quitter cette session ?",
		
		'elggchat:action:invite' => "<b>%s</b> invité <b>%s</b>",
		'elggchat:action:leave' => "<b>%s</b> quitte la session",
		'elggchat:action:join' => "<b>%s</b> rejoindre la session",
		
		'elggchat:session:name:default' => "Session Chat (%s)",
		'elggchat:session:onlinestatus' => "Dernière action : %s",
		
		// Plugin settings
		'elggchat:admin:settings:hours' => "%s heure(s)",
	
		'elggchat:admin:settings:maxsessionage' => "Temps maximum d'inactivité qu'une session peut avoir, sans être nettoyer"
		
		'elggchat:admin:settings:chatupdateinterval' => "Intervalle d'interrogation (en secondes) de la fenêtre du chat",
		'elggchat:admin:settings:maxchatupdateinterval' => "Toutes les 10 interrogations sans données, l'intervalle d'interrogation sera multiplié jusqu'à ce qu'il atteigne son maximum (en secondes)"
		'elggchat:admin:settings:monitorupdateinterval' => "Intervalle d'interrogation (en secondes) du moniteur session de chat, qui vérifie pour les demandes de nouveau chat",
		'elggchat:admin:settings:enable_sounds' => "Activer les sons",
		'elggchat:admin:settings:enable_flashing' => "Activer avertissements pour les nouveaux messages",
		'elggchat:admin:settings:enable_extensions' => "Activer les extensions",

		'elggchat:admin:settings:online_status:active' => "Nombre de secondes maximum avant que l'utilisateur soit mis au repos",
		'elggchat:admin:settings:online_status:inactive' => "Nombre de secondes maximum avant que l'utilisateur soit inactif",
		
		// User settings
		'elggchat:usersettings:enable_chat' => "Activer la barre d'outils Chat d'Elgg ?",
		'elggchat:usersettings:allow_contact_from' => "Autoriser les personnes suivantes à me contacter par chat",
		'elggchat:usersettings:allow_contact_from:all' => "Tout le monde peut me contacter",
		'elggchat:usersettings:allow_contact_from:friends' => "Seul mes amis peuvent me contacter",
		'elggchat:usersettings:allow_contact_from:none' => "Personne ne peut me contacter",
		'elggchat:usersettings:show_offline_user' => "Montrer les utilisateurs hors ligne",

		// Toolbar actions
		'elggchat:toolbar:minimize' => "Minimiser la barre d'outils Chat d'Elgg",
		'elggchat:toolbar:maximize' => "Maximiser la barre d'outils Chat d'Elgg",
	);
					
	add_translation("fr", $french);

?>
