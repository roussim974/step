<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

/*Route::get('/bonjour', function(){
    return 'Bonjour ' . $_GET['prenom'];
});*/

//egal a

/*Route::get('/bonjour/{prenom}', function(){
    return 'Bonjour ' . request('prenom');
});*/

/*Route::get('/hello/{prenom}', function() {

    $name = request('prenom');
    return view('hello',
        [
            'test' => $name //test est en relation avec $test de la vue hello
        ]);
});*/


//On place la request directement en valeur de 'test'


Route::get('/hello/{prenom}', function () {

    return view('hello',
        [
            'test' => request('prenom')
        ]);
});

//Route inscription
Route::get('/inscription', function () {
    return view('inscription');
});

/*
 * Methode classique
 * Route::post('/inscription', function () {

        $utilisateur = new App\Utilisateur;
        $utilisateur->email = request('email');
        $utilisateur->password = bcrypt(request('password'));
        $utilisateur->save();

    return 'Votre email est ' . request('email');
    return 'Formulaire OK';
});*/

//methode eloquent


Route::post('/inscription', function () {

    $utilisateur = App\Utilisateur::create([
        'email'=>request('email'),
        'password'=>bcrypt(request('password')),
    ]);



    return 'Formulaire OK';
});

Route::get('/utilisateurs', function (){

    //eloquent
    //App\Utilisateur::all() retourne la liste de tous les utilisateur
    $utilisateurs = App\Utilisateur::all();


    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs
        //Comme les view n'on pas accès a la variable de la
        //function anonyme, on la stock donc dans un tableau
    ]);

});