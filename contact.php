<?php

    if(!empty($_POST["send"])){
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $message = $_POST["message"];
        $toEmail = "maria.ib2105@gmail.com";

        $mailHeaders = "Name: " . $lastName . " " .$firstName .
        "\r\n Email: " . $email .
        "\r\n Tél: " . $tel .
        "\r\n Message: " . $message . "\r\n";

        if(mail($toEmail, $lastName, $firstName, $mailHeaders)){
            $message = "Votre information est reçue avec succès.";
        }
    }



?>