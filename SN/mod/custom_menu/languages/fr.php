<?php
/**
 * Custom menu French Language
 *
 * @package Elgg.Core
 * @subpackage Languages.French
 */

$french = array(
	'custum_menu:configure' => "Configurer les menus et les sous-menus",
	'custum_menu:description' => "Points important:
									1. Les deux boutons de sauvegarde sont les mêmes, vous pouvez utiliser n'importe le quel pour sauvegarder les champs du menu.
									2. Vous pouvez effacer seulement vos menus et sous-menus personnalisés. Cependant si vous ne souhaitez aucun menu ou sous menu, il suffit de les édités et de sélectionner 'Non' pour l'affichage.
									3. Vous ne pouvez pas effacer le menu parent tant que vous n'avez pas effacé tous les sous-menus.
									4. Pour effacer un menu personnalisé sélectionner une case à cocher et sauvegarder la.
									5. Vous pouvez éditer votre propre menu et sous-menu pour afficher leur nom et url.
									6. Les champs édités sont :
										(i) Pour afficher le menu dans la barre de menu. Sélectionner 'Oui' pour afficher.
										(ii) Status parent - Sélectionner aucun parent si vous le voulez comme sous menu.
										(iii) Restriction vision (disponibilité) - Public ou utilisateurs connectés.
										(iv) Définir le nom affiché.
										(v) Définir l'url du menu .",
	'custum_menu:add_menu_item' => "Ajouter un menu personnalisé",
	'custum_menu:add_menu_item:description' => "Remplir les détails à ajouter à vos champs personnalisés dans votre menu de navigation.",
	'custum_menu:display_name' => "Afficher le nom",
	'custum_menu:url' => "URL",
	'custum_menu:access' => "Accès vue",
	'custum_menu:parent' => "Menu parent (Seulement pour les sous-menus)",
	'custum_menu:select_parent' => "Sélectionner le parent",
	'custum_menu:menu' => "Menu",
	'custum_menu:edit_menu' => "Editer le menu",
	'custum_menu:edit_sub_menu' => "Editer le sous menu",
	'custum_menu:delete' => "Effacer",
	'custum_menu:menu_count' => "Définisez le nombre de menus à montrer en facade de la barre principale. Les menus inutilisés seront ajoutés au menu 'Plus' à la fin de la liste",
);

add_translation("fr",$french);
