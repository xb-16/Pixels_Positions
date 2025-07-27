<?php

use App\Models\Employer;
use App\Models\Job;

test('', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);


    expect($job->employer()->is($employer))->toBeTrue();
});
