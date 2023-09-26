<?
    session_start();
    
    $conn = mysqli_connect("localhost", "root", "", "spectr");

    if (!$conn) {
        die("not connect". mysqli_connect_error()); 
    }
    else {
        "connect";
    }
?>