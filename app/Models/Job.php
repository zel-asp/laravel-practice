<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{

    public static function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        //this will get the arra in method alL, check each index of array and return the values that satisfy the condition
        $job = Arr::first(static::all(), fn($job) => $job['id'] === (int) $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}