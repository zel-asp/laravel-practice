<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';

    protected $fillable = [
        'employer_id',
        'title',
        'salary'
    ];

    public function employer()
    {
        //this will allows you to see the info in db
        return $this->belongsTo(Employer::class);
    }
}