<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use CC\Hyperf\Common\Middleware\TokenMiddleware;
use CC\Hyperf\Common\Middleware\OptionsMiddleware;

return [
    'http' => [
        OptionsMiddleware::class,
        TokenMiddleware::class
    ],
];
