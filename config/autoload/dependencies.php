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

use Lib\Framework\Http\Response;
use Lib\Component\Log\LoggerFactory;
use Psr\Http\Message\ResponseInterface;
use Lib\Component\Commands\Ast\ModelUpdateVisitor as HyperfModelUpdateVisitor;
use Hyperf\Contract\StdoutLoggerInterface;
use \Hyperf\Database\Commands\Ast\ModelUpdateVisitor;

return [
    StdoutLoggerInterface::class => LoggerFactory::class,
    ResponseInterface::class => Response::class,
    HyperfModelUpdateVisitor::class => ModelUpdateVisitor::class,
];
