<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Erfolgreich");

?>



<div class="panel panel-danger">


    <div class="panel-heading">Fehler</div>
    <div class="panel-body">
        Sie müssen sich erst Einloggen bevor sie einen Beitrag Schreiben können!<br><br>
        <a href="/login" class="btn btn-primary">Einloggen</a>
        <a href="/beitrag" class="btn btn-primary">Bisherige Beitr&auml;ge ansehen</a><br>
    </div>

</div>
