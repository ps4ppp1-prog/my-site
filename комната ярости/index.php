<?php
$to = "example@mail.ru"; // ← замени на свой e-mail
$subject = "Новая заявка с сайта Комната Ярости";

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

$body = "Имя: $name\nТелефон: $phone\nСообщение: $message";

$headers = "From: Комната Ярости <no-reply@komnata.ru>\r\n";

if (mail($to, $subject, $body, $headers)) {
  echo "✅ Спасибо! Ваша заявка успешно отправлена.";
} else {
  echo "❌ Ошибка при отправке. Попробуйте позже.";
}

/* --- Позже добавим Telegram интеграцию здесь ---
$token = "ВАШ_ТОКЕН";
$chat_id = "ВАШ_CHAT_ID";
$txt = urlencode("Новая заявка!\nИмя: $name\nТелефон: $phone\nСообщение: $message");
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$txt");
*/
?>
