<?php
/*
 * Template Name: Contact 
 *
 * @package WordPress
 */?>

<!-- PHP PART 1 GOES HERE (PROCESSING) -->
<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = 'Please enter your name.';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = 'Contact Form Email From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>
<?php get_header(); ?>

<!-- jQuery GOES HERE (VALIDATION AND AJAX PROCESSING) -->

	<div class="row">
		<div class="span6">
			<h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
<form action="<?php the_permalink(); ?>" id="contactForm" method="post">

			<label for="contactName">Name:</label>
			<input type="text" name="contactName" class="input-large span6" id="contactName" value="" />
			<p>
			<label for="email">Email</label>
			<input type="text" name="email" class="input-large span6" id="email" value="" />
		</p>
		<p>
			<label for="commentsText">Message:</label>
			<textarea name="comments" id="commentsText" rows="10" cols="10" class="span6"></textarea>
</p>
<p>
			<button type="submit" class="btn btn-primary">Send email</button>
</p>
	<input type="hidden" name="submitted" id="submitted" value="true" />
</form>
<!-- CONTACT FORM HTML AND PHP PART 2 (MESSAGES) GOES HERE -->

		</div>

	</div>
</div>
</div>

<?php get_footer(); ?> 