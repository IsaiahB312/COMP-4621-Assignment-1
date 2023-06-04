<?php
    $servername = 'localhost';
    $username = 'Isaiah';
    $password = 'pass';
    $dbname = '4621Ass1';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        } 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phnum = $_POST["phnum"];

    $sql = "INSERT INTO contactinfo VALUES ('$name', '$email', '$phnum')";
    $result = mysqli_query($conn, $sql);

    if($result == true) {
        echo "Data was successfully entered into the database.";
    }

    else {
        echo "Data was not entered into the database.";
    }

    mysqli_close($conn);

?>