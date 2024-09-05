<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$id = $_GET['id'];
$Haki = new mysqli("localhost","root","","jquery");

$Zoro = $Haki->query("SELECT * FROM jquery WHERE id = '$id'");



   
//echo "Hello world";
// $cities = [
//     1=>"City of Mosque",
//     2=>"City of Mango",
//     3=>"Popular  for Roshmalai",
//     4=>"Nothing"
// ];

// echo $cities[$id];

?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
    </tr>

    <?php while($rook = $Zoro->fetch_assoc()){ ?>
        <tr>
            <td> <?php echo $rook['id'] ?></td>
            <td> <?php echo $rook['name'] ?></td>
            <td> <?php echo $rook['details'] ?></td>
        </tr>

  <?php  } ?>

    
</table>
    
</body>
</html>
