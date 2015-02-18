<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Erfolg") ?>



<div class="panel panel-success">
    <div class="panel-heading">GS</div>
    <div class="panel-body panel-success">
        Die Formulardaten wurden erfolgreich Gespeichert!
    </div>

    <a href="/form-anzeigen" class="btn btn-primary">Anzeigen</a>
</div>