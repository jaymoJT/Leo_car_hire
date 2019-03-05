<div class="reviews">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="reviews_title_container">
						<h3 class="reviews_title">Our fleet</h3>
						<div class="reviews_all ml-auto"><a href="fleet.php">view all </a></div>
					</div>

					<div class="reviews_slider_container">
						
						<!-- Reviews Slider -->
						<div class="owl-carousel owl-theme reviews_slider">
							
							<!-- Reviews Slider Item -->
							
							<div class="owl-item">
							<?php 
          
		                         include 'partials/connection.php';
		                         $fleet = "SELECT * FROM  fleet ORDER by fleet_id DESC ";
		                         $right_fleet = mysqli_query($conn,$fleet) or die (mysqli_connect_error());
		                            while ($row = mysqli_fetch_array($right_fleet, MYSQLI_ASSOC)) {

                            ?>
								<div class="review d-flex flex-row align-items-start justify-content-start">
									<div><div class="review_image"><?php echo '<image src="data:image;base64,'.$row['image'].' " height="130" width="160" >';?></div></div>
									<div class="review_content">
										<div class="review_name"><?php echo $row['model'];?> </div>
										<div class="review_rating_container">
											<div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="review_time">2 day ago</div>
										</div>
										<div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
									</div>
								</div>
								<?php }?>
							</div>
						    
							<!-- Reviews Slider Item -->
							</div>
						<div class="reviews_dots"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
