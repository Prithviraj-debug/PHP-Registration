<?php
ob_start();
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if (empty($username)) {
    header ("Location: index.php?error=Username is Required");
    exit();
}
else if (empty($password)) {
    header ("Location: index.php?error=password is Required");
    exit();
}

$sql = "SELECT * FROM users where username='$username' AND password='$password'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $username && $row['password'] === $password) {
        echo 'Logged In';
        $_SESSION['username'] = $row['username'];       // Store current username in session variable
        header("Location: ");       // Mention the location where you want to redirect after successfully logged in
        exit();
    }
    else {
        header("Location: ");
        exit();
    }
}
else {
    header("Location: ");
}