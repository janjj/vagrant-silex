<!---- Basis Template, hier kommt alles rein das auf jeder seite zu sehen sein soll! ---->
<?php
/**    //Notation für phpstorm um zu sagen die variablen gibt es ...nicht in der datei aber in dem Projekt!
 *
 * @var $view
 * @var $slots \Symfony\Component\Templating\Helper\SlotsHelper
 * @var $extend \Symfony\Component\Templating\PhpEngine
 *
*/
$slots = $view['slots'];
?>

<h1>
    <?php
     $title = $slots->get('title');
    /**<?php echo "" ?> === <?= "" ?> **/
    ?>
</h1>

<!DOCTYPE html>
<html>
<head lang="de">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://localhost:8001"> <!--- Soll die pfade absolut machen, damit phpStorm nicht mehr mekert bei den links--->
    <title>JJ. | <?= $title; //view slots wird auf 'title' abgegfragt ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?= $title  == "Home" ? 'class="active"' : '""'  //abfragen ob wir auf der Seite sind und dann ?>>
                    <a href="/home">Home <span class="sr-only">(current)</span></a></li>
                <li <?= $title  == "Action" ? 'class="active"' : '""'?>>
                    <a href="/bootstrap2/">Bootstrap2</a></li>
                <li <?= $title  == "Form" ? 'class="active"' : '""' ?>>
                    <a href="/form">Form</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menü <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/drop1">Drop1</a></li>
                        <li><a href="/drop2">Drop2</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sep1</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menü Rechts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <?php
    $view['slots']->output('_content');
    //Assotiative Array, gibt objekt zurück z.b. output funktion: rendert content (dynamisch); _content ist home.html.php in dem fall
    ?>
</div>

</body>
</html>


