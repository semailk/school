<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('accounts', 'CrudAccountController');
    Route::crud('blogs', 'CrudBlogController');
    Route::crud('courses', 'CrudCourseController');
    Route::crud('galleries', 'CrudGalleryController');
    Route::crud('contacts', 'CrudContactController');
}); // this should be the absolute last line of this file
