<?php

namespace Phpcourse\Myproject\Classes\Controllers;

use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;
use Phpcourse\Myproject\Classes\Rendering\Rendering;

class NewsController implements ControllerMethodName
{
    public function index(): void
    {
        // Створили масив з новинами форуму
        $news_forum = [
            [
                'name' => 'SuperStar',
                'text' => 'Dorofeeva prodala home',
                'date' => '15.04.2023'
            ],
            [
                'name' => 'SuperStar№2',
                'text' => 'Zinchenko bought home in Dorofeeva',
                'date' => '15.04.2023'
            ],
            [
                'name' => 'Football',
                'text' => 'Shaparenko vertetsia in match',
                'date' => '15.04.2023'
            ]
        ];
        // Передали масив з темами в шаблон
        $data = ['news_forum' => $news_forum, 'page' => 'news'];
        // створили об'єкт класу Rendering, передали в нього масив з темами та назву сторінки
        new Rendering($data);
    }

}