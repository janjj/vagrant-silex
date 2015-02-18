<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Formular") ?>


<div class="panel panel-default">
    <div class="panel-heading">Neuer Beitrag</div>
    <div class="panel-body">
        <?php if ($err == true) {?>
            <div class="alert alert-danger" role="alert">Bitte alle Felder ausfüllen</div>
        <?php } ?>
        <form action="/form" method="post">
            <div class="form-group">
                <label for="title">Titel</label>
                <input name="blogTitle" type="text" class="form-control" id="title" placeholder="Gib einen Titel an">
            </div>
            <div class="form-group">
                <textarea name="blogText" class="form-control" id="message" placeholder="Bitte Text hier Eintragen"
                          cols="10" rows="10"></textarea>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="checkbox"> gleich Veröffentlichen?
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Abschicken</button>
        </form>
    </div>
    <div class="panel-body">
        </div>
</div>