<?php

/**
 * Created by PhpStorm.
 * User: Jan
 * Date: 04.02.2015
 */
$view->extend("layout.html.php"); //Basis template reinladen
$view['slots']->set('title', 'Home'); //Set die variable title mit dem Namen der im Layout dann abgefangen wird, Home ist auf jeder seite unterschiedlich
/**
Alles ab hier ist der Content
**/
?>


    <div class="row">
        <div class="col-xs-12">
            <div class="well">
                <h1>My first Bootstrap website!</h1>
Lorem bla bla .... Lorem bla bla .... Lorem bla bla .... Lorem bla bla ....<br>
                <button class="btn btn-primary" type="button" href="#">Drück mich</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <!-- bei den kleinsten geräten wird nur ein container, bei mittel kleinen 2, bei mittel großen 3 und bei den ganz großen 4 container pro zeile angezeigt -->
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-info">
                <div class="panel-body">
                    <p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="panel panel-info">
                <!-- Default panel contents -->
                <div class="panel-heading">Überschrift</div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 well"><p>Vierter Inhalt, aber in der 2. Reihe</p></div>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-4 well"><p>Fünfter Inhalt, aber in der 2. Reihe</p></div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 well"><p>Sechster Inhalt, aber in der 2. Reihe</p></div>
    </div>
