
<?php include("nav.php") ?>

	<main class="contact"> 
		<h1 class="text-center">CONTACTS</h1>
		<div class="row contact-info">
			<div class="left-contact half text-center">
				<i class="fas fa-envelope"></i><br>
				<p><b> Administration </b><br><a href="mailto:laurenthiasherly@gmail.com">info@bcit.ca</a></p><p><b> Instructor </b><br><a href="mailto:laurenthiasherly@gmail.com">info@michaelwhyte.ca</a></p><br>
				<i class="fas fa-phone"></i><br>
				<p><b> Administration </b><br> +1 (604) 434 1610 </p>
				<p><b> International Student Centre </b><br> +1 (604) 432 8816 </p>
				<p><b> Technology Service Desk </b><br> +1 (604) 412 7444 </p><br>
				<i class="fas fa-map-marker-alt"></i><br>
				<p id="footer-address"> 3700 Willingdon Avenue, <br>Burnaby V5G 3H2 BC, Canada </p><br><br>
			</div>
			<div class="right-contact half">
				<form action="/action_page.php">
					<label for="firstname">First name</label><br>
					<input type="text" name="firstname" class="input" required><br>

					<label for="lastname">Last name</label><br>
					<input type="text" name="lastname" class="input" required><br>

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

					<input type="submit" value="Submit" id="submit">
				</form>
			</div>
		</div>
	</main>



<?php include("footer.php") ?>