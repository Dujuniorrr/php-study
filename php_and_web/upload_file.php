<?php

    if(isset($_FILES)) print_r($_FILES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_file.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="img">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>