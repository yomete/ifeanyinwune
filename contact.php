<?php 
	include_once("includes/header.php"); 
?>

<div class="container">
	
	<div class="contact_header">	
		<div class="col-md-8 col-md-offset-4 col-sm-6 col-xs-12"><h1 style="color: #000; text-align:center;">Contact</h1></div>
	</div>

	<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<img class ="contact_img" src="img/in.jpg" width="300">
			</div>

			<div class="contact_form col-md-8 col-sm-6 col-xs-12">
				
				<div id="form-messages"></div>

				<form id="ajax-contact" method="post" action="mailer.php" class="contact_form_form">
					
					<div class="field form-group input input_name">
						<label for="name">Name:</label>
						<input id="name" type="text" class = "form-control" name="name" placeholder="Name" required>
					</div>
						
					<div class="field form-group input input_email">
						<label for="email">Email:</label>
						<input id="email" type="email" class = "form-control" name="email" placeholder="Email" required>
					</div>

					<div class="field form-group input ">
						<label for="message">Message:</label>
						<textarea id="message" class="form-control" rows="10" name="message" placeholder="Message" required></textarea>
					</div>
					
					<div class="field">
						<input class="contact_btn btn btn-default transition" type="submit" value="SEND MESSAGE">
						<button type="submit">Send</button>
					</div>
				</form>
			</div>
	</div>
</div>

<?php include_once("includes/footer.php");
?>	