<?php
declare(strict_types=1);


namespace App\Controller;


use App\Service\IndexService;
use Lib\Framework\BaseController;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
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