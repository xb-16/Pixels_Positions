<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase; // Often preferred with Pest

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case. We extend it to use the Laravel traits you actually need.
|
*/

uses(
    LazilyRefreshDatabase::class, // Or RefreshDatabase::class
    // Add other global traits here, e.g., WithFaker::class
)->in('Feature', 'Unit'); // Apply to tests in these directories

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you a flexible way to assert that expectations are met.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| While Pest provides a lot of handy functions, you may also define your own
| to make your tests more readable and reusable.
|
*/

function someTestHelper()
{
    // ...
}