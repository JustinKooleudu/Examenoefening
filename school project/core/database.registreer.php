<?php
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Registration code
$sql = "INSERT INTO users (firstName, middleName, lastName, email, password) VALUES (:firstName, :middleName, :lastName, :email, :password)";
$stmt = $pdo->prepare($sql);

$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

$stmt->bindParam(':firstName', $firstName);
$stmt->bindParam(':middleName', $middleName);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

if ($_POST["password"] == $_POST["repeat-password"]) {
    try {
        $stmt->execute();
        $_SESSION['loggedin'] = true; // Set the boolean to true
        header('Location: ../school project/posted.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Passwords do not match.";
}
?>