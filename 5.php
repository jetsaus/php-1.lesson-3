<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание №5</title>
</head>
<body>
    <h4>Задание №5:</h4>
    <hr>
    <p>
      Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
      возвращает видоизмененную строчку.
    </p>
    <hr>
    <h4>Решение:</h4>
    <!--Форма ввода строки для замены-->
    <fieldset>
        <legend>Замена пробелов символом подчеркивания</legend>
        <form action="" method="post">
            <p>
                <label for="strSpace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Исходная строка:</label>
                <input id="strSpace" name="strSpace" size="128" maxlength="128" type="text" placeholder="Введите строку для замены пробелов"><br><br>
            </p>
            <input type="submit" value="Преобразовать">
        </form>
    </fieldset>

    <?php
        // Функция преобразования строки в массив, поддерживает UTF-8
        function mbStrSplit($string)
        {
            return preg_split('/(?<!^)(?!$)/u', $string);
        }
        /*
        * Функция замены в строке пробелов на подчеркивания
        * В качестве параметра получает строку, возвращает преобразованную строку,
        * в которой пробелы заменены символом подчеркивания
        */
        function fReplaceSpaceUnderline($strSpace = '')
        {
            $arrStr = mbStrSplit($strSpace);
            $strReturn = '';
            foreach ($arrStr as $strValue) {
                if ($strValue == ' ') {
                    $strValue = '_';
                }
                $strReturn .= $strValue;
            }
            return $strReturn;
        }
      /*ГОЛОВНОЙ МОДУЛЬ*/
      /*Получаем строку из поля ввода*/
      if (isset($_POST['strSpace'])) {
          $strSpace = $_POST['strSpace'];
          // Преобразуем
          $strUnderline = fReplaceSpaceUnderline($strSpace);
          // Выводим преобразованную строку
          echo "<p><i><b>Строка после замены пробелов:</b></i> $strUnderline</p>";
      }
    ?>

  <hr>
</body>
</html>