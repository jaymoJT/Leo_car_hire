<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start" style="margin-top:20px;;" >
					
					<!-- Deals -->

					<div class="deals">
						<div class="deals_title">New in the fleet</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								
								<!-- Deals Item -->
								<?php 
          
                                     include 'partials/connection.php';
                                     $fleet = "SELECT * FROM  fleet ORDER by fleet_id DESC LIMIT 4 ";
                                     $right_fleet = mysqli_query($conn,$fleet) or die (mysqli_connect_error());
                                     while ($row = mysqli_fetch_array($right_fleet, MYSQLI_ASSOC)) {

                                ?> 
								<div class="owl-item deals_item">
								    <a href="rent.php<?php echo '?id='.$row['fleet_id'];  echo '/'; echo $row['model']; echo '/'; echo $row['brand']; echo '/'; echo $row['make'];  ?>">
									<div class="deals_image">
									<?php echo '<image src="data:image;base64,'.$row['image'].' " >';?>
									</div>
									</a>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#">Class</a></div>
											<div class="deals_item_price_a ml-auto"><?php echo $row['class'];?> </div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><?php echo $row['model'];?> </div>
											<div class="deals_item_price ml-auto"><?php echo $row['make'];?> </div>
										</div>
								    </div>
								</div>
								<?php }?>								
							</div>
                        </div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs" style="margin-top: -5px;">
								<ul class="clearfix" style="margin-top:-80px;">
									<li class="active">Featured</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>
							<p>
								We are a renown company in Kenya offering quality and affordable Car Hire, Hotels & Villas and Tour Safaris across the country. At Eden we value you as a customer and at all times strive to provide the best service to all our clients. Our cars are in various classes they range from Saloons, wagons, 4WD, Rav4s, Mini Pajeros, V.I.P. cars like Mercedes Benz, Land cruiser VX and Range Rovers we also have Pick-Ups, Minibuses and Motor cycles available for hire..
							</p>

							<!-- Product Panel -->
							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>