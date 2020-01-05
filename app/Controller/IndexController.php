<?php
declare(strict_types=1);


namespace App\Controller;


use App\Service\IndexService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use CC\Hyperf\Common\Framework\BaseController;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * @Controller(prefix="/index")
 */
class IndexController extends BaseController
{
    /**
     * @Inject()
     * @var IndexService
     */
    private $indexService;

    /**
     * @RequestMapping(path="index", methods="get,post")
     */
    public function index()
    {

    }
}