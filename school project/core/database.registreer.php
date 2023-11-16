<?php
//registratie begint hier
$sql = "INSERT INTO users (firstName, middleName, lastName, email, password) VALUES (:firstName, :middleName, :lastName, :email, :password)";
$stmt = $pdo->prepare($sql);

$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt->bindParam(':firstName', $firstName);
$stmt->bindParam(':middleName', $middleName);
$stmt->bindParam(':lastName', $lastName);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

if ($_POST["password"] == $_POST ["repeat-password"]){
        try
        {
        $stmt->execute();
        $_SESSION['loggedin'] = true; // Set the boolean to true
        header('Location: ../school project/posted.php');
        exit();
        } 
        catch (PDOException $e) {
        die("Error: " . $e->getMessage());
        }
    }
    else{
        echo "Failed to send data";
    }