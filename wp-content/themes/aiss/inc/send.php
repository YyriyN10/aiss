<?php
	//Если форма отправлена //
	if(isset($_POST['submit'])) {

		//Проверка поля ТЕЛЕФОН     //
		if(trim($_POST['userphone']) == '') {
			$hasError = true;
		} else {
			$userphone = trim($_POST['userphone']);
		}

		//Проверка поля width     //
		if(trim($_POST['width']) == '') {
			$hasError = true;
		} else {
			$width = trim($_POST['width']);
		}
		//Проверка поля width     //
		if(trim($_POST['height']) == '') {
			$hasError = true;
		} else {
			$height = trim($_POST['height']);
		}

		//Если ошибок нет, отправить email    //
		if(!isset($hasError)) {
			$emailTo = 'mng8@aiss.com.ua'; //Сюда введите Ваш email //
			$body = "Заказ на расчет ворот с https://aiss.com.ua/ (главная)\n\nТелефон: $userphone \n\nДанные заказчика:\n\nШирина: $width м\n\nВысота: $height м";
			$headers = 'From: aiss.com.ua';
			$headers.= "Content-Type:text/html; charset=UTF-8";
			$subject = "Новая заявка с сайта https://aiss.com.ua/ - Расчет ворот (главная)" ;
			mail($emailTo, $subject, $body, $headers);
			header('Location: /thanks-main');
			$emailSent = true;     } else {
			header('Location: https://aiss.com.ua/');
		}
	}


?>
