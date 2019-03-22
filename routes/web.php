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

Route::get('/', 'ParticipanteController@index')->name('login');
Route::post('/logear', 'Auth\LoginController@enter')->name('logear')->middleware(['auth']);
Route::get('/meter', 'Auth\LoginController@meter')->middleware(['auth']);
Route::get('/correo', 'MailController@correo')->name('cor')->middleware(['auth']);

Route::post('/save-img','ParticipanteController@store')->name('img');
Route::resource('mail','MailController')->middleware(['auth']);

Route::get('/index-participantes', 'ParticipanteController@index2')->name('index2')->middleware(['auth']);
Route::post('/participantes', 'ParticipanteController@saveParticipante')->name('saveparticipante')->middleware(['auth']);
Route::post('/save_patrocinadores','PatrocinadorController@savePatrocinador')->name('savePatrocinador')->middleware(['auth']);
Route::get('/patrocinadores/', 'PatrocinadorController@index')->name('patrocinadores')->middleware(['auth']);
Route::post('/save_premio','PatrocinadorController@premios')->name('savePremio')->middleware(['auth']);
Route::post('/save_premios2','PatrocinadorController@premios2')->name('savePremio2')->middleware(['auth']);
Route::get('/premios', 'PatrocinadorController@vPremios')->name('premios')->middleware(['auth']);
Route::get('/asistencia','AsistenciaController@index')->name('asistencia')->middleware(['auth']);
Route::post('/save-confirmacion','AsistenciaController@confirmacion')->name('confirmacion')->middleware(['auth']);
Route::get('/rifa','RifasController@index')->name('rifas')->middleware(['auth']);
Route::post('/save-rifa','RifasController@saveRifas')->name('saveRifas')->middleware(['auth']);
Route::post('/save-au','AsistenciaController@au')->name('au')->middleware(['auth']);