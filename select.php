<?php 
include_once 'db.php';
 
$sql = "SELECT * FROM stuinfo";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 
while($data = mysqli_fetch_array($query))
{
    echo "Id = ".$data['stu-id']."<br>";
    echo "Name = ".$data['stu-name']."<br>";
    echo "Age = ".$data['age']."<br>";
    echo "Gender = ".$data['gender']."<br>";
    echo "Course = ".$data['course']."<br>";
    echo "Age = ".$data['address']."<br><hr>";
}
?>