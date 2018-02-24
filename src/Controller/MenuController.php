<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 24.02.2018
 * Time: 8:53
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{
    private $menu = [
        'Главная',
        'Каталог' => [
            'Телефоны',
//            'Телефоны' => [
//                'Смартфон',
//                'Камерофон'
//            ],
            'Плееры',
            'Гарнитура',
        ],
        'Доставка',
        'Акции' => [
            'Новые',
            'Архив',
        ],
        'Контакты',
    ];

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/menu")
     */
    public function showMenu()
    {
        return $this->render('task/menu.html.twig', [
            'menu' => $this->menu,
        ]);
    }
}