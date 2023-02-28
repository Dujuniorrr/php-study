<?php
    include_once("config/url.php");
    include_once("config/process.php");
    
    if(isset($_SESSION['msg'])) {
        $print_msg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }

    $contacts = list_contacts();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Agenda de Contatos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/6a5dd2730c.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
    <header class="col-12 p-2 bg-primary ">
        <nav class="text-light col-11 m-auto d-flex align-items-center justify-content-between justify-content-sm-start">
            <div class="d-inline-block ">
                <img src="img/logo.svg" alt="" width="50px" class="d-flex m-auto">
                <h5 class="d-flex m-0">
                    Agenda
                </h5>
            </div>
           <div class="d-inline-block">
            <div class="ms-3">
                    <a href="<?= $BASE_URL ?>add_contact.php">
                        <button class="btn btn-light"  style="min-width: 182px;">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Aidicionar Contato
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </header>
