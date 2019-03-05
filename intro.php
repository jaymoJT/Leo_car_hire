<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> products found</div>
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
                                     $get_album = "SELECT * FROM  albums ORDER by album_id DESC ";
                                     $right_album = mysqli_query($conn,$get_album) or die (mysqli_connect_error());
                                     while ($row = mysqli_fetch_array($right_album, MYSQLI_ASSOC)) {


                                      $mediaA = 'Video';
                                      $mediaB = 'Audio';
                                      $type = $row['media_type'];
                                      $id = $row['album_id'];
                                      $title = $row['album_title'];

                                ?> 
                            <a href="album.php<?php echo '?id='.$row['album_id']; ?>">
                            <div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
									<?php 

                                        echo '<image src="data:image;base64,'.$row['image'].' " height="130" width="150" >';

									 ?>
								</div>
								<div class="product_content">
									<div class="product_name">
										<div>
											<a href="album.php<?php echo '?id='.$row['album_id']; ?>" tabindex="0">
										        <?php echo $row['album_title'];?> <br> (<?php echo $row['media_type'];?>)
									        </a>
									    </div>
									</div>
									<div class="product_price"></div>
									<?php echo $row['artist']; ?>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
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
