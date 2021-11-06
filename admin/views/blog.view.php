<?php require 'partials/_header.php';

 ?>

<!--Main container start -->
<main class="ttr-wrapper">
<div class="container-fluid">
<div class="db-breadcrumb">
<h4 class="breadcrumb-title">AJOUTER UN POSTE</h4>
<ul class="db-breadcrumb-list">
	<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
	<li>blog</li>
</ul>

</div>	
<div class="row">
	<div class="col-12">
						<?php 
					if (!empty($errors)): 
                      
						?>
						
						<div class="alert alert-danger">
				      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				     <h4><?= $errors ?></h4>
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
					<h4>AJOUTER UN POSTE</h4>
				</div>
				<div class="widget-inner">
					<form class="edit-profile m-b30" enctype="multipart/form-data" method="POST">
				<div class="row">
					<div class="col-12">
						<div class="ml-auto">
							<h3>BLOG</h3>

						</div>
					</div>
					
					
					<div class="form-group col-6">
						<label class="col-form-label">TITRE</label>
						<div>
							<input class="form-control" type="text" value="" placeholder="ex: internet"  name="titre" required="">
						</div>
					</div>
					<div class="form-group col-6">
						<label class="col-form-label">AUTEUR</label>
						<div>
							<input class="form-control" type="text" value=""placeholder="ex: FREDERIC BASSENE"  name="auteur">
						</div>
					</div>
	
					<div class="form-group col-12">
						<label class="col-form-label">Introduction</label>
						<div>
							<div>
							<textarea class="form-control" name="intro" maxlength="100" required=""> </textarea>
						</div>
						</div>
					</div>
					
					<div class="seperator"></div>
					
					<div class="col-12 m-t20">
						<div class="ml-auto m-b5">
							<h3>CONTENU</h3>
						</div>
					</div>
					<div class="form-group col-12">
						<label class="col-form-label">Contenu</label>
						<div>
							<textarea class="form-control" name="contenu" required=""> </textarea>
						</div>
					</div>
					<div class="form-group col-12">
						<label class="col-form-label">Image</label>
						<div>
							<input type="file" name="image" id="image" class="form-control" name="image" required="">
							
						</div>
					</div>
					 
					<div class="col-12">
						
						<input type="submit" name="poster" value="POSTER L'ARTICLE" class="btn-primary">
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
