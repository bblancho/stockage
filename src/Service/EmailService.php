<?php

namespace App\Service;

use App\Utils\Utils;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class EmailService
{
    private MailerInterface $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @throws TransportExceptionInterface
     */
    public function sendMail($emailTo,$user): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address(Utils::$EMAILSENDER, Utils::$EMAILNAME))
            ->to($emailTo)
            ->subject('Nouveau document publié')
            ->htmlTemplate('emails/annonce.html.twig')
            ->context([
                'user' => $user,
            ])
        ;

        $this->mailer->send($email);
    }
}