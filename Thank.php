<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifiez la présence des champs dans $_POST avant de les utiliser
    $firstName = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $sujets = isset($_POST['sujets']) ? $_POST['sujets'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Validation des champs
    if (empty($firstName)) {
        $errors[] = "Le prénom est obligatoire";
    }

    if (empty($name)) {
        $errors[] = "Le nom est obligatoire";
    }

    if (empty($email)) {
        $errors[] = "L'email est obligatoire";
    }

    if (empty($phone)) {
        $errors[] = "Le numéro de téléphone est obligatoire";
    }

    if (empty($sujets)) {
        $errors[] = "Sélectionnez un sujet";
    }

    if (empty($message)) {
        $errors[] = "Laissez un message";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (count($errors) > 0) : ?>
    <div>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php else: ?>
    <p>
    Merci <?= isset($firstName) ? $firstName : '' ?> <?= isset($name) ? $name : '' ?> de nous avoir contacté à propos de “<?= isset($sujets) ? $sujets : '' ?>”.

    Un de nos conseillers vous contactera soit à l’adresse <?= isset($email) ? $email : '' ?> ou par téléphone au <?= isset($phone) ? $phone : '' ?> <br>
    dans les plus brefs délais pour traiter votre demande : 
    <?= isset($message) ? $message : '' ?>
    </p>
<?php endif;?>

</body>
</html>
