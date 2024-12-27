<?php
// Include database connection
include 'db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="register.php">
    <div class="container" id="signup">
      <h1 class="form-title">International Research Conference - 2024 <p>Conference Registration</p> </h1>
	
	  <p>Input your details to register below.</p><br>
	  
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
		
		
		<div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        
		<div class="input-group">
            <i class="fa-solid fa-book"></i>
            <input type="text" name="field" id="field" placeholder="Field" required>
            <label for="field">Field</label>
        </div>
		
		<div class="input-group">
			<i class="fas fa-phone"></i>
			<input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
			<label for="phone">Phone Number</label>
		</div>

		<div class="input-group">
			<i class="fas fa-lightbulb"></i>
			<input type="text" name="research_interests" id="research_interests" placeholder="Research Interests" required>
			<label for="research_interests">Research Interests</label>
		</div>
		

	
		<br>
		<p><i class="fas fa-chalkboard-teacher"></i>&nbsp; Get the workshop experience. Choose one of the options below.
		<div class="input-group">
			
			<select id="workshop" name="workshop">
				<option value="" disabled selected>Choose a Workshop (Optional)</option>
				<option value="workshop1">Workshop 1: Machine Learning Basics</option>
				<option value="workshop2">Workshop 2: Hands-on Blockchain</option>
				<option value="workshop3">Workshop 3: Cybersecurity Practices</option>
			</select>	
		</div>
		<br>
		<div class="input-group">
			<i class="fas fa-comment"></i>
			<input type="comments" name="comments" id="comments" placeholder="comments" required>
			<label for="comments">Comments/Special Requests </label>
		</div>


		
       <input type="submit" class="btn" value="Register" name="register">
      </form> <br>
	  <div class="qr-btn-container">
	  <button id="generateQRCode">Generate QR Code</button>
	  </div>
	  <div id="qrCodeContainer"></div> 
	  
      <p class="or">
        ----------or--------
      </p>
  
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton"><a href="login.php">Sign In here</a></button>
      </div>
	  

    </div>

    <script>
  
        document.getElementById('generateQRCode').addEventListener('click', function() {
            const fName = document.getElementById('fName').value;
            const lName = document.getElementById('lName').value;
            const email = document.getElementById('email').value;
            const session = document.getElementById('session').value;
            const workshop = document.getElementById('workshop').value || 'None';

            if (!fName || !lName || !email || !session) {
                alert('Please fill in all required fields before generating the QR code.');
                return;
            }

            const qrData = `
                Name: ${fName} ${lName}
                Email: ${email}
                Session: ${session}
                Workshop: ${workshop}
            `;

            const qrCodeContainer = document.getElementById('qrCodeContainer');
            qrCodeContainer.innerHTML = ''; 
            QRCode.toCanvas(qrCodeContainer, qrData, function(error) {
                if (error) console.error(error);
            });
        });
    </script>
         <script src="script.js"></script>
</body>
</html>
