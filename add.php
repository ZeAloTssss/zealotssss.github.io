<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?>

<?php
} else {
 //показываем форму
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($email);
 $fio = urldecode($fio);
 $email = urldecode($email);
 $fio = trim($fio);
 $email = trim($email);
 if (mail("kdeeenk@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: formyprogtests@gmail.com \r\n")){
 echo "Сообщение успешно отправлено";
 } else {
 echo "При отправке сообщения возникли ошибки";
 }
}
?>