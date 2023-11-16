<?php
try {
    // Get user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a statement to check the credentials
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);

    // Execute the statement
    $stmt->execute();

    // Check if there is a matching user
    if ($stmt->rowCount() > 0) {
        // Authentication successful
        // Start a session to persist user data
        session_start();

        // Store user information in the session
        $_SESSION['email'] = $email;

        // Redirect to the homepage
        header('Location: ../school project/index.php');

        // Fetch additional user data from the database
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        // Store user information in the session
        $_SESSION['email'] = $userData['email'];
        $_SESSION['firstName'] = $userData['firstName'];
        $_SESSION['middleName'] = $userData['middleName'];
        $_SESSION['lastName'] = $userData['lastName'];

        $_SESSION['loggedin'] = true; // Set the boolean to true
        exit();
    } else {
        // Authentication failed
        echo "Invalid email or password";
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>