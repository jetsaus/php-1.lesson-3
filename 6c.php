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
        'title' => 'Главная',
        'link'  => '#'
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
        ],
        [
        'title' => 'Помощь',
        'link'  => '#'
        ]
    ];

    // Функция создания меню createMenu из ассоциативного массива $menuItems
    function createMenu(
            $menuItems  // ассоциативный вложенный массив элементов меню
    )
    {
        echo '<ul>';
        foreach($menuItems as $menuKey => $menuItem) {
            echo '<li>';
            // создание меню верхнего уровня
            echo '<a href="' . $menuItem['link'] . '">' . $menuItem['title'] . '</a>';
            // создание подменю, если оно описано в массиве $menu
            if (!empty($menuItem['submenu'])) {
                createMenu($menuItem['submenu']);
            }
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
