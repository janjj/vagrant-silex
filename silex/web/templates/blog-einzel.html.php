<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'Blog Anzeige') ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php
        echo "Titel: <b>" . $post['title'] . "</b> - Datum: " . $post['created_at'];
        ?>
    </div>
    <div class="panel-body">
        <?php
        echo $post['text'];
        ?>
    </div>
    <div class="panel-footer">
        <a href='/blog-anzeige'>Zurück</a>
    </div>
</div>

<button type="button" class="btn btn-primary btn-danger" data-toggle="modal" data-target="#myModalDelete">
    Beitrag Löschen
</button>

<!-- Modal -->
<div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sind sie Sicher</h4>
            </div>
            <div class="modal-body">
                Sind sie Sicher das sie den Beitrag mit der <b>ID: <?php echo $id?></b> löschen wollen?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-primary" id="deleteButton">JA! Wirklich Löschen</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#myModalDelete').on('shown.bs.modal', function () {
        $('#myInput').focus()
    });
    $('#deleteButton').click(function(){
        $.ajax({
            url: '/delete/<?= $post['id']?>',
            success: function(data){
                $('#myModalDelete').hide(1000);
                if(data)
                {
                    $('body').html(data);
                }
            },
            error: function(){
                alert('failure');
                $('#myModalDelete').hide(1000);
            }
        });

            /*
            type: "method",

            success: function (reqCode) {
                //wenn saveData.php true bzw. den Status 1 zurückliefert
                if (reqCode==1) {
                    alert("gelöscht");


                } else{
                    alert('Fehler beim Abschickenöl des Formulares.');
                    alert("Error");
                }
            }*/
            /*}).done(function(data){}).error(function(data){});

    });
             */
        })
</script>