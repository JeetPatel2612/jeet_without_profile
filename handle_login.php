<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once("../php/config.php");
require_once("../php/displayMessageAndRedirect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($con, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['username'] = $username;
                $_SESSION['login_count'] = isset($_SESSION['login_count']) ? $_SESSION['login_count'] + 1 : 1;
                header("Location: ../home1.php");
                exit;
            } else {
                displayMessageAndRedirect("Wrong username or password", "../login.html");
            }
        } else {
            displayMessageAndRedirect("Wrong username or password", "../login.html");
        }

        mysqli_stmt_close($stmt);
    } else {
        displayMessageAndRedirect("Error preparing the statement", "../login.html");
    }
}
mysqli_close($con);
?>
