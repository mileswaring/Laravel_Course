<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id) {

        $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ];

        //short hand
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    // \Illuminate\Support\Arr::first($jobs, function ($job) use ($id){
    //     return $job['id'] == $id;
    // });


    return view('job', ['job' => $job]);
});
