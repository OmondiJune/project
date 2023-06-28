<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form is submitted for login
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // TODO: Add your login logic here

        // Example code to check if email and password match
        if ($email === 'example@example.com' && $password === 'password') {
            echo 'Login successful';
        } else {
            echo 'Invalid email or password';
        }
    }

    // Check if the form is submitted for signup
    if (isset($_POST['signup'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        // TODO: Add your signup logic here

        // Example code to check if passwords match
        if ($password === $confirmPassword) {
            // Create a new PDO instance (XAMPP default settings)
            $servername = "localhost";
            $username = "root";
            $password = "";

            try {
                // Connect to MySQL as root user
                $conn = new PDO("mysql:host=$servername", $username, $password);

                // Set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Create the database if it does not exist
                $sql = "CREATE DATABASE IF NOT EXISTS parking_users";
                $conn->exec($sql);

                // Switch to the newly created database
                $dbname = "parking_users";
                $conn->exec("USE $dbname");

                // Create the project table if it does not exist
                $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS users (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    email VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL
                )");
                $stmt->execute();

                // Prepare and execute the SQL statement
                $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
                $stmt->execute();

                echo 'Signup successful';
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        } else {
            echo 'Passwords do not match';
        }
    }
}
?>