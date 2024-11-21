<?php

return [
    '~^articles/(\d+)$~' => [\MyProject\Controllers\ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\MyProject\Controllers\ArticlesController::class, 'edit'],
    '~^articles/(\d+)/create$~' => [\MyProject\Controllers\ArticlesController::class, 'create'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
];