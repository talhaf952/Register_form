<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sent_form'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'register') or die("Connection failed: " . mysqli_connect_error());

        if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pass'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];

            $sql = "INSERT INTO `user` (`username`, `password`, `email`) VALUES ('$user', '$pass', '$email')";

            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo 'Data Successfully Saved!';
            } else {
                echo "An error occurred while saving the data: " . mysqli_error($conn);
            }
        }
    }
?>
