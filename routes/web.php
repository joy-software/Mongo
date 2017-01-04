<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;



$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * les utilisateurs (users)
 */
$app->get('/api/users','UserController@index');
$app->get('/api/users/{id}','UserController@get');
$app->post('/api/users','UserController@create');
$app->put('/api/users/{id}','UserController@update');
$app->delete('/api/users/{id}','UserController@delete');

/**
 * Les points de localisation
 */
$app->get('/api/pointlivraisons','PointLivraisonController@index');
$app->get('/api/pointlivraisons/{id}','PointLivraisonController@get');
$app->post('/api/pointlivraisons','PointLivraisonController@create');
$app->put('/api/pointlivraisons/{id}','PointLivraisonController@update');
$app->delete('/api/pointlivraisons/{id}','PointLivraisonController@delete');
/**
 * Les commandes
 */
$app->get('/api/commandes','CommandeController@index');
$app->get('/api/commandes/{id}','CommandeController@get');
$app->post('/api/commandes','CommandeController@create');
$app->put('/api/commandes/{id}','CommandeController@update');
$app->delete('/api/commandes/{id}','CommandeController@delete');
/**
 * Les camions
 */
$app->get('/api/camions','CamionController@index');
$app->get('/api/camions/{id}','CamionController@get');
$app->post('/api/camions','CamionController@create');
$app->put('/api/camions/{id}','CamionController@update');
$app->delete('/api/camions/{id}','CamionController@delete');
/**
 * Les livraisons
 */
$app->get('/api/livraisons','LivraisonController@index');
$app->get('/api/livraisons/{id}','LivraisonController@get');
$app->post('/api/livraisons','LivraisonController@create');
$app->put('/api/livraisons/{id}','LivraisonController@update');
$app->delete('/api/livraisons/{id}','LivraisonController@delete');
/**
 * authentification
 */
$app->post('/api/auth/login', 'AuthController@postLogin');

$app->group(['prefix' => 'api', ['middleware' => 'auth']], function($app) {
    $app->get('/','UserController@test');

    /**
     * Les users
     */
    $app->get('/v1/users/{id}','UserController@get');
    $app->post('/v1/users','UserController@create');
    $app->put('/v1/users/{id}','UserController@update');
    $app->delete('/v1/users/{id}','UserController@delete');
    /**
     * Les points de localisation
     */
    $app->get('/v1/pointlivraisons/{id}','PointLivraisonController@get');
    $app->post('/v1/pointlivraisons','PointLivraisonController@create');
    $app->put('/v1/pointlivraisons/{id}','PointLivraisonController@update');
    $app->delete('/v1/pointlivraisons/{id}','PointLivraisonController@delete');
    /**
     * Les commandes
     */
    $app->get('/v1/commandes/{id}','CommandeController@get');
    $app->post('/v1/commandes','CommandeController@create');
    $app->put('v1/commandes/{id}','CommandeController@update');
    $app->delete('/v1/commandes/{id}','CommandeController@delete');
    /**
     * Les camions
     */
    $app->get('/v1/camions/{id}','CamionController@get');
    $app->post('/v1/camions','CamionController@create');
    $app->put('/v1/camions/{id}','CamionController@update');
    $app->delete('/v1/camions/{id}','CamionController@delete');
    /**
     * Les livraisons
     */
    $app->get('/v1/livraisons/{id}','LivraisonController@get');
    $app->post('/v1/livraisons','LivraisonController@create');
    $app->put('/v1/livraisons/{id}','LivraisonController@update');
    $app->delete('/v1/livraisons/{id}','LivraisonController@delete');
});
