<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задача №6.Генерируемое меню</title>
</head>
<body>
<?php
    // Вложенный ассоциативный массив элементов меню
    $menu = [
        [
        'title' => 'Портал',
        'link'  => '#',
           'submenu'   => [
                [
                    'title' => 'Главная страница',
                    'link'  => '#'
                ],
                [
                    'title' => 'Карта сайта',
                    'link'  => '#'
                ]
            ]
        ],
        [
        'title' => 'Об авторе',
        'link'  => '#',
            'submenu'   => [
                [
                    'title' => 'ФИО',
                    'link'  => '#'
                ],
                [
                    'title' => 'Возраст',
                    'link'  => '#'
                ],
                [
                    'title' => 'Место рождения',
                    'link'  => '#'
                ]
            ],
        ],
        [
        'title' => 'Контакты',
        'link'  => '#',
            'submenu'   => [
                [
                    'title' => 'Почтовый адрес',
                    'link'  => '#'
                ],
                [
                    'title' => 'Телефон',
                    'link'  => '#'
                ],
                [
                    'title' => 'E-mail',
                    'link'  => '#'
                ]
            ],
        ],
        [
        'title' => 'Помощь',
        'link'  => '#',
            'submenu'     => [
                [
                    'title' => 'О портале',
                    'link'  => '#'
                ],
                [
                    'title' => 'Лицензия',
                    'link'  => '#'
                ]
            ]
        ]
    ];


    /*
     * Функция создания меню createMenu
     * Входные параметры:
     *  menuItems - вложенный ассоциативный массив элементов меню
     */
    function createMenu($menuItems)
    {
        echo '<ul>';
        foreach($menuItems as $menuItem) {
            echo '<li>';
            echo '<a href="' . $menuItem['link'] . '">' . $menuItem['title'] . '</a>';
            echo '</li>';
        }
        echo '</ul';
    }
    
    echo('<h4>Задание №6:</h4>');
    echo('<hr>');
    echo '<p>
        В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP.
        Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать,
        как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</p>';
    echo '<hr>';
    echo '<h4>Решение:</h4>';
    echo '<h1>Главная страница сайта</h1>';
    echo '<hr>';
    echo '<h4><i>Меню сайта:</i></h4>';
    
    createMenu($menu);
    
    echo '<hr>';
    echo '<h4>Это подвал сайта</h4>';
    echo '<hr>';
?>
</body>
</html>
