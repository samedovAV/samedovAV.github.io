<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>

<?php
if(!empty($_POST['telephone'] ))
{
$to = "rundergroundmoscow@gmail.com";
$from = "info@runderground.moscow";
$subject = "Сборы Runderground";
$message = 'ФИО: '.$_POST['name'].';
            \nДата рождения: '.$_POST['birthday'].'; 
            \nТелефон: '.$_POST['telephone'].';
            \nEmail: '.$_POST['email'].';
            \nСсылка: '.$_POST['vk'].';
            ';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: info@runderground.moscow>\r\n";
$result = mail($to, $subject, $message, $headers);

    if ($result){ 
        echo "<p>Cообщение успешно отправлено. Пожалуйста, оставайтесь на связи</p>";
    }
    else{
        echo "<p>Cообщение не отправленно. Пожалуйста, попрбуйте еще раз</p>";
    }
}
else {
echo "<p>Обязательные поля не заполнены. Введите номер телефона</p>";
}
?>

</body>
</html>