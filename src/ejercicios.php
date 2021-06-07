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

// function findMax(array $numbers): int {
//     return max ($numbers);
// }

function findMax(array $array): int {
    $max = $array[0];
    for ($index=0; $index <= count($array)-1 ; $index++) { 
        if ($array[$index] > $max){
            $max = $array[$index];
        }
    }
    return $max;
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

function reverseString (string $string): string {
    $chars = mb_str_split($string);
    $chars = array_reverse($chars);
    $string = implode(" ", $chars);
    return $string;
}

// function reverseString(string $sentence): string {
//     $stringReverse = "";
//     for ($index=mb_strlen($sentence)-1; $index >= 0 ; $index--) { 
//         $stringReverse .= $sentence[$index];
//     }
//     return $stringReverse;
// }

function reverseWords(string $string): string {
    $words = explode(" ", $string);

    return implode(" ", array_reverse($words));
}


// function reverseWords(string $sentence): string {
//     $stringReverse = "";
//     $sentence = explode(" ", $sentence); // -> array ['hola', 'que', 'tal']
//     $sentence = array_reverse($sentence); // ->girar array ['tal', 'que', 'hola']
//     foreach($sentence as $word) { // recorre el array
//         $stringReverse .= $word." ";
//     }
//     return $stringReverse;
// }
   

// function reverseCharactersInWords($input) {
//     $words = explode(" ", $input);
//     $reversedArray = [];
//     foreach($words as $word) {
//         $reversedArray = [reverseString($word)];
//     }
//     return $reverseString = implode(" ", $reversedArray);
     
// }

// function reverseCharactersInWords(string $sentence): string {
//     $stringReverse = "";
//     $sentence = explode(" ", $sentence);
//     foreach($sentence as $word) {
//         for ($index=mb_strlen($word)-1; $index >= 0 ; $index--) { 
//             $stringReverse .= $word[$index]." ";
//         }
//     }
//     return $stringReverse;
// }