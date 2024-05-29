<?php

$sname = "localhost";
$uname = "root";
$password = "";
$conn = mysqli_connect($sname, $uname, $password, 'DMS');

if (!$conn) {
    die("Veritabaný baðlantýsý baþarýsýz: " . mysqli_connect_error());
}


if (isset($_POST['message'])) {
    $message = $_POST['message'];

   
    $Stu_ID = "#";
    $Name = "#";
    $Room_Num = "#";

  
    $sql = "INSERT INTO message_table (Stu_ID, Name, Room_Num, Messages) VALUES ('$Stu_ID', '$Name', '$Room_Num', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Mesajiniz basariyla gonderildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>
