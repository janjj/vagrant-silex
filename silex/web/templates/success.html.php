<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Erfolgreich");

?>



<div class="panel panel-success">


    <div class="panel-heading">Gl&uuml;ckwunsch</div>
    <div class="panel-body panel-success">
        Die Formulardaten wurden erfolgreich Gespeichert!<br><br>
        <a href="/blog-anzeige" class="btn btn-primary">Anzeigen</a><br>
    </div>


</div>
