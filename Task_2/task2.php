<?php

//todo: task2
// Дано целое число.
// Сосчитать и напечатать, сколько в его записи нулей, единиц, двоек и т.д.

// Например:
// Ввод: 133244459
// Вывод:
// 0 - 0
// 1 – 1
// 2 – 1
// 3 – 2
// 4 – 3
// 5 – 1
// 6 - 0
// и т.д

function score ($num) {
    $massResult = [];
    for ($i = 0; $i < 10; $i++) {
        $massResult[$i] = 0;
    }
    $mass = str_split($num);
    foreach ($mass as $elem) {
        $massResult[$elem]++;
    }
    foreach ($massResult as $key => $elem) {
        echo 'Число: ' . $key . '-' . $elem . 'раз.' . "\n";
    }
}

score (128374294809384);