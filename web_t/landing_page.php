<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <style>
        body {
            background-color: #c9d6ff;
			background-color: #c9d6ff;
			background-image: url('laptop-7978588_1920.jpg'); 
			background-size: cover; 
			background-position: center; 
			background-repeat: no-repeat; 
			background-filter: blur(8px);
			background-attachment: fixed;
			font-family: "poppins", sans-serif;
        }


        .container {
            text-align: center;
            padding: 45px;
            max-width: 850px;
            margin: 50px auto;
            background: linear-gradient(to right,#e2e2e2,#d4efdf);
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            background-color: #16a085;
            color: white;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: black;
            transform: scale(1.05);
        }

        #reader {
            width: 300px;
            margin: 20px auto;
        }

        #result-container {
            margin-top: 20px;
            padding: 15px;
            border: 2px solid #007BFF;
            border-radius: 10px;
            background-color: #F8F9FA;
            color: #212529;
        }
    </style>
</head>
<body>
<header>
   <div style="background: linear-gradient(to right, #16a085, #2c3e50 ); padding: 10px 0; color: white; text-align: center;">
    <h1>International Research Conference 2024</h1>
    <p>Advancing Knowledge, Inspiring Innovation</p>
</div>

    <div class="container">
        <h1>Welcome to the International Research Conference</h1><br>
        <h3><p>Streamline your experience with our platform</p></h3>
		
	
		<p>Join top researchers, scientists, and experts from around the world for an engaging and insightful experience at the <strong>International Research Conference</strong>. Whether you're attending in person or virtually, our platform is designed to offer a seamless, interactive environment where you can.</p>

	<br>
			<strong>Network</strong> with professionals and peers from various fields
			<br><strong>Access</strong> real-time presentations, workshops, and seminars
			<br><strong>Participate</strong> in Q&A sessions and interactive panels with industry leaders
            <br><strong>Explore</strong> a wealth of research papers and materials for your academic and professional growth
		

		<br><br><p>We look forward to your participation in making this event a memorable and valuable experience for all attendees. Together, let's push the boundaries of knowledge and research!</p>


        <!-- Navigation Buttons -->
        <div>
            <a href="register.php" class="btn">Register</a>
            <a href="login.php" class="btn">Sign In</a>
        </div> 
		
		<div class="links">
        <button id="Admin_login_page">Admin Login</button>
      </div>

		<script>
			document.getElementById('Admin_login_page').addEventListener('click', function() {
				window.location.href = 'Admin_login_page.php'; // Redirect to session_registration.php
			});
		</script>
</div>		
    
</body>

<footer>
    <div style="background-color: #333; color: white; text-align: center; padding: 20px;">
        <p>&copy; 2024 International Research Conference. All rights reserved.</p>
        <p>Follow us on social media:</p>
        <div>
            <a href="https://www.facebook.com" target="_blank" style="color: white; margin: 0 10px; text-decoration: none;">
                <i class="fab fa-facebook-f" style="font-size: 24px;"></i>&nbsp;Facebook
            </a>
            <br><a href="https://www.twitter.com" target="_blank" style="color: white; margin: 0 10px; text-decoration: none;">
                <i class="fab fa-twitter" style="font-size: 24px;"></i>&nbsp;Twitter
            </a>
            <br><a href="https://www.linkedin.com" target="_blank" style="color: white; margin: 0 10px; text-decoration: none;">
                <i class="fab fa-linkedin-in" style="font-size: 24px;"></i>&nbsp;Linkedin
            </a>
            <br><br<a href="https://www.instagram.com" target="_blank" style="color: white; margin: 0 10px; text-decoration: none;">
                <i class="fab fa-instagram" style="font-size: 24px;"></i>&nbsp;Instergram
            </a>
        </div>
        <div>
            <p>Contact us: <a href="mailto:info@researchconference.com" style="color: white; text-decoration: none;">info@researchconference.com</a></p>
        </div>
    </div>
</footer>

</html>
