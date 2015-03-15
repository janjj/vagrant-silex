<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', "Neuer Beitrag") ?>


<div class="panel panel-default">
    <div class="panel-heading">Neuer Beitrag</div>
    <div class="panel-body">
        <?php if ($err == true) { ?>
            <div class="alert alert-danger" role="alert">Bitte alle Felder ausf&uuml;llen</div>
        <?php } ?>
        <form action="/beitrag-erstellen" method="post">
            <div class="form-group">
                <label for="title">Titel des Beitrags</label>
                <input name="blogTitle" type="text" class="form-control" id="title" placeholder="Gib einen Titel an...">
            </div>
            <div class="form-group">
                <label for="message">Inhalt des Beitrags</label>
                <textarea name="blogText" class="form-control" id="message" placeholder="Bitte Text hier Eintragen..."
                          cols="10" rows="10"></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <!--    <input type="checkbox" id="checkbox"> gleich Ver&ouml;ffentlichen? -->
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Abschicken</button>
        </form>
    </div>
</div>