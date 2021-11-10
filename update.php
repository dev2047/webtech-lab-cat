<?php 
 
include_once 'db.php';
 
if(isset($_POST['submit']))
{    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $sql = "UPDATE stuinfo SET `stu-name`='$name',`age`='$age', `gender`='$gender', `course`='$course', `address`='$address' WHERE `stu-id`=$id ";
    
    if (mysqli_query($conn, $sql)) {
    echo "Record has been updated added successfully !";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
else {
    echo "Oops something went wrong!";
}
?>