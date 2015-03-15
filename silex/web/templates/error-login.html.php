<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Login Fehler");

?>

<div class="panel panel-danger">

    <div class="panel-heading">Fehler</div>
    <div class="panel-body panel-success">
        Bitte geben Sie mindestens einen Buchstaben ein!<br><br>
        <a href="/login" class="btn btn-primary">Zur&uuml;ck zum Login</a><br>
    </div>

</div>
