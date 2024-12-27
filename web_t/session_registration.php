<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure that the form is submitted
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $session = $_POST['session'];

    // Validate input data
    if (!empty($name) && !empty($email) && !empty($password) && !empty($session)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert into database (adjust query as necessary)
        $sql = "INSERT INTO session_registration (name, email, password, session) 
                VALUES (?, ?, ?, ?)";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $name, $email, $hashed_password, $session);
            
            if ($stmt->execute()) {
                // Redirect to confirmation page after successful registration
                header("Location: confirmation.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for Sessions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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

    <div style="background: linear-gradient(to right, #16a085, #2c3e50); padding: 10px 0; color: white; text-align: center;">
        <h1>International Research Conference 2024</h1>
        <p>Advancing Knowledge, Inspiring Innovation</p>
    </div>
</header>

<div class="container">
    <h1 class="form-title">Register for Sessions</h1>
    
    <p><b>If you want to participate in more sessions, register first using the form below.</b></p>
    
    <form method="post" action="">
        <br><div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="Name" id="Name" placeholder="Name" required>
            <label for="Name">Name</label>
        </div>

        <br><div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>

        <br><div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>

        <p><i class="fa-solid fa-hand-pointer"></i>&nbsp; Select the session that you want to participate in.</p>

        <div class="input-group">
            <select name="session" id="session" required>
                <option value="" disabled selected>Select a session</option>
                <option value="session1">Session 1: AI Innovations</option>
                <option value="session2">Session 2: Blockchain Trends</option>
                <option value="session3">Session 3: Cybersecurity</option>
                <option value="session4">Session 4: Data Science and Analytics</option>
                <option value="session5">Session 5: Internet of Things (IoT)</option>
                <option value="session6">Session 6: Quantum Computing</option>
                <option value="session7">Session 7: Renewable Energy Technologies</option>
                <option value="session8">Session 8: Biotechnology and Healthcare</option>
                <option value="session9">Session 9: Advanced Robotics</option>
                <option value="session10">Session 10: Cloud Computing and Edge Technology</option>
                <option value="session11">Session 11: Virtual Reality and Augmented Reality</option>
                <option value="session12">Session 12: Ethical AI and Responsible Tech Development</option>
            </select>
        </div>
        
        <br>
        <input type="submit" class="btn" value="Register" name="r_egister"><br>
        <br><button id="scan_QR_code"><a href="QR_check_in.php">Scan QR Code</a></button>
    </form>
</div>

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
