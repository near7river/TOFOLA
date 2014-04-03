<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<script language="javascript" type="text/javascript">
 function resizeIframe(obj)
 {
   obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
   if(obj.contentWindow.document.body.scrollWidth >600)
   obj.style.width = obj.contentWindow.document.body.scrollWidth + 'px';
 }
 
 </script>
 
 
<style>
	.ui-widget-header {
	border: initial;
	background: initial;
	}
	table.dataTable tr.odd {
	background-color: #FAFAFA;
	}
	table.dataTable tr.odd td.sorting_1 {
	background-color: #FAFAFA;
	}
	.datatables , .dataTables_wrapper, .form-content , .form-div , .form-field-box
	{
		font-family: Tahoma,Arial,sans-serif !important;
		direction: rtl !important;
	}
	.form-display-as-box , .form-input-box
	{
		float:right !important;
	}
	.chzn-container span
	{
		margin-right : 40px !important;
	}
	.form-display-as-box .required
	{
		display:inline-block;
		color : red;
		margin: auto 3px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
        	<?php echo $output; ?>
		</div>
	</div>
</div>
<!-- End of Footer -->

</body>
</html>
 