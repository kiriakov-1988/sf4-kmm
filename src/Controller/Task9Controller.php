<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 19.02.2018
<<<<<<< HEAD
 * Time: 21:52
=======
 * Time: 22:03
>>>>>>> feature-templates
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class Task9Controller extends AbstractController
{
    public function simpleText()
    {
        return new Response('hello, this\'s simple text !');
    }

    /**
     * @Route("/test-template/{data}", defaults={"data" = "defaults"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showTemplates($data)
    {
        return $this->render('test/test.html.twig', [
            'data' => $data,
        ]);
    }

    public function jsonAPI()
    {
        return new JsonResponse([
            'name' => "Misha",
            'age' => 29,
        ]);
    }

    /**
     * @Route("/name-from-session/{name}")
     */
    public function showNameFromSession(SessionInterface $session, $name)
    {
        $value = $session->get('name');

        $session->set('name', $name);

        return new Response(
            '<body><body>Name from session (previous value): '. $value .'</body></html>'
        );
    }



    public function goToGoogle($page_site)
    {
        return $this->redirect("http://$page_site");
    }

    public function getNumber($number)
    {
        return new Response(
            '<body><body>Вы ввели число от 1 (defaults) до 100 методом GET: '. $number .'</body></html>'
        );
    }
}