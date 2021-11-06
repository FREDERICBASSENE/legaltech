<?php require 'partials/_header.php'; ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">LISTE DES ARTICLES </h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>list_article</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>VOS ARTICLES</h4>
						</div>
						<div class="widget-inner">

							<?php foreach ($articles as $article): ?>

							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="imageBlog/<?= $article['image'] ?>" alt=""/>
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4><?= $article['titre'] ?></h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="card-courses-user-pic">
													<img src="assets/images/testimonials/pic3.jpg" alt=""/>
												</div>
												<div class="card-courses-user-info">
													<h5>AUTEUR</h5>
													<h4><?= $article['auteur'] ?></h4>
												</div>
											</li>
											<li class="card-courses-categories">
												<h5>DATE D'EDITION</h5>
												<h4><?= $article['created_at'] ?></h4>
											</li>
											<li class="card-courses-review">
												<h5> Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">INTRODUCTION</h6>
											<p> <?= $article['introduction'] ?></p>	
										</div>
										<div class="col-md-12">
											<a href="../blog-details.php?id=<?= $article['id'] ?>" class="btn green radius-xl outline">Voire plus de details</a>
		
											<a href="editArticle.php?id=<?= $article['id'] ?>" class="btn green radius-xl outline">Editer</a>
										<?php if ($_SESSION['userConnect']<= 4):  ?>
											<a href="../blog-delete.php?id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer cet article ?!`)" class="btn red outline radius-xl ">Suprimer</a>
										<?php endif ?>
										</div>
									</div>
									
								</div>
							</div>
							<?php endforeach ?>
							
							
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>

	
	<?php require 'partials/_footer.php'; ?>
