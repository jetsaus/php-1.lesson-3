<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание №8</title>
</head>
<body>
    <h4>Задание №8:</h4>
    <p>
        *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
    </p>
    <hr>
    <h4>Решение:</h4>
    <?php
    // Объявили массив
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
      // Цикл по областям
      foreach ($aProvinceCity as $aKey => $aProvince) {
          echo "<h5>$aKey:</h5>";
          echo '<ol>';
          // Цикл по городам области
          foreach ($aProvince as $bProvinceCity) {
              // Если название города начинается с буквы "К", то выведем его в список
              if (mb_substr($bProvinceCity, 0, 1) == "К") {
                  echo "<li>$bProvinceCity</li>";
              }
          }
          echo '</ol>';
      }
    ?>
    <hr>
</body>
</html>