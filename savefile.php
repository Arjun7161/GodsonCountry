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
             <td>#</td>
             <td>Name</td>
             <td>File</td>
</tr>
<?php
$i=1;
$rows= mysqli_query($conn,"SELECT * FROM upload ORDER BY id DESC");
?>
<?php foreach($rows as $row):?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><img src="files/<?php echo $row['file'];?>" width=800 alt=""></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>