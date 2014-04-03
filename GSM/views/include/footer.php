

	<footer>
		<div class="container">
		
		<p>
			<small>
				<em>Developed by:</em> 
					<a href="http://www.linkedin.com/in/jokatz/" target="_blank">Zerai Naoufal</a>,  
					<a href="http://ar.linkedin.com/in/martincapeletto/" target="_blank">Dib Zakariyae</a>,  
					<a href="http://ar.linkedin.com/in/martincapeletto/" target="_blank">Liraqui Khalil</a>  
					<br>
					© Tofola <?=date("Y");?>
				</small>
		</p>
		</div>
	
			
	</footer>
	
   <script src="<?php echo base_url('assets/grocery_crud/js/jquery-1.10.2.min.js') ?>"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   
   <?php if(isset($js_files)):foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
	<?php endforeach; endif;?>
   <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
   <script type="text/javascript">
	$("[name=<?=(isset($active))?$active:""?>]").addClass("active");
   </script>
</body>
</html>
