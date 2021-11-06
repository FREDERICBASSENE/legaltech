<?php require 'partials/_header.php'; ?>
<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Admin profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Admin Profile</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<?php 
					if (!empty($errors)): ?>
						<div class="container">
						<div class="alert alert-danger">
				      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				     <h4><?= $errors ?></h4>
				   </div>
				   </div>
					<?php endif ?>
                   <?php  if (isset($message)): ?>
	                          <div class="container">
							<div class="alert alert-info">
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h4><?= $message ?>
								
							<?php endif ?></h4>
						   </div>
						</div>
					 
							</div>
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Admin Profile</h4>
						</div>

						<div class="widget-inner">
							<form class="edit-profile m-b30" method="post">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Details personnels</h3>
										</div>
									</div>


									<div class="form-group col-6">
										<label class="col-form-label">Nom<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="text" value="" name="nom" required="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Prenom<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="text" value="" name="prenom">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Adresse Email<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="email" value="" name="email" required="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Mot de passe<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="password" value="" name="password" required="">
										</div>
									</div>
								<div class=" form-group col-md-6">
							    <label for="sex" class="form-label">Sexe<span class="text-danger">*</span></label>
							   <select class="form-select"  name="sex" id="sex">
							  <option value="H"> 
							  Homme
							</option>
							  <option value="F">
							  Femme
							</option>
							</select>
							</div>
									
									<div class="seperator"></div>
									
									
									<div class="col-12 m-t20">
										<div class="ml-auto">
											<h3 class="m-form__section">2. Social Links</h3>
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Linkedin</label>
										<div>
											<input class="form-control" type="text" value="" name="linkedin">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Facebook</label>
										<div>
											<input class="form-control" type="text" value="" name="facebook">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Twitter</label>
										<div>
											<input class="form-control" type="text" value="" name="twitter">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Instagram</label>
										<div>
											<input class="form-control" type="text" name="instagram">
										</div>
									</div>
									<div class="col-12">
										<button type="submit" name="enregistre" class="btn">ENREGISTRER</button>
										
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>

	<?php require 'partials/_footer.php'; ?>