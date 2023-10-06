<?php
try {
    // Define the database file path (replace with your actual database file path).
    $dbFilePath = 'datadb.accdb';

    // Create a PDO connection to the Microsoft Access database.
    $db = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=$dbFilePath;");

    // Define user data.
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute an SQL query to insert data into the table.
    $query = "INSERT INTO users (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);


    if ($stmt->execute()) {
        echo "Sign-up successful!";
    } else {
        echo "Sign-up failed. Please try again later.";
    }

    // Close the database connection.
    $db = null;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
