<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

include_once("hakiconfig.php");

// $find = $_POST['mydata'];
//      if(isset($_POST['submit'])){
//         extract($_POST);
//      }

//print_r($_POST);


$serializeData = $_POST['mydata'];
parse_str($serializeData, $data);
//print_r($data);
$ID = 
$Name = $data['name'];
$Gender = $data['gender'];
$DOB = $data['dob'];
$Email = $data['mail'];
$Phone = $data['phn'];
$Address = $data['address'];


$Zoro = $Haki->query("INSERT INTO students VALUES(NULL,'$Name','$Gender','$DOB','$Email','$Phone','$Address')");

if($Haki->affected_rows){
    echo "Successfully Inserted";
}

// $Nami = $Haki->query("SELECT * FROM students");
?>

<!-- <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
         <th>DOB</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Address</th>

    </tr>
  

</table>
</body>
</html>