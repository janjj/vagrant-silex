<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 10.03.2015
 */

$slots = $view ['slots'];

$view->extend("layout.html.php");

$title = $slots->get('title');
$view['slots']->set('title', 'Login');

?>

<!DOCTYPE html>
<html>
<head lang="de">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JJ. | <?= $title; ?></title>

    <link rel="stylesheet"
          href="./vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="./vendor/jquery/dist/jquery.min.js"></script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Als Autor anmelden</h3>
    </div>
    <div class="panel-body">
        <form action="./session" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                    <input type="Name" class="form-control" id="inputName"
                           placeholder="Dein Name">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Passwort</label>

                <div class="col-sm-10">
                    <p class="form-control-static">*********</p>
                    <button type="submit" class="btn btn-default">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>


</body>
</html>
