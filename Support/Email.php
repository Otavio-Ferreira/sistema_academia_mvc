<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "Vendor/PHPMailer/src/Exception.php";
require "Vendor/PHPMailer/src/PHPMailer.php";
require "Vendor/PHPMailer/src/SMTP.php";

class Email
{	
	// @var array
	private $data;

	// @var PHPMailer
	private $mail;

	// @var Message
	private $message;

	public function __construct()
	{
		$this->mail = new PHPMailer(true);
		$this->message = new Message();

		// setup
		$this->mail->isSMTP();
		$this->mail->setLanguage(CONF_MAIL_OPTION_LANG);
		$this->mail->isHTML(CONF_MAIL_OPTION_HTML);
		$this->mail->SMTPAuth = CONF_MAIL_OPTION_AUTH;
		$this->mail->SMTPSecure = CONF_MAIL_OPTION_SECURE;
		$this->mail->CharSet = CONF_MAIL_OPTION_CHARSET;

		// auth
		$this->mail->Host = CONF_MAIL_HOST;
		$this->mail->Port = CONF_MAIL_PORT;
		$this->mail->Username = CONF_MAIL_USER;
		$this->mail->Password = CONF_MAIL_PASS;		
	}

	public function bootstrap(string $subject, string $message, string $toEmail, string $toName)
	{
		$this->data = new stdClass();
		$this->data->subject = $subject;
		$this->data->message = $message;
		$this->data->toEmail = $toEmail;
		$this->data->toName = $toName;
		return $this;
	}
	public function attach(string $filePath, string $fileName)
	{
		$this->data->attach[$filePath] = $fileName;
		return $this;
	}
	public function send($fromEmail = CONF_MAIL_SENDER['address'], $fromName = CONF_MAIL_SENDER['name'])
	{
		if(empty($this->data)) {
			$this->message->error("Erro ao enviar, por favor verifique os dados");
			return false;
		}
		if(!is_email($this->data->toEmail)){
			$this->message->warning("O e-mail de destinatário não é válido");
			return false;
		}
		if(!is_email($fromEmail)){
			$this->message->warning("O e-mail de remetente não é válido");
			return false;
		}

		try{
			$this->mail->Subject = $this->data->subject;
			$this->mail->msgHTML($this->data->message);
			$this->mail->addAddress($this->data->toEmail, $this->data->toName);
			$this->mail->setFrom($fromEmail, $fromName);

			if(!empty($this->data->attach)){
				foreach($this->data->attach as $path => $name){
					$this->mail->addAttachment($path, $name);
				}
			}

			if($this->mail->send()){
				return true;
			}else{
				return false;
			}
		}catch (Exception $exception){
			
			$this->message->error($exception->getMessage());
			return false;
		}

	}
	public function mail()
	{
		return $this->mail;
	}
	public function message()
	{
		return $this->message;
	}	
}