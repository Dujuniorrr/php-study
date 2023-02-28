<?php
    include_once("templates/header.php");
?>

<main>
        <div class="container mt-4 mb-4">
            <h1 class="d-flex justify-content-center">Minha Agenda</h1>
        </div>
       <div class="container">
        <?php if(isset($print_msg) && $print_msg != ''): ?>
            <div class="alert alert-success col-6 m-auto mb-3 text-center" role="alert">
                <?= $print_msg; ?>
            </div>
        <?php endif; ?>
        <div class="table-responsive" >
            <table class="table table-responsive" >
                <thead class="bg-primary text-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col" class="col-5 col-sm-4 col-md-3 col-lg-2" style="min-width: 154px;">Opções</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($contacts as $contact):
                    ?>
                        <tr>
                            <th scope="row"><?= $contact['id'] ?></th>
                            <td> <?=  $contact['name'] ?></td>
                            <td> <?=  $contact['phone'] ?></td>
                            <td>
                                <a href="<?= $BASE_URL ?>edit_contact.php?id=<?=$contact['id']?>" class="text-decoration-none text-black"><button class="btn btn-warning"> <i class="fa fa-pencil" aria-hidden="true"></i></button> </a>
                                <form action="config/process.php" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                    <input type="hidden" name="type" value="delete">
                                    <button class="btn btn-danger" type="submit"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                </form>
                                <a href="<?= $BASE_URL ?>show_contact.php?id=<?=$contact['id']?>" class="text-decoration-none text-light"><button class="btn btn-success"> <i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            </td>
                        </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
              </table>
           </div>
       </div>
    </main>

<?php
    include_once("templates/footer.html");
?>
