<?php
// Database connection details
$host = 'localhost';  // Database host
$username = 'root';   // Database username
$password = '';       // Database password
$dbname = 'conference_registration';  // Name of the existing database

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If you reach here, the connection is successful
//echo "Successfully connected to the database '$dbname'.<br>";

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize form data
    if (!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['email']) && !empty($_POST['password']) && 
        !empty($_POST['field']) && !empty($_POST['phone']) && !empty($_POST['research_interests']) && !empty($_POST['workshop']) && !empty($_POST['comments'])) {

        // Sanitize and escape input data
        $firstName = $conn->real_escape_string(trim($_POST['fName']));
        $lastName = $conn->real_escape_string(trim($_POST['lName']));
        $email = $conn->real_escape_string(trim($_POST['email']));
        $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT); // Hash the password
        $field = $conn->real_escape_string(trim($_POST['field']));
        $phone = $conn->real_escape_string(trim($_POST['phone']));
        $researchInterests = $conn->real_escape_string(trim($_POST['research_interests']));
        $workshop = $conn->real_escape_string(trim($_POST['workshop']));
        $comments = $conn->real_escape_string(trim($_POST['comments']));

        // Prepare the SQL query using a prepared statement
        $sql = "INSERT INTO participants (first_name, last_name, email, password, field, phone, research_interests, workshop, comments) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters
            $stmt->bind_param("sssssssss", $firstName, $lastName, $email, $password, $field, $phone, $researchInterests, $workshop, $comments);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Registration successful!";
                header("Location: login.php"); // Redirect to login page
                exit(); // Stop the script to avoid further output
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }

    } else {
        echo "Please fill in all required fields.";
    }

}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signIn'])) {
    // Get user inputs
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = trim($_POST['password']);

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM participants WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Bind email parameter
        $stmt->bind_param("s", $email);
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Start session and store user info
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['email'] = $user['email'];

                // Redirect to the dashboard page
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Incorrect password. Please try again.";
            }
        } else {
            echo "No account found with that email. Please register.";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure all form fields are set and not empty
    if (isset($_POST['Name'], $_POST['email'], $_POST['password'], $_POST['session'])) {

        // Sanitize and escape input data
        $name = $conn->real_escape_string(trim($_POST['Name']));
        $email = $conn->real_escape_string(trim($_POST['email']));
        $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT); // Hash the password
        $session = $conn->real_escape_string(trim($_POST['session']));

        // Prepare SQL query using a prepared statement
        $sql = "INSERT INTO session_registration (name, email, password, session) 
                VALUES (?, ?, ?, ?)";

        // Prepare the statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters
            $stmt->bind_param("ssss", $name, $email, $password, $session);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Registration successful!";
                // Redirect to a thank you or confirmation page
                header("Location: confirmation.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }

    } else {
        echo "Please fill in all required fields.";
    }
}




// Close the database connection
$conn->close();
?>
