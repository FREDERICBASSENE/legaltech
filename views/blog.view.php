<?php
$title = "Blog";
require 'includes/constant.php'; 
require 'functions/function.php'; 
 require 'partials/_header.php'; 

?>
<!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">BLOG</h1>
				</div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Blog</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
         <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<!-- left part start -->
						<div class="col-lg-8 col-xl-8 col-md-7">
							<!-- blog grid -->
							<div id="masonry" class="ttr-blog-grid-3 row" >
								<?php foreach ($articles as $article): ?>
								<div class="post action-card col-xl-6 col-lg-6 col-md-12 col-xs-12 m-b40">
									<div class="recent-news">
										<div class="action-box">
											<img style="height:200px;" src="admin/imageBlog/<?= $article['image']?>" alt="">
										</div>
										<div class="info-bx">
											<ul class="media-post">
												<li><a href="blog-details.php?id=<?= $article['id']?>"><i class="fa fa-calendar"></i><?= $article['created_at']?></a></li>
												<li><a href="blog-details.php?id=<?= $article['id']?>"><i class="fa fa-user"></i><?= $article['auteur']?></a></li>
											</ul>
											<h5 class="post-title"><a href="blog-details.php?id=<?= $article['id']?>"><?= $article['titre']?>.</a></h5>
											<p><?= $article['introduction']?></p>
											<div class="post-extra">
												<a href="blog-details.php?id=<?= $article['id']?>" class="btn-link">VOIRE PLUS</a>
												<?php if (!empty($_SESSION['nom-admin'])): ?>
                                                 <h6 class="comments-bx" style="color: red"><a href="blog-delete.php?id=<?= $article['id']?>">SUPRIMER</a></h6>
												<?php endif ?>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach ?>
								
							</div>
							<!-- blog grid END -->
							<!-- Pagination -->
							<div class="pagination-bx rounded-sm gray clearfix">
								<ul class="pagination">
									<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
								</ul>
							</div>
							<!-- Pagination END -->
						</div>
						<!-- left part END -->
						<!-- Side bar start -->
						<div class="col-lg-4 col-xl-4 col-md-5 sticky-top">
							<aside class="side-bar sticky-top">
								<div class="widget">
									<h6 class="widget-title">Search</h6>
									<div class="search-bx style-1">
										<form role="search" method="post">
											<div class="input-group">
												<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
												<span class="input-group-btn">
													<button type="submit" class="fa fa-search text-primary"></button>
												</span> 
											</div>
										</form>
									</div>
								</div>
								<div class="widget recent-posts-entry">
									<h6 class="widget-title">Recent Posts</h6>
									<div class="widget-post-bx">
										<?php foreach ($res as $recent):
									      ?>
										<div class="widget-post clearfix">
											<div class="ttr-post-media"> <img src="admin/imageBlog/<?= $recent['image']?>" width="200" height="143" alt=""> </div>
											<div class="ttr-post-info">
												<div class="ttr-post-header">
													<h6 class="post-title"><a href="blog-details.php?id=<?= $recent['id']?>"><?= $recent['introduction']?></a></h6>
												</div>
												<ul class="media-post">
													<li><a href="blog-details.php?id=<?= $recent['id']?>"><i class="fa fa-calendar"></i><?= $recent['created_at']?></a></li>
													
												</ul>
											</div>
										</div>
										<?php endforeach ?>
										
									</div>
								</div>
								<div class="widget widget-newslatter">
									<h6 class="widget-title">Newsletter</h6>
									<div class="news-box">
										<p>Enter your e-mail and subscribe to our newsletter.</p>
										<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
											<div class="ajax-message"></div>
											<div class="input-group">
												<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address"/>
												<button name="submit" value="Submit" type="submit" class="btn black radius-no">
													<i class="fa fa-paper-plane-o"></i>
												</button>
											</div>
										</form>
									</div>
								</div>
								
								
							</aside>
						</div>
						<!-- Side bar END -->
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Left & right section END -->
    <!-- Content END-->
<!-- Footer ==== -->
<?php require 'partials/_footer.php'; ?>