<?php

    Route::post('/create/tenant', 'Api\HomeController@createTenant');
    Route::get('/tenant/list', 'Api\HomeController@tenantList');
    Route::put('/remove/tenant', 'Api\HomeController@removeTenant');
    Route::put('/update/tenant', 'Api\HomeController@updateTenant');