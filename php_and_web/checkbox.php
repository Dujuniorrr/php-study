<?php
    $name = "Junior";
    if(isset($_POST['languages'])){
        print_r($_POST['languages']);
    }
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
     <form action="" method="POST">
        <div>
             <input type="text" name="name" placeholder="Preencha seu nome" value="<?= $name ?>">
        </div>
        <div>
            <input type="checkbox" name="languages[]" value="Java"> Java
        </div>
        <div>
            <input type="checkbox" name="languages[]" value="PHP"> PHP
        </div>
        <div>
            <input type="checkbox" name="languages[]" value="Python"> Python
        </div>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>