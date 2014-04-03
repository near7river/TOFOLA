<div class="clearfix"></div>
<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 column">
			<div class="jumbotron">
				<h1>
					Bienvenue, <?=$this->session->userdata('username')?>!
				</h1>
				<p>
					Si dessus les modules et les droits qui vous ont été affectés par votre administrateur.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="auth/infos">En savoir plus ...</a>
				</p>
			</div>
		</div>
		<div class="col-md-12 column">
			<div class="bs-glyphicons">
			    <ul class="bs-glyphicons-list">
			      <?php 
			      	$groups =$this->session->userdata('groups');
			      	foreach ($groups as $key => $x):?>
			        <li>
			          <span class="<?=$x?>"></span>
			          <span class="glyphicon-class"><?=$key?></span>
			        </li>
			      <?php endforeach;?>
			      
			    </ul>
			  </div>
		</div>
	</div>
</div>