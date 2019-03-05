<?php include 'partials/shop_head.php';?>

<body>

<div class="super_container">
	
	<!-- Header -->
	
<?php include 'partials/header.php'; ?>
	<!-- Single Product -->

	<div class="single_post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="single_post_title"><h3>Our Location</h3> </div>
					<div class="single_post_text">
						<div class="single_post_quote text-center" style="text-align: left;">
							<p>
							  Google maps
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="single_product" style="margin-top:50px;">
		<div class="container">
			<div class="row">
			<!-- contact form -->
			<div class="col-md-4">
			<div class="single_post_title"><h3>Send a Message</h3> </div>
			  <?php

            if(isset($_POST['send'])) {
                // Prepare the email
              $to = "info@leoblaze.africa";

              $phone = $_POST['phone'];
              $from = $_POST["email"];
              $subject = 'Message sent from Eden Website';
							$message = $_POST['message'];
							$nortify = '';

							$header = "From:$phone <$from>";
							
							//Checking for empty fields
							if (empty($phone) || empty($from) || empty($message) ) {
							$nortify = 'You have submitted an empty field!';
							} 
							else {
								//insert into database
								
								
								 // Send it
								  $sent = mail($to, $subject, $message, $header );
								  if($sent) {
									
									$nortify = 'Your message has been sent successfully!';
										} 
										 else {
											 include 'partials/connection.php';
											$sql ="INSERT INTO messages (phone. email, message) VALUES ('$phone','$from','$message') ";
												 $nortify = 'Sorry, your message could not send.';
											 }
							      }
              }
        ?>
			
			    <form  method="POST">		
					      <?php if(!empty($message)): ?>
                    <div class="alert-danger" style="border-radius: 5px; text-align: center;">
                        <?php echo $nortify; ?> 
                    </div>
                <?php endif ;?>			  
						  <div class="form-group">
							  <label>Phone Number</label>
							  <input type="number" class="form-control" name="phone"/>
							</div>				
						  <div class="form-group">
							   <label>Email Address</label>
							   <input type="email" class="form-control" name="email"/>
							</div>
							<div class="form-group">
							  <label>Message</label>
							  <textarea class="form-control" name="message"></textarea>
							</div>
							<div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary" name="send" value="Send message"><i class="fa fa-envelope-o"></i> Send message</button>
              </div>						
				  </form>
			</div>
			<div class="col-md-4">
			    <div class="single_post_title"><h3>Our Address</h3> </div>
					<strong><b><i>HEAD OFFICE:</i> </b> </strong>
					<p>
					  Glory Palace Hotel<br>
						Murang'a Road.<br>
						Opposite City Primary School						
					</p>
					<strong><b><i>BRANCH:</i> </b></strong>
					<p>Laico Regency Hotel, Nairobi</p>
			</div>
			<div class="col-md-4">
			<div class="single_post_title"><h3>Reach us</h3> </div>
			P.O Box 8142-00200 <br>
			Tel: 020 2229893 <br>
			+254 707 444801 <br>
			Email: info@edenrentacar.com
			</div> 			
			</div>
		</div>
	</div>

	

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
<script src="js/product_custom.js"></script>
</body>

</html>