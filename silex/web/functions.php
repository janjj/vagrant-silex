<?php

function hello($name = "World")
{
    return "Hello $name<br/>";
}

function quadratzahl($zahl = 0)
{
    echo "Die Quadratzahl von $zahl ist:".$zahl*$zahl."<br/>";
}

function fak($fak = 1)
{
    if($fak>= 1)
    {
        $vorgaenger = $fak-1;

        $temp = fak($vorgaenger);

        $ergebnis = $fak*$temp;

        echo "Die Fakult&auml;t von: <b>$fak</b> ist <b>$ergebnis</b><br/>";
        return $ergebnis;
    }else{
        return 1;
    }

}

echo hello();
echo hello('jan');
echo("<hr/>");

quadratzahl(1);
quadratzahl(2);
quadratzahl(3);
quadratzahl(4);
quadratzahl(5);
quadratzahl(6);
quadratzahl(7);
echo("<hr/>");

fak('30');
echo("<hr/>");