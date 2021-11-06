<?php require 'partials/_header.php'; ?>
<!--Main container start -->

	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>	
			<!-- Card -->
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Articles
							</h4>
							<span class="wc-des">
								
							</span>
							<span class="wc-stats">
								<span class="counter"><?= $_SESSION['compteur'] ?> </span>Articles
							</span>	
							<span class="wc-des">
								ARTICLES POSTER
							</span>	
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 18%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									progresion....
								</span>
								<span class="wc-number ml-auto">
									18%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">					 
						<div class="wc-item">
							<h4 class="wc-title">
								 Compteur de visiteur
							</h4>
							<span class="wc-des">
								Visiteur en ligne
							</span>
							<span class="wc-stats counter">
								120 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									88%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">					 
						<div class="wc-item">
							<h4 class="wc-title">
								Membres
							</h4>
							<span class="wc-des">
								Membre inscrit
							</span>
							<span class="wc-stats counter">
								772 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									65%
								</span>
							</span>
						</div>				      
					</div>
				</div>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">					 
						<div class="wc-item">
							<h4 class="wc-title">
								newsletter
							</h4>
							<span class="wc-des">
								Abonnement
							</span>
							<span class="wc-stats counter">
								350 
							</span>		
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Change
								</span>
								<span class="wc-number ml-auto">
									90%
								</span>
							</span>
						</div>				      
					</div>
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Your Profile Views</h4>
						</div>
						<div class="widget-inner">
							<canvas id="chart" width="100" height="45"></canvas>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
				<div class="col-lg-4 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>ADMINISTRATEURS</h4>
						</div>
						<div class="widget-inner">
							<div class="noti-box-list">
								<ul>
									<?php foreach ($admins as $admin): ?>
									<li>
										<span class="notification-icon dashbg-primary">
											<img src="assets/image/favicon.png" alt=""/>
										</span>
										<span class="notification-text">
											<span><?= $admin['prenom']?> <?= $admin['nom']?></span> <?= $admin['email']?>
										</span>
										<?php if ($admin['IdAdmin'] > 4 and $_SESSION['userConnect']<= 4): ?>
										<span class="notification-time">
											<a style="color: red;" href="deleteMembre.php?id=<?= $admin['IdAdmin']?>"  onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer cet admin ?!`)" class="fa fa-close"></a>
											<span> Le <?= $admin['created_at']?></span>
										</span>
									<?php endif ?>
									</li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<div class="ttr-overlay"></div>

	<?php require 'partials/_footer.php'; ?>