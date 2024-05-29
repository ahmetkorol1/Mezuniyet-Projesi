<?php
session_start();
include('database connection.php');

if(isset($_POST['student_login'])) {
    $stu_id_unsafe = $_POST['usern'];
    $room_number_unsafe = $_POST['passw'];

    $stu_id = mysqli_real_escape_string($con, $stu_id_unsafe);
    $room_number = mysqli_real_escape_string($con, $room_number_unsafe);

    $query = mysqli_query($con, "SELECT * FROM student WHERE Stu_id='$stu_id' AND Room_Number='$room_number'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($query);

    $name = $row['Stu_id'];
    $counter = mysqli_num_rows($query);
    $id = $row['id'];

    if ($counter == 0) { 
        echo "<script type='text/javascript'>alert('Gecersiz kullanici adi ve sifre! ');
              document.location='login.php'</script>";
    } else {
        $_SESSION['id'] = $id; 
        $_SESSION['username'] = $name;

        echo "<script type='text/javascript'>document.location='student/home.php'</script>";
    }
}
?>
