<?php
$title = "Contact";
require 'includes/constant.php'; 
require 'functions/function.php'; 
 require 'partials/_header.php'; 

?>
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">NOUS CONTACTEZ</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>contact</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
	
        <!-- inner page banner -->
        <div class="page-banner contact-page section-sp2">
            <div class="container">
                <div class="row">
					<div class="col-lg-5 col-md-5 m-b30">
						<div class="bg-primary text-white contact-info-bx">
							<h2 class="m-b10 title-head">Contact <span>Information</span></h2>
							<p>Legaltech,cabinet juridique.  Chez nous le client est roi.</p>
							<div class="widget widget_getintuch">	
								<ul>
									<li><i class="ti-location-pin"></i>SENEGAL / DAKAR </li>
									<li><i class="ti-mobile"></i>+221 78 267 66 83</li>
									<li><i class="ti-email"></i>contact.legaltech.sn</li>
								</ul>
							</div>
							<h5 class="m-t0 m-b20">Suiver nous</h5>
							<ul class="list-inline contact-social-bx">
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn outline radius-xl"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<form class="contact-bx" method="post">
						
							<div class="heading-bx left">
								<h2 class="title-head">Contactez nous <span>En un clique</span></h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
							</div>
							<?php  require 'partials/_errors.php'; 
							if (isset($message_info)): ?>
	                          <div class="container">
							<div class="alert alert-info">
							 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h4><?php if (isset($message_info)): ?>
								
							<?php endif ?></h4>
						   </div>
						</div>
                            <?php endif; ?>
							<div class="row placeani">
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Nom </label>
											<input name="name" type="text" value="<?= get_input('name')?>" required class="form-control valid-character">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group"> 
											<label>Adresse Email</label>
											<input name="email"  value="<?= get_input('email')?>" type="email" class="form-control" required >
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Telephone</label>
											<input name="phone"  value="<?= get_input('phone')?>" type="text" required class="form-control int-value">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="input-group">
											<label>Sujet</label>
											<input name="subject"  value="<?= get_input('subject')?>" type="text" required class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<div class="input-group">
											<label>Message</label>
											<textarea name="message" rows="4" class="form-control" required > <?= get_input('message')?></textarea>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<button name="submit" type="submit" value="Submit" class="btn button-md"> ENVOYER</button>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
		</div>
        <!-- inner page banner END -->
    </div>
    <!-- Content END-->
    <?php require 'partials/_footer.php'; ?>