<?php
$user_mail = htmlspecialchars($_POST["usermail"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "5562969512:AAEpY9es8qMzq-mOTxWxoPrEBjITB3k_DJ0";
$chat_id ="-892891460";

$formData = array(
"Почта: " => $user_mail,
"Телефон: " => $user_phone

);

foreach($formData as $key => $value) {
  $text .= $key . "<b>"  . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
echo "Succes";
} else {
  echo "Error";
}
