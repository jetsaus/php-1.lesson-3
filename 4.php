<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Задание №4</title>
</head>
<body>
    <h4>Задание №4:</h4>
    <hr>
    <p>
      Объявите массив, индексами которого являются буквы русского языка,<br>
      значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’<br>
      => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).<br>
      Напишите функцию транслитерации строк. <br>
    </p>
    <hr>
    <h4>Решение:</h4>
    <!--Форма ввода строки для транслитерации-->
    <fieldset>
        <legend>Транслитерация русского в латинский</legend>
        <form action="" method="post">
            <p>
                <!--Отсутствует проверка наличия только кириллицы-->
                <label for="strRus">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Исходная строка:</label>
                <input id="strRus" name="strRus" size="128" maxlength="128" type="text" placeholder="Введите строку для транслитерации"><br><br>
            </p>
            <input type="submit" value="Преобразовать">
        </form>
    </fieldset>
<!---->
    <?php
    /*
     * Здесь мы производим транслитерауию
     */
        // Массив транслитерации
        $arrTransliteration = [
            "а" => "a", "A" => "A",
            "б" => "b", "Б" => "B",
            "в" => "v", "В" => "V",
            "г" => "g", "Г" => "G",
            "д" => "d", "Д" => "D",
            "е" => "e", "Е" => "E",
            "ё" => "ye", "Ё" => "Ye",
            "ж" => "zh", "Ж" => "Zh",
            "з" => "z", "З" => "Z",
            "и" => "i", "И" => "I",
            "й" => "y", "Й" => "Y",
            "к" => "k", "К" => "K",
            "л" => "l", "Л" => "K",
            "м" => "m", "М" => "M",
            "н" => "n", "Н" => "N",
            "о" => "o", "О" => "O",
            "п" => "p", "П" => "P",
            "р" => "r", "Р" => "R",
            "с" => "s", "С" => "S",
            "т" => "t", "Т" => "T",
            "у" => "u", "У" => "U",
            "ф" => "f", "Ф" => "F",
            "х" => "kh", "Х" => "Kh",
            "ц" => "ts", "Ц" => "Ts",
            "ч" => "ch", "Ч" => "Ch",
            "ш" => "sh", "Ш" => "Sh",
            "щ" => "shch", "Щ" => "Shch",
            "ъ" => "", "Ъ" => "",
            "ы" => "y", "Ы" => "Y",
            "ь" => "", "ь" => "",
            "э" => "e", "Э" => "E",
            "ю" => "yu", "Ю" => "Yu",
            "я" => "ya", "Я" => "Ya",
        ];

        //  Функция преобразования строки в массив, поддерживает UTF-8
        function mbStrSplit($string)
        {
            return preg_split('/(?<!^)(?!$)/u', $string);
        }

        /* Функция транслитерации строки, возвращает преобразованную строку */
        function fTransliteration($arrTransliteration,  // массив транслитерации
                                  $strRus = ''          // строка, к которой применяется транслитерация
        )
        {
            $strLat = '';
            $arrRus = mbStrSplit($strRus);
            foreach ($arrRus as $symRus) {
                $flPresent = FALSE;
                foreach ($arrTransliteration as $aRus => $aLat) {
                    if ($symRus == $aRus) {
                        $strLat .= $aLat;
                        $flPresent = TRUE;
                    }
                }
                if (!$flPresent) {
                    $strLat .= $symRus;
                }
            }
            return $strLat;
        }

        /*
         * ГОЛОВНОЙ МОДУЛЬ
         */
        // Получаем строку из поля ввода
        if (isset($_POST["strRus"])) {
            $strRus = $_POST["strRus"];
            // Преобразуем
            $strLat = fTransliteration($arrTransliteration, $strRus);
            // Выводим транслитерацию
            echo "<p><i><b>Строка после транслитерации:</b></i> $strLat</p>";
        }
    ?>
<!---->
    <hr>
</body>
</html>