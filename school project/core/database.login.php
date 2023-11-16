<?php
try {
    // Get user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a statement to retrieve the hashed password for the given email
    $query = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
    // Execute the statement
    $stmt->execute();

    // Check if there is a matching user
    if ($stmt->rowCount() > 0) {
        // Fetch user data including hashed password
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashedPassword = $userData['password'];

        // Verify the entered password against the stored hash
        if (password_verify($password, $hashedPassword)) {
            // Authentication successful
            // Start a session to persist user data
            session_start();

            // Store user information in the session
            $_SESSION['email'] = $userData['email'];
            $_SESSION['firstName'] = $userData['firstName'];
            $_SESSION['middleName'] = $userData['middleName'];
            $_SESSION['lastName'] = $userData['lastName'];

            $_SESSION['loggedin'] = true; // Set the boolean to true

            // Redirect to the homepage
            header('Location: ../school project/posted.php');
            exit();
        } else {
            // Authentication failed
            echo "Invalid email or password";
        }
    } else {
        // No user found with the given email
        echo "Invalid email or password";
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>