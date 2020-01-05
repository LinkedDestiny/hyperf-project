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

use Hyperf\JsonRpc\JsonRpcTransporter;
use Psr\Http\Message\ResponseInterface;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\JsonRpc\JsonRpcPoolTransporter;
use Hyperf\Database\Commands\Ast\ModelUpdateVisitor as HyperfModelUpdateVisitor;

use CC\Hyperf\Common\Framework\Http\Response;
use CC\Hyperf\Common\Component\Log\LoggerFactory;
use CC\Hyperf\Common\Component\Commands\Ast\ModelUpdateVisitor;

return [
    StdoutLoggerInterface::class => LoggerFactory::class,
    ResponseInterface::class => Response::class,
    HyperfModelUpdateVisitor::class => ModelUpdateVisitor::class,
    JsonRpcTransporter::class => JsonRpcPoolTransporter::class,
];
