<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 10.03.2015
 */

$view->extend("layout.html.php");
$view['slots']->set('title', 'Login');

?>

<?php if (isset($redirect)) { ?>
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3 class="panel-title">Nicht Eingeloggt</h3>
        </div>
        <div class="panel-body">
            Sie wurden Weitergeleitet da sie nicht Eingeloggt sind


        </div>
    </div>
<?php
} ?>



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Als Autor anmelden</h3>
    </div>
    <div class="panel-body">
        <form action="/session" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                    <input type="Name" class="form-control" id="inputName" name="AutorName" placeholder="Dein Name">
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

