<?php 

Route::get('current-user', function() {
    echo 'ID is:'. auth()->id() . '<Br>';
    echo 'ID is:'. auth()->user()->id . '<Br>';
    echo 'NAME is:'. auth()->user()->name . '<Br>';
    echo 'EMAIL is:'. auth()->user()->email . '<Br>';
    echo 'DATE is:'. auth()->user()->created_at . '<Br>';
    echo 'DATE is:'. auth()->user()->updated_at . '<Br>';
    echo '<hr>';
    echo 'ID is:'. Auth::id() . '<Br>';
    echo 'ID is:'. Auth::user()->id . '<Br>';
    echo 'NAME is:'. Auth::user()->name . '<Br>';
    echo 'EMAIL is:'. Auth::user()->email . '<Br>';
    echo 'DATE is:'. Auth::user()->created_at . '<Br>';
    echo 'DATE is:'. Auth::user()->updated_at . '<Br>';
});

Route::get('test', function() {
    unlink('C:\xampp\htdocs\blog\public\upload\profile\user.png');
});

Route::get('test-gate', 'HomeController@gateAdminOrAuthor');