<?php
        if (!empty($_POST)) {
            $id = $_POST['id'];
            $firstname10 = $_POST['name1'];
            $lastname10 = $_POST['name2'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            include 'dbconnexion.php';
            include 'create.php';
            $nb = $cnx->exec("INSERT INTO etudiant(id,firstname,lastname,email,phone) VALUES ('$id','$firstname10','$lastname10','$email','$phone')");

          
        }
    ?>