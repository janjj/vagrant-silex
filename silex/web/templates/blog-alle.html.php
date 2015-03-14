<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', 'Eintr&auml;ge Anzeigen') ?>

<?php
$size = sizeof($post);
for ($i = 0; $i < $size; $i++) {
    $id = $post[$i]["id"];
    $text = $post[$i]["text"];

    ?>
    <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default">
            <?php echo "Id: " . $id; ?>
        </button>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php
            echo "Titel: <b>" . $post[$i]['title'] . "</b> - Datum: " . $post[$i]['created_at'];
            ?>
        </div>
        <div class="panel-body">
            <?php
            if (strlen($text) >= 32) {
                echo substr($text, 0, 32);
                echo "<a href='/blog-anzeige/$id'>[...]</a>";
            } else {
                echo $text;
                echo "<br><a href='/blog-anzeige/$id'>Zum Beitrag</a>";
            }
            ?>
        </div>
    </div>
<?php
}
?>