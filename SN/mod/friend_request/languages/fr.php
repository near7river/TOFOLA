<?php
$language = array (
  'friend_request' => "Demande d'amitié",
  'friend_request:menu' => "Demandes d'amitié",
  'friend_request:title' => "Demande d'amitié par : %s",

  'friend_request:new' => "Nouvelle demande d'amitié",

  'friend_request:friend:add:pending' => "Demande d'amitié en attente",

  'friend_request:newfriend:subject' => "%s aimerait être votre ami !",
  'friend_request:newfriend:body' => "%s aimerait être votre ami ! Mais il attend que vous approuvez sa demande... Alors connectez-vous, et donner votre avis sur leur demande !

Vous pouvez voir les demandes d'amitié en attente en suivant ce lien (Soyez sûr d'être connecté sur le site web, avant de cliquer sur le lien sinon vous serez rediriger sur la page de connection.) :

%s

(Vous ne pouvez pas répondre à ce mail)",
		
		// Actions
		// Add request
  'friend_request:add:failure' => "Désolé, à cause d'une erreur système, nous somme dans l'impossibilité de compléter votre demande. essayer à nouveau s'il vous plait.",
  'friend_request:add:successful' => "Vous avez demandé à être ami(s) avec %s. Ils doivent aprouver votre demande avant qu'ils vous montrent sur leur liste d'amis.",
  'friend_request:add:exists' => "Vous avez déjà demandé à d'être l'ami de %s",
		
		// Approve request
  'friend_request:approve' => "Accepter",
  'friend_request:approve:successful' => "%s est maintenant un ami",
  'friend_request:approve:fail' => "Erreur pendant la création de la relation amicale avec %s",
	
		// Decline request
  'friend_request:decline' => "Refuser",
  'friend_request:decline:subject' => "%s a refusé la demande d'amitié",
  'friend_request:decline:message' => "Cher %s,

%s a refusé votre demande pour devenir ami",
  'friend_request:decline:success' => "Demande d'amitié refusé avec succès",
  'friend_request:decline:fail' => "Erreur durant le refus de la demande d'amitié, merci d'essayer à nouveau",
		
		// Revoke request
  'friend_request:revoke' => "Révocation",
  'friend_request:revoke:success' => "La demande d'amitié retiré avec succès",
  'friend_request:revoke:fail' => "Erreur de la révocation de demande d'amitié, merci d'essayer à nouveau",
	
		// Views
		// Received
  'friend_request:received:title' => "Demande d'amitié reçu",
  'friend_request:received:none' => "Aucune demande d'amitié n'attend votre approbation",
	
		// Sent
  'friend_request:sent:title' => "Envoi de demande d'amitié",
  'friend_request:sent:none' => "Aucune envoi de demande d'amitié n'attend une approbation",
);

add_translation("fr", $language);
?>