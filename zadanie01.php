<?php
/*
 * Mamy niepustą tablicę A zawierającą N elementów.
 * N jest z przedziału [1, 1 000 000], a każdy z N elementów tablicy A jest liczbą całkowitą z przedziału [-1 000 000, 1 000 000].
 * Napisać funkcję fun($A) zwracającą ilość unikalnych elementów w tablicy A. np. A=[1,2,1,4,2], wynik: 3. (różne elementy to: 1,2,4).
 */
$tabA = [];

for($i=0; $i < 1000000; $i++)
{
    $tabA[] =  rand(-1000000,1000000);
}

function fun($a)
{
    if(!is_array($a)) return;
    $ret = array_flip($a);
    $a = array_flip($ret);
    return $a;
}

print_r( fun($tabA) );
