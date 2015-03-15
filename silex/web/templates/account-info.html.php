<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Account");

?>



<div class="panel panel-success">


    <div class="panel-body panel-success">
        Sie Sind mit folgendem Namen Eingeloggt: <b><?php echo $username; ?></b><br><br>
        <a href="/session-delete" class="btn btn-danger">Session L&ouml;schen</a><br>
    </div>

</div>
