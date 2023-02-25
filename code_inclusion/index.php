<?php
    include "test.php";
    require "test2.php";
?>

<p>Após o cabeçalho</p>
<p>Imprimindo c <?php echo $c ?></p>
<p>Olha só: <?= $c; ?> </p>

<input type="text" value="<?= $c ?>">

<?php
    include_once "file/test3.php";
    include_once "file/test3.php"; //já foi incluido
?>