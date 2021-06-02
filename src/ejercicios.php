<?php

declare(strict_types = 1);

// ----------EjercicioSumArrayTest---------------

// function sumArray(array $array): int {

//     $sum = 0;
//     foreach ($array as $element) {
//          $sum += $element;
            
//     }
//     return $sum;
// }

function sumArray (array $numbers): int {
    return array_sum($numbers);
}

// ----------EjercicioFindMaxTest---------------

function findMax(array $numbers): int {
    return max ($numbers);
}

// ----------AgeAverageTest---------------

function averageAge (array $datas): float {
    $sum = 0;
    foreach ($datas as $data) {
        $sum += $data['age'];
      }

      return $sum / count($datas);
}

// function averageAge(array $people): float {
//     return array_sum(array_column($people, 'age'))/count($people);
// }

// ----------ReverseTest---------------