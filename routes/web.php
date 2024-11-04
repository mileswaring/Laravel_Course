<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;
use App\Models\comments;




Route::get('/', function () {
    $comments = comments::all();


    return view('home', ['comments' => $comments]);
});

Route::get('/jobs', function (){
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id){

    $job = Job::find($id);
    return view('job', ['job' => $job]);
});
