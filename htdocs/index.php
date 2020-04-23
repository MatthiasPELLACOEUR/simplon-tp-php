<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hello-php</title>
    <!-- <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js"></script> -->
</head>

<body>
    <?php
    //---------------------------------------------------- p1ex1,2,6,7 p2ex1
    if (array_key_exists('firstname', $_POST)) {
        $firstname = htmlspecialchars($_POST['firstname']);
    } else {
        $firstname = 'ケンシロウ';
    }
    if (array_key_exists('lastname', $_POST)) {
        $lastname = htmlspecialchars($_POST['lastname']);
    } else {
        $lastname = '霞';
    }
    if (array_key_exists('age', $_POST)) {
        $age = (int) $_POST['age'];
    } else {
        $age = 27;
    }
    if ($age >= 21) {
        $cheers = '乾杯 ! 🍻'; //&#x1F37B either seem to work
    } else {
        $cheers = 'No beer for you &#x1F61E';
    }

    if (!empty($_POST)) {
        echo <<<HELLO
        <h1>Hello {$firstname} !</h1>
        <p>lastname : {$lastname}</p>
        <p>age      : <b>${age}</b></p>
        <h1>{$cheers}</h1>
        <hr />
HELLO;
    }
    echo <<<FORM
<form action="index.php" method="post">
    <p>
        First Name <input type="text" name="firstname" value="{$firstname}" />
    </p>
    <p>Last Name <input type="text" name="lastname" value="{$lastname}" /></p>
    <p>Age <input type="number" name="age" value={$age} /></p>
    <p><select name="gender" id="gender">
        <option value="female">female</option>
        <option value="male" selected>male</option>
        <option value="other">other</option>
    </select></p>
    <p><input type="submit" value="GO !"/></p>
