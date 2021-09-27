<?php
namespace App\HttpController\Api\Devcode;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;

class Index extends Controller
{
    // http://192.168.10.13:9501/Api/Devcode/index/index
    public function index()
    {
        $this->writeJson(Status::CODE_BAD_REQUEST, '', '密码错误');
    }

    public function test()
    {
        $this->writeJson(Status::CODE_BAD_REQUEST, '', 'test');
    }
}
