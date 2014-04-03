<?php
/**
 * Custom menu English Language
 *
 * @package Elgg.Core
 * @subpackage Languages.English
 */

$english = array(
	'custum_menu:configure' => 'Configure menu and sub menu items',
	'custum_menu:description' => 'Important Points:
									1. Both Save buttons are same you can use any one for saving menu items.
									2. You can delete only own custom menu and sub menu however if you do not want to display any menu or sub menu just edit and select No for display.
									3. You cannot delete parent menu untill you have deleted it\'s all sub menus.
									4. For deleteing a custom menu select checkbox and save it.
									5. You can edit own custom menu and sub menu for display name and url.
									6. Edit fields are:
										(i) For display menu in menu bar. Select Yes for display.
										(ii) Parent status- Select any parent if you want to set it as sub menu.
										(iii) View restriction- Public or Logged in users.
										(iv) Set Display name.
										(v) Set menu url.',
	'custum_menu:add_menu_item' => 'Add a custom menu item',
	'custum_menu:add_menu_item:description' => 'Fill out the details to add custom items to your navigation menu.',
	'custum_menu:display_name' => 'Display Name',
	'custum_menu:url' => 'URL',
	'custum_menu:access' => 'View Access',
	'custum_menu:parent' => 'Parent Menu (Only for sub menu)',
	'custum_menu:select_parent' => 'Select Parent',
	'custum_menu:menu' => 'Menu',
	'custum_menu:edit_menu' => 'Edit Menu',
	'custum_menu:edit_sub_menu' => 'Edit Sub Menu',
	'custum_menu:delete' => 'Delete',
	'custum_menu:menu_count' => 'Set how many menu items you want to show as featured links. Unused items will be added as "More" at the end of the list.',
);

add_translation("en",$english);
