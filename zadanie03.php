<?php
/*
 * Mamy niepustą tablicę A zawierającą N elementów.
 * N jest z przedziału [1, 100 000], a każdy z N elementów tablicy A jest liczbą całkowitą z przedziału [-10 000, 10 000].
 * Napisać funkcję fun($A, $k) zwracającą k-krotną rotację elementów tablicy A (k jest liczbą naturalną).
 * Jednokrotna rotacja tablicy to przesunięcie każdego elementu z pozycji j na pozycję j-1, a pierwszego elementu
 * tablicy na pozycję ostatnią, np. A=[1,2,3,4], k=2, wynik: [3,4,1,2].
 */
$tabA = [];

for($i=0; $i < 100000; $i++)
{
    //$tabA[] = $i+1;
    $tabA[] =  rand(-10000,10000);
}

function fun($a,$k)
{
    if(!is_integer($k)) return;

    for($i=0;$i<$k;$i++){
        $element = end($a);
        array_pop($a);
        array_unshift($a,$element);
    }
    return $a;
}

$rotacja = fun($tabA,10);
