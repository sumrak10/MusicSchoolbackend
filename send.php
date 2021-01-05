
<!-- $name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$instrument = $_POST['instrument'];

$name = htmlspecialchars($name);
$contact = htmlspecialchars($contact);
$email = htmlspecialchars($email);
$instrument = htmlspecialchars($instrument);

$name = urldecode($name);
$contact = urldecode($contact);
$email = urldecode($email);
$instrument = urldecode($instrument);

$name = trim($name);
$contact = trim($contact);
$email = trim($email);
$instrument = trim($instrument); -->

<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$con = $_POST['contact'];
$ins = $_POST['instrument'];

// Формирование самого письма
$title = "Новая заявка от сайта!";
$body = "
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br>
<b>Контакты:</b>$con<br>
<b>Инструмент:</b> $ins
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 1;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.com'; // SMTP сервера вашей почты
    $mail->Username   = 'nurlan.urazkulov'; // Логин на почте
    $mail->Password   = 'yaoxedaxtggqdyd'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465; // Порт сервера почты
    $mail->setFrom('nurlan.urazkulov@yandex.ru', $name); // Адрес самой почты

    // Получатель письма
    $mail->addAddress('nurlan.urazkulov@gmail.com'); 
    // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
// Отображение результата
// echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музыкальная школа</title>
    <style>
        body {
            font-family: OpenSans;
            background-image: url('media/bg2.jpg');
            overflow: hidden;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .window {
            font-size: 2em;
            color: white;
            display:flex;
            align-items: center;
            justify-content: center;
            width: 40%;
            height: 30%;
            /* background-color: black;
            filter: opacity(0.5); */
            backdrop-filter: blur(16px);
        }
        a {
            color: white;
            font-size: 1.5em;
        }
        @font-face {
            font-family: 'OpenSans';
            src: url('../media/fonts/Open-Sans/OpenSans-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }  
    </style>
</head>
<body>
    <div class="window">
        <?php 
        if ($result == "success") {
            echo "<p>Заявка успешно отправлена!</p>";
            echo "<img src='./media/smile2.png' alt='^^' width='70px' height='70px'>";
        } else {
            echo "<p>Что-то пошло не так! <br>Повторите попытку позже!</p>";
            echo "<img src='./media/smile4.png' alt='^^' width='70px' height='70px'>";
        }
        ?>
    </div>
    
    <a href="index.php">Вернуться на главную</a>
</body>
</html>