<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend('layout.html.php');
$view['slots']->set('title', 'Beitrag ' . $id);

$author = $post["author"];
$title = $post['title'];
$datum = $post['created_at'];
$text = $post['text'];
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php
        echo "<h3> Titel: <b>" . $title . "</h2></b>";
        ?>
    </div>
    <div class="panel-body">
        <?php
        echo $text;
        ?>
    </div>
    <div class="panel-footer">
        <?php echo "<br>Autor: <b> " . $author . "</b> - Datum: " . $datum ?><br>
        <a href='/beitrag'>Zur&uuml;ck</a>
    </div>
</div>

<button type="button" class="btn btn-primary btn-danger" data-toggle="modal" data-target="#myModalDelete">
    Beitrag L&ouml;schen
</button>

<!-- Modal -->
<div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sind sie Sicher</h4>
            </div>
            <div class="modal-body">
                Sind sie Sicher das sie den Beitrag mit der <b>ID: <?php echo $id ?></b> l&ouml;schen wollen?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-primary" id="deleteButton">JA! Wirklich L&ouml;schen</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#myModalDelete').on('shown.bs.modal', function () {
        $('#myInput').focus()
    });
    $('#deleteButton').click(function () {
        $.ajax({
            url: '/delete/<?= $post['id']?>',
            success: function (data) {
                $('#myModalDelete').hide(1000);
                if (data) {
                    $('body').html(data);
                }
            },
            error: function () {
                alert('failure');
                $('#myModalDelete').hide(1000);
            }
        });

        /*
         type: "method",

         success: function (reqCode) {
         //wenn saveData.php true bzw. den Status 1 zurueckliefert
         if (reqCode==1) {
         alert("geloescht");


         } else{
         alert('Fehler beim Abschickenoel des Formulares.');
         alert("Error");
         }
         }*/
        /*}).done(function(data){}).error(function(data){});

         });
         */
    })
</script>