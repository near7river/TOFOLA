<?php

/**
 *	Hype Gallery
 *  French language
 *  Translation is purely "front-end" only. Admin level is still in English.
 *  Translation by: crossover.jacques@yahoo.com
 */

$french = array(

    /**
     *  Gallery UI elements
     */
    'gallery' => 'Galerie',
    'hj:gallery:menu:owner_block' => 'Galerie',

	'item:object:hjalbum' => 'Album',
	'items:object:hjalbum' => 'Albums',
	'hj:gallery:albums' => 'Albums',
	
	'item:object:hjalbumimage' => 'Media',
	'items:object:hjalbumimage' => 'Media',

    'hj:gallery:album:owner' => "%s's Album",
    'hj:gallery:albums:owner' => "%s's Albums",
	'hj:gallery:albums:friends' => "Albums des amis",
	'hj:gallery:albums:friends:owner' => "%s\s Albums des amis",
	'hj:gallery:album:author' => 'by %s',
	'hj:gallery:albums:all' => 'Albums du site',
	'hj:gallery:albums:group' => '%s\'s Albums',
	'hj:gallery:albums:groups' => 'Albums de groupe',
    'hj:gallery:addnew' => 'Créer un Album',
    'hj:gallery:addimage' => 'Télécharger des fichiers',
    'hj:gallery:noalbums' => "Il n'y a aucun albums encore",
	'hj:gallery:allalbums' => 'Tous les Albums de sites',
	'hj:gallery:albums:mine' => 'Mes Albums',
	'hj:gallery:album:edit' => 'Modifier %s',
	'hj:gallery:albums:favorites' => 'Favoris',
	'hj:gallery:albums:favorites:mine' => 'Mes favoris',
	'hj:gallery:albums:favorites:owner' => '%s\'s Favoris',

	'hj:gallery:albums:friends:none' => "Vous n'avez pas encore d'amis",

	'gallery:add' => 'Créer un album',
	'hj:gallery:edit:object:hjalbum' => 'Modifier un album',
	'hj:gallery:edit:details' => "Ajouter d'autres détails",

	'hj:gallery:create:album' => 'Créer un album',
	'hj:gallery:manage:album' => "Gérer l'Album",
	'hj:gallery:manage:instructions' => "Il s'agit d'un album collaboratif et vous permet de télécharger des images d'elle. Ci-dessous vous verrez uniquement des fichiers téléchargés par vous",
	
    /**
     * Labels
     */
    'hj:label:form:new:hypeGallery:gallery:create' => 'Créer nouvelle galerie',
    'hj:label:form:edit:hypeGallery:gallery:create' => 'Modifier votre galerie',
    'hj:label:form:new:hypeGallery:album' => 'Ajouter un nouvel Album',
    'hj:label:form:edit:hypeGallery:album' => 'Modifier un Album',
    'hj:label:form:new:hypeGallery:album:image' => 'Ajouter des images',
    'hj:label:form:edit:hypeGallery:album:image' => "Modifier l'image",

    'hj:label:hjalbum:title' => "Nom de l'album",
    'hj:label:hjalbum:description' => 'Description',
    'hj:label:hjalbum:location' => "Emplacement de l'album",
    'hj:label:hjalbum:date' => "Date de l'album",
    'hj:label:hjalbum:friend_tags' => 'Amis dans cet album',
    'hj:framework:relationship_tags:notagged_in' => "Vous n'avez pas encore d'amis",
    'hj:label:hjalbum:tags' => 'Tags',
    'hj:label:hjalbum:copyright' => "Avis de droit d'auteur",
    'hj:label:hjalbum:access_id' => 'Visibilité',
	'hj:label:hjalbum:upload' => 'Télécharger des Images',
	'hj:label:hjalbum:category' => 'Catégories',
	'hj:label:hjalbum:permissions' => 'Qui peut ajouter des photos à cet album?',
	'hj:label:hjalbum:time_created' => 'Date de création',
	'hj:label:hjalbum:last_action' => 'Dernière mise à jour',
	'hj:label:hjalbum:owner' => 'Créateur',

    'hj:label:hjalbumimage:image' => "Télécharger l'Image",
    'hj:label:hjalbumimage:title' => 'Titre',
    'hj:label:hjalbumimage:description' => 'Description',
    'hj:label:hjalbumimage:location' => 'Emplacement',
    'hj:label:hjalbumimage:date' => 'Date',
    'hj:label:hjalbumimage:friend_tags' => 'Amis sur cette photo',
    'hj:label:hjalbumimage:tags' => 'Tags',
    'hj:label:hjalbumimage:copyright' => "Avis de droit d'auteur",
    'hj:label:hjalbumimage:access_id' => 'Visibilité',
	'hj:label:hjalbumimage:time_created' => 'Téléchargé',
	'hj:label:hjalbumimage:owner' => 'Ajouté par',
	'hj:label:hjalbumimage:category' => 'Catégories',
	
	'permission:value:private' => 'Juste moi',
	'permission:value:friends' => 'Moi et mes amis',
	'permission:value:public' => 'Tout le monde',
	'permission:value:group' => 'Membres du groupe',

	'hj:gallery:image:makeavatar' => 'Faire la photo de profil',
	'hj:gallery:image:makecover' => "Faire la couverture de l'Album",
	'hj:gallery:image:download' => 'Télécharger',
	'hj:gallery:image:cropper' => 'Cultures nouvelles vignettes',
	'hj:gallery:image:reorder' => '& Glissé à réorganiser',
	'hj:gallery:image:priority' => 'Commande de position',
	'hj:gallery:image:tag' => 'Tag',

	'hj:gallery:tools:crop:success' => 'Les photos ont été créées avec succès',
	'hj:gallery:tools:crop:error' => 'Vignettes pourraient ne pas être créées créés',
	'hj:gallery:tools:crop' => 'Créer une miniature',
	'hj:gallery:tools:crop:preview' => 'Nouvelle vignette',
	'hj:gallery:tools:crop:current' => 'Vignette actuelle',
	'hj:gallery:tools:crop:instructions' => "<b>&larr;</b>Cliquez et faites glisser un carré sur la gauche en fonction de comment vous voulez que le pouce recadré. Un aperçu s'affiche dans la case ci-dessous. Il peut prendre un certain temps pour que les modifications à propager, jusqu'à ce que le cache du navigateur est désactivé",
	'hj:gallery:tools:crop:loading' => 'Outil de troncation de chargement...',
	'hj:gallery:tools:crop:ready' => 'Outil de culture',
	
	'hj:gallery:byline' => 'Publié par %s %s',
	'hj:gallery:published' => 'Publié sur %s',

    /**
     * Actions
     */
    'hj:gallery:save:success' => 'Élément a été enregistré avec succès',
    'hj:gallery:save:error' => "Point n'a pas pu être enregistré",
    'hj:gallery:delete:success' => 'Élément a été supprimé avec succès',
    'hj:gallery:delete:error' => "Point n'a pas pu être supprimé",

	'hj:gallery:upload:error:noalbum' => "Album n'existe pas ou vous n'avez pas les autorisations nécessaires pour ajouter des nouveaux fichiers",
	
	/**
     * River
     */
	'river:create:object:hjalbumimage' => '%s téléchargé une nouvelle image %s',
	'river:update:object:hjalbumimage' => '%s mise à jour de leur image %s',

	'river:create:object:hjalbum' => '%s créé un nouvel album %s [%s images]',
	'river:update:object:hjalbum' => "%s téléchargé %s images d'un album %s [%s images]",
	'hj:gallery:new' => 'new',

	'hj:gallery:tools:cover:success' => "Nouvelle couverture de l'album a été correctement définie",
	'hj:gallery:tools:cover:error' => "Il y avait un problème avec la fixation d'une couverture de l'album",

	'hj:gallery:tools:tagger:start' => 'Commencer le marquage',
	'hj:gallery:tools:tagger:stop' => 'Arrêter le marquage',
	'hj:gallery:phototag:success' => 'Tag ajouté avec succès',
	'hj:gallery:phototag:error' => "Tag n'a pas pu être ajouté",

	'hj:gallery:menu:owner_block' => 'Albums',

	'hj:gallery:enablegallery' => 'Activez la Galerie du groupe',
	'gallery:group' => 'Albums de groupe',

	'hj:gallery:image:container' => ' dans %s',

	'hj:gallery:switch:photostream' => 'Photostream',
	'hj:gallery:switch:albums' => "Vue de l'album",
	'hj:gallery:switch:thumbs' => 'Vignettes',
	'hj:gallery:switch:details' => 'Résumé',
	'hj:gallery:switch:detail_full' => 'Complet',
	'hj:gallery:goto:full' => 'Voir le profil Image',

	'hj:gallery:list_type_toggle:table' => 'Tableau',
	'hj:gallery:list_type_toggle:gallery' => 'Galerie',
	'hj:gallery:list_type_toggle:map' => 'Carte',

	'hj:gallery:upload:toalbum' => 'Télécharger',
	'hj:gallery:upload' => 'Ajouter des images',

	'hj:gallery:filter' => 'Filtrer les Albums & Images',

	'hj:gallery:upload:imagesuploaded' => '%s les fichiers ont été téléchargés avec succès',
	'hj:gallery:upload:error' => "Une erreur s'est produite lors du téléchargement de vos fichiers",
	'hj:gallery:upload:unsupportedtype' => "%s fichiers n'a pas peuvent être téléchargées (non pris en charge type ou autres erreurs)",
	'hj:gallery:upload:pending' => "%s les fichiers sont en attente d'approbation",
	'hj:gallery:upload:pending:message' => "
		%s les images ont été téléchargées vers votre album %s et sont en attente d'approbation. <br />
		Vous pouvez approuver en suivant ce lien: <br />%s
	",

	'hj:gallery:nofriends' => "Vous n'avez pas d'amis encore",
	'hj:gallery:nogroups' => "Vous n'appartenez pas à tous les groupes encore",

	'hj:gallery:groupoption:enable' => 'Activez les albums du groupe',

	'hj:gallery:approve' => 'Approuver',
	'hj:gallery:approve:error' => "Une erreur s'est produite lors essayer d'approuver cette image",
	'hj:gallery:approve:success' => 'Image approuvé avec succès',
	'hj:gallery:upload:approved' => 'Les images ont été approuvées',
	'hj:gallery:upload:approved:message' => 'Une ou plusieurs images que vous avez téléchargés vers %s ont été approuvés',

	'hj:gallery:image:thumb:reset' => 'Réinitialiser les vignettes',
	'hj:gallery:thumb:reset:success' => 'Vignette a été réinitialisée',
	'hj:gallery:thumb:reset:error' => 'Il y avait une erreur de réinitialisation de la miniature',

	'hj:gallery:tagger:instructions' => 'Pour créer une balise active, sélectionnez une zone sur la photo',

	 /**
     * Admin
     */
	'edit:plugin:hypegallery:params[album_river]' => 'Add album updates to the activity stream',
	'edit:plugin:hypegallery:hint:album_river' => 'Enabling this option will add entries about newly uploaded images to the activity stream',

	'edit:plugin:hypegallery:params[favorites]' => 'Enable favorites tab on the dashboard',
	'edit:plugin:hypegallery:hint:favorites' => 'Enabling this option will add a favorites tab and display a list of liked images',

	'edit:plugin:hypegallery:params[interface_location]' => 'Enable location interface',
	'edit:plugin:hypegallery:hint:interface_location' => 'Enabling this option will add a required location field to images, and add a map view (should the map interface be enabled)',

	'edit:plugin:hypegallery:params[interface_calendar]' => 'Enable dates for albums and images',
	'edit:plugin:hypegallery:hint:interface_calendar' => 'Enabling this option will add a required date field to images, and add a calendar view (should the calendar interface be enabled)',

	'edit:plugin:hypegallery:params[copyrights]' => 'Add copyright information to albums and images',
	'edit:plugin:hypegallery:hint:copyrights' => 'Enabling this option will add a required copyright field to images',

	'edit:plugin:hypegallery:params[categories]' => 'Enable categories',
	'edit:plugin:hypegallery:hint:categories' => 'Enablighs this option will add a categories field to images',

	'edit:plugin:hypegallery:params[collaborative_albums]' => 'Enable collaborative albums',
	'edit:plugin:hypegallery:hint:collaborative_albums' => 'Enabling this option will allows users to create collaborative albums; other users will be given an opportunity to add images to collaborative albums, pending original creator\'s approval',

	'edit:plugin:hypegallery:params[group_albums]' => 'Enable group albums',
	'edit:plugin:hypegallery:hint:group_albums' => 'Enabling this option will add gallery interface to groups',

	'edit:plugin:hypegallery:params[avatars]' => 'Users can use uploaded images as avatars',
	'edit:plugin:hypegallery:hint:avatars' => 'Enabling this option will allow users to use uploaded images as their avatars',

	'edit:plugin:hypegallery:params[tagging]' => 'Enable image area tagging',
	'edit:plugin:hypegallery:hint:tagging' => 'Enabligh this option will allow users to add image area tags to images',

	'edit:plugin:hypegallery:params[downloads]' => 'Enable downloads',
	'edit:plugin:hypegallery:hint:downloads' => 'Enabling this option will allow users to download images',

	'edit:plugin:hypegallery:params[exif]' => 'Enable EXIF',
	'edit:plugin:hypegallery:hint:exif' => 'Enabling EXIF tag parsing for qualifying images',

	 /**
     * Add Image + Slideshow
     */
	'hj:album:untitled' => 'Sans titre',
	'hj:gallery:filedrop:instructions' => 'Glissez et déposez vos fichiers dans cette zone ou %s à partir de votre ordinateur',
	'hj:gallery:filedrop:fallback' => 'Sélectionnez',
	'hj:gallery:filedrop:browsernotsupported' => 'Votre navigateur ne pas soutenir drag & supprimer des fonctionnalités',
	'hj:gallery:filedrop:filetoolarge' => 'Un ou plusieurs fichiers dépassent la taille maximale autorisée du fichier',
	'hj:gallery:filedrop:filetypenotallowed' => "Un ou plusieurs fichiers n'ont pas un type de fichier autorisés",

	'hj:gallery:slideshow' => 'Lancer le diaporama',
	
	'hj:gallery:slideshow:loading' => 'Diaporama de chargement...',
	'hj:gallery:slideshow:pager' => '%s de %s',

	'hj:gallery:list:empty' => "Il n'y a aucun élément à représenter",
	'hj:gallery:inthisphoto' => 'Sur cette photo:',

	'hj:gallery:user:tagged' => 'Vous avez été tagué sur une photo',
	'hj:gallery:user:tagged:message' => 'Vous avez été tagué sur une photo: %s',
	'hj:gallery:phototag:river' => '%s Taggé %s dans %s',

	'hj:gallery:exif' => "En-têtes d'image EXIF",
	'hj:gallery:exif:resolution' => '%s dpi',

	 /**
     * EXIF Information
     */
	'exif.Model' => 'Camera',
	'exif.LensInfo' => 'Lens Info',
	'exif.LensModel' => 'Lens Model',
	'exif.LensSerialNumber' => 'Lens Serial Number',
	'exif.Copyright' => 'Copyright',
	'exif.ImageDescription' => 'Description',
	'exif.Software' => 'Software',
	'exif.ModifyDate' => 'Date and Time (Modified)',
	'exif.XResolution' => 'X-Resolution',
	'exif.YResolution' => 'Y-Resolution',
	'exif.ResolutionUnit' => 'Resolution Unit',
	'exif.ResolutionUnit.1' => 'No absolute unit of measurement',
	'exif.ResolutionUnit.2' => 'Inch',
	'exif.ResolutionUnit.3' => 'Centimeter',

	'exif.ExposureTime' => 'Exposure (s)',
	'exif.FNumber' => 'F-Number',
	'exif.ApertureValue' => 'Aperture Value',
	'exif.BrightnessValue' => 'Brightness',
	'exif.ExposureBiasValue' => 'Exposure Bias',
	'exif.MaxApertureValue' => 'Max Aperture Value',
	'exif.SubjectDistance' => 'Subject Distance (m)',
	'exif.SubjectArea' => 'Subject Area',
	'exif.SubjectLocation' => 'Subject Location',
	
	'exif.ExposureProgram' => 'Exposure Program',
	'exif.ExposureProgram.0' => 'Not defined',
	'exif.ExposureProgram.1' => 'Manual',
	'exif.ExposureProgram.2' => 'Normal program',
	'exif.ExposureProgram.3' => 'Aperture priority',
	'exif.ExposureProgram.4' => 'Shutter priority',
	'exif.ExposureProgram.5' => 'Creative program (biased toward depth of field)',
	'exif.ExposureProgram.6' => 'Action program (biased toward fast shutter speed)',
	'exif.ExposureProgram.7' => 'Portrait mode (for closeup photos with the background out of focus)',
	'exif.ExposureProgram.8' => 'Landscape mode (for landscape photos with the background in focus)',

	'exif.ComponentsConfiguration' => 'Components Configuration',
	'exif.ComponentsConfiguration.0' => 'Does not exist',
	'exif.ComponentsConfiguration.1' => 'Y',
	'exif.ComponentsConfiguration.2' => 'Cb',
	'exif.ComponentsConfiguration.3' => 'Cr',
	'exif.ComponentsConfiguration.4' => 'R',
	'exif.ComponentsConfiguration.5' => 'G',
	'exif.ComponentsConfiguration.6' => 'B',
	'exif.ComponentsConfiguration.Other' => 'Other',

	'exif.MeteringMode' => 'Metering Mode',
	'exif.MeteringMode.0' => 'Unknown',
	'exif.MeteringMode.1' => 'Average',
	'exif.MeteringMode.2' => 'CenterWeightedAverage',
	'exif.MeteringMode.3' => 'Spot',
	'exif.MeteringMode.4' => 'MultiSpot',
	'exif.MeteringMode.5' => 'Pattern',
	'exif.MeteringMode.6' => 'Partial',
	'exif.MeteringMode.255' => 'Other',

	'exif.LightSource' => 'Light Source',
	'exif.LightSource.0' => 'Unknown',
	'exif.LightSource.1' => 'Daylight',
	'exif.LightSource.2' => 'Fluorescent',
	'exif.LightSource.3' => 'Tungsten (incandescent light)',
	'exif.LightSource.4' => 'Flash',
	'exif.LightSource.9' => 'Fine weather',
	'exif.LightSource.10' => 'Cloudy weather',
	'exif.LightSource.11' => 'Shade',
	'exif.LightSource.12' => 'Daylight fluorescent (D 5700 - 7100K)',
	'exif.LightSource.13' => 'Day white fluorescent (N 4600 - 5400K)',
	'exif.LightSource.14' => 'Cool white fluorescent (W 3900 - 4500K)',
	'exif.LightSource.15' => 'White fluorescent (WW 3200 - 3700K)',
	'exif.LightSource.17' => 'Standard light A',
	'exif.LightSource.18' => 'Standard light B',
	'exif.LightSource.19' => 'Standard light C',
	'exif.LightSource.20' => 'D55',
	'exif.LightSource.21' => 'D65',
	'exif.LightSource.22' => 'D75',
	'exif.LightSource.23' => 'D50',
	'exif.LightSource.24' => 'ISO studio tungsten',
	'exif.LightSource.255' => 'Other light source',

	'exif.Flash' => 'Flash',
	'exif.Flash.0' => 'Flash did not fire',
	'exif.Flash.1' => 'Flash fired',
	'exif.Flash.5' => 'Strobe return light not detected',
	'exif.Flash.7' => 'Strobe return light detected',
	'exif.Flash.9' => 'Flash fired, compulsory flash mode',
	'exif.Flash.13' => 'Flash fired, compulsory flash mode, return light not detected',
	'exif.Flash.15' => 'Flash fired, compulsory flash mode, return light detected',
	'exif.Flash.16' => 'Flash did not fire, compulsory flash mode',
	'exif.Flash.24' => 'Flash did not fire, auto mode',
	'exif.Flash.25' => 'Flash fired, auto mode',
	'exif.Flash.29' => 'Flash fired, auto mode, return light not detected',
	'exif.Flash.31' => 'Flash fired, auto mode, return light detected',
	'exif.Flash.32' => 'No flash function',
	'exif.Flash.65' => 'Flash fired, red-eye reduction mode',
	'exif.Flash.69' => 'Flash fired, red-eye reduction mode, return light not detected',
	'exif.Flash.71' => 'Flash fired, red-eye reduction mode, return light detected',
	'exif.Flash.73' => 'Flash fired, compulsory flash mode, red-eye reduction mode',
	'exif.Flash.77' => 'Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected',
	'exif.Flash.79' => 'Flash fired, compulsory flash mode, red-eye reduction mode, return light detected',
	'exif.Flash.89' => 'Flash fired, auto mode, red-eye reduction mode',
	'exif.Flash.93' => 'Flash fired, auto mode, return light not detected, red-eye reduction mode',
	'exif.Flash.95' => 'Flash fired, auto mode, return light detected, red-eye reduction mode',

	'exif.FlashEnergy' => 'Flash Energy',
	'exif.SpatialFrequencyResponse' => 'Spatial Frequency Response',
	'exif.FocalPlaneXResolution' => 'Focal Panel X-Resolution',
	'exif.FocalPlaneYResolution' => 'Focal Panel Y-Resolution',
	
	'exif.FocalPlaneResolutionUnit' => 'Focal Panel Resolution Unit',
	'exif.FocalPlaneResolutionUnit.1' => 'No absolute unit of measurement',
	'exif.FocalPlaneResolutionUnit.2' => 'Inch',
	'exif.FocalPlaneResolutionUnit.3' => 'Centimeter',
	
	'exif.ISO' => 'ISO Speed',
	'exif.ISOSpeedRatings' => 'ISO Speed',

	'exif.SensitivityType' => 'Sensitivity Type',
	'exif.SpectralSensitivity' => 'Spectral Sensitivity',
	'exif.RecommendedExposureIndex' => 'Recommended Exposure Index',
	'exif.ExifVersion' => 'EXIF version',
	'exif.FlashpixVersion' => 'Flashpix version',

	'exif.DateTime' => 'Date and Time',
	'exif.DateTimeOriginal' => 'Date and Time (Original)',
	'exif.DateTimeDigitized' => 'Date and Time (Digitized)',
	'exif.SubsecTime' => 'Sub Sec Time of Date and Time value',
	'exif.SubsecTimeOriginal' => 'Sub Sec Time of Date and Time (Original) value',
	'exif.SubsecTimeDigitized' => 'Sub Sec Time of Date and Time )Digitized) value',

	'exif.CompressedBitsPerPixel' => 'Compressed Bits per Pixel',
	'exif.ShutterSpeedValue' => 'Shutter Speed Value',
	'exif.FocalLength' => 'Focal Length',
	'exif.UserComment' => 'Comment',
	'exif.ColorSpace' => 'Color Space',
	'exif.PixelXDimension' => 'Pixel X-Dimension',
	'exif.PixelYDimension' => 'Pixel Y-Dimension',
	'exif.ExposureIndex' => 'Exposure Index',

	'exif.SensingMethod' => 'Sensing Method',
	'exif.SensingMethod.1' => 'Not defined',
	'exif.SensingMethod.2' => 'One-chip color area sensor',
	'exif.SensingMethod.3' => 'Two-chip color area sensor',
	'exif.SensingMethod.4' => 'Three-chip color area sensor',
	'exif.SensingMethod.5' => 'Color sequential area sensor',
	'exif.SensingMethod.7' => 'Trilinear sensor',
	'exif.SensingMethod.8' => 'Color sequential linear sensor',

	'exif.SceneType' => 'Scene Type',

	'exif.CFAPattern' => 'CFA Pattern',
	'exif.CFAPattern.0' => 'Red',
	'exif.CFAPattern.1' => 'Green',
	'exif.CFAPattern.2' => 'Blue',
	'exif.CFAPattern.3' => 'Cyan',
	'exif.CFAPattern.4' => 'Magenta',
	'exif.CFAPattern.5' => 'Yellow',
	'exif.CFAPattern.6' => 'White',

	'exif.CustomRendered' => 'Custom Rendered',
	'exif.CustomRendered.0' => 'Normal process',
	'exif.CustomRendered.1' => 'Custom process',

	'exif.ExposureMode' => 'Exposure Mode',
	'exif.ExposureMode.0' => 'Auto exposure',
	'exif.ExposureMode.1' => 'Manual exposure',
	'exif.ExposureMode.2' => 'Auto bracket',

	'exif.WhiteBalance' => 'White Balance',
	'exif.WhiteBalance.0' => 'Auto white balance',
	'exif.WhiteBalance.1' => 'Manual white balance',

	'exif.DigitalZoomRatio' => 'Digital Zoom Ratio',
	'exif.FocalLengthIn35mmFilm' => 'Focal Length in 35mm film equiv',

	'exif.SceneCaptureType' => 'Scene Capture Type',
	'exif.SceneCaptureType.0' => 'Standard',
	'exif.SceneCaptureType.1' => 'Landscape',
	'exif.SceneCaptureType.2' => 'Portrait',
	'exif.SceneCaptureType.3' => 'Night Scene',

	'exif.GainControl' => 'Gain Control',
	'exif.GainControl.0' => 'None',
	'exif.GainControl.1' => 'Low gain up',
	'exif.GainControl.2' => 'High gain up',
	'exif.GainControl.3' => 'Low gain down',
	'exif.GainControl.4' => 'High gain down',

	'exif.Contrast' => 'Contrast',
	'exif.Contrast.0' => 'Normal',
	'exif.Contrast.1' => 'Soft',
	'exif.Contrast.2' => 'Hard',

	'exif.Saturation' => 'Saturation',
	'exif.Saturation.0' => 'Normal',
	'exif.Saturation.1' => 'Low saturation',
	'exif.Saturation.2' => 'High saturation',

	'exif.Sharpness' => 'Sharpness',
	'exif.Sharpness.0' => 'Normal',
	'exif.Sharpness.1' => 'Soft',
	'exif.Sharpness.2' => 'Hard',

	'exif.DeviceSettingDescription' => 'Device Setting Description',

	'exif.SubjectDistanceRange' => 'Subject Distance Range',
	'exif.SubjectDistanceRange.0' => 'Unknown',
	'exif.SubjectDistanceRange.1' => 'Macro',
	'exif.SubjectDistanceRange.2' => 'Close view',
	'exif.SubjectDistanceRange.3' => 'Distant view',

	'exif.ImageUniqueID' => 'Unique Image ID',
	
	'exif.GPSVersionID' => 'GPS Version ID',
	'exif.GPSAltitude' => 'Altitude',
	'exif.GPSAltitudeRef' => 'Altitude Ref',
	'exif.GPSAltitudeRef.0' => 'Above sea level',
	'exif.GPSAltitudeRef.1' => 'Below sea level',
	'exif.GPSLatitude' => 'Latitude',
	'exif.GPSLongitude' => 'Longitude',
	

	// widgets
	'hj:gallery:widget:photostream' => 'Flux de photos',
	'hj:gallery:widget:photostream:desc' => 'Un flux de photos plus récentes',
	'hj:gallery:widget:albums' => 'Albums',
	'hj:gallery:widget:albums:desc' => 'Une liste des derniers albums',
	'hj:gallery:widget:more' => 'Voir tous',
	'hj:gallery:widget:limit' => "Nombre d'images à afficher",
	'hj:gallery:widget:none' => 'Aucun élément à afficher',
	
);

add_translation("fr", $french);
?>