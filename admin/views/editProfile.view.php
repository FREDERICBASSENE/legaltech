<?php require 'partials/_header.php'; ?>

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title"> Profile de <?= $user['prenom']?> <?= $user['nom'] ?> </h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Profile</li>
				</ul>
			</div>	
			<div class="row">

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
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4><?= $user['prenom']?> <?= $user['nom'] ?></h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="POST">
								<div class="row">

									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Details personel</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Nom<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="text" name="nom" value=" <?= $user['nom'] ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Prenom<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="text" name="prenom" value="<?= $user['prenom']?>">
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Email<span class="text-danger">*</span></label>
										<div>
											<input class="form-control" type="email" name="email" value="<?= $user['email']?> " >
				
										</div>
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
											<input class="form-control" type="text" name="linkedin" value="<?php if(!empty( $user['LinkedIn'])){echo $user['LinkedIn'];} ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Facebook</label>
										<div>
											<input class="form-control" type="text" name="facebook" value="<?php if(!empty( $user['facebook'])){echo $user['facebook'];} ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Twitter</label>
										<div>
											<input class="form-control" type="text" name="twitter" value="<?php if(!empty( $user['twitter'])){echo $user['twitter'];} ?>">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Instagram</label>
										<div>
											<input class="form-control" type="text" name="instagram" value="<?php if(!empty( $user['Instagram'])){echo $user['Instagram'];} ?>">
										</div>
									</div>
									<div class="col-12">
										<button type="submit" name="update" class="btn">Enregistrer les changements</button>
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
	<div class="ttr-overlay"></div>

<?php require 'partials/_footer.php'; ?>