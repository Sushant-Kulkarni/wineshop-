<?php 
  include_once 'includes/header.inc.php';
 ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<h3 class="text-center brand display-4"> We are here!</h3>
		</div>
		<div class="col-sm-6">
			<h3 class="text-center brand display-4"> We value your feedback</h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.3862514218126!2d74.50287541433447!3d15.836283989025276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf6683811dccbd%3A0x8c5a2fa4cd12790d!2sWideHub+Career+Nest!5e0!3m2!1sen!2sin!4v1531504835904" allowfullscreen></iframe>
 			</div>
		<div class="col-sm-6">
			<form method="POST" action="includes/insert.php" class="jumbotron-form">
				<div class="row">
					<div class="col-sm-4 form-content" style="text-align:left; ">
					<p>Name:</p>
					</div>
					<div class="col-sm-8 form-content">
					<input type="text" name="name" placeholder="Enter Name Here" class="form-inputs" required>
					</div>
				</div><hr>
				<div class="row">
					<div class="col-sm-4 form-content" style="text-align:left; ">
						<p>How satisfied are you with the services provided?<br></p>
					</div>
					<div class="col-sm-8 form-content">
						<div class="row">
							<div class="col-sm-2 text-center form-content">
								<p>0%</p>
							</div>
							<div class="col-sm-8 form-content">
								<input type="range" value="50" name="satisfaction" class="form-inputs">						
							</div>
							<div class="col-sm-2 text-center form-content">
								<p>100%</p>
							</div>
						</div>
					</div>
				</div><hr>
				<div class="row">
				<div class="col-sm-4 form-content" style="text-align:left; ">
				<p><br>Any Comments? Mention Here:</p>
				</div>
				<div class="col-sm-8 form-content">
				<textarea name="comment" placeholder="Write Comments here." class="form-inputs"></textarea>
				</div>
				</div><hr>
				<div class="row">
				<div class="col-sm-4 form-content" style="text-align:left; ">
				<p>Email ID:</p>
				</div>
				<div class="col-sm-8 form-content">
				<input type="email" name="email" placeholder="Enter you email id here." class="form-inputs" required>
				</div>
				</div>
				<br><hr>
				<div class="row">
				<div class="text-center mx-auto">
				<button type="submit" class="btn btn-dark btn-lg">Send</button>
				</div>
				</div>
		</form>
</div>
	</div>
</div>

<?php 
  include_once 'includes/footer.inc.php'
 ?>