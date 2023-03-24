<?php

$_POST = array_map('trim',$_POST);

    $firstname = $_POST['firstname'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    var_dump($_POST);


echo $firstname;
echo $subject;
echo $email;
echo $comment;

?>