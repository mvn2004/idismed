<?php
  //�������� ���� ���
  if(trim($_POST['Name']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['Name']);
  }
 //�������� ������������ ����� EMAIL
  if(trim($_POST['E-mail']) == '')  {
  $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['E-mail']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['E-mail']);
  }
 //�������� ������� ��������
  if(trim($_POST['phone']) == '') {
  $hasError = true;
  } else {
  $phone = trim($_POST['phone']);
  }
 //���� ������ ���, ��������� email
  if(!isset($hasError)) {
  $emailTo = 'medstarsolutions2017@gmail.com';
  $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone";
  $headers = 'From: IDIS <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email ."r";
  $headers .= "Content-type: text/plain; charset='utf-8'r";
 mail($emailTo, $name, $body, $headers);
  $emailSent = true;
  }
  $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'../index.html';
  header("Location: $redirect");
  exit();
  ?>