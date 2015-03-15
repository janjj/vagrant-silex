<?php
/** @var Doctrine\DBAL\Connection $dbConnection */

use Symfony\Component\HttpFoundation\Request;


$app->get('/', function () use ($app) {
    return $app['templating']->render(
        'home.html.php',
        array()                        //Leeres array da wir nichts übergeben
    );
});

$app->get('/login/', function () use ($app) {
    return $app['templating']->render(
        'login.html.php',
        array()
    );
});

//Match ist get und Post, wird verwendet damit ein Formular abgeschickt werden kann
$app->match('/beitrag-erstellen', function (Request $request) use ($app) {
    $error = false;
    $username = $app['session']->get('user');

    if ($request->isMethod("post")) {
        $title = $request->get('blogTitle', ''); // mit '' einem Leeren String übergeben. ist schöner bei der abfrage
        $text = $request->get('blogText', '');

        if ($title == "" || $text == "") {
            $error = true;
        } else {

            $dbConnection = $app['db'];
            $dbConnection->insert(
                'blog_post',
                array(
                    'title' => $title,
                    'text' => $text,
                    'created_at' => date('Y-m-d'),
                    'author' => $username['username']
                )
            );

            return $app['templating']->render(
                'success-beitrag-erstellt.html.php',
                array()
            );
        }
    }

    if ($username === null) {
        return $app->redirect('/error-session');
    } else {

        return $app['templating']->render(
            'beitrag-erstellen.html.php',
            array(
                'err' => $error,
                'username' => $username
            )
        );
    }
});

$app->match('/beitrag', function (Request $request) use ($app) {
    $dbConnection = $app['db'];
    $post = $dbConnection->fetchAll(
        'SELECT * FROM blog_post',
        array()
    );

    return $app['templating']->render(
        'blog-uebersicht.html.php',
        array(
            'post' => $post
        )
    );
});

$app->match('/beitrag/{id}', function ($id) use ($app) {
    $dbConnection = $app['db'];
    $post = $dbConnection->fetchAssoc(
        'SELECT * FROM blog_post WHERE id=?',
        array($id)
    );
    return $app['templating']->render(
        'blog-beitrag.html.php',
        array(
            'post' => $post,
            'id' => $id
        )
    );
});


$app->match('/delete/{del}', function ($del) use ($app) {
    $dbConnection = $app['db'];
    $post = $dbConnection->delete(
        'blog_post',
        array('id' => $del)
    );

    return $app['templating']->render(
        'success-delete.html.php',
        array()
    );
});


$app->get('/account', function () use ($app) {      //geht! bei  auf der seite /acount wird geprüft ob es schon einen namen gibt, in der session
    if (null === $username = $app['session']->get('user')) {

        // return $app->redirect('./login');
        return $app['templating']->render(
            'login.html.php',
            array(
                'redirect' => true
            )
        );
    }

    return $app['templating']->render(
        'account-info.html.php',
        array(
            'username' => $username['username']
        )
    );
});

$app->get('/session-delete', function () use ($app) {      //geht! bei  auf der seite /acount wird geprüft ob es schon einen namen gibt, in der session

    $app['session']->set('user', null);

    return $app['templating']->render(
        'login.html.php',
        array(
            'redirect' => true
        )
    );
});


$app->error(function (\Exception $e, $code) use ($app) {
    return $app['templating']->render('/error-404.html.php');
});

$app->match('/session', function (Request $request) use ($app) {
    if ($request->isMethod("post")) {


        $username = $request->get('AutorName');

        $app['session']->set('user', array('username' => $username));
        if ($username != '') {
            return $app['templating']->render(
                'success-login.html.php',
                array(
                    'username' => $username
                )
            );
        }
        return $app['templating']->render(
            'error-login.html.php',
            array()
        );
    }
});

$app->get('/error-session/', function () use ($app) {
    return $app['templating']->render(
        'error-session.html.php',
        array()
    );
});