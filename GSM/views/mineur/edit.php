<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
				<?php echo $output; ?>
		</div>
	</div>
</div>
