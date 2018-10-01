<?php
  //Проверка Поля ИМЯ
  if(trim($_POST['Name']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['Name']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['E-mail']) == '')  {
  $hasError = true;
  } else {
  $email = trim($_POST['E-mail']);
  }
 //Проверка наличия телефона
  if(trim($_POST['Phone']) == '') {
  $hasError = true;
  } else {
  $phone = trim($_POST['Phone']);
  }
 //Если ошибок нет, отправить email
  if(!isset($hasError)) {
  $emailTo = 'nmt@techgroup.com.ua';
  $body = "Name: $name \n\nE-mail: $email \n\nPhone: $phone";
  $headers = "Content-type: text/plain; charset='utf-8'r";
  $headers .= 'From: IDIS <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email ."r";
 mail($emailTo, $name, $body, $headers);
  $emailSent = true;
  }
  $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'../index.html';
  header("Location: $redirect");
  exit();
  ?>