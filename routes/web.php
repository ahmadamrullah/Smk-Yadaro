<?php



Route::get('/register', 'Admin\AuthController@register')->name('register');
Route::post('/register', 'Admin\AuthController@postRegister')->name('post_register');
Route::get('/login', 'Admin\AuthController@login')->name('login');
Route::post('/login', 'Admin\AuthController@postLogin')->name('post_login');
Route::get('/logout', 'Admin\AuthController@logout')->name('logout');

Route::group(["middleware" => "auth"], function(){
    Route::prefix('admin')->group(function () {
        Route::resource('/siswa', 'Admin\SiswaController');
        Route::resource('/kelas', 'Admin\KelasController');
        Route::post('/kelas', 'Admin\KelasController@store')->name('kelas.store');
        Route::resource('/jurusan', 'Admin\JurusanController');
        Route::post('/jurusan', 'Admin\JurusanController@store')->name('jurusan.store');
        Route::resource('/jabatan', 'Admin\JabatanController');
        Route::post('/jabatan', 'Admin\JabatanController@store')->name('jabatan.store');
        Route::resource('/pelajaran', 'Admin\PelajaranController');
        Route::post('/pelajaran', 'Admin\PelajaranController@store')->name('pelajaran.store');
        Route::resource('/guru', 'Admin\GuruController');

        Route::resource('/kejuruan', 'Admin\KejuruanController');
        Route::resource('/post', 'Admin\PostController');
    });
});

Route::get('/', 'HomeController@index');
Route::get('/sejarah', 'HomeController@sejarah');
Route::get('/data-siswa', 'HomeController@data_siswa');
Route::get('/data-staf', 'HomeController@data_staf');






Route::get('/program_kejuruan', 'ProgramController@index');
Route::get('/program_kejuruan/{slug}/', 'ProgramController@detail_kejuruan')->name('kejuruan.detail');
Route::get('/artikel', 'ArtikelController@index');
Route::get('/artikel/{slug}', 'ArtikelController@detail')->name('artikel.detail');