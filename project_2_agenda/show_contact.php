<?php
    include_once("templates/header.php");

?>

    <main>
        <div class="container col-12 col-md-6 mt-4 mb-4">
            <?php include("templates/btn_back.html") ?>
            <div class="mt-2">
                <h1 class="d-flex justify-content-center"> <?= $contact['name'] ?></h1>
            </div>
            <div class="mt-4">
                <strong>Telefone</strong>
                <p class="mt-3"><?= $contact['phone'] ?></p>
            </div>
            <div>
                <strong>Observações</strong>
                <p class="mt-3"><?= $contact['observation'] ?></p>
            </div>
        </div>
    </main>

<?php
    include_once("templates/footer.html");
?>
