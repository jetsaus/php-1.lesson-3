<?php
    echo '<h4>Задание №2:</h4><hr>';
    $i = 0;
    // Вывод чисел от 0 до 10
    do {
        if ((($i % 2) == 0) AND ($i > 0)) {
            echo "$i - четное число<br>";
        }
        elseif (($i % 2) != 0) {
            echo "$i - нечетное число<br>";
        } else {
            echo "$i - это ноль<br>";
        }
        $i++;
    } while ($i <= 10);
    echo '<hr>';
