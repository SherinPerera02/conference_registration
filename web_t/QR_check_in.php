<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Check-In</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
	<style>
	
		ol li {
			margin-bottom: 15px; 
			padding-left: 10px;
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

        .btn {
            margin-top: 20px;
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
        <h1 class="form-title">Session Check-In</h1>
			<p><b>Follow the steps below to check in for the session:</b></p><br>
				<ol>
					<li>Click "Start QR Scanner" to open the camera.</li>
					<li>Point your camera at the QR code to scan it.</li>
					<li>Once scanned, the result will be displayed below.</li>
					<li>Click "Submit" to complete your check-in.</li>
				</ol>
        <div id="qrCodeContainer">
		
			
            <br><input type="submit" class="btn" value="Scan QR Code" name="QR_checkin">
			<div id="reader"></div>
        <div id="result-container" style="display: none;">
            <h3>Scanned Data:</h3>
            <p id="scanned-result">No data scanned yet.</p>
        </div>
			
<script>
        const html5QrCode = new Html5Qrcode("reader"); // Initialize the QR code scanner

        // Success callback when a QR code is scanned
        const qrCodeSuccessCallback = (decodedText, decodedResult) => {
            document.getElementById("result-container").style.display = "block";
            document.getElementById("scanned-result").innerText = decodedText;

            // Show the submit button
            document.getElementById("submit-btn").style.display = "inline-block";

            // Stop the scanner after a successful scan
            html5QrCode.stop().then(() => {
                console.log("QR code scanning stopped.");
            }).catch(err => {
                console.error("Error stopping the scanner:", err);
            });
        };

        // Error callback for handling scan errors
        const qrCodeErrorCallback = (errorMessage) => {
            console.log(`Error scanning QR code: ${errorMessage}`);
        };

        // Start QR scanner
        html5QrCode.start(
            { facingMode: "environment" }, // Use the rear camera
            { fps: 10, qrbox: { width: 250, height: 250 } }, // Scanner settings
            qrCodeSuccessCallback,
            qrCodeErrorCallback
        ).catch(err => {
            console.error("Error starting QR scanner:", err);
        });

        // Handle form submission after scanning
        document.getElementById("submit-btn").addEventListener("click", () => {
            const scannedData = document.getElementById("scanned-result").innerText;

            if (scannedData && scannedData !== "No data scanned yet.") {
                alert(`Check-in successful with data: ${scannedData}`);
                // Here, you can send the data to the server for processing
                // e.g., make a POST request to an endpoint
            } else {
                alert("No QR code data found. Please scan a QR code.");
            }
        });
    </script>

        </div>
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
