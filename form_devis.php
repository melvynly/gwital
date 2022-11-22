<?php
$retour = mail($_POST['email'], 'Envoi depuis la page Contact', $_POST['message'], 'From: melvynleyoncour@gmail.com');
if ($retour)
    echo '<p>Votre message a bien été envoyé.</p>';
// echo $_POST['message'];
