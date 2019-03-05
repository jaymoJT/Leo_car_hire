<?php include 'partials/shop_head.php'; ?>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<?php include 'partials/header.php'; ?>
	<!-- Home -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count">
								<span>
								<?php 
                                     include 'partials/connection.php';
                                     $get_album = "SELECT * FROM  fleet ";
                                     $right_album = mysqli_query($conn,$get_album) or die (mysqli_connect_error());
                                     $results = mysqli_num_rows($right_album); 
                                     echo $results;
                                    ?>
								</span> Cars Found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>
							
							    <?php 
          
                                     include 'partials/connection.php';
                                     $fleet = "SELECT * FROM  fleet ORDER by fleet_id DESC ";
                                     $right_fleet = mysqli_query($conn,$fleet) or die (mysqli_connect_error());
                                     while ($row = mysqli_fetch_array($right_fleet, MYSQLI_ASSOC)) {

                                ?> 
                            <a href="rent.php<?php echo '?id='.$row['fleet_id'];  echo '/'; echo $row['model']; echo '/'; echo $row['brand']; echo '/'; echo $row['make'];  ?>">
                            <div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
								<div class="box-two proerty-item">
								  <div class="item-thumb">
									<?php echo '<image src="data:image;base64,'.$row['image'].' " height="130" width="160" >';?>
								  </div>
							    </div>
								</div>
								<div class="product_content">
									<div class="product_name">
										<div>
											<a href="rent.php<?php echo '?id='.$row['fleet_id'];  echo '/'; echo $row['model']; echo '/'; echo $row['brand']; echo '/'; echo $row['make'];  ?>" tabindex="0">
										        <?php echo $row['model'];?>
									        </a>
									    </div>
									</div>
									<div class="product_price"></div>
									<?php echo $row['brand']; ?>
								</div>
							</div>	
                            </a>
							
							<?php }?>
                        </div>

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	
	<!-- Brands -->

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

<?php include 'partials/footer.php'; ?>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/shop_custom.js"></script>
</body>

</html>