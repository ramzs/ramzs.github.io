<?php

$recepient = "freeramzs@mail.ru";
$sitename = "Vladimir Moscow Cleaning";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
$ref = $_SERVER['HTTP_REFERER'];
$message = '
                <html>
                    <head>
                        <title>Заявка на расчет цены</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                        <p>Телефон: '.$_POST['mail'].'</p>
                    </body>
                </html>';

$pagetitle = "Заявка на расчет цены с сайта \"$sitename\"";
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: Vladimir Moscow Cleaning <from@example.com>\r\n"; //Наименование и почта отправителя
mail($recepient, $pagetitle, $message, $headers);