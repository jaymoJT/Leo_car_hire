<?php include 'partials/shop_head.php';?>

<body>

<div class="super_container">
	
	<!-- Header -->
	
<?php include 'partials/header.php'; ?>
	<!-- Single Product -->
<?php 
    include 'partials/connection.php';
    $id = $_GET['id'];
    $car = "SELECT * FROM  fleet WHERE fleet_id = '$id' ";
    $result = mysqli_query($conn,$car) or die (mysqli_connect_error());
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		
		
		{
    
    
?>
	<div class="single_product" style="margin-top:50px;">
		<div class="container">
			<div class="row">
				
				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1" style="margin-top:10px;">
					<div class="image_selected">
					<?php echo '<image src="data:image;base64,'.$row['image'].' " height="300" width="350" >';?> 
					</div>
				</div>
		

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">						
						        <table class="table table-bordered" style="color: #000; margin-top: 10%;">
				                  <tbody>
				                    <tr class="techSpecRow"><th colspan="2" style="color: #">Car Details</th></tr>
				                    <tr class="techSpecRow">
				                    	<td class="techSpecTD1">Model: </td>
				                    	<td class="techSpecTD2"><?php echo $row['model'];?> </td>
				                    </tr>
				                    <tr class="techSpecRow">
				                    	<td class="techSpecTD1">Brand:</td>
				                    	<td class="techSpecTD2"><?php echo $row['brand'];?> </td>
				                    </tr>
				                    <tr class="techSpecRow">
				                    	<td class="techSpecTD1">Make:</td>
				                    	<td class="techSpecTD2"><?php echo $row['make'];?> </td>
														</tr>
														<tr class="techSpecRow">
				                    	<td class="techSpecTD1">Class:</td>
				                    	<td class="techSpecTD2"><?php echo $row['class'];?> </td>
				                    </tr>
				                  </tbody>
				                </table>
						        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>
<div class="container">
<div class="single_post_title" style="text-align:center;"><h3>Rent this car</h3> </div>
</div>
<div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="contact_form_container">
            <div class="container">  
							<?php 
							if (isset($_POST['rent'])) {
								 include 'partials/connection.php';
								 
								 //name,phone,email,drive,pick,return
								 $name = mysqli_real_escape_string($conn,$_POST['name']);
								 $phone = mysqli_real_escape_string($conn, $_POST['phone']);
								 $email = mysqli_real_escape_string($conn, $_POST['email']);
								 $drive = mysqli_real_escape_string($conn, $_POST['drive']);
								 $pick = mysqli_real_escape_string($conn, $_POST['pick']);
								 $return = mysqli_real_escape_string($conn, $_POST['return']);
								 $message = '';

								 //checking for any empty fields submitted
								 if (empty($name) || empty($phone) || empty($email) || empty($drive) || empty($pick) || empty($return) || empty($id) ) {
									 $message = 'Data not sent: You have submitted an empty field';
								 } else {
									 $sql = "INSERT INTO bookings (name, phone, email, drive, pick_date, return_date, car) VALUES ('$name','$phone','$email','$drive','$pick','$return','$id') ";
									 if (mysqli_query($conn,$sql)) {
										 $message = 'Your request has been received, we will get back to you shortly for more details ';
									 }
									 else {
										 $message = 'Data not sent: System error, kindly visit our contact page to contact us ';
									 }
								 }
							}
							
							?>  
							
						

						<form method="POST"  class="form-inline">
						        <?php if (!empty($message)):?>
									      <div class="alert-danger" style="margin-bottom: 5px;border-radius: 5px; color: #000;text-align: center;">
										      <?php echo $message ; ?> 
									      </div>
							      <?php endif ;?>
							    <div class="col-lg-6">
									    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control"  placeholder="Your name" required="required" data-error="name is required"  name="name" >
											</div>
											<div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" class="form-control"  placeholder="Your Phone Number" required="required"  dataerror="name is required" name="phone">
											</div>
											<div class="form-group">
											    <label>Email</label>
											    <input type="email" class="form-control" placeholder="Your email address"  required="required" dataerror="Email is required" name="email">
										  </div>
																					 
									</div>
									<div class="col-lg-6">
									  <div class="form-group"> 
                        <label>Self Drive?</label>                    
                        <select id="basic" class="selectpicker show-tick form-control" name="drive">
                            <option> -Select- </option>
                            <option>Yes </option>
                            <option>No</option>  
                        </select>
										</div>
										
										<div class="form-group">
											<label>Pick Date</label>
											<input type="date" class="form-control" required="required" name="pick">
										</div>
										<div class="form-group">
											<label>Return Date</label>
											<input type="date" class="form-control" required="required" name="return">
										</div>
									</div>
							    <div class="form-group" style="margin-top:15px; text-align:center;">
									<button class="btn btn-success{} " type="submit" value="send" name="rent" >Submit</button>
									</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
						

		<div class="panel"></div>
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