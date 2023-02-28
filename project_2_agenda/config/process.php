<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    if(!empty($_POST)){
        if($data["type"] === "create"){
             add_contact($data["name"], $data["phone"], $data['observation']);
        }
        else if($data["type"] === "update"){
            edit_contact($data['id'], $data["name"], $data["phone"], $data['observation']);
        }
        else if($data["type"] === "delete"){
          
            delete_contact($data['id']);
        }

        header("Location:" . $BASE_URL . "../index.php");
    }
    else{
        if(isset($_GET['id'])){
            $contact = recover_contact_by_id($_GET['id']);
        }
    }

    function add_contact($name, $phone, $oservation){
        $conn = connection();
        $query = "INSERT INTO CONTACT(name, phone, observation) VALUES (:name, :phone, :observation)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $oservation);
        try {
            $stmt->execute();
            $_SESSION['msg'] = "Contato adicionado com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }

    function edit_contact($id, $name, $phone, $oservation){
        $conn = connection();
        $query = "UPDATE CONTACT SET name = :name, phone = :phone, observation = :observation WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observation", $oservation);
        $stmt->bindParam(":id", $id);
        try {
            $stmt->execute();
            $_SESSION['msg'] = "Contato editado com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }

    function delete_contact($id){
        $conn = connection();
        $query = "DELETE FROM CONTACT WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        try {
            $stmt->execute();
            $_SESSION['msg'] = "Contato deletado com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }
    function list_contacts(){
        $conn = connection();
        $query = "SELECT * FROM CONTACT ORDER BY id";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();

        return $contacts;
    }

    function recover_contact_by_id($id){
        $conn = connection();
        $query = "SELECT * FROM CONTACT WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $contact = $stmt->fetch();

        return $contact;
    }
    
    $conn = null;
?>