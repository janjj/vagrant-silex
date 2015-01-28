<?php
$name = $_GET['name'];
$anzahl = $_GET['anzahl'];
$stop = $_GET['stop'];

if ($name == "") {
    $name = "Gast";
}
$stop ? $stop : "Gast";
$anzahl ? $anzahl : $stop;

echo "Hallo lieber $name!";
echo "<hr>";


for ($i = 0; $anzahl >= $i; $i++) {
    echo "$i";
    if ($i % 2 == 1) {
        echo " - ungerade<br>";
    } else {
        echo " - gerade<br>";
    }
}
echo "<hr/>";


for ($i = 0; $anzahl >= $i; $i++) {
    echo "$i";
}
echo "<hr/>";


$capitals = array(
    "Deutschland" => "Berlin",
    "France" => "Paris",
    "Italy" => "Rome"
);

foreach ($capitals as $land => $capital) {
    echo "The capital of $land is $capital <br>";
}
echo "<hr/>";
echo "SERVER_SOFTWARE: $_SERVER[SERVER_SOFTWARE]<br>";
echo "SERVER_ADDR: $_SERVER[SERVER_ADDR]<br>";
echo "<hr/>";

echo "REMOTE_ADDR: $_SERVER[REMOTE_ADDR]<br>";
echo "REQUEST_METHOD: $_SERVER[REQUEST_METHOD]<br>";
echo "PHP_SELF: $_SERVER[PHP_SELF]<br>";
echo "GATEWAY_INTERFACE: $_SERVER[GATEWAY_INTERFACE]<br>";
echo "SERVER_NAME: $_SERVER[SERVER_NAME]<br>";

echo "SERVER_PROTOCOL: $_SERVER[SERVER_PROTOCOL]<br>";

echo "REQUEST_TIME: $_SERVER[REQUEST_TIME]<br>";


echo "DOCUMENT_ROOT: $_SERVER[DOCUMENT_ROOT]<br>";
echo "HTTP_HOST: $_SERVER[HTTP_HOST]<br>";
echo "HTTP_REFERER: $_SERVER[HTTP_REFERER]<br>";
echo "HTTP_USER_AGENT: $_SERVER[HTTP_USER_AGENT]<br>";

echo "REMOTE_HOST: $_SERVER[REMOTE_HOST]<br>";

echo "REMOTE_PORT: $_SERVER[REMOTE_PORT]<br>";
echo "SCRIPT_FILENAME: $_SERVER[SCRIPT_FILENAME]<br>";