<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speakers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .speaker-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }
        .speaker-card {
            width: 250px;
            margin: 15px;
            padding: 15px;
            background-color: #f4f4f4;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .speaker-card img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .speaker-card h3 {
            color: #333;
            font-size: 20px;
            margin: 10px 0;
        }
        .speaker-card p {
            font-size: 14px;
            color: #777;
        }
        .speaker-card a {
            color: #16a085;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .speaker-card a:hover {
            color: #2c3e50;
        }
    </style>
</head>
<body>

<header>
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
                <a href="contact.php" style="color: white; text-decoration: none; font-size: 18px;">Contact</a>
            </li>
        </ul>
    </nav>

    <div style="background: linear-gradient(to right, #16a085, #2c3e50); padding: 10px 0; color: white; text-align: center;">
        <h1>International Research Conference 2024</h1>
        <p>Advancing Knowledge, Inspiring Innovation</p>
    </div>
</header>

<main>
    <div class="container">
        <h1 class="form-title" style="text-align: center; margin-top: 30px;">Our Speakers</h1>

        <div class="speaker-container">
            <!-- Speaker Card 1 -->
            <div class="speaker-card">
                <h3>Dr. John Doe</h3>
                <p>AI and Machine Learning Expert</p>
                <p>Dr. John Doe is a leading researcher in Artificial Intelligence and Machine Learning.</p>
                <a href="#">Learn More</a>
            </div>
            
            <!-- Speaker Card 2 -->
            <div class="speaker-card">
                <h3>Prof. Jane Smith</h3>
                <p>Blockchain Technology Innovator</p>
                <p>Prof. Jane Smith is pioneering work in Blockchain development and decentralized systems.</p>
                <a href="#">Learn More</a>
            </div>
            
            <!-- Speaker Card 3 -->
            <div class="speaker-card">
                <h3>Dr. Robert Johnson</h3>
                <p>Cybersecurity Expert</p>
                <p>Dr. Robert Johnson is a recognized leader in cybersecurity and digital privacy.</p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
</main>

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

</body>
</html>
