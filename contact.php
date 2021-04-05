
<!DOCTYPE html>
<html>

	<head>
		
		<title> Contact - Yvan Zimmermann </title>
		
		<?php include('include/headfile.php')  ?>
		
	</head>

	<body>
		
		<div class='container'>
			
			<div class='row'>
				
				<div class="col-md-12 col-sm-12 col-xs-12">
				
					<div id='top_div_contact'>
						
						<?php include('include/topMenu.php') ?>
						
						<h4> Contact me </h4>
						
					</div>
					
					<br class='spacing'>
					
					<p> If you have any questions, please get in touch on LinkedIn or with the form below: </p>
					
					<?php
					
					if(isset( $_POST['contact_name'] )){
	
						
						$subject = $_POST['subject'] . " FROM " . $_POST['contact_name']; 
						
						$message = 'Email ' . filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) . "\r\n";
						$message = $message . 'Name ' . $_POST['contact_name'] . "\r\n";
						$message = $message . "\r\n";
						$message = $message . $_POST['message']; 
							
						$headers = "From:  donotreply@playlistgallery.com" . "\r\n";
						
						$email = 'zimmeryvan@hotmail.fr';
						
						if ( mail($email, $subject, $message, $headers) ) {
					?>	
					
							<div id='email_sent'>
						
								<p><b> Email sent! </b></p>
						
								<p> Thanks for getting in touch. I will get back to you as soon as possible! </p>
						
							</div>
					
					<?php
						}
						else{
					?>
								
							<div id='email_sent'>
						
								<p><b> Email not sent! </b></p>
						
								<p> Sorry their must have been an issue while sending your email! </p>
						
							</div>
							
					<?php		
						}
						
					}
					else{
					
					?>
				
						<div id='mainForm'>

							<form id='contact_form' action='contact.php' method="post" onsubmit="return verify_form()">
						
								<div class="form-group" id='form_name'>
									<label for="contact_name"> Name: </label>
									<input type='text' name='contact_name' class="form-control" placeholder="Name" required> 
								</div>
							
								<div class="form-group" id='form_email' >
									<label for="email"> Email: </label>
									<input type='text' name='email' class="form-control" 
									placeholder="Email Address" required>
								</div>
							
								<div class="form-group"  id='form_subject'>
									<label for="subject"> Subject: </label>
									<input type='text' name='subject' class="form-control" placeholder="Email subject" required>
								</div>
							
								<div class="form-group" id='form_message'>
									<label for="message"> Message: </label>
									<textarea rows="5" cols="50" form="contact_form" name='message' class="form-control"
									 placeholder="Email Body" required></textarea>
								</div>
							
								<div id='submit'>						 
									<button type='submit' class="btn btn-default">Submit</button>
								</div>
							
							</form>
						
						</div>
					
	
					<?php
						
					}
						
					?>
					
				</div>

				
			</div> <!-- end of row -->
			
			<?php include('include/footer.php') ?>

		</div> <!-- end of container -->
		
	</body>

</html>
<!-- - - - - - - - - - - - - - - - - - - - - - - - -->

<script>

	$(document).ready(function(){
		
		$('.contactpage').css('text-decoration', 'underline');
		
	});
	
	
	
	
	function verify_form(){
		
		var submit = true;
		
		form_inputs = ['form_name', 'form_email', 'form_subject', 'form_message']; // 
		
		for(i = 0; i < form_inputs.length; i++){
			
			var id = '#' + form_inputs[i];
			
			if(i < 3){
				type = ' input';
			}
			else{
				type = ' textarea';
			}
			
			if( !$( id + type).val().trim() ){
				
				$(id + ' span').empty();
				
				$( id + ' label').attr('class', 'warning').prepend( 
					$('<span>').append('Please fill in a ')
				);
				
				submit = false;
				
			}
			
			// check for a valid email address
			if(id == '#form_email'){
				
				if( 
					$(id + ' input').val().indexOf('@') == -1 ||
					$(id + ' input').val().length < 5
				){
					
					$(id + ' label').empty();
				
					$( id + ' label').attr('class', 'warning').prepend( 
						$('<span>').append('Please insert a valide email address')
					);
					
					submit = false;
					
				}

			}
			
		}
		
		
		return submit;
		
		
		
	}


</script>


