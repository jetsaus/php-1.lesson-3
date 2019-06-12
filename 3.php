<?php
    echo '<h4>Задание №3:</h4><hr>';
    // Объявление массива областей/городов
    $aProvinceCity = [
        "Московская область" => [
            "Москва",
            "Клин",
            "Сергиев Посад",
            "Зеленоград",
            "Электросталь",
            "Наро-Фоминск","Подольск",
            "Раменское",
            "Чехов",
            "Серпухов",
            "Воскресенск",
            "Коломна",
            "Ступино"
        ],
        "Ленинградская область" => [
            "Санкт-Петербург",
            "Выборг",
            "Сертолово",
            "Сосновый Бор",
            "Петергоф",
            "Колпино",
            "Кириши",
            "Тихвин"
        ],
        "Рязанская область" => [
            "Рязань",
            "Спас-Клепов",
            "Касимов",
            "Рыбное",
            "Михайлов",
            "Скопин",
            "Ново-Мичуринск",
            "Кораблино",
            "Ряжск",
            "Сасово",
            "Шацк",
            "Спасск-Рязанск"
        ]
    ];
    // Вывод массива
    // Цикл по областям
    foreach ($aProvinceCity as $aKey => $aProvince) {
        echo "<h5>$aKey:</h5>";
        echo '<ol>';
        // Цикл по городам области
        foreach ($aProvince as $bProvinceCity) {
          echo "<li>$bProvinceCity</li>";
        }
        echo '</ol>';
    }
    echo '<hr>';
?>