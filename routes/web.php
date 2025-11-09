<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home', );
});

Route::get('/contact', function () {
    return view('contact');
});

//fetch all jobs
Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $job
    ]);
});

//create jobs
Route::get('/jobs/create', function () {
    return view('jobs.create', );
});

//post new job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return view('jobs.create');
});

//show specific job
Route::get('/jobs/{id}', function ($id) {

    $jobs = Job::all();

    $job = Job::find($id);

    return view('jobs.show', [
        'job' => $job
    ]);
});

//edit job
Route::get('/jobs/{id}/edit', function ($id) {
    $findJob = Job::find($id);

    return view('jobs.edit', [
        'findJob' => $findJob
    ]);
});

//update
Route::patch('/jobs/{id}/edit', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $findJob = Job::findOrFail($id);

    $findJob->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('jobs.' . $findJob->id);
});

//destroy
Route::delete('/jobs/{id}/edit', function ($id) {
    $findJob = Job::findOrFail($id)->delete();

    return redirect('jobs');
});




