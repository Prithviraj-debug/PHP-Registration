<?php

ob_start();
include "db_conn.php";

if (mysqli_connect_error()) {
    exit('Error connecting to the DB...' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    exit('Empty Field(s)');
}

if (empty($_POST['username'] || empty($_POST['password']) || empty($_POST['email']))) {
    exit('Values Empty!!');
}

if ($stmt = $con->prepare('SELECT id, password from users where username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows>0) {
        echo 'Username already exists. ';
        ?>
        <a href="register.html">Try another</a>

        <?php
    }
    else {
        if ($stmt = $con->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')) {
            $stmt->bind_param('sss', $_POST['username'], $_POST['password'], $_POST['email']);
            $stmt->execute();
            echo 'Succesfully Registered';
            header("Location: ");       // Redirect after successfully registered
        }
        else {
            echo 'Error occurred';
        }
    }
    $stmt->close();
}
else {
    echo 'Error Occurred!';
}
$con->close();

?>