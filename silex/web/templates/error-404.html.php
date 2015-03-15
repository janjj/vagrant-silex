<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Erfolgreich") ?>



<div class="panel panel-danger">
    <div class="panel-heading">Seite wurde nicht gefunden</div>
    <div class="panel-body panel-success">
        404 Error: Die angeforderte Seite wurde nicht gefunden!
        <br><br> <a href="/" class="btn btn-primary">Home</a>
    </div>


</div>