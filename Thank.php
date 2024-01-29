<?php
$firstName = $_GET['firstname'];
$name = $_GET['name'];
$sujets = $_GET['sujets'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank</title>
    <link rel="stylesheet" href="/thank.css">
</head>
<body>
    <p class="contenair-thank">
    Merci <?= $firstName ?> <?= $name ?> de nous avoir contacté à propos de “<?= $sujets ?>”.

Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande : 

<?= $message ?>
    </p>
</body>
</html>