</form>
FORM;
    //---------------------------------------------------------------- p1ex3
    echo '<hr />';
    $km = 1;
    echo '<pre>$km = ';
    var_dump($km);
    echo '</pre>';
    $km *= 3;
    echo '<pre>$km = ';
    var_dump($km);
    echo '</pre>';
    $km = 125;
    echo '<pre>$km = ';
    var_dump($km);
    echo '</pre>';
    //---------------------------------------------------------------- p1ex4
    $a_bool = TRUE;
    $a_string = "a string";
    $an_int = 7;
    $a_float = 7.7;
    echo '<pre>$a_bool = ';
    var_dump($a_bool);
    echo '$a_string = ';
    var_dump($a_string);
    echo '$an_int = ';
    var_dump($an_int);
    echo '$a_float = ';
    var_dump($a_float);
    echo '</pre>';
    //---------------------------------------------------------------- p1ex5
    $another_int;
    echo '<pre>$another_int = ';
    var_dump($another_int);
    $another_int = NULL;
    echo '$another_int = ';
    var_dump($another_int);
    $another_int = 9;
    echo '$another_int = ';
    var_dump($another_int);
    echo '</pre>';
    //---------------------------------------------------------------- p1ex8
    $first = 3 + 4;
    $second = 5 * 20;
    $third = 45 / 5;
    echo '<pre>$first = ';
    var_dump($first);
    echo '$second = ';
    var_dump($second);
    echo '$third = ';
    var_dump($third);
    echo '</pre>';
    //---------------------------------------------------------------- p2ex2
    $isEasy = FALSE;
    if ($isEasy) {
        echo '👊';
    } else {
        echo '💀';
    }

    //---------------------------------------------------------------- p2ex3
    if (!empty($_POST)) {
        $gender = $_POST['gender'];
        switch ($gender) {
            case 'female':
                $cheers .= '♀️';
                break;
            case 'male':
                $cheers .= '♂️';
                break;
            default:
                $cheers .= '🦄';
                break;
        }
        echo "<h1>{$cheers}</h1>";
    }
    //---------------------------------------------------------------- p2ex4
    $magnitude = 9;
    $phrases = [
        1 => "Micro-séisme impossible à ressentir.",
        2 => "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.",
        3 => "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.",
        4 => "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.",
        5 => "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.",
        6 => "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.",
        7 => "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.",
        8 => "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.",
        9 => "Séisme capable de tout détruire sur une très vaste zone.",
    ];
    if (array_key_exists($magnitude, $phrases)) {
        echo "<h3>{$phrases[$magnitude]}</h3>";
    } else {
        echo "<h4>Elle avalé, la machine avalé.</h4>";
    }

    //---------------------------------------------------------------- p2ex5
    // echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    if ($gender != 'male') {
        echo 'C\'est une ♀️ ou 🦄 !!!';
    } else {
        echo 'C\'est un ♂️ !!!';
    }

    //---------------------------------------------------------------- p2ex6
    // echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    if ($age >= 18) {
        echo 'Tu es majeur';
    } else {
        echo 'Tu n\'es pas majeur';
    }
    //---------------------------------------------------------------- p2ex7
    // echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    echo '<hr>';
    $isOk = TRUE;
    if ($isOk == FALSE) {
        echo 'c\'est pas bon !!!';
    } else {
        echo 'c\'est ok !!';
    }
    //---------------------------------------------------------------- p2ex8
    // echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
    if ($isOk) {
        echo 'c\'est ok !!';
    } else {
        echo 'c\'est pas bon !!!';
    }

    //---------------------------------------------------------------- p3ex1
    echo '<hr>';
    $i = 0;
    while ($i < 10) {
        var_dump($i);
        $i++;
    }
    //---------------------------------------------------------------- p3ex2
    echo '<hr>';
    $i = 0;
    $j = rand(0, 100);
    while ($i <= 20) {
        var_dump($i * $j);
        $i++;
    }
    //---------------------------------------------------------------- p3ex3
    echo '<hr>';
    $i = 100;
    $j = rand(0, 100);
    while ($i > 10) {
        var_dump($i * $j);
        $i--;
    }
    //---------------------------------------------------------------- p3ex4
    echo '<hr>';
    $i = 1;
    while ($i < 10) {
        var_dump($i);
        $i += $i / 2;
    }
    //---------------------------------------------------------------- p3ex5
    echo '<hr>';
    for ($i = 1; $i <= 15; $i++) {
        echo "On y arrive presque.<br />";
    }
    //---------------------------------------------------------------- p3ex6
    echo '<hr>';
    for ($i = 20; $i >= 0; $i--) {
        echo "C'est presque bon.<br />";
    }
    //---------------------------------------------------------------- p3ex7
    echo '<hr>';
    for ($i = 1; $i <= 100; $i += 15) {
        echo "On tient le bon bout.<br />";
    }
    //---------------------------------------------------------------- p3ex8
    echo '<hr>';
    for ($i = 200; $i >= 0; $i -= 12) {
        echo "Enfin !!!!<br />";
    }

    //---------------------------------------------------------------- p4ex1
    function returnTrue(): bool
    {
        return TRUE;
    }
    //---------------------------------------------------------------- p4ex2
    function returnGivenString(string $givenString): string
    {
        return $givenString;
    }
    //---------------------------------------------------------------- p4ex3
    function concat(string $a, string $b): string
    {
        return $a . $b;
    }
    //---------------------------------------------------------------- p4ex4
    function compareTwoInts(int $a, int $b): void
    {
        if ($a == $b) {
            echo 'Les deux nombres sont identiques';
        } else {
            if ($a > $b) {
                echo 'Le premier nombre est plus grand';
            } else {
                echo 'Le premier nombre est plus petit';
            }
        }
    }
    //---------------------------------------------------------------- p4ex5
    function concatIntAndString(int $number, string $string): string
    {
        return $number . $string;
    }
    echo '<hr>';
    echo concatIntAndString(5, " heures");
    //---------------------------------------------------------------- p4ex6
    function greet(string $firstname, string $lastname, int $age): string
    {
        return "Bonjour {$firstname} {$lastname}, tu as {$age} ans.";
    }
    echo '<hr>';
    echo (greet($firstname, $lastname, $age));
    //---------------------------------------------------------------- p4ex7
    function kanpai(string $gender, int $age): string
    {
        if ($age >= 21) {
            $cheers = '乾杯 ! 🍻 '; //&#x1F37B either seem to work
        } else {
            $cheers = 'No beer for you &#x1F61E ';
        }
        switch ($gender) {
            case 'female':
                $cheers .= '♀️';
                break;
            case 'male':
                $cheers .= '♂️';
                break;
            default:
                $cheers .= '🦄';
                break;
        }
        return $cheers;
    }
    echo '<hr>';
    echo '<h1>' . kanpai($gender, $age) . '</h1>';
    //---------------------------------------------------------------- p4ex8
    function sum3ints(int $a = 1, int $b = 1, int $c = 1): int
    {
        return $a + $b + $c;
    }
    echo '<hr>';
    echo '<h1>' . sum3ints() . '</h1>';

    //---------------------------------------------------------------- p5ex1
    echo '<hr>';

    $months = [
        'janvier',
        'février',
        'mars',
        'avril',
        'mai',
        'juin',
        'juillet',
        'aout',
        'septembre',
        'octobre',
        'novembre',
        'décembre',
    ];

    //---------------------------------------------------------------- p5ex2
    echo $months[2];
    //---------------------------------------------------------------- p5ex3
    echo $months[5];
    //---------------------------------------------------------------- p5ex4
    $months[7] = 'août';
    echo $months[7];
    //---------------------------------------------------------------- p5ex5
    $departements = [
        02 => 'Aisne',
        59 => 'Nord',
        60 => 'Oise',
        62 => 'Pas-de-Calais',
        80 => 'Somme',
    ];
    //---------------------------------------------------------------- p5ex6
    echo '<hr>';
    echo $departements[59];
    //---------------------------------------------------------------- p5ex7
    echo '<hr>';
    $departements[51] = 'Marne';
    echo '<pre>' . var_export($departements, true) . '</pre>';
    //---------------------------------------------------------------- p5ex8
    echo '<hr>';
    foreach( $months as $month) {
        echo $month.'<br />';
    }
    //---------------------------------------------------------------- p5ex9,10
    echo '<hr>';
    foreach( $departements as $num => $name) {
        echo '<b>'.sprintf("%02d", $num).'</b> : '.$name.'<br />';
    }
    ?>


    <hr />
    <?php
    echo '$firstname = (' . gettype($firstname) . ")<b>${firstname}</b><br />";
    echo '$lastname = (' . gettype($lastname) . ")<b>${lastname}</b><br />";
    echo '$age = (' . gettype($age) . ")<b>${age}</b><br />";
    echo '<pre>$_POST = ';
    var_dump($_POST);
    echo '<pre>' . var_export($_POST, true) . '</pre>';
    echo "\nrunning : {$_SERVER['HTTP_USER_AGENT']}</pre>"
    // phpinfo();
    ?>
</body>

</html>