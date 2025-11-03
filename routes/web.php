<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '30,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '40,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '50,000'
            ],
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '30,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '40,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '50,000'
        ],
    ];

    //this will check each index of array and return the values that satisfy the condition
    $job = Arr::first($jobs, fn($job) => $job['id'] === $id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});