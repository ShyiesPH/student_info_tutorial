<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $first_name = $_POST['first_name'];
     $middle_name = $_POST['middle_name'];
     $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];
     $school = $_POST['school'];
     $image = $_POST['image'];
     $sql = "INSERT INTO students (first_name,middle_name,last_name,gender,address,school,image)
     VALUES ('$first_name','$middle_name','$last_name','$gender','$address','$school','$image')";
     if (mysqli_query($conn, $sql)) {
        echo '<script>alert("New Record Has been successfully Added")</script>';
        header("Location:home.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        header("Location:student_form.php");
     }
     mysqli_close($conn);
}
?>