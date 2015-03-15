<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */
$view->extend('layout.html.php');
$view['slots']->set('title', "Erfolgreich gel&ouml;scht");
?>



<div class="panel panel-success">
    <div class="panel-heading">Gl&uuml;ckwunsch</div>
    <div class="panel-body panel-success">
        Der Beitrag wurde Erfolgreich Gel&ouml;scht!
        <br/> <br/><a href="/beitrag" class="btn btn-primary">Zur&uuml;ck zu allen Beitr&auml;gen</a>
    </div>

</div>