
<?php include("nav.php") ?>

	<main class="contact"> 
		<h1 class="text-center">CONTACTS</h1>
		<div class="row contact-info">
			<div class="left-contact half text-center">
				<br><i class="far fa-clock"></i>
				<p><b> Operating hours </b><br> Monday - Friday | 9am - 5pm </p><br>
				<i class="fas fa-envelope"></i><br>
				<p><b> Administration </b><br><a href="mailto:laurenthiasherly@gmail.com">info@bcit.ca</a></p><p><b> Instructor </b><br><a href="mailto:laurenthiasherly@gmail.com">info@michaelwhyte.ca</a></p><br>
				<i class="fas fa-phone"></i><br>
				<p><b> Administration </b><br> +1 (604) 434 1610 </p>
				<p><b> International Student Centre </b><br> +1 (604) 432 8816 </p>
				<p><b> Technology Service Desk </b><br> +1 (604) 412 7444 </p><br>
				<i class="fas fa-map-marker-alt"></i><br>
				<p id="footer-address"> 3700 Willingdon Avenue, <br>Burnaby V5G 3H2 BC, Canada </p><br><br><br>
			</div>
			<div class="right-contact half">
				<form>
					<p id="reminder"><i> Please fill in the required (*) fields </i></p>

					<label for="firstname">First name*</label><br>
					<input type="text" name="firstname" id="firstname" class="input" required><br>

					<label for="lastname">Last name*</label><br>
					<input type="text" name="lastname" id="lastname" class="input" required><br>

					<label for="firstname">Email</label><br>
					<input type="email" name="email" class="input"><br>

					<label for="studentno">BCIT student number</label><br>
					<input type="text" name="studentno" class="input" id="studentno"><br><br>
					
					<label for="whichstudent">Select that applies</label><br><br>
					<input type="radio" name="whichstudent" checked value="prospective"> Prospective student<br>
  					<input type="radio" name="whichstudent" value="current"> Current student<br>
  					<input type="radio" name="whichstudent" value="international"> International student<br><br>

  					<label>Let us know your questions / inquiries </label><br><br>
  					<textarea rows="6" cols="60"></textarea><br>

					<input type="reset" value="Submit" id="submit">
				</form>
			</div>
		</div>
	</main>

	<div id="popup"> 
		<div id="popup-box">
			<p id="close"> X </p><br><br>
			<img src="images/logo-footer.png" alt="logo"><br><br>
			<p> Thank you for contacting us!<br><br>Your email has been successfully delivered! One of our representatives will definitely get back to you within 24 - 48 hours. </p>
			
		</div>
	</div>



<?php include("footer.php") ?>