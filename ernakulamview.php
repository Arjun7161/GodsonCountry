<?php
require'upconn.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaveFile</title>
</head>
<body>
     <table border=1 cellspacing=0 cellpadding=10>
         <tr>
             
</tr>
<?php
$i=1;
$rows= mysqli_query($conn,"SELECT * FROM upload  WHERE name='ernakulam' ORDER BY id DESC");
?>
<?php foreach($rows as $row):?>
    <tr>
        <td><img src="files/<?php echo $row['file'];?>" width=300 alt=""></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>