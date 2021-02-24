<?php

include 'phpmailer/class.phpmailer.php';
include 'phpmailer/class.smtp.php';
class Email
{

    private $mailer;

    public function __construct($host, $username, $password, $name)
    {
        $this->mailer = new PHPMailer;
        $this->mailer->isSMTP();
        $this->mailer->Host = $host;
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $username;
        $this->mailer->Password = $password;
        $this->mailer->SMTPSecure = 'ssl';
        $this->mailer->Port = 465;
        $this->mailer->isHTML(true);
        $this->mailer->setFrom($username, $name);
        $this->mailer->CharSet = 'UTF-8';
    }

    public function addAdress($email, $name)
    {
        $this->mailer->addAddress($email, $name);
    }

    public function formatEmail($email)
    {
        $this->mailer->Subject = $email['subject'];
        $this->mailer->Body    = $email['body'];
        $this->mailer->AltBody = strip_tags($email['body']);
    }

    public function sendEmail()
    {
        return $this->mailer->send();
    }
}
