<?php

use App\Models\News;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

    /*$roles = Roles::all();
    foreach ($roles as $role) {
        echo 'Role: ' . $role['name'] . '<br>';
        echo '<b>News:</b><br>';
        foreach ($role->news()->getResults() as $new) {
            echo $new['name'] . '<br>';
        }
        echo '----------------------------------<br>';
    }*/

    /*$news = News::all();
    foreach ($news as $new) {
        echo 'News: ' . $new['name'] . '<br>';
        echo '<b>Role:</b><br>';
        foreach ($new->roles()->getResults() as $itemNew) {
            echo $itemNew['name'] . '<br>';
        }
        echo '----------------------------------<br>';
    }*/

    /*$users = User::all();
    foreach ($users as $user) {
        echo 'User name: ' . $user['name'].'<br>';
        echo 'Role: ' . $user->role['name'].'<br>';
        echo '----------------------------------<br>';
    }*/

});
