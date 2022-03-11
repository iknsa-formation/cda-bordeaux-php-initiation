<?php

//$variable = 'John';
////echo $variable . " est un formateur " . (2 + 3);
//
////echo "<p>Hello: $variable</p>";
////
////echo 2 + 3;
////
////echo 'L\'homme est un \\animal $variable';
//
//
//
//$array = ['a', 'b', 'c'];
//
//$associatif = ['indexA' =>  $array, 'indexB' => 'b', 'indexC' => 'c'];
//
//print_r($associatif);
//var_dump($associatif);
//
//$age = 25;
//
//if ($age > 25) {
//    echo "Plus de 25";
//} else if ($age === 25) {
//    echo "a 25";
//} else {
//    echo "moins de 25";
//}
//
//echo "<pre>";
//foreach ($associatif as $key => $value) {
////    echo $value. "\n";
//}
//
//$girl = "Jeanne";
//function getName($name) {
//    global $girl;
//    echo $girl;
//    echo $name;
//}
//
//getName($variable);
//
//define('APP_NAME', 'E-commerce');
//
//var_dump(APP_NAME);
//
//$chaine = ' Une longue chaine de cara- ';
//$chaine = trim($chaine, '- ');
//$chaine = strlen($chaine);
//$chaine = str_replace($chaine, 'chaine', 'replace');
//$chaine = str_split($chaine,3);
//$chaine = implode(' ', $array);
//var_dump($chaine);
//
//array_push($array, 'd');
//$array[] = 'e';
//array_pop($array);
//var_dump($array);
//var_dump($array[1]);
//
//$associatif['d'] = 400;
//var_dump($associatif);

//$personList = [
//    1 => ['name' => 'Jean', 'age' => 25],
//    2 => ['name' => 'Didier', 'age' => 22],
//    3 => ['name' => 'Marc', 'age' => 14],
//    4 => ['name' => 'Laurent', 'age' => 14]
//];
//$minorList = [];
//$totalMinorAge = 0;
//
//foreach ($personList as $person) {
//    $name = $person['name'];
//    $age = $person['age'];
//
//    if ($age > 18) {
//        echo "$name est majeure !";
//    }
//    if ($age < 18) {
//        array_push($minorList, $age);
//    }
//}
//
//foreach ($minorList as $minor) {
//    $totalMinorAge += $minor;
//}
//echo "Total de l'age des mineurs: $totalMinorAge";

//version prof
//$adults = '';
//$sommeAgeEnfant = 0;
//
//foreach ($personnes as $personne) {
//    if ($personne['age'] > 18) {
//        $adults .= $personne['name'] . ', ';
//    } else {
//        $sommeAgeEnfant += $personne['age'];
//    }
//}
//
//$adults = trim($adults, ', ');
//
//
//echo $adults . (preg_match('/,/',  $adults) ? ' ont ' : ' a ') . " plus de 18 ans <br>";
//echo "La somme d'age des enfant est $sommeAgeEnfant";



$carList = [
    "peugeot" => [
        ["make" => "5008", "year" => 2015, "doors" => 5],
        ["make" => "3008", "year" => 2009, "doors" => 5],
        ["make" => "108", "year" => 2015, "doors" => 3],
        ["make" => "208", "year" => 2015, "doors" => 2],
    ],
    "renault" => [
        ["make" => "Mégane", "year" => 2015, "doors" => 5],
        ["make" => "Scénic", "year" => 2009, "doors" => 5],
        ["make" => "Clio", "year" => 2015, "doors" => 3],
    ]
];
/**
 * @todo Je veux une chainne de caratères séparé par des | des peugeot qui ont 5 portes
 *
 * @todo Je veux les Renault d'avant 2010
 *
 * @todo Je veux rajouter un peugeot 2008 de 2022 avec portes
 *
 * @todo Je veux supprimer les peugeot d'avant 2010
 */

//$carsWith5Doors = '';
//$carBefore2010 = '';
//$carList['peugeot'][] = ["make" => "2008", "year" => 2020, "doors" => 5];
//
//foreach ($carList as $modelList) {
////   var_dump($carList);
//    foreach ($modelList as $car) {
////        var_dump($car);
//        if ($car['doors'] == 5) {
//            $carsWith5Doors .= 'La ' . $car['make'] . ' | ';
//        }
//
//        if($car['year'] < 2010) {
//            $carBefore2010 .= 'La ' . $car['make'] . ' date d\'avant 2010 | ';
//        }
//    }
//
//}
//
//$carsWith5Doors = rtrim($carsWith5Doors, '| ');
//echo "$carsWith5Doors <br>";
//$carBefore2010 = rtrim($carBefore2010, '| ');
//echo $carBefore2010;

//prof version
$peugeot5Doors = [];
$renaultBefore2010 = [];
foreach ($carList as $brand => $makes) {
    if ($brand === 'peugeot') {
        foreach ($makes as $car) {
            if ($car['doors'] === 5) {
                $peugeot5Doors[] = $car['make'];
            }
        }
    }

    if ($brand === 'renault') {
        foreach ($makes as $car) {
            if ($car['year'] < 2010) {
                $renaultBefore2010[] = $car;
            }
        }
    }
}

$car = ["make" => "2008", "year" => 2022, "doors" => 5];

$carList['peugeot'][] = $car;

$peugeotMakes5Doors = implode(' | ', $peugeot5Doors);
var_dump($peugeotMakes5Doors);
var_dump($renaultBefore2010);
//var_dump($carList);


foreach ($carList['peugeot'] as $key => $car) {
    if($car["year"] < 2010) {
        unset($carList['peugeot'][$key]);
    }
}
var_dump($carList);