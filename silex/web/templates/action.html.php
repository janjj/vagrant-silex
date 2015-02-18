<?php $view->extend('layout.html.php') ?>

<?php $view['slots']->set('title', "Action") ?>

Action Seite


<form action="/form" method="post">
    <p>
        <input type="text" >
        <input type="email" name="mail" placeholder="...@.de"><br>
    </p>
    <p>
        <label for="message">Yor Mail</label>
        <textarea name="message">Your Message</textarea>
    </p>
    <input  type="submit" >
</form>