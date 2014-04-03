
<div class="clearfix"></div>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		
		<button type="button" class="btn btn-default btn-xs pull-left"><i class="icon-user icon-white"></i>Ajouter</button>
				<?php echo $output; ?>
		</div>
	</div>
</div>
