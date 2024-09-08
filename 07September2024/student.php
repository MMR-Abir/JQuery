<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.7.1.min.js"></script>
</head>
<body>
    <?php include_once("hakiconfig.php"); 
    $Nami = $Haki->query("SELECT * FROM students");
    ?>
   <table border="1">
   <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
         <th>DOB</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Address</th>
        <th>Action</th>

    </tr>
  <?php while($Luffy = $Nami->fetch_assoc()){ ?>

    <tr>
        <td> <?php echo $Luffy['id']  ?></td>
    <td> <?php echo $Luffy['name']  ?></td>
    <td> <?php echo $Luffy['gender']  ?></td>
    <td> <?php echo $Luffy['dob']  ?></td>
    <td> <?php echo $Luffy['email']  ?></td>
    <td> <?php echo $Luffy['phone']  ?></td>
    <td> <?php echo $Luffy['address']  ?></td>
    <td> <a href="#" class = 'stid' value = "<?php echo $Luffy['id']  ?>" >Delete</a> </td>
    </tr>

 <?php } ?>

   </table>
   <script>
    $(document).ready(function(){

      $(".stid").on('click',function(event){
               event.preventDefault();
                let std = $(this).attr('value');
              //  alert(std);

               $.post("delete.php",{mydata:std} , function(data,status){
                alert(data);
               })
          })
        })
   </script>

</body>
</html>