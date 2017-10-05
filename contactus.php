<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/eventor.css">

<!--        OwlCarousel-->
        <link rel="stylesheet" href="css/owl/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl/owl.theme.default.min.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body class="contactus">
    
    <?php include "includes/header.php" ?>

    <section class="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 contactdetails h-100">
					<div class="contactdetailsin d-sm-table-cell align-middle">
						<h3>01/</h3><h4>Get In Touch</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						<div class="row details">
							<div class="col-12">
								<img src="img/email.svg"> <p><a href="mailto:test@mail.com">test@mail.com</a></p>
							</div>
							<div class="col-12">
								<img src="img/phone.svg"> <p><a href="tel:+919811098110">+91 9811098110</a></p>
							</div>
							<div class="col-12">
								<img src="img/facebook.svg"> <p><a href="https://www.fb.com" target="_blank">facebook.com/eventors</a></p>
							</div>
							<div class="col-12">
								<img src="img/twitter.svg"> <p><a href="https://www.twitter.com" target="_blank">@eventors</a></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 contactformdetails h-100">
					<div class="contactformdetailsin d-sm-table-cell align-middle">
						<h3>02/</h3><h4>Send Us A Message</h4>
						<form class="contactform" action="" id="contactform">
							<div class="form_input">
								<input type="text" name="name" value="" placeholder="" data-validation="required" data-validation-error-msg="A Name is much needed">
								<label for="name">Full name*</label>
							</div>
							<div class="form_input">
								<input type="number" name="phone" value="" placeholder="" data-validation="required number" data-	validation-error-msg="Don't you need some extra offers ;)">
								<label for="name">Phone*</label>
							</div>
							<div class="form_input">
								<input type="email" name="email_confirmation" value="" placeholder="" data-validation="required email" data-validation-error-msg="Just in case :P">
								<label for="name">Email*</label>
							</div>
							<div class="form_input">
								<input type="email" name="email" value="" placeholder="" data-validation="confirmation" data-validation-confirm="email_confirmation" data-validation-error-msg="Emails do not match, Only one is enough">
								<label for="name">Re-enter email*</label>
							</div>
							<div class="form_input form_textarea">
								<textarea placeholder="" value="" data-validation="length" data-validation-length="max250"></textarea>
								<label for="name">Anything you wanna say feel free to drop the Lines here (250 character limit)</label>
							</div>
							<button type="submit" class="btn btn-block">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    </body>
    
    <?php include "includes/footer.php" ?>
    
</html>
