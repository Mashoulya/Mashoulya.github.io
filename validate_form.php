<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $errors = [];

    //protection contre le code malveillant
    function sanitize_input($data){
        return htmlspecialchars(trim($data));
    }

    if (empty($_POST["firstName"]) || !preg_match("/^[a-zA-Z\-]{2,30}$/", $_POST["firstName"])) {
        $errors['firstName'] = "Le prénom doit être entre 2 et 30 caractères, avec seulement des lettres et des tirets";
    }else{
        $firstName = sanitize_input($_POST["firstName"]);
    }

    if (empty($_POST["lastName"]) || !preg_match("/^[a-zA-Z\-]{2,30}$/", $_POST["lastName"])) {
        $errors['lastName'] = "Le nom doit être entre 2 et 30 caractères, avec seulement des lettres et des tirets";
    }else{
        $lastName = sanitize_input($_POST["lastName"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Veuillez entrer une adresse email valide";
    }else{
        $email = sanitize_input($_POST["email"]);
    }

    if (!empty($_POST["tel"]) && !preg_match("/^\d{10}$/", $_POST["tel"])) {
        $errors['tel'] = "Le téléphone doit contenir exactement 10 chiffres";
    } else {
        $tel = sanitize_input($_POST["tel"]);
    }

    if (empty($_POST["message"]) || str_word_count($_POST["message"]) < 5 || str_word_count($_POST["message"]) > 500) {
        $errors['message'] = "Le message doit contenir entre 5 et 500 mots.";
    } else {
        $message = sanitize_input($_POST["message"]);
    }

    if (empty($_POST["acceptData"])) {
        $errors['acceptData'] = "Vous devez accepter la politique de confidentialité.";
    }

    if (empty($errors)) {
        $to = "example@example.com";
        $subject = "Nouveau message de contact";
        $body = "Prénom: $firstName\nNom: $lastName\nEmail: $email\nTéléphone: $tel\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi du message.";
        }
    } else {
        foreach ($errors as $field => $error) {
            echo "<p>$error</p>";
        }
    }
}