<?php

$recepient = "buro.ra@yahoo.com";
$sitename = "Бюро";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mes = trim($_POST["message"]);
$ref = $_SERVER['HTTP_REFERER'];
$message = '
                <html>
                    <head>
                        <title>callback</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                    </body>
                </html>';

$pagetitle = "Заявка звонка с сайта \"$sitename\"";
$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
$headers .= "From: Бюро <from@example.com>\r\n"; //Наименование и почта отправителя
mail($recepient, $pagetitle, $message, $headers);