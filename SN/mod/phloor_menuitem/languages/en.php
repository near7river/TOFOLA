<?php

$english = array(
    'admin:plugins:category:PHLOOR' => 'PHLOOR Plugins',
	'admin:appearance:phloor_menuitem' => 'Menuitem',

	'phloor_menuitem' => 'Menu Items',
	'phloor_menuitem:menuitem' => 'Menuitem',
	'phloor_menuitem:menuitems' => 'Menu Items',
	'phloor_menuitem:phloor_menuitem' => 'Menuitem',
	'phloor_menuitem:phloor_menuitems' => 'Menu Items',

	'item:object:phloor_menuitem' => 'Menuitem',

	'phloor_menuitem:target:_self'  => 'Open in same tab',
	'phloor_menuitem:target:_blank' => 'Open in new tab',

	'phloor_menuitem:admin:appearance:title' => "Your site menuitem",
	'phloor_menuitem:admin:appearance:description' => "Here you can manage the menuitem of your site. ",
	'phloor_menuitem:admin:appearance:entity_count' => "Menuitem count: %s ",
	'phloor_menuitem:admin:appearance:new_menuitem:title' => 'Create new menuitem',

	'phloor_menuitem:menu_name' => 'Menu: ',
	'phloor_menuitem:title'     => 'Title: ',
	'phloor_menuitem:href'      => 'Url: ',
	'phloor_menuitem:tooltip'   => 'Tooltip: ',
	'phloor_menuitem:image'     => 'Image: ',
	'phloor_menuitem:priority'  => 'Priority: ',
	'phloor_menuitem:access_id' => 'Read access: ',
	'phloor_menuitem:target'    => 'Target: ',

	'phloor_menuitem:menu_name:description' => '',
	'phloor_menuitem:title:description'     => 'Special patterns: %username%, %wwwroot% (Hooked in patterns currently not shown) ',
	'phloor_menuitem:href:description'      => 'Insert the url the menu item should reference. Special patterns: %username%, %wwwroot% (Hooked in patterns currently not shown) ',
	'phloor_menuitem:tooltip:description'   => 'The tooltip will be shown, when a user hovers over the menu item. Special patterns: %username%, %wwwroot% (Hooked in patterns currently not shown) ',
	'phloor_menuitem:image:description'     => 'Upload an image. The image will be resized into the resolutions 16x16, 60x60, 153x153 and 600x600. ',
	'phloor_menuitem:priority:description'  => '',
	'phloor_menuitem:access_id:description' => 'Who is allowed to see this menu item? ',
	'phloor_menuitem:target:description'    => '(This is currently not supported) ',

	'phloor_menuitem:message:prioritywassetto500' => 'Priority was set to 500. ',
	'phloor_menuitem:message:saved' => 'Menuitem as been successfully created. ',
	'phloor_menuitem:message:deleted_menuitem' => 'Menuitem has been successfully deleted. ',
	'phloor_menuitem:error:cannot_save' => 'Menuitem can not be saved. ',
	'phloor_menuitem:error:cannot_edit_menuitem' => 'Menuitem can not be edited. ',
	'phloor_menuitem:error:cannot_delete_menuitem' => 'Menuitem can not be deleted. ',

	'phloor_menuitem:error:menuitem_not_found' => 'Menuitem not found. ',
	'phloor_menuitem:error:wrong_mimetype' => 'The picture you\'ve uploaded is invalid. Error 483: Invalid mimetype %s ',
	'phloor_menuitem:error:missing:title' => 'Please insert a title. ',
	'phloor_menuitem:error:missing:description' => 'Please insert a description. ',
	'phloor_menuitem:error:missing:image' => 'Please upload an image. ',

	'phloor_menuitem:title:all_phloor_menuitems' => 'All menuitems',
	'phloor_menuitem:title:all_phloor_menuitem'  => 'All menuitems',
	'phloor_menuitem:title:friends' => 'Friends menuitems',
	'phloor_menuitem:title:user_phloor_menuitem'  => 'Your menuitems',
	'phloor_menuitem:title:user_phloor_menuitems' => 'Your menuitems',

	'phloor_menuitem:edit' => 'Edit',
	'phloor_menuitem:add' => 'Add menuitem',
	'phloor_menuitem:none' => 'No menuitems found. ',	

	'phloor_menuitem:newchild' => 'Add sub-item',	
	'phloor_menuitem:submenuitems' => 'Subitems of this menuitem: ',
	'phloor_menuitem:submenuitems:none' => 'This menuitem does not have any subitems yet. ',

	'phloor_menuitem:moveditemsonlevelup' => "The following items has been moved one menuitem tree level up: %s",	

	'phloor_menuitem:hide_menu_site_more:title' => "Site menu section 'more' ",	
	'phloor_menuitem:hide_menu_site_more_public' => "Hide section 'more' from guests? ",	
	'phloor_menuitem:hide_menu_site_more_loggedin' => "Hide section 'more' from logged in users? ",	

	'phloor_menuitem:specialpatternusage' => 'Use the pattern %wwwroot% will be replaced with the site url, the pattern %username% will be replaced with the current logged in users username. If you use the pattern %username% you have to restrict the read access to logged in users. ',

);

add_translation("en", $english);
