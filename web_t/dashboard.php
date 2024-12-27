<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<style>
    ul li {
        margin-bottom: 10px; /* Adds spacing between list items */
    }
	
	}

    header {
            background-color: #333;
            color: white;
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
		
        header .nav-links {
            display: flex;
            gap: 20px;
        }

        header .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        header .nav-links a:hover {
            text-decoration: underline;
        }
</style>

</head>
<body>
<header>


    <!-- Navigation Bar -->
	<nav class="navbar">
    <nav style="background-color: #333; padding: 10px;">
        <ul style="list-style-type: none; margin: 0; padding: 0; text-align: right;">
            <li style="display: inline; margin: 0 15px;">
                <a href="landing_page.php" style="color: white; text-decoration: none; font-size: 18px;">Home</a>
            </li>
            <li style="display: inline; margin: 0 15px;">
                <a href="register.php" style="color: white; text-decoration: none; font-size: 18px;">Register</a>
            </li>
            <li style="display: inline; margin: 0 15px;">
                <a href="dashboard.php" style="color: white; text-decoration: none; font-size: 18px;">Schedule</a>
            </li>
            <li style="display: inline; margin: 0 15px;">
                <a href="speakers.php" style="color: white; text-decoration: none; font-size: 18px;">Speakers</a>
            </li>
            <li style="display: inline; margin: 0 15px;">
                <a href="contact" style="color: white; text-decoration: none; font-size: 18px;">Contact</a>
            </li>
        </ul>
    </nav>
	
<div style="background: linear-gradient(to right, #16a085, #2c3e50 ); padding: 10px 0; color: white; text-align: center;">
    <h1>International Research Conference 2024</h1>
    <p>Advancing Knowledge, Inspiring Innovation</p>
</div>
</header>


<div class="container">
    <h1 class="form-title">International Research Conference - 2024</h1>
    <h3>Schedule of Sessions:</h3>
    <table style="width:100%; border-collapse:collapse; text-align:left; margin:20px 0;">
        <thead>
            <tr style="background-color:#f4f4f4; border-bottom:2px solid #ddd;">
                <th style="padding:10px;">Session</th>
                <th style="padding:10px;">Time</th>
                <th style="padding:10px;">Venue</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;">Session 1: AI Innovations</td>
                <td style="padding:10px;">9:00 AM</td>
                <td style="padding:10px;">Hall A</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 2: Blockchain Trends</td>
                <td style="padding:10px;">10:30 AM</td>
                <td style="padding:10px;">Room 1</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 3: Cybersecurity</td>
                <td style="padding:10px;">11:00 AM</td>
                <td style="padding:10px;">Room 2</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 4: Data Science and Analytics</td>
                <td style="padding:10px;">1:00 PM</td>
                <td style="padding:10px;">Room 3</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 5: Internet of Things (IoT)</td>
                <td style="padding:10px;">2:30 PM</td>
                <td style="padding:10px;">Hall B</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 6: Quantum Computing</td>
                <td style="padding:10px;">3:00 PM</td>
                <td style="padding:10px;">Room 4</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 7: Renewable Energy Technologies</td>
                <td style="padding:10px;">3:30 PM</td>
                <td style="padding:10px;">Room 5</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 8: Biotechnology and Healthcare</td>
                <td style="padding:10px;">4:00 PM</td>
                <td style="padding:10px;">Room 6</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 9: Advanced Robotics</td>
                <td style="padding:10px;">4:30 PM</td>
                <td style="padding:10px;">Room 2</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 10: Cloud Computing and Edge Technology</td>
                <td style="padding:10px;">5:00 PM</td>
                <td style="padding:10px;">Hall A</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 11: Virtual Reality and Augmented Reality</td>
                <td style="padding:10px;">5:30 PM</td>
                <td style="padding:10px;">Room 1</td>
            </tr>
            <tr>
                <td style="padding:10px;">Session 12: Ethical AI and Responsible Tech Development</td>
                <td style="padding:10px;">10:00 AM</td>
                <td style="padding:10px;">Room 3</td>
            </tr>
			<tr>
                <td style="padding:10px;">Session 13: Final Presentations</td>
                <td style="padding:10px;">6:00 PM</td>
                <td style="padding:10px;">Main Hall</td>
            </tr>
        </tbody>
    </table>

      
	 <p><b>If you want to participate for more sessions register first using following links.</b></p>
      <div class="links">
        <button id="RegisterSessions">Register for Sessions</button>
      </div>

		<script>
			document.getElementById('RegisterSessions').addEventListener('click', function() {
				window.location.href = 'session_registration.php'; // Redirect to session_registration.php
			});
		</script>

	  
	  <div class="links">
        <button id="viewYourSchedule">View Your Schedule</button>
      </div>
		  
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
