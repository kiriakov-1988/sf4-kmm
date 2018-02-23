<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 19.02.2018
 * Time: 21:52
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class TaskController extends AbstractController
{
    public function simpleText()
    {
        // return new Response('hello, this\'s simple text !');
        $text = 'hello, this\'s simple text !!';

        return $this->render('task/simple-text.html.twig', [
            'text' => $text,
        ]);
    }

    /**
     * @Route("/test-template/{data}", defaults={"data" = "defaults"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showTemplates($data)
    {
        return $this->render('task/test-template.html.twig', [
            'data' => $data,
        ]);
    }

    public function jsonAPI()
    {
//        return new JsonResponse([
//            'name' => "Misha",
//            'age' => 29,
//        ]);

        $jsonData = [
            'name' => "Misha",
            'age' => 29,
        ];

        return $this->render('task/json-api.html.twig', [
            'jsonData' => json_encode($jsonData),
        ]);
    }

    /**
     * @Route("/name-from-session/{name}")
     */
    public function showNameFromSession(SessionInterface $session, $name)
    {
        $value = $session->get('name');

        $session->set('name', $name);

//        return new Response(
//            '<html><body>Name from session (previous value): '. $value .'</body></html>'
//        );

        return $this->render('task/show-name-from-session.html.twig', [
            'value' => $value,
        ]);
    }

    public function goToGoogle($page_site)
    {
        return $this->redirect("http://$page_site");
    }


    /**
     * @param $number
     * @return Response
     * @Route("/post/page/{number}",
     *          name="number_from_get",
     *          methods={"GET"},
     *          defaults={"number": 1},
     *          requirements={"number": "^([1-9][0-9]?)$"}
     *      )
     */
    public function getNumber($number)
    {
//        return new Response(
//            '<body><body>Вы ввели число от 1 (defaults) до 99 методом GET: '. $number .'</body></html>'
//        );

        return $this->render('task/get-number.html.twig', [
            'number' => $number,
        ]);
    }
}