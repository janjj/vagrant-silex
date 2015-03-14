<!---- Basis Template, hier kommt alles rein das auf jeder seite zu sehen sein soll! ---->
<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$slots = $view ['slots'];
$title = $slots->get('title');

?>

<br><br><br>
<!DOCTYPE html>
<html>
<head lang="de">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JJ. Blog | <?= $title; //view slots wird auf 'title' abgegfragt                ?></title>

    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="/vendor/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
<div class="container">
    <nav class="navbar navbar-default snavbar-fixed-top">
        <!--- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! navbar-fixed-top  toetet das design !!!!!!!!!-->
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/"> Blog von Jan J&auml;ger
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?= $title == "Home" ? 'class="active"' : '""'  //abfragen welche seite aktiv ist --> grau hinterlegen       ?>>
                        <a href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li <?= $title == "Formular" ? 'class="active"' : '""' ?>><a
                            href="/blog-formular">Beitrag erstellen</a></li>
                    <li <?= $title == "Eintr&auml;ge Anzeigen" ? 'class="active"' : '""' ?>><a
                            href="/blog-anzeige">Alle Beitr&auml;ge Anzeigen</a></li>
                    <li <?= $title == "Blog" ? 'class="active"' : '""' ?>><a href="/account">Account-Test</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="/login" type="button"
                       class="btn navbar-btn <?= $title == "Login" ? 'btn-primary' : 'btn-info' //Wenn eingeloggt dann Gruenen button machen!??   ?>">Login
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
    // Assotiative Array, gibt objekt zurueck z.b. output funktion: rendert content (dynamisch); _content ist home.html.php in dem fall
    ?>

</div>
</body>
</html>


