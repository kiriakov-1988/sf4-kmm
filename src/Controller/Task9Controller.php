<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 19.02.2018
 * Time: 21:52
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Task9Controller
{
    public function simpleText()
    {
        return new Response('hello, this\'s simple text !');
    }
    

}