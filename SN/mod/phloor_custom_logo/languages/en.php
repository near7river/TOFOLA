<?php

$english = array(
	"admin:plugins:category:PHLOOR" => "PHLOOR Plugins",
	'admin:appearance:phloor_custom_logo' => 'Logo',
	
	'phloor_custom_logo:title' => "Upload logo",
	
	'phloor_custom_logo:description' => "Upload a custom logo for your site. Allowed mimetypes are 'image/gif','image/jpg','image/jpeg','image/pjpeg' and 'image/png'. ",
	
	'phloor_custom_logo:save:success' => 'Settings successfully saved.',
	'phloor_custom_logo:save:failure' => 'Settings could not be saved.',

	'phloor_custom_logo:form:section:logo' => 'Logo',

	'phloor_custom_logo:logo:label' => 'Upload your logo',
	'phloor_custom_logo:logo:description' => 'Select the file you would like to set as site logo. In order to fit into the header section consider the height and width of the image. ',

	'phloor_custom_logo:delete:label' => 'Remove logo',
	'phloor_custom_logo:delete:description' => 'If you tick this box the logo will be removed. ',

	'phloor_custom_logo:logodircreated' => "The directory 'logo/' has been created in the data directory. ",
	'phloor_custom_logo:couldnotcreatelogodir' => "Could not create the directory 'logo/' in the data directory. ",
	'phloor_custom_logo:coultnotmoveuploadedfile' => "Could not move the uploaded file into 'logo/' in the data directory. ",


	'phloor_custom_logo:upload_error' => "Upload Error: %s ",
	'phloor_custom_logo:logo_mime_type_not_supported' => "The mimetype of the file ('%s') is not supported. Please use 'image/gif','image/jpg','image/jpeg','image/pjpeg' or 'image/png'. ",
);

add_translation("en", $english);
