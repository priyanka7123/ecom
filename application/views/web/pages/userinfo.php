<div class="main">
	<div class="content">
		<div class="section group">
			<h1>My Account</h1>
			

			<div class="cont-desc span_1_of_2" style="justify-content: center;">
				<div class="grid images_3_of_2" style="width: 300px;">
					<img src="https://global-uploads.webflow.com/5e4627609401e01182af1cce/5eb13bfdb4659efea4f8dace_profile-dummy.png" alt="" class="img-fluid">
				</div>
				<div class="desc span_3_of_2">
					<h2>Name : <?php echo $userinfo->customer_name; ?></h2>
					<h2>Email : <?php echo $userinfo->customer_email; ?></h2>
					<h2>Address : <?php echo $userinfo->customer_address; ?></h2>
					<h2>City : <?php echo $userinfo->customer_city; ?></h2>
					<h2>Pincode : <?php echo $userinfo->customer_zipcode; ?></h2>
					<h2>Phone No : : <?php echo $userinfo->customer_phone; ?></h2>
					<h2>Country : <?php echo $userinfo->customer_country; ?></h2>
				</div>

			</div>

		</div>
	</div>
</div>
