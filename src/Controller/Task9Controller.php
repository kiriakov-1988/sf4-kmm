<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 19.02.2018
 * Time: 22:03
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Task9Controller extends AbstractController
{
    /**
     * @Route("/test-template/{data}", defaults={"data" = "defaults"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showTemplates($data = 1)
    {
        return $this->render('test/test.html.twig', [
            'data' => $data,
        ]);
    }
}