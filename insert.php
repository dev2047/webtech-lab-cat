<?php
include_once 'db.php';

//      $name = 'S Rudresh';
//      $age = '22';
//      $gender = 'male';
//      $course = 'msc';
//      $address = 'bharathi layout, sg palaya';
 
//      $sql = "INSERT INTO stuinfo (`stu-id`,`stu-name`,`age`,`gender`,`course`,`address`)
//      VALUES (NULL,'$name','$age','$gender','$course','$address')";
 
//      if (mysqli_query($conn, $sql)) {
//         echo "New record has been added successfully !";
//      } else {
//         echo "Error: " . $sql . ":-" . mysqli_error($conn);
//      }
//      mysqli_close($conn);

if(isset($_POST['submit']))
{    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    $sql = "INSERT INTO stuinfo (`stu-id`,`stu-name`,`age`,`gender`,`course`,`address`)
    VALUES (NULL,'$name','$age','$gender','$course','$address')";
    
    if (mysqli_query($conn, $sql)) {
    echo "New record has been added successfully !";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
else {
    echo "Oops something went wrong!";
}
?>