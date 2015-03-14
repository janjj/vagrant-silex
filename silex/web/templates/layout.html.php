<!---- Basis Template, hier kommt alles rein das auf jeder seite zu sehen sein soll! ---->
<?php
$slots = $view ['slots'];

$title = $slots->get('title');
/**
 * <?php echo "" ?> === <?= "" ?> *
 * */

?>

<br><br><br>
<!DOCTYPE html>
<html>
<head lang="de">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JJ. Blog | <?= $title; //view slots wird auf 'title' abgegfragt     ?></title>

    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>


</head>

<body>
<div class="container">
    <nav class="navbar navbar-default nnnnnavbar-fixed-top">
        <!--- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! navbar-fixed-top  t�tet das design !!!!!!!!!-->
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="./"> <img alt="Blog von Jan J&auml;ger "
                                                        src="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"
                 id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li
                        <?= $title == "Home" ? 'class="active"' : '""'  //abfragen ob wir auf der Seite sind und dann     ?>>
                        <a href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li <?= $title == "Formular" ? 'class="active"' : '""' ?>><a
                            href="/blog-formular">Beitrag erstellen</a></li>
                    <li <?= $title == "Eintr&auml;ge Anzeigen" ? 'class="active"' : '""' ?>><a
                            href="/blog-anzeige">Alle Beitr&auml;ge Anzeigen</a></li>

                    <li
                        <?= $title == "Blog" ? 'class="active"' : '""' ?>><a
                            href="#">NEW</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="./login" type="button"
                       class="btn navbar-btn <?= $title == "Login" ? 'btn-primary' : 'btn-info' //Wenn eingeloggt dann Gr�nen button machen!    ?>">Login
                        Seite</a>
                </ul>


            </div>
        </div>
        <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav></div>
<div class="container">
    <?php
    $view ['slots']->output('_content');
    // Assotiative Array, gibt objekt zurück z.b. output funktion: rendert content (dynamisch); _content ist home.html.php in dem fall
    ?>

</div>
</body>
</html>


