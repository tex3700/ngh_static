<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];

    // SMTP configuration
    ini_set('SMTP', 'smtp.mail.ru'); // Replace with your SMTP server
    ini_set('smtp_port', 465); // Or the appropriate port
    ini_set('sendmail_from', 'it@nghim.ru'); // Your email address
//    ini_set('sendmail_path', '/usr/sbin/sendmail -t -i -f your_email@your_domain.com'); //for linux/unix server

    // Authentication (if required)
    ini_set('SMTPAuth', 'LOGIN'); // Or 'PLAIN'
    ini_set('username', 'it@nghim.ru');
    ini_set('password', 'aKtZrYi-Iu72');

    $to = 'it@nghim.ru';
    $subject = 'Сообщение с формы обратной связи';
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    $headers = "From: it@nghim.ru\r\n" .
               "Reply-To: it@nghim.ru\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>