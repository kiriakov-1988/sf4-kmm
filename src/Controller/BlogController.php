<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 20.02.2018
 * Time: 8:15
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

    public function showAction($slug)
    {
        // return $this->render('AppBundle:Blog:show.html.twig',

        return $this->render('show.html.twig',
            array(
                'slug' => $slug,
            ));
    }
}