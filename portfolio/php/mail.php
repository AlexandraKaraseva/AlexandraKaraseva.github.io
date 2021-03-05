<?php

$recepient = "usr1go@mail.ru";
$siteName = "Карасевой А.В.";

$name = trim($_POST["FIO"]);
$phone = trim($_POST["email"]);
$message1 = trim($_POST["message1"]);
$message = "Имя: $name \ne-mail: $phone \nСообщение: $message1";

$pagetitle = "Обратная связь с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>