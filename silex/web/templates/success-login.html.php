<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Erfolgreich eingeloggt");

?>



<div class="panel panel-success">


    <div class="panel-heading">Gl&uuml;ckwunsch</div>
    <div class="panel-body panel-success">
        Sie wurden Erfolgreich eingeloogt als: <b><?php echo $username; ?></b><br><br>
        <a href="/beitrag-erstellen" class="btn btn-primary">Beitrag Schreiben</a><br>
    </div>

</div>
