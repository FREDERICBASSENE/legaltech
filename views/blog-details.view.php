<?php
$title = $article['titre'];
require 'includes/constant.php'; 
require 'functions/function.php'; 
 require 'partials/_header.php';   ?>


<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white"><?= $article['titre'] ?></h1>
				</div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li><?= $article['titre'] ?></li>
				</ul>
			</div>
		</div>


 <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<!-- left part start -->
						<div class="col-lg-12 col-xl-12 col-md-12">
							<!-- blog grid -->
							<div id="masonry" class="ttr-blog-grid-3 row" >
								<div class="post action-card col-xl-12 col-lg-12 col-md-12 col-xs-12 m-b40">
									<div class="recent-news">
										<div class="action-box">
											<img style="height:700px;" src="admin/imageBlog/<?= $article['image']?>" alt="">
										</div>
										<div class="info-bx">
											<ul class="media-post">
												<li><a href="#"><i class="fa fa-calendar"></i><?= $article['created_at']?></a></li>
												<li><a href="#"><i class="fa fa-user"></i><?= $article['auteur']?></a></li>
											</ul>
											<h5 class="post-title"><a href="blog-details.php?id=<?= $article['id']?>"><?= $article['titre']?>.</a></h5>
											<p>
												<?= nl2br(replace_links(e($article['introduction'] )));?></p>
											<hr>
											<p><?= nl2br(replace_links(e($article['contenu'] )));?></p>
											<div class="post-extra">
												
												<h4 class="comments-bx"><i class="fa fa-comments-o"></i><?= count($commentaires) ?></h4>
											</div>
										</div>
									</div>
								</div>
								</div>
									</div>
								</div>
								
							</div>

                         <div class="container">
                         	 <?php if (count($commentaires) === 0) : ?>
                         	 	<div class="alert alert-info">
                         	 		Il n'y a pas encore de commentaires pour cet article ... SOYEZ LE PREMIER ! 
                         	 	</div>
                          <?php else : ?>
                          	
			            <?php foreach ($commentaires as $commentaire) : ?>
			        <h3>Commentaire de <?= $commentaire['auteur'] ?></h3>
			        <small>Le <?= $commentaire['created_at'] ?></small>
			        <blockquote>
			            <em><?= nl2br(replace_links(e($commentaire['contenu'] )));?></em>
			        </blockquote>
			        <?php if (!empty($_SESSION['email-admin'])): ?>
			        	<a class="btn btn-danger" href="delete-comment.php?id=<?= $commentaire['idComment'] ?>" onclick="return window.confirm(`Êtes vous sûr de vouloir supprimer ce commentaire ?!`)">Supprimer</a>
			        <?php endif ?>
			        
			    <?php endforeach ?>
			<?php endif ?>

			<form action="save-comment.php" method="POST">
			    <h3>Vous voulez réagir ? !</h3>
			    <div class="form-group">
			    	<label for="auteur"> Votre pseudo</label>
			    	<input type="text" name="auteur" placeholder="Votre pseudo !" class="form-control" required="">
			    </div>
			    <div class="form-group">
			    	<label for="auteur"> Votre Commentaire</label>
			    	<textarea name="contenu" id="" cols="30" rows="10" placeholder="Votre commentaire ..." class="form-control" required=""></textarea>
			    </div>
			    <div class="form-group">
			    	<input type="hidden" name="article_id" value="<?= $article_id ?>">
			    <button class="btn btn-primary"> Commenter !</button>
			    </div>
			    
			</form>
			  </div>
                      

<?php  require 'partials/_footer.php';  ?>