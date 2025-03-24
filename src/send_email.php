<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];
    $phone = $_POST['phone'];

    // SMTP configuration
    ini_set('SMTP', 'mail.nghim.ru'); // Replace with your SMTP server
    ini_set('smtp_port', 465); // Or the appropriate port
    ini_set('sendmail_from', 'it@nghim.ru'); // Your email address
    //ini_set('sendmail_path', '/usr/sbin/sendmail -t -i -f it@nghim.ru'); //for linux/unix server

    // Authentication (if required)
    ini_set('SMTPAuth', 'LOGIN'); // Or 'PLAIN'
    ini_set('username', 'it@nghim.ru');
    ini_set('password', '');

    $to = 'it@nghim.ru';
    $subject = 'Сообщение с формы обратной связи';
    $body = "Имя: $name\r\nEmail: $email\r\nТелефон: $phone\r\nСообщение:\r\n$message";
    $headers = "From: it@nghim.ru" . "\r\n" .
               "Reply-To: it@nghim.ru" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        header('Location: /index.php?status=success');
        exit;
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>