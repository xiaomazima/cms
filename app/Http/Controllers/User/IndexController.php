<?php

namespace  App\Http\Controllers\User;

use Illuminate\Routing\Controller;
use App\Model\User;
class IndexController extends Controller{

    public function index(){

//        echo 'ID:'.$id;
        //echo __METHOD__;
        $arr=User::where(['id'=>2])->first()->toArray();
        print_r($arr);
    }
}