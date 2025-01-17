<?php 
	print '
	<h1>Mercedes Contact</h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18752.563232486555!2d16.094757841079264!3d45.67922683309857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47667d91ae6536c7%3A0x1c8b0f124c3ed2a3!2sMercedes-Benz%20Auto%20Ga%C5%A1pari%C4%87!5e0!3m2!1shr!2shr!4v1737062416989!5m2!1shr!2shr" width="920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<form action="https://www.mercedes-benz.hr//pwa/responsive-page/html/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Enter your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Enter your last name.." required>
				
			<label for="email">Enter our e-mail address</label>
			<input type="email" id="email" name="email" placeholder="Enter your e-mail.." required>

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="FR">France</option>
				<option value="IT">Italy</option>
				<option value="HU">Hungary</option>
				<option value="GE">Germany</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>