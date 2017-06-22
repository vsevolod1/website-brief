<?php

// Проверка переменных
if (isset($_POST['client_name'])) {$client_name = $_POST['client_name'];}
if (isset($_POST['client_contacts'])) {$client_contacts = $_POST['client_contacts'];}
if (isset($_POST['company_name'])) {$company_name = $_POST['company_name'];}
if (isset($_POST['company_website'])) {$company_website = $_POST['company_website'];}
if (isset($_POST['company_description'])) {$company_description = $_POST['company_description'];}
if (isset($_POST['company_opponents'])) {$company_opponents = $_POST['company_opponents'];}
if (isset($_POST['task_type'])) {$task_type = $_POST['task_type'];}
if (isset($_POST['adaptive'])) {$adaptive = $_POST['adaptive'];}
if (isset($_POST['task_description'])) {$task_description = $_POST['task_description'];}
if (isset($_POST['task_goals'])) {$task_goals = $_POST['task_goals'];}
if (isset($_POST['task_target_audience'])) {$task_target_audience = $_POST['task_target_audience'];}
if (isset($_POST['task_website_sections'])) {$task_website_sections = $_POST['task_website_sections'];}
if (isset($_POST['task_website_style'])) {$task_website_style = $_POST['task_website_style'];}
if (isset($_POST['task_websites'])) {$task_websites = $_POST['task_websites'];}
if (isset($_POST['task_materials'])) {$task_materials = $_POST['task_materials'];}
if (isset($_POST['task_additions'])) {$task_additions = $_POST['task_additions'];}
if (isset($_POST['task_time'])) {$task_time = $_POST['task_time'];}
if (isset($_POST['task_cost'])) {$task_cost = $_POST['task_cost'];}


$ip = $_SERVER['REMOTE_ADDR'];
$address = "kamyshev@me.com";

// Сообщение владельцу сайта
$mes = "<span style='font-size: 15px; line-height: 18px;'>
		<h2>Общая информация</h2>
		<b>Имя:</b> $client_name<br>
		<b>Контактные данные:</b> $client_contacts<br>
		<b>Название вашей компании:</b> $company_name<br>
		<b>Текущий сайт:</b> $company_website<br>
		<b>Продукты или услуги:</b> $company_description<br>
		<b>Сайты конкурентов:</b> $company_opponents<br>
		<br>
		<h2>Информация о задании</h2>
		<b>Тип сайта:</b> $task_type<br>
		<b>Адаптивный дизайн/верстка:</b> $adaptive<br>
		<b>Опишите задачу:</b> $task_description<br>
		<b>Цели сайта:</b> $task_goals<br>
		<b>Опишите целевую аудиторию:</b> $task_target_audience<br>
		<b>Ключевые разделы сайта:</b> $task_website_sections<br>
		<b>Пожелания к стилю и цветам:</b> $task_website_style<br>
		<b>Сайты которые нравятся и не нравятся:</b> $task_websites<br>
		<b>Какие материалы вы предоставляете:</b> $task_materials<br>
		<b>Дополнительные особенности и пожелания:</b> $task_additions<br>
		<b>Пожелания по срокам выполнения:</b> $task_time<br>
		<b>Пожелания по стоимости работ:</b> $task_cost<br></span>";

$sub='Заполнен бриф';
$emails='kamyshev@me.com';
$subject = "Бриф на разработку сайта";


// Сообщение клиенту
// $subs='Ваша заявка принята';
// $subjects = "Ваша заявка принята";
// $mess = "<span style='font-size: 15px; line-height: 18px;'>$name, благодарим Вас за обращение!<br>С вами свяжутся в ближайшее время.<br>Если у Вас возникнут вопросы, пишите на nataly@nx-lawyer.ru<br></span>";

	if(mail ($address,$sub,$mes,"Content-type:text/html; charset = utf-8\r\nFrom:$emails")){
		header('Location: http://vsevolod.info/brief/thankyou.html');
		// mail ($email,$subs,$mess,"Content-type:text/html; charset = utf-8\r\nFrom:$emails");
	}
