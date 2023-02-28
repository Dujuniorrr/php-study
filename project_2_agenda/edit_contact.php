<?php
    include_once("templates/header.php");
?>

    <main>
        <div class="container col-12 col-md-6 mt-4 mb-4">
            <?php include("templates/btn_back.html") ?>
            <div class="mt-2">
                <h1 class="d-flex justify-content-center">Editar Contato</h1>
            </div>
                <form action="config/process.php" method="POST">
                    <input type="hidden" name="type" value="update">
                    <input type="hidden" name="id" value="<?= $contact['id']?>">
                    <div class="form-group mb-3">
                        <label for="name">Nome do contato</label>
                        <input type="text" class="form-control" value="<?=  $contact['name'] ?>" id="name" name="name" placeholder="Digite o nome do contato.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Telefone do contato</label>
                        <input type="phone" class="form-control"  value="<?=  $contact['phone'] ?>" id="phone" name="phone" placeholder="Digite o telefone do contato">
                    </div>
                    <div class="form-group mb-3">
                        <label for="observation">Observação sobre o contato</label>
                        <textarea name="observation" class="form-control" id="observation" maxlength="250"> <?=  $contact['observation'] ?> </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Editar</button>
                </form>
        </div>
    </main>

<?php
    include_once("templates/footer.html");
?>
