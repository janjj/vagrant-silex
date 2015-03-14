<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Erfolgreich") ?>



<div class="panel panel-success">
    <div class="panel-heading">Glückwunsch</div>
    <div class="panel-body panel-success">
        Die Formulardaten wurden erfolgreich Gespeichert!
    </div>

    <a href="/blog-anzeige" class="btn btn-primary">Anzeigen</a>
</div>