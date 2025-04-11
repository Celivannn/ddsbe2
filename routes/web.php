<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// User routes
$router->get('/users', 'UserController@index');              // Get all users
$router->post('/users', 'UserController@addUser');           // Create new user
$router->get('/users/{id}', 'UserController@show');          // Get user by ID
$router->put('/users/{id}', 'UserController@update');        // Update user
$router->patch('/users/{id}', 'UserController@update');      // Also update user
$router->delete('/users/{id}', 'UserController@delete');     // Delete user

// Optional: raw SQL version of users, for testing
$router->get('/users-raw', 'UserController@getUsers');

// User job routes
$router->get('/usersjob', 'UserJobController@index');        // Get all jobs
$router->get('/usersjob/{id}', 'UserJobController@show');    // Get job by ID
