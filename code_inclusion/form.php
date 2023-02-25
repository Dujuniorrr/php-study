<?php
    include "function.php";
?>

<?php for($i = 0; $i < 2; $i++): ?>

    <form action="" >
        <input type="text" name="name" value="<?= $name ?>">
        <input type="number" name="age" value="<?= $age ?>">
        <button type="submit">Editar</button>
    </form>

<?php endfor; ?>