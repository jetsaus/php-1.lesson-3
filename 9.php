<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание №9</title>
</head>
<body>
     <h4>Задание №9:</h4>
     <p>
       Объедините две ранее написанные функции в одну, которая получает строку на
       русском языке, производит транслитерацию и замену пробелов на подчеркивания
       (аналогичная задача решается при конструировании url-адресов на основе названия
       статьи в блогах).  </p>
     <p>Решение:</p>
    <!--Форма ввода строки для замены-->
    <fieldset>
        <legend>Транслитерация и замена пробелов символом подчеркивания</legend>
        <form action="" method="post">
            <p>
                <label for="strTransSpace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Исходная строка:</label>
                <input id="strTransSpace" name="strTransSpace" size="128" maxlength="128" type="text"
                     placeholder="Введите строку для транслитерации и замены пробелов"><br><br>
            </p>
            <input type="submit" value="Преобразовать">
        </form>
    </fieldset>

    <?php
      /* Функция преобразования строки в массив, поддерживает UTF-8 */
      function mb_str_split($string)
      {
          return preg_split('/(?<!^)(?!$)/u', $string);
      }
      /* Функция транслитерации строки, возвращает преобразованную строку */
      function fTransliteration($strRus = '') {
          // Массив транслитерации
          $arrTransliteration = [
              'а' => 'a', 'A' => 'A',
              'б' => 'b', 'Б' => 'B',
              'в' => 'v', 'В' => 'V',
              'г' => 'g', 'Г' => 'G',
              'д' => 'd', 'Д' => 'D',
              'е' => 'e', 'Е' => 'E',
              'ё' => 'ye', 'Ё' => 'Ye',
              'ж' => 'zh', 'Ж' => 'Zh',
              'з' => 'z', 'З' => 'Z',
              'и' => 'i', 'И' => 'I',
              'й' => 'y', 'Й' => 'Y',
              'к' => 'k', 'К' => 'K',
              'л' => 'l', 'Л' => 'K',
              'м' => 'm', 'М' => 'M',
              'н' => 'n', 'Н' => 'N',
              'о' => 'o', 'О' => 'O',
              'п' => 'p', 'П' => 'P',
              'р' => 'r', 'Р' => 'R',
              'с' => 's', 'С' => 'S',
              'т' => 't', 'Т' => 'T',
              'у' => 'u', 'У' => 'U',
              'ф' => 'f', 'Ф' => 'F',
              'х' => 'kh', 'Х' => 'Kh',
              'ц' => 'ts', 'Ц' => 'Ts',
              'ч' => 'ch', 'Ч' => 'Ch',
              'ш' => 'sh', 'Ш' => 'Sh',
              'щ' => 'shch', 'Щ' => 'Shch',
              'ъ' => '', 'Ъ' => '',
              'ы' => 'y', 'Ы' => 'Y',
              'ь' => '', 'ь' => '',
              'э' => 'e', 'Э' => 'E',
              'ю' => 'yu', 'Ю' => 'Yu',
              'я' => 'ya', 'Я' => 'Ya',
          ];
          $strLat = '';
          $arrRus = mb_str_split($strRus);
          foreach ($arrRus as $symRus) {
              // Если ключ присутствует в массиве транслитерации
              if (array_key_exists($symRus, $arrTransliteration)) {
                  // заменим его на символ транслитерации
                  $strLat .= $arrTransliteration[$symRus];
              } else {
                  // оставим как есть, значит это не кириллица, а другой символ, который не следует заменять
                  $strLat .= $symRus;
              }
          }
          return $strLat;
      }
      /*
       * Функция замены в строке пробелов на подчеркивания
       * В качестве параметра получает строку, возвращает преобразованную строку,
       * в которой пробелы заменены символом подчеркивания
       */
      function fReplaceSpaceUnderline($strSpace = '')
      {
          $arrStr = mb_str_split($strSpace);
          $strReturn = '';
          foreach ($arrStr as $strValue) {
              if ($strValue == ' ') {
                  $strValue = '_';
              }
              $strReturn .= $strValue;
          }
          return $strReturn;
      }
      /*
       * Функция транслитерации символов и замены пробелов подчёркиванием
       * На входе получает строку символов для преобразования,
       * Возвращает преобразованную строку
       */
      function fTransUnder($strInput) {
          return fReplaceSpaceUnderline(fTransliteration($strInput));;
      }
    /*ГОЛОВНОЙ МОДУЛЬ*/
    $strTransSpace = '';
    /*Получаем строку из поля ввода*/
    if (isset($_POST['strTransSpace'])) {
        $strTransSpace = $_POST['strTransSpace'];
        // Преобразуем
        $strTransSpace = fTransUnder($strTransSpace);
        // Выводим преобразованную строку
        echo "<p><i><b>Строка после замены пробелов:</b></i> $strTransSpace</p>";
    }
    ?>
  <hr>
</body>
</html>