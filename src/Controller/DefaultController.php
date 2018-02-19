<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 19.02.2018
 * Time: 21:41
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('<h1>This is home page on Symfony 4, made by Kiriakov M.</h1>');
    }
}