<?php require 'partials/_header.php';

 ?>
<div class="content-block">
            <!-- About Us -->
			<div class="section-area section-sp2">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx text-center">
							<h2 class="title-head text-uppercase m-b0">EQUIPE ET MEMBRES DE <br/> <span> LEGALTECH</span></h2>
							
						</div>
					</div>
					 <div class="pricingtable-row">
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 m-b40">
								<div class="pricingtable-wrapper">
									<div class="pricingtable-inner">
										<div class="pricingtable-main"> 
											<div class="pricingtable-price"> 
												<H3>ADMINS</H3>
												
												
											</div>
											<div class="pricingtable-title">
												<h2>Infos</h2>
												<p>Basics infos sur les administrateurs</p>
											</div>
										</div>
										<ul class="pricingtable-features">
											<?php foreach ($admins as $admin): ?>
											<li> <h5> 
												<h3>Infos personnelles</h3>
												<strong>Nom complete: </strong> <?= $admin['prenom']?> <?= $admin['nom']?>  <br> 
												<strong>Email: </strong> <a href=""><?= $admin['email']?></a>  <br>
												<strong>Date de creation: </strong>  <?= $admin['created_at']?> <br>
												<hr>
												<h3>Reseaux sociaux</h3>
												<strong>LinkedIn : </strong> <?php if(!empty( $admin['LinkedIn'])){echo $admin['LinkedIn'];} ?> <br>
												<strong>Facebook :</strong><?php if(!empty( $admin['facebook'])){echo $admin['facebook'];} ?>
												<br>
												<strong>Instagram :</strong><?php if(!empty( $admin['Instagram'])){echo $admin['Instagram'];} ?>
												<br>
												<strong>Twitter :</strong><?php if(!empty( $admin['twitter'])){echo $admin['twitter'];} ?>
											</h5> </li>
											<li></li>
											<hr>
											
											<?php endforeach ?>
										</ul>
										
									</div>
								</div>
							</div>
							
							<div class="col-sm-12 col-md-6 col-lg-6 m-b40">
								<div class="pricingtable-wrapper">
									<div class="pricingtable-inner">
										<div class="pricingtable-main"> 
											<div class="pricingtable-price"> 
												<H3>MEMBRES</H3>
												
											</div>
											<div class="pricingtable-title">
												<h2>Infos</h2>
												<p>Basics infos sur les membres</p>
											</div>


											<div class="pricingtable-title">
												<div class="col-lg-4 m-b30">
					
				                               </div>
											</div>
										</div>
										<ul class="pricingtable-features">
											<?php foreach ($membres as $membre): ?>
											<li>
                                             <h3>Infos personnelles</h3>
											 <h5><strong>Nom complete: </strong><?= $membre['prenom']?> <?= $membre['nom']?><br> <strong> Email:</strong> <a href=""><?= $membre['email']?></a>  <br><strong>Date de creation :</strong>  <?= $membre['created_at']?> 
											<?php if ($_SESSION['userConnect']<= 4): ?>
										<span class="notification-time">
											<a style="color: red;" href="deleteMembre.php?id=<?= $membre['IdAdmin']?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer cet admin ?!`)" class="fa fa-close"> suprimer</a>
										</span>
									<?php endif ?>
									<hr>
												<h3>Reseaux sociaux</h3>
												<strong>LinkedIn : </strong> <?php if(!empty( $membre['LinkedIn'])){echo $membre['LinkedIn'];} ?> <br>
												<strong>Facebook :</strong><?php if(!empty( $membre['facebook'])){echo $membre['facebook'];} ?>
												<br>
												<strong>Instagram :</strong><?php if(!empty( $membre['Instagram'])){echo $membre['Instagram'];} ?>
												<br>
												<strong>Twitter :</strong><?php if(!empty( $membre['twitter'])){echo $membre['twitter'];} ?>
										</h5> </li>
											<li></li>
											<hr>
											
											<?php endforeach ?>
										</ul>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services ==== -->
			
		</div>

<?php require 'partials/_footer.php'; ?>