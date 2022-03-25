<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	
	header("Content-Type: application/json");
	if (isset($_POST['email'], $_POST['name'], $_POST['msg'])) {
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			echo json_encode([
				"error" 	=> "true",
				"message" 	=> "Lūdzu norādiet korektu e-pasta adresi (epasts@epasts.lv) "
			]);
			exit;
		}
		if (empty($_POST['email']) || empty($_POST['name']) || empty($_POST['msg'])) {
			echo json_encode([
				"error" 	=> "true",
				"message" 	=> "Viens vai vairāki lauki nav aizpildīti, lūdzu aizpildiet tos!"
			]);
			exit;
		}
		// sending a mail there
		$settings = (object)[
			// server settings
			"server"	=> (object)[
				"name"		=> "mail.inbox.lv",
				"port"		=> 465,
			],

			// account settings
			"sender" 	=> (object)[ // temp account for the connectivity test
				"id"			=> "lvit@mail.lv", // change this
				"name"			=> "Arvis Šuksts",   // change this
				"password"		=> "BRxd679SfD",			   // change this
			],

			// custom message that will be visible at the subject of the email
			"custom_message"	=> sprintf("%s grib ar tevi sazinaties", $_POST["name"]),
		];

		$mail = new PHPMailer(true);
		try {
			// creating a connection with the mail server
			$mail->isSMTP();
			$mail->Host       = $settings->server->name;
			$mail->Port       = $settings->server->port;
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			
			// User Email credentials for sending emails
			$mail->Username   = $settings->sender->id;
			$mail->Password   = $settings->sender->password;
	
			$mail->setFrom($settings->sender->id, $settings->sender->name);
			$mail->addAddress($settings->sender->id);
			$mail->addReplyTo($_POST["email"], $_POST["name"]);
			// sending an email message here
			$mail->isHTML(true);
			$mail->Subject = $settings->custom_message;
			$mail->Body    = $_POST["msg"];
			$mail->CharSet = "UTF-8";

			// sending the message
			$mail->send();

			// showing user that the message was sent successfuly.
			echo json_encode([
				"error" 	=> "false",
				"message" 	=> "Paldies par jūsu ziņu!"
			]);
			exit;
		} catch (Exception $e) {
			echo json_encode([
				"error" 	=> "true",
				"message" 	=> $e->getMessage()
			]);
			exit;
		}
	} else {
		echo json_encode([
			"error" 	=> "true",
			"message" 	=> "Kāds no laukiem nav aizpildīts, lūdzu aizpildiet to!"
		]);
		exit;
	}