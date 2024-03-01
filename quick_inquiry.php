<form name="contactform"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform" onSubmit="return validateForm()">
	<div class="col-md-12">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Name..." value="<?php echo $name;?>">
			<span id="nameErr"  class="error-message"><?php echo $nameErr;?></span>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="phone">Contact</label>
			<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact..." value="<?php echo $contact;?>">
			<span id="contactErr" class="error-message"><?php echo $contactErr;?></span>									
		</div>					
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="email">Email-ID</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email..." value="<?php echo $email;?>">
			<span id="emailErr" class="error-message"><?php echo $emailErr;?></span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-12">
			<label>Message </label>
			<textarea type="textbox" class="form-control" id="message" name="message" placeholder="Inquiry..." value="<?php echo $message;?>"/></textarea>
			<span id="messageErr" class="error-message"><?php echo $messageErr;?></span>
		</div>
	</div>
	<div class="col-lg-12 form-group submit">

	<button class="btn" type="submit" data-sitekey="6LeKpoApAAAAACGa6z_aNmQ3QnIjsrsf0PE1HxSF" 
			data-callback='onSubmit' 
			data-action='submit'>
			Submit
  <span class="spinner-border-sm" role="status" aria-hidden="true"></span>
</button>
	</div>					
	<div class="clear"> </div>
</form>
