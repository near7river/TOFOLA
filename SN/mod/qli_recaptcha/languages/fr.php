<?php
	/**
	 * Elgg recaptcha language pack extension.
	 * 
	 * @package qli_recaptcha
	 * @author http://shyfti.com
	 * @copyright 2011 shyfti.com
	 */

	// Note, the captcha:lang may not actually do anything currently
	// And would be strictly for audio
	
	$french = array(
	
		'captcha:privatekey' => "reCAPTCHA Clé privée",
		'captcha:publickey' => "reCAPTCHA Clé publique",
		'captcha:captchafail' => "Le reCAPTCHA n'a pas été entrée correctement. Retourner à étape précédente et essayer à nouveau.", 
		'captcha:instructions_visual' => "Taper les deux mots :",
		'captcha:instructions_audio' => "Taper ce que vous entendez :",
		'captcha:play_again' => "Lire le son à nouveau",
		'captcha:cant_hear_this' => "Télécharger un son au format MP3",
		'captcha:visual_challenge' => "Avoir une question visuelle",
		'captcha:audio_challenge' => "Avoir une question sonore",
		'captcha:refresh_btn' => "Action une nouvelle question",
		'captcha:help_btn' => "Aide",
		'captcha:incorrect_try_again' => "Incorrecte. Essayer à nouveau.",
		'captcha:lang' => "fr",
		'captcha:theme' => "rouge",

	);
	add_translation("en",$french);
	
?>