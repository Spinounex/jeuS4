<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/mail", name="send_mail")
     */
    public function sendMail(MailerInterface $mailer)
    {
        $email = (new TemplatedEmail())
            ->to('xxx.xxx@xxx.com')
            ->from('xxx.xxxx@xxx.fr')
            ->subject('Test d un mail')
            ->htmlTemplate('mail/mail.html.twig')
            ->context([
                'prenom' => 'julien',
                'nom' => 'delbano',
            ]);

        $mailer->send($email);
    }
}
