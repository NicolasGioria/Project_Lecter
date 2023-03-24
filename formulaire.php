<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_POST = array_map('trim', $_POST);
    $errors = [];

    if (empty($_POST["name"])) {
        $errors["nameError"] = "Vos nom et prénom sont requis.";
    } else {
        $name = ($_POST["name"]);
    }

    if (empty($_POST["subject"])) {
        $errors["subjectError"] = "Votre message doit comporter un intitulé.";
    } else {
        $subject = ($_POST["subject"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["emailError"] = "Votre adresse email est nécessaire pour obternir une réponse.";
    } else {
        $email = ($_POST["email"]);
    }

    if (empty($_POST["comment"])) {
        $errors["commentError"] = "Ne soyez pas timide... approchez.";
    } else {
        $comment = ($_POST["comment"]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant&family=Italianno&family=Libre+Franklin&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/formulaire.css">
</head>

<body>
    <!--
    Question : 
    https://openclassrooms.com/forum/sujet/formulaire-de-contact-responsive
    -->

    <div class="container">
        <?php if ($_SERVER["REQUEST_METHOD"] === "GET" || ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($errors))) : ?>
            <h1><i>Séduits</i> ? <br> Faites-le moi savoir...</h1>
            <form action="/formulaire.php" method="POST">
                <?php if (!empty($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
                <label for="name">Nom & prénom</label>
                <input type="text" value="<?= $_POST["name"] ?? '' ?>" id="name" name="name" placeholder="Vos nom et prénom" required>

                <label for="subject">Sujet</label>
                <input type="text" value="<?= $_POST["subject"] ?? '' ?>" id="subject" name="subject" placeholder="L'objet de votre message" required>

                <label for="emailAddress">Email</label>
                <input id="emailAddress" type="email" value="<?= $_POST["email"] ?? '' ?>" name="email" placeholder="Votre email" required>

                <label for="comment">Message</label>
                <textarea id="subject" name="comment" placeholder="Laissez moi un petit mot..." style="height:150px" required><?= $_POST["comment"] ?? '' ?></textarea>

                <button>Envoyer</button>
            </form>
            <a href="index.php">X</a>

            <div class="mask"> <img src="/assets/images/masque.png" alt="Masque" /></div>

        <?php else : ?>
            <p>Merci pour votre délicieux message.</p>
        <?php endif ?>

    </div>


    <!--  <div class="image"><img src="assets/images/frise.png" alt=""></div> -->


    <!-- si je suis en GET ça affiche le formulaire. Le formulaire renvoie sur lui-même. On revient donc sur la même page mais en POST. 

En Post, si erreur, réafficher le formulaire avec les valeurs préremplies pour ne pas avoir à le refaire.
ET messages d'erreur si erreurs dans les champs. (backend)

Si en post, pas d'erreur, ne PAS AFFICHER LE formulaire mais "message bien envoyé" 

    Tout le code action_page dans un if qui va tester $_SERVER['REQUEST_METHOD'] === 'post' c'est que le formulaire a été transmis.

    2) faire les tests car donnéees récup et tests possibles à ce stade.

    3) - arrivée formulaire / soumission données en post / soit erreurs et recharg. formulaire prérempli / soit pas erreur et message OK. -->

</body>

</html>