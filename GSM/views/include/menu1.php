
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="<?=base_url()?>">TOFOLA</a>
					 
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li name="Mineur" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=lang('gsm_mineur')?><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Statistique par rapport à l'age</a>
								</li>
								<li>
									<a href="#">Statistique par rapport au sexe</a>
								</li>
								<li>
									<a href="#">Statistique par rapport au niveau scolaire</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="<?=base_url()?>mineur/liste">Liste des mineurs</a>
								</li>
								<li class="divider">
								<li>
									<a href="<?=base_url()?>mineur/referenciel">Référenciel</a>
								</li>
							</ul>
						</li>
					<!--
						<li name="Centre" class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Centre<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Bilan par centre</a>
								</li>
								<li>
									<a href="#">Bilan anunel</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="<?=base_url()?>centre/liste">Liste des centres</a>
								</li>
								
							</ul>
						</li>

						<li name="Formateur" class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formateur<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Statistiques par formateurs</a>
								</li>
								<li>
									<a href="#">Formateurs en cours de formation</a>
								</li>
								<li>
									<a href="#">Formateurs libre</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Liste des formateurs</a>
								</li>
							</ul>
						</li>
						<li name="Formation" class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formation<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Statistiques des formation en cours</a>
								</li>
								<li>
									<a href="#">Formations achevés</a>
								</li>
								<li>
									<a href="#">Formations presque achevés</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Liste des formations</a>
								</li>
							</ul>
						</li>
					-->	
					</ul>
					<!--
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> <button type="submit" class="btn btn-default">Rechercher</button>
					</form>
					-->
					<ul class="nav navbar-nav navbar-left">
						
						<li name="Options" class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?=base_url()?>auth/edit_user/<?=$this->session->userdata('user_id')?>">Mon profil</a>
								</li>
								<li>
									<a href="<?=base_url()?>auth">Espace administrateur</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="<?=base_url()?>mineur/alerts">Alertes <span class="badge alert-danger pull-right">14</span></a>
									
								</li>
								
								<li class="divider">
								</li>
								<li>
									<a href="<?=base_url()?>auth/logout">Se deconnecter</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>