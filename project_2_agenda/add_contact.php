<?php
    include_once("templates/header.php");
?>

    <main>
        <div class="container col-12 col-md-6 mt-4 mb-4">
            <?php include("templates/btn_back.html") ?>
            <div class="mt-2">
                <h1 class="d-flex justify-content-center">Adicionar Contato</h1>
            </div>
                <form action="config/process.php" method="POST">
                    <input type="hidden" name="type" value="create">
                    <div class="form-group mb-3">
                        <label for="name">Nome do contato</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato.">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Telefone do contato</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Digite o telefone do contato">
                    </div>
                    <div class="form-group mb-3">
                        <label for="observation">Observação sobre o contato</label>
                        <textarea name="observation" class="form-control" id="observation" maxlength="250"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Adicionar</button>
                </form>
        </div>
    </main>

<?php
    include_once("templates/footer.html");
?>
