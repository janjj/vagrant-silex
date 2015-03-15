<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', 'Blog &Uuml;bersicht') ?>

<?php
$size = sizeof($post);
for ($i = 0; $i < $size; $i++) {
    $id = $post[$i]["id"];
    $text = $post[$i]["text"];
    $title = $post[$i]["title"];
    $author = $post[$i]["author"];
    $created_at = $post[$i]["created_at"];

    ?>
    <div class="btn-group" role="group" aria-label="...">

    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo "Titel: <b>" . $title . "</b> <br>Autor: <b> " . $author . "</b>  - Datum: " . $created_at . " "; ?>
            <a href="/beitrag/<?php echo $id ?>">
                <button type="button" class="btn btn-default">
                    <?php echo "Beitrag: " . $id ?>
                </button>
            </a>
        </div>
        <div class="panel-body">
            <?php
            if (strlen($text) >= 32) {
                echo substr($text, 0, 32);
                echo " <a href='/beitrag/$id'>[...Weiterlesen...]</a> ";
            } else {
                echo $text;
                echo "<br><a href='/beitrag/$id'>Zum ganzen Beitrag</a>";
            }
            ?>
        </div>
    </div>
<?php
}
?>