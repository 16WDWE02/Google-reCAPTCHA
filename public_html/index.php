<html>
<head>
	<title>Google reCAPTCHA Demo</title>

	<!-- Insert script from google reCAPTCHA documentation -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<h1>Google reCAPTCHA Demo</h1>
	<form id="sign-up" action="result.php" method="post">
		<input type="text" name="name" for="name" placeholder="Name"><br><br>
		<input type="email" name="email" for="email" placeholder="Email"><br><br>

		<!-- Insert the recaptcha div provided in the google reCAPTCHA documentation -->
		<!-- data-sitekey must be your site key which was generated when you signed up -->
		<div class="g-recaptcha" data-sitekey="6LcQ0CQTAAAAAB2b1VgDEjNJzuGPobuOrb5P-Z5O"></div>
		<input type="submit" name="submit">
	</form>
</body>
</html>