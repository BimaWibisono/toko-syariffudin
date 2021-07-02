<?php

$conn = new mysqli("localhost", "root", "", "db_toko");

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function regristrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // confirmation password
    if ($password !== $password2) {
        echo "
        <script>
            alert('password tidak cocok !!');
        </script>";
        return false;
    }
}
?>