<?php

use Illuminate\Support\Facades\Route;

Route::prefix('file-manager')->group(function () {
    Route::get('/', function () {
        return response()->json(['message' => 'File Manager API is working!']);
    });
});
