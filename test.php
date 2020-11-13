<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?><br>
  <br>
  <br>
  <br>
  <br>
  test page <br>
  <br>
  <br>
<? $APPLICATION->IncludeComponent(
  "bitrix:main.feedback",
  "main_feedback", [
  "EMAIL_TO" => "kzasorin@gmail.com",  // E-mail, на который будет отправлено письмо
  "EVENT_MESSAGE_ID" => [  // Почтовые шаблоны для отправки письма
    0 => "7",
  ],
  "OK_TEXT" => "Спасибо, ваше сообщение принято.",  // Сообщение, выводимое пользователю после отправки
  "REQUIRED_FIELDS" => [  // Обязательные поля для заполнения
    0 => "NAME",
    1 => "EMAIL",
    2 => "PHONE",
  ],
  "USE_CAPTCHA" => "N",  // Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
],
  false
); ?>
  <br>
  <br>
  <br>
  <br>
  <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
