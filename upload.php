<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
    
    
    
</head>
<body>
    <form action="upconn.php" method="POST" enctype="multipart/form-data">
        <label for="name">Location/Attraction :</label>
        <input type="text" name="names" id="names" required value=""><br><br>
        <label for="file">File :</label>
        <input type="file" name="file"><br><br>
        <button type="submit" name="submit">Upload File</button>
    </form>
    <br>
    <a href="savefile.php">SAVE FILE</a>
</body>
</html>