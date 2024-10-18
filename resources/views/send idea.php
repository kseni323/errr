<?php
// send_idea.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $idea = $_POST['idea'];

    // Здесь можно добавить валидацию данных и отправку на email
    $to = "maksimkharitonov28@yandex.ru";
    $subject = "Предложение идеи от $name";
    $message = "Имя: $name\nПочта: $email\nИдея: $idea";
    $headers = "From: $email";

    // Отправка email
    mail($to, $subject, $message, $headers);

    // Перенаправляем обратно на ту же страницу после отправки
    header("Location: " . $_SERVER['HTTP_REFERER']); 
    exit(); // Прерываем выполнение скрипта после перенаправления
}
