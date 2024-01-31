<?php
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['name']) || trim($_POST['name']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['email']) || trim($_POST['email']) === '') 
            $errors[] = "L'email est obligatoire";
        if(!isset($_POST['phone']) || trim($_POST['phone']) === '') 
            $errors[] = "Le numéro de téléphone est obligatoire";
        if(!isset($_POST['sujets']) || trim($_POST['sujets']) === '') 
            $errors[] = "Selectionnez un sujet";
        if(!isset($_POST['message']) || trim($_POST['message']) === '') 
            $errors[] = "Laissez un message";
        if(empty($errors)) {
            echo "je suis là avec une erreur";
                header('Location: Thank.php');
            } else {
                header ('Location: Thank.php');
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form action="Thank.php" method="post" class="container bg-light border rounded p-5" style="margin-top: 50px;">
        <p class="row">
            <label for="name" class="form-label">Nom : </label>
            <input type="text" name="name" id="entry" class="form-control">
        </p>
        <p class="row">
            <label for="firstnamet" class="form-label">Prenom : </label>
            <input type="text" name="firstname" id="entry" class="form-control">
        </p>
        <p class="row">
            <label for="email" class="form-label">Email : </label>
            <input type="email" name="email" id="entry" class="form-control">
        </p>
        <p class="row">
            <label for="phone" class="form-label">Téléphone : </label>
            <input type="tel" name="phone" id="entry" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="0x xx xx xx xx" class="form-control">
        </p>
        <p class="row">
            <label for="sujets">Choisissez un sujet :</label>
            <select id="sujets" name="sujets">
                <option value="0" selected disabled>Choisissez un sujet</option>
                <option value="information">Information</option>
                <option value="appointment">Rendez-vous</option>
                <option value="reserved">reservation</option>
                <option value="cancelation">Annulation</option>
                <option value="Other">Autre</option>        
            </select>
        </p>
        <p class="row">
            <label for="message" class="form-label">Message : </label>
            <textarea type="textarea" name="message" id="entry" rows="5" cols="33" class="form-control"></textarea>
        </p>
        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>
    </form>
    
</body>
</html>