<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

// Route::view('/', 'welcome');

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/dashboard', function(){
    $users = User::where('id' , '!=' , auth()->user()->id)->get();
    // dd($users);
    return view('dashboard', [
        'users' => $users
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/chat/{id}', function($id){

    return view('chat', [
        'id' => $id
    ]);
})->middleware(['auth', 'verified'])->name('chat');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
