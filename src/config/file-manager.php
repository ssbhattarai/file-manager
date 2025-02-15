<?php

return [
    'storage_driver' => env('FILE_MANAGER_STORAGE', 'local'),
    'ui_framework' => env('FILE_MANAGER_UI', 'vue'),
    'metadata_store' => env('FILE_MANAGER_DB', true),
];
