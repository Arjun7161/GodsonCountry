<?php
require_once 'function.php';
$row=update_get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Area</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 pt-5">
        <img class="card-img-top" src="https://via.placeholder.com/300*100" alt="Card image cap">
       <h2 class="pt-5"><?php echo $row['title']?></h2>
       <p><?php echo htmlspecialchars_decode($row['content'])?></p></div>
</div>
</div>

</body>
</html>