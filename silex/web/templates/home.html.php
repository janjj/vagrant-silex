<?php

/**
 * Created by PhpStorm.
 * User: Jan Jäger
 * Date: 04.02.2015
 */

$view->extend("layout.html.php"); // Basis template reinladen
$view ['slots']->set('title', 'Home'); // Set die variable title mit dem Namen der im Layout dann abgefangen wird, Home ist auf jeder seite unterschiedlich

?>


<div class="row">
    <div class="col-xs-12">
        <div class="well">
            <h1>Herzlich Willkommen auf meinem Blog</h1>
            Dieser Blog ist der erste Selbstprogrammierte Webblog von mir, viel
            Spa&szlig&#9786;
        </div>
    </div>
</div>

<div class="row">

    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="panel panel-success">
            <div class="panel-body">
                <p>

                <h1>Lorem ipsum </h1>

                <h3>dolor sit amet,</h3> consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                vel, aliquet nec, vulputate eget, arcu. <h6>In enim justo, rhoncus ut,
                    imperdiet a, venenatis vitae, justo.</h6> </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">&Uuml;berschrift</div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

            </div>
        </div>
    </div>
    <div class="col-sm-7 col-md-4 col-lg-3">
        <!-- bei den kleinsten geraeten wird nur ein container, bei mittel kleinen 2, bei mittel großen 3 und bei den ganz großen 4 container pro zeile angezeigt -->
        <ul class="list-group">
            <li class="list-group-item list-group-item-success">Dapibus ac
                facilisis in
            </li>
            <li class="list-group-item list-group-item-info">Cras sit amet nibh
                libero
            </li>
            <li class="list-group-item list-group-item-warning">Porta ac
                consectetur ac
            </li>
            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
        </ul>
    </div>
    <div class="col-sm-5 col-md-4 col-lg-3">
        <div class="panel panel-default">

            <div class="panel-body">
                Lorem ipsum dolor sit, consectetuer.
                <table class="table table-hover">
                    <tbody>
                    <tr class="active">
                        <th scope="row">1</th>
                        <td>000</td>
                        <td>000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td class="success">75</td>
                        <td>25</td>
                    </tr>
                    <tr class="info">
                        <th scope="row">3</th>
                        <td class="success">50</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>10</td>
                        <td class="danger">90</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


<div class="row text-center">

        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-4 well">
            <p>F&uuml;nfter Inhalt</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 well">
            <p>Sechster Inhalt</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 well">
            <p>Siebter Inhalt</p>
        </div>

</div>
