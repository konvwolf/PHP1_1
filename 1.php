<?php
    // Объяснить, как работает данный код

    $a = 5;
    $b = '05';
    var_dump($a == $b);
    /* Почему true?
    Оператор двойной знак равно сравнивает только содержимое переменных. Если в целом числе первыми идут нули,
    они просто игнорируются. При этом тип переменных в расчет не берется. Таким образом получается 5 равно '5'.
    */

    var_dump((int)'012345');
    /* Почему 12345?
    Строковое значение в кавычках с помощью приведения (int) преобразуется в целочисленное. Если целое число
    начинается с нуля, нуль игнорируется.
    */

    var_dump((float)123.0 === (int)123.0);
    /* Почему false?
    Здесь используется оператор строгого сравнения, который сравнивает не только содержимое переменных, но и их
    тип. В данном случае сравнивается числовое значение с плавающей запятой с целочисленным значением, то есть
    два разных типа значений.
    */

    var_dump((int)0 === (int)'hello, world');
    /* Почему true?
    Сравниваемое строкове значение справа приводится к целочисленному. Поскольку строковое значение не начинается
    с какого-либо числа, оно по умолчанию приводится к нулю. Таким образом при строгом сравнении целочисленный нуль
    равен целочисленному нулю.
    */



    /* Используя только две переменные, поменяйте их значение местами. Например, если a = 10, b = 26, надо, чтобы
    получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя. */

    $a = 10;
    $b = 26;
    $a /= 10; // получается 1
    $b = (int)($b / 10); // получается 2.6 и затем приводится к целочисленному типу
    $a -= $b = ($a += $b) - $b;
    var_dump($a);
    var_dump($b);
    
    /*
    Решение строится на приоретах выполнения вычислений и использовании особенностей оператора "равно", который даже
    в длинных выражениях присваивает переменным значение. В этом решении наивысший приоритет получает выражение в скобках
    $a += $b. Это выражение берет значение переменной $a (1), прибавляет к нему значение переменной $b (2) и результат (3)
    присваивает переменной $a. Затем по приоритету вычисляется разница между уже полученным новым значением переменной $a (3)
    и значением переменной $b (2), а результат (1) присваивается переменной $b. Наконец, происходит вычисление разницы
    между новым значением переменной $a (3) и новым значением переменной $b (1), а результат (2) присваивается переменной $a.
    */
?>