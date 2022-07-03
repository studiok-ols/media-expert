<?php
/*
 * Mamy niepustą tablicę A zawierającą N elementów. N jest z przedziału [1, 100 000], a każdy z N elementów tablicy A
 * jest liczbą całkowitą z przedziału [1, 1 000 000]. Napisać funkcję fun($A) zwracającą:
 * a. true - jeśli w tablicy A występuje każda liczba z przedziału [1, N]
 * b. false - w przeciwnym wypadku.np. A=[1,3,4], wynik false.
 */
$tabA = [];

for($i=0; $i < 100000; $i++)
{
    //$tabA[] = $i+1;
    $tabA[] =  rand(1,1000000);
}


function fun($a)
{
    if(!is_array($a)) return;

    /*
     * sprawdzam jaka jest suma elementów tablicy
     * jeśli suma elementów jest różna od sumy ciągu 1,2...N to nie jest spełniony wymagany warunek
     */

    $numberOfElements = count($a);
    $sumOfNumbers = $numberOfElements * ($numberOfElements + 1)/2;
    $suma = array_sum($a);

    if( $suma != $sumOfNumbers ) return false;

    /*
     * jeśli suma wartości tablicy jest równa sumie ciągu 1,2...N to do dalszego sprawdzenia warunku można wykorzystać
     * funkcję odwracającą klucz z wartośćią. Jeśli są jakieś zduplikowane waertości to warunek nie jest spełniony
     */

    $flip = array_flip($a);

    if(count($flip)==$numberOfElements) return true;
    else return false;
}

if(fun($tabA)) {
    echo 'W tablic A występuje każda liczba z przedziału [1,N]';
} else {
    echo 'W tablic A NIE występuje każda liczba z przedziału [1,N]';
}
