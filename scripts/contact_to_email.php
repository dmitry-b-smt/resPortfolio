<?php
if (isset($_POST["email"]) && isset($_POST["message"])) {
    $email = htmlentities(trim($_POST["email"])); // trim - удаляет пробелы в начале и в конце
    $message = htmlentities($_POST["message"]);
    $error = '';

    if ($email == '') {
        $error = 'Введите ваш e-mail';
    } else if ($message == '') {
        $error = 'Введите ваше сообщение';
    } else if (strlen($message) <= 7) { // strlen - подсчитывает количество символов в строке
        $error = 'Сообщение должно быть более 10 символов';
    }

    if ($error != '') {
        echo $error;
        exit;
    }
} else {
    echo "Error";
}

$subject = "=?utf-8?B?" . base64_encode("Сообщение с моего сайта") . "?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('peresvet.smt7101@gmail.com', $subject, $message, $headers);

header("Location: ../");
