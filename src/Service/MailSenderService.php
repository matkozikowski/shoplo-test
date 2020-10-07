<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailSenderService
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(string $message): void
    {
        $email = (new Email())
            ->from('test2@matkoz.linuxpl.eu')
            ->to('matkozikowski@gmail.com')
            ->subject('Shop Cart Notification')
            ->text($message)
            ->html($message);

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $e) {
            dump($e->getMessage());
        }
    }
}