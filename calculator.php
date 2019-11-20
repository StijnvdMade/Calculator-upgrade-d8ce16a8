<?php
echo("voer een nummer in ");
$nummer1 = readline();
if (is_numeric($nummer1)) {
    echo("voer nog een nummer in ");
    $nummer2 = readline();
    if (is_numeric($nummer2)) {
        echo("Wil je optellen, aftrekken of delen? (+, -, %) ");
        $smh = readline();
        if ($smh == "+") {
            $antwoord = $nummer1 + $nummer2;
            print("het antwoord is " . $antwoord);
            exit();
        }
        if ($smh == "-") {
            $antwoord = $nummer1 - $nummer2;
            print("het antwoord is " . $antwoord);
            exit();
        }
        if ($smh == "%") {
            $antwoord = $nummer1 / $nummer2;
            print("het antwoord is " . $antwoord);
            exit();
        }
        else {
            print("Zo werkt het niet");
            exit();
        }
    }
}
print("dat is geen nummer");
?>