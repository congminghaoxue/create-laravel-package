<?php
/**
 * Created by PhpStorm.
 * User: zhoubo
 * Date: 17-2-21
 * Time: 下午10:17
 */


namespace Onlyus\Helloworld;

use App\Http\Controllers\Controller;


class HelloworldController extends Controller
{

    public function index($params = NULL)
    {
        return view('helloworld::helloworld', ['param'=> ($params?:'hello world')]);
    }

}
