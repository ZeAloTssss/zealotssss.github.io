<?PHP header("Content-Type: text/html; charset=utf-8");?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
if(isset($_POST['submit'])){
    $to = "kdeeenk@gmail.com";
    $from = "formyprogtests@gmail.com";

    $usr_name = $_POST['usr_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "Форма отправки сообщений с сайта YouSiteDomen";
    $reqw = "Сообщение отправлено. Спасибо Вам " . $usr_name . ", наши менедеры свяжутся с Вами в ближайшее время.";
   //$error1 = "Е-mail адрес не существует"
    $error2 = '<xmp>Поле Имя слишком короткое или пустое</xmp>';
    $error3 = '<xmp>Номер телефона может состоять только из цифр</xmp>';

    /*if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
        {
            echo ($error);
        }    
}*/    

        if(iconv_strlen($usr_name)<3) {
            echo ($error2);
        }
        if(!is_numeric($phone)) {
            echo ($error3);
        } else {

$mail_to_myemail = "Здравствуйте!
Было отправлено сообщение с сайта!
Имя отправителя: $usr_name
E-mail: $email
Номер телефона: $phone
Текст сообщения: $message
    
$headers = "From: $from \r\n";
    
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    echo ($reqw);
    }
}
?>

<script language="jаvascript" type="text/jаvascript">
function changeurl(){eval(self.location="https://www.YouSite");}
window.setTimeout("changeurl();",3000);
</script>