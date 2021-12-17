<?php

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
    $data=[
        'name' => 'Simone',
        'surname' => 'Granata',
        'links_list' => [
            'Link 1' => [
                'text' => 'About Us',
                'link' => 'aboutUs'
            ],
            'Link 2' => [
                'text' => 'Contacts',
                'link' => 'contacts'
            ],
            'Link 3' => [
                'text' => 'Socials',
                'link' => 'socials'
            ],
            'Link 4' => [
                'text' => 'Other Section',
                'link' => 'otherSection'
            ],
        ]
    ];

    return view('home', $data);
}) -> name("home");

Route::get("/about-us", function () {
    return view("about_us");
}) -> name("aboutUs");

Route::get("/contacts", function () {
    return view("contacts");
}) -> name("contacts");

Route::get("/socials", function () {
    return view("socials");
}) -> name("socials");

Route::get("/other-section", function () {
    return view("other_section");
}) -> name("otherSection");