<?php
    if($_POST) {
        $subject = $_POST['subject'];
        $name    = $_POST['name'];
        $phone   = $_POST['phone'];
        $email   = $_POST['email'];
		$form    = $_POST['form'];

        $to      = "sivenkovvlad@gmail.com";

        $tr_name = '<tr><td><b>Имя: </b></td><td>'.$name.'</td></tr>';
        $tr_phone = '<tr><td><b>Телефон: </b></td><td>'.$phone.'</td></tr>';

        if($email != '') $tr_email = '<tr><td><b>E-mail: </b></td><td>'.$email.'</td></tr>';
        else $tr_email = '';

        $message  = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <table>'.$tr_type.$tr_area.$tr_name.$tr_phone.$tr_email.$tr_company.$tr_comment.'</table>
                </body>
            </html>
        ';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: '.  $_SERVER['HTTP_HOST']  . "\r\n";
        $headers .= 'Reply-To: '.$mail."\r\n";
        $headers .= 'X-Mailer: PHP/'. phpversion();
//        var_dump($to, $subject, $message, $headers);
        mail($to, $subject, $message, $headers);
    }
?>
