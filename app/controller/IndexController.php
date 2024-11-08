<?php

namespace app\controller;

use support\Request;

class IndexController
{
    public function index(Request $request)
    {
        // $data = onRequest('https://api233.baidu2333.cn');
        // @['x'=>$x] = $data = onRequest('https://api233.baiduss2333.cn');
        @['err'=>$err1] = $data1 = onRequest('https://wss10.zzxxl.cn');
        @['err'=>$err2] = $data2 = onRequest('https://api.youloge.com');
        
        return json(['data1' => [$err1,$data1], 'data2' =>[$err2,$data2]],320);
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

}